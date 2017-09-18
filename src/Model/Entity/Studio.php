<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Studio Entity
 *
 * @property int $id
 * @property int $event_id
 * @property int $teacher_id
 * @property int $class_type_id
 * @property \Cake\I18n\FrozenDate $date
 *
 * @property \App\Model\Entity\Event $event
 * @property \App\Model\Entity\Teacher $teacher
 * @property \App\Model\Entity\ClassType $class_type
 */
class Studio extends Entity
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
