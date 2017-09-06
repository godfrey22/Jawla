<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * ClassTypes Controller
 *
 * @property \App\Model\Table\ClassTypesTable $ClassTypes
 *
 * @method \App\Model\Entity\ClassType[] paginate($object = null, array $settings = [])
 */
class ClassTypesController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $classTypes = $this->paginate($this->ClassTypes);

        $this->set(compact('classTypes'));
        $this->set('_serialize', ['classTypes']);
    }

    /**
     * View method
     *
     * @param string|null $id Class Type id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $classType = $this->ClassTypes->get($id, [
            'contain' => ['Studios']
        ]);

        $this->set('classType', $classType);
        $this->set('_serialize', ['classType']);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $classType = $this->ClassTypes->newEntity();
        if ($this->request->is('post')) {
            $classType = $this->ClassTypes->patchEntity($classType, $this->request->getData());
            if ($this->ClassTypes->save($classType)) {
                $this->Flash->success(__('The class type has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The class type could not be saved. Please, try again.'));
        }
        $this->set(compact('classType'));
        $this->set('_serialize', ['classType']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Class Type id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $classType = $this->ClassTypes->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $classType = $this->ClassTypes->patchEntity($classType, $this->request->getData());
            if ($this->ClassTypes->save($classType)) {
                $this->Flash->success(__('The class type has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The class type could not be saved. Please, try again.'));
        }
        $this->set(compact('classType'));
        $this->set('_serialize', ['classType']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Class Type id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $classType = $this->ClassTypes->get($id);
        if ($this->ClassTypes->delete($classType)) {
            $this->Flash->success(__('The class type has been deleted.'));
        } else {
            $this->Flash->error(__('The class type could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
