<?php

namespace App\Controller;

use App\Controller\AppController;
use Cake\Routing\Router;
use Cake\Mailer\Email;
use App\Model;

/**
 * Users Controller
 *
 * @property \App\Model\Table\UsersTable $Users
 *
 * @method \App\Model\Entity\User[] paginate($object = null, array $settings = [])
 */
class UsersController extends AppController
{
    public function initialize()
    {
        parent::initialize();
        // Add the 'add' action to the allowed actions list.
        $this->loadComponent('Global');
        $this->Auth->allow(['logout', 'register', 'password', 'reset']);
    }

    public function logout()
    {
        $this->Auth->logout();
        return $this->redirect([
            'controller' => 'Pages',
            'action' => 'home'
        ]);
    }

    public function login()
    {
        $this->viewBuilder()->setLayout('login');
        if ($this->request->is('post')) {
            $user = $this->Auth->identify();
            if ($user) {
                $this->Auth->setUser($user);
                return $this->redirect([
                    'controller' => 'dashboard'
                ]);
            }
            $this->Flash->error('Your username or password is incorrect.');
        }
    }

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $this->viewBuilder()->setLayout('admin');

        $users = $this->paginate($this->Users);

        $this->set(compact('users'));
        $this->set('_serialize', ['users']);
    }

    /**
     * View method
     *
     * @param string|null $id User id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $user = $this->Users->get($id, [
            'contain' => []
        ]);

        $this->set('user', $user);
        $this->set('_serialize', ['user']);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function register()
    {
        $this->viewBuilder()->setLayout('login');

        $user = $this->Users->newEntity();
        if ($this->request->is('post')) {
            $user = $this->Users->patchEntity($user, $this->request->getData());
            if ($this->Users->save($user)) {
                $this->Flash->success(__('The account has been created.'));

                return $this->redirect(['action' => 'login']);
            }
            if ($user->errors()) {
                $error_msg = [];
                foreach ($user->errors() as $errors) {
                    if (is_array($errors)) {
                        foreach ($errors as $error) {
                            $error_msg[] = $error;
                        }
                    } else {
                        $error_msg[] = $errors;
                    }
                }

                if (!empty($error_msg)) {
                    $this->Flash->error(
                        __("Please fix the following error(s):" . implode("\n \r", $error_msg))
                    );
                }
            }

//            $this->Flash->error(__('The user could not be saved. Please, try again.'));
        }
        $this->set(compact('user'));
        $this->set('_serialize', ['user']);
    }

    /**
     * Edit method
     *
     * @param string|null $id User id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $user = $this->Users->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $user = $this->Users->patchEntity($user, $this->request->getData());
            if ($this->Users->save($user)) {
                $this->Flash->success(__('The user has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The user could not be saved. Please, try again.'));
        }
        $this->set(compact('user'));
        $this->set('_serialize', ['user']);
    }

    /**
     * Delete method
     *
     * @param string|null $id User id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $user = $this->Users->get($id);
        if ($this->Users->delete($user)) {
            $this->Flash->success(__('The user has been deleted.'));
        } else {
            $this->Flash->error(__('The user could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }

    public function password()
    {
        if ($this->request->is('post')) {
            $query = $this->Users->findByEmail($this->request->data['email']);
            $user = $query->first();
            if (is_null($user)) {
                $this->Flash->error('Email address does not exist. Please try again');
            } else {
                $passkey = uniqid();
                $url = Router::Url(['controller' => 'users', 'action' => 'reset'], true) . '/' . $passkey;
                $timeout = time() + DAY;
                if ($this->Users->updateAll(['passkey' => $passkey, 'timeout' => $timeout], ['id' => $user->id])) {
                    $this->sendResetEmail($url, $user);
                    $this->redirect(['action' => 'login']);
                } else {
                    $this->Flash->error('Error saving reset passkey/timeout');
                }
            }
        }
    }

    private function sendResetEmail($url, $user)
    {
        $email = new Email();
        $email->template('resetpw');
        $email->emailFormat('both');
        $email->from('no-reply@naidim.org');
        $email->to($user->email, $user->full_name);
        $email->subject('Reset your password');
        $email->viewVars(['url' => $url, 'username' => $user->username]);
        if ($email->send()) {
            $this->Flash->success(__('Check your email for your reset password link'));
        } else {
            $this->Flash->error(__('Error sending email: ') . $email->smtpError);
        }
    }

    public function reset($passkey = null)
    {
        if ($passkey) {
            $query = $this->Users->find('all', ['conditions' => ['passkey' => $passkey, 'timeout >' => time()]]);
            $user = $query->first();
            if ($user) {
                if (!empty($this->request->data)) {
                    // Clear passkey and timeout
                    $this->request->data['passkey'] = null;
                    $this->request->data['timeout'] = null;
                    $user = $this->Users->patchEntity($user, $this->request->data);
                    if ($this->Users->save($user)) {
                        $this->Flash->set(__('Your password has been updated.'));
                        return $this->redirect(array('action' => 'login'));
                    } else {
                        $this->Flash->error(__('The password could not be updated. Please, try again.'));
                    }
                }
            } else {
                $this->Flash->error('Invalid or expired passkey. Please check your email or try again');
                $this->redirect(['action' => 'password']);
            }
            unset($user->password);
            $this->set(compact('user'));
        } else {
            $this->redirect('/');
        }
    }

    public function enroll($id = null)
    {
        $this->viewBuilder()->setLayout('user');

        if (isset($id)) {
            $studio_model = $this->loadModel("Studios");
            $studio = $studio_model->get($id, array(
                'contain' => array('Events', 'Teachers', 'ClassTypes')));
            $start_date = $studio->date;
            $query = $studio_model->find('all', [
                'conditions' => [
                    'Studios.date >' => $start_date,
                    'Studios.event_id' => $studio->event->id
                ]
            ]);
            $nclasses = $query->count() + 1;
            $query = $studio_model->find('all', [
                'conditions' => [
                    'Studios.event_id' => $studio->event->id
                ]
            ]);
            $total = $query->count();
            $this->set(compact('studio', 'nclasses', 'total'));
        }
     }

    public function myclasses(){
        $this->viewBuilder()->setLayout('user');


    }

    public function classcalendar(){
        $this->viewBuilder()->setLayout('ajax');
        $this->request->allowMethod('ajax');
//        1. get family members
//        2. get all members enrollment

        $user_info = $this->Global->getUser();
        $enrollments = $this->loadModel('Enrollments');
        $return_json = [];

        if($user_info['family_id']!=null){
            $family_members = $this->Users->find('all')->where([
                'family_id = '=> $user_info['family_id'],
                'id !=' => $user_info['id']
            ]);

            foreach ($family_members as $family_member){
                $member_enrollments = $enrollments->find("all",
                    array('contain'=>['Users', 'Participants', 'Studios' => ['Events']])
                )->leftJoinWith('Payments')->where([
                    'participant_id =' => $family_member['id']
                ]);
                foreach ($member_enrollments as $member_enrollment){
                    $data['title'] = $member_enrollment['studio']['event']['name'];
                    $data['start'] = $member_enrollment['studio']['date']->i18nFormat('Y-MM-dd') . 'T' . $member_enrollment['studio']['event']['start_time']->i18nFormat('HH:mm:ss');
                    $data['end'] = $member_enrollment['studio']['date']->i18nFormat('Y-MM-dd') . 'T' . $member_enrollment['studio']['event']['end_time']->i18nFormat('HH:mm:ss');
                    $data['color'] = "#488AC7";
                    $return_json[] = $data;
                }
            }


            $my_enrollments = $enrollments->find("all",
                array('contain'=>['Users', 'Participants', 'Studios' => ['Events']])
            )->leftJoinWith('Payments')->where([
                'participant_id =' => $user_info['id']
            ]);
            foreach ($my_enrollments as $my_enrollment){
                $data['title'] = $my_enrollment['studio']['event']['name'];
                $data['start'] = $my_enrollment['studio']['date']->i18nFormat('Y-MM-dd') . 'T' . $my_enrollment['studio']['event']['start_time']->i18nFormat('HH:mm:ss');
                $data['end'] = $my_enrollment['studio']['date']->i18nFormat('Y-MM-dd') . 'T' . $my_enrollment['studio']['event']['end_time']->i18nFormat('HH:mm:ss');
                $data['color'] = "#C68E17";
                $return_json[] = $data;
            }



            echo json_encode($return_json);
            die();

        }

//        $my_class = $studios->find("all")->where(['participant_id =' => $user_info['id']]); //participant id = user id
//        $my_family_class = $studios->find("all")->where([
//            'participant_id !=' => $user_info['id'],
//            'user_id' => $user_info['id']
//        ]);
//        foreach ($my_family_class as $class){
//            debug($class);
//
//        }
//        die();
        $my_family_class = []; //user id = id

    }
}
