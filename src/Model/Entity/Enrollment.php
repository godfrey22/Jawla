<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Enrollment Entity
 *
 * @property int $id
 * @property int $user_id
 * @property int $participant_id
 * @property int $studio_id
 * @property int $payment_id
 * @property int $paid_amount
 *
 * @property \App\Model\Entity\User $user
 * @property \App\Model\Entity\Participant $participant
 * @property \App\Model\Entity\Studio $studio
 * @property \App\Model\Entity\Payment $payment
 */
class Enrollment extends Entity
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
}
