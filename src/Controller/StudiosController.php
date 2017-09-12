<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Studios Controller
 *
 * @property \App\Model\Table\StudiosTable $Studios
 *
 * @method \App\Model\Entity\Studio[] paginate($object = null, array $settings = [])
 */
class StudiosController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $this->viewBuilder()->setLayout('admin');

        $this->paginate = [
            'contain' => ['Events', 'Teachers', 'ClassTypes']
        ];
        $studios = $this->paginate($this->Studios);

        $this->set(compact('studios'));
        $this->set('_serialize', ['studios']);
    }

    /**
     * View method
     *
     * @param string|null $id Studio id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $studio = $this->Studios->get($id, [
            'contain' => ['Events', 'Teachers', 'ClassTypes']
        ]);

        $this->set('studio', $studio);
        $this->set('_serialize', ['studio']);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $studio = $this->Studios->newEntity();
        if ($this->request->is('post')) {
            $studio = $this->Studios->patchEntity($studio, $this->request->getData());
            if ($this->Studios->save($studio)) {
                $this->Flash->success(__('The studio has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The studio could not be saved. Please, try again.'));
        }
        $events = $this->Studios->Events->find('list', ['limit' => 200]);
        $teachers = $this->Studios->Teachers->find('list', ['limit' => 200]);
        $classTypes = $this->Studios->ClassTypes->find('list', ['limit' => 200]);
        $this->set(compact('studio', 'events', 'teachers', 'classTypes'));
        $this->set('_serialize', ['studio']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Studio id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $studio = $this->Studios->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $studio = $this->Studios->patchEntity($studio, $this->request->getData());
            if ($this->Studios->save($studio)) {
                $this->Flash->success(__('The studio has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The studio could not be saved. Please, try again.'));
        }
        $events = $this->Studios->Events->find('list', ['limit' => 200]);
        $teachers = $this->Studios->Teachers->find('list', ['limit' => 200]);
        $classTypes = $this->Studios->ClassTypes->find('list', ['limit' => 200]);
        $this->set(compact('studio', 'events', 'teachers', 'classTypes'));
        $this->set('_serialize', ['studio']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Studio id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $studio = $this->Studios->get($id);
        if ($this->Studios->delete($studio)) {
            $this->Flash->success(__('The studio has been deleted.'));
        } else {
            $this->Flash->error(__('The studio could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }

    public function batch_add($id = null){
        
    }
}
