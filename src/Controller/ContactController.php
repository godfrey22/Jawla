<?php
// In a controller
namespace App\Controller;

use App\Controller\AppController;
use App\Form\ContactForm;

class ContactController extends AppController

{

    public function initialize()
    {
        parent::initialize();
        // Add the 'add' action to the allowed actions list.
        $this->Auth->allow(['index']);
    }
    public function index()
    { $info = $this->loadModel('Information');
        $information = $info->find('all')->toArray();

        $this->viewBuilder()->setLayout('Jalwa');
        $this->set(compact('information'));

        $contact = new ContactForm();
        if ($this->request->is('post')) {
            if ($contact->execute($this->request->data)) {
                $this->Flash->success('Your message has been sent; we\'ll get back to you soon!');
                $this->request->data['name'] = null;
                $this->request->data['email'] = null;
                $this->request->data['body'] = null;
            } else {
                $this->Flash->error('There was a problem submitting your form.');
            }
        }
        $this->set('contact', $contact);
    }
}