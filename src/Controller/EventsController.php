<?php

namespace App\Controller;

use App\Controller\AppController;
use Cake\I18n\Date;
use Cake\I18n\Time;
use DateTime;
/**
 * Events Controller
 *
 * @property \App\Model\Table\EventsTable $Events
 *
 * @method \App\Model\Entity\Event[] paginate($object = null, array $settings = [])
 */
class EventsController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $this->viewBuilder()->setLayout('admin');
        $events = $this->paginate($this->Events);

        $this->set(compact('events'));
        $this->set('_serialize', ['events']);
    }

    /**
     * View method
     *
     * @param string|null $id Event id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $event = $this->Events->get($id, [
            'contain' => ['Studios']
        ]);

        $this->set('event', $event);
        $this->set('_serialize', ['event']);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $this->viewBuilder()->setLayout('admin');

//        ["start_date"] => array(
//            3{["year"]}=>string(4) "2022"
//              ["month"]=> string(2) "01"
//              ["day"]=> string(2) "01"}

//        ["start_date"]=> array(3) { ["year"]=> int(2022) ["month"]=> int(1) ["day"]=> int(1) }

        $event = $this->Events->newEntity();
        if ($this->request->is('post')) {


            $data = $this->request->getData();

//            $current_loop_date = new DateTime($data['start_date']);
//            $end_date = new DateTime($data['end_date']);
//
//            while($current_loop_date < $end_date){
//                date_add($current_loop_date, date_interval_create_from_date_string('1 days'));
//                debug($current_loop_date);
//
//            };

            $data['start_date'] = array_slice(date_parse($data['start_date']),0,3);
            $data['end_date'] = array_slice(date_parse($data['end_date']),0,3);

            $event = $this->Events->patchEntity($event, $data);

            if ($this->Events->save($event)) {
                $this->Flash->success(__('The event has been saved.'));
                return $this->redirect(['controller'=>'studios', 'action' => 'batch_add']);
            }
            $this->Flash->error(__('The event could not be saved. Please, try again.'));
            return $this->redirect(['action' => 'index']);

        }
        $this->set(compact('event'));
        $this->set('_serialize', ['event']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Event id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $event = $this->Events->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $event = $this->Events->patchEntity($event, $this->request->getData());
            if ($this->Events->save($event)) {
                $this->Flash->success(__('The event has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The event could not be saved. Please, try again.'));
        }
        $this->set(compact('event'));
        $this->set('_serialize', ['event']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Event id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $event = $this->Events->get($id);
        if ($this->Events->delete($event)) {
            $this->Flash->success(__('The event has been deleted.'));
        } else {
            $this->Flash->error(__('The event could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }

    public function add2()
    {

    }
}
