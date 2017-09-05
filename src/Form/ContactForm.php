<?php
// in src/Form/ContactForm.php
namespace App\Form;

use Cake\Form\Form;
use Cake\Form\Schema;
use Cake\Validation\Validator;
use Cake\Mailer\Email;

class ContactForm extends Form
{

    protected function _buildSchema(Schema $schema)
    {
        return $schema->addField('name', 'string')
            ->addField('email', ['type' => 'string'])
            ->addField('body', ['type' => 'text']);
    }

    protected function _buildValidator(Validator $validator)
    {
        return $validator->add('name', 'length', [
            'rule' => ['minLength', 5],
            'message' => 'Please enter your name'
        ])->add('email', 'format', [
            'rule' => 'email',
            'message' => 'Please enter a valid email address',
        ])->add('body', 'length', [
            'rule' => ['minLength', 5],
            'message' => 'Please enter your message text',
        ]);
    }

    protected function _execute(array $data)
    {
        $email = new Email();
        $email->profile('default');

        $email->from([$data['email']])
            ->to('dqpha4@student.monash.edu')
            ->subject('Web Site Contact Form')
            ->send([$data['body']]);

        return true;
    }
}