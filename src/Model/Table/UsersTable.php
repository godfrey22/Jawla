<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Users Model
 *
 * @method \App\Model\Entity\User get($primaryKey, $options = [])
 * @method \App\Model\Entity\User newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\User[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\User|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\User patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\User[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\User findOrCreate($search, callable $callback = null, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class UsersTable extends Table
{

    /**
     * Initialize method
     *
     * @param array $config The configuration for the Table.
     * @return void
     */
    public function initialize(array $config)
    {
        parent::initialize($config);

        $this->setTable('users');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->addBehavior('Timestamp');
    }

    /**
     * Default validation rules.
     *
     * @param \Cake\Validation\Validator $validator Validator instance.
     * @return \Cake\Validation\Validator
     */
    public function validationDefault(Validator $validator)
    {
        $validator
            ->integer('id')
            ->allowEmpty('id', 'create'); //id

        $validator
            ->email('email')
            ->requirePresence('email', 'create')
            ->notEmpty('email','Please fill in Email'); //email

        $validator
            ->requirePresence('first_name', 'create')
            ->notEmpty('first_name','First name field is required')
            ->add('first_name', 'custom', array(
                        'rule' => array('custom', '/^[a-zA-Z\s]*$/') ,
                        'message' => 'First name field only allows characters ,'
            ));

        $validator
            ->requirePresence('last_name', 'create')
            ->notEmpty('last_name','Last name field is required')
            ->add('last_name', 'custom', array(
                'rule' => array('custom', '/^[a-zA-Z\s]*$/') ,
                'message' => 'Last name field only allows characters ,'
            ));

        $validator
            ->requirePresence('school', 'create')
            ->notEmpty('school')
            ->add('school', 'custom', array(
                'rule' => array('custom', '/^[a-zA-Z\s]*$/') ,
                'message' => 'School field only allows characters ,'
            ));



        $validator
            ->requirePresence('street', 'create')
            ->notEmpty('street','Street field is required')
            ->add('street', 'custom', array(
                'rule' => array('custom', '/^[a-zA-Z\s]*$/') ,
                'message' => 'Street field only allows characters ,'
            ));

        $validator
            ->requirePresence('suburb', 'create')
            ->notEmpty('suburb','This field is required')
            ->add('suburb', 'custom', array(
                'rule' => array('custom', '/^[a-zA-Z\s]*$/') ,
                'message' => 'Suburb field only allows characters ,'
            ));



        $validator
            ->requirePresence('state', 'create')
            ->notEmpty('state','This field is required')
            ->add('state', 'custom', array(
                'rule' => array('custom', '/^[a-zA-Z\s]*$/') ,
                'message' => 'State field only allows characters ,'
            ));

        $validator
            ->requirePresence('country', 'create')
            ->notEmpty('country','This field is required')
            ->add('country', 'custom', array(
                'rule' => array('custom', '/^[a-zA-Z\s]*$/') ,
                'message' => 'Country field only allows characters ,'
            ));

        $validator
            ->requirePresence('g_fname', 'create')
            ->add('g_fname', 'custom', array(
                'rule' => array('custom', '/^[a-zA-Z\s]*$/') ,
                'message' => 'Guardian first name field only allows characters ,'
            ));

        $validator
            ->requirePresence('g_lname', 'create')
            ->add('g_lname', 'custom', array(
                'rule' => array('custom', '/^[a-zA-Z\s]*$/') ,
                'message' => 'Guardian last name field only allows characters ,'
            ));

        $validator
            ->email('g_email')
            ->requirePresence('g_email', 'create');

        $validator
            ->requirePresence('password', 'create')
            ->notEmpty('password','Password required ,');
        
        $validator
            ->date('dob')
            ->notEmpty('dob', 'Please fill date of birth ,');

        $validator

             ->add('mobile', 'custom',array(
                 'rule' => array('custom', '/^[0-9]{10}$/') ,
                        'message' => 'Please Enter A valid mobile number ,'
                        ));
        $validator

            ->add('g_mobile', 'custom',array(
                'rule' => array('custom', '/^[0-9]{10}$/') ,
                'message' => 'Please Enter A valid Guardian mobile number ,'
            ));



        $validator //postcode 4 digit number
                       ->add('postcode', 'custom', array(
                        'rule' => array('custom', '/^[0-9]{4}$/') ,
                       'message' => 'Please Enter A valid postcode'
                        ));
        return $validator;
    }

    /**
     * Returns a rules checker object that will be used for validating
     * application integrity.
     *
     * @param \Cake\ORM\RulesChecker $rules The rules object to be modified.
     * @return \Cake\ORM\RulesChecker
     */
    public function buildRules(RulesChecker $rules)
    {
        $rules->add($rules->isUnique(['email']));

        return $rules;
    }
}
