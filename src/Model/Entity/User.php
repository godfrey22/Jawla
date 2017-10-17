<?php
namespace App\Model\Entity;

use Cake\Auth\DefaultPasswordHasher; //include this line
use Cake\ORM\Entity;

/**
 * User Entity
 *
 * @property int $id
 * @property string $email
 * @property string $password
 * @property \Cake\I18n\FrozenTime $created
 * @property \Cake\I18n\FrozenTime $modified
 * @property string $first_name
 * @property string $last_name
 * @property string $mobile
 * @property string $school
 * @property \Cake\I18n\FrozenDate $dob
 * @property string $house_no
 * @property string $street
 * @property string $suburb
 * @property string $postcode
 * @property string $state
 * @property string $country
 * @property string $g_fname
 * @property string $g_lname
 * @property string $g_email
 * @property string $g_mobile
 * @property string $p_consent
 * @property string $medical
 * @property string $passkey
 * @property \Cake\I18n\FrozenTime $timeout
 */
class User extends Entity
{

    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * Note that when '*' is set to true, this allows all unspecified fields to
     * be mass assigned. For security purposes, it is advised to set '*' to false
     * (or remove it), and explicitly make individual fields accessible as needed.
     *
     * @var array
     */
    protected $_accessible = [
        '*' => true,
        'id' => false
    ];

    /**
     * Fields that are excluded from JSON versions of the entity.
     *
     * @var array
     */
    protected $_hidden = [
        'password'
    ];

    // Code from bake.

    protected function _setPassword($value)
    {
        $hasher = new DefaultPasswordHasher();
        return $hasher->hash($value);
    }

    protected function _getFullName()
    {
        return $this->_properties['first_name'] . ' ' . $this->_properties['last_name'];
    }
    protected function _getGFullName()
    {
        return $this->_properties['g_fname'] . ' ' . $this->_properties['g_lname'];
    }
    protected function _getGDetails()
    {
        return $this->_properties['g_mobile'] . ' / ' . $this->_properties['g_email'];
    }
    protected function _getFullAddress()
    {
        return $this->_properties['house_no'] . ' ' . $this->_properties['street'] . ', ' . $this->_properties['suburb'] . ', ' . $this->_properties['postcode'] . ' ' . $this->_properties['state'] . ' ' . $this->_properties['country'];
    }
}