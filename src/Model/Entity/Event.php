<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Event Entity
 *
 * @property int $id
 * @property string $title
 * @property \Cake\I18n\FrozenTime $dateStart
 * @property \Cake\I18n\FrozenTime $dateEnd
 * @property string $location
 * @property string $description
 * @property bool $approved
 * @property string $submitted
 * @property int $submittedId
 * @property string $contactEmail
 * @property \Cake\I18n\FrozenTime $created
 * @property \Cake\I18n\FrozenTime $modified
 */
class Event extends Entity
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
        'title' => true,
        'dateStart' => true,
        'dateEnd' => true,
        'location' => true,
        'description' => true,
        'approved' => true,
        'submitted' => true,
        'submittedId' => true,
        'contactEmail' => true,
        'created' => true,
        'modified' => true
    ];
}
