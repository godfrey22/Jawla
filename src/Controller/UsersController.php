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
        $this->Auth->allow(['logout', 'register', 'password', 'reset','register2']);
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
  /*  public function register()
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
    }*/
    public function register()
    { $info = $this->loadModel('Information');
        $information = $info->find('all')->toArray();
        $this->viewBuilder()->setLayout('navfoot');
        $this->set(compact('information'));



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
}
