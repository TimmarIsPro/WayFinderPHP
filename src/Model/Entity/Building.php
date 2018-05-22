<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Building Entity
 *
 * @property int $id
 * @property int $campusId
 * @property string $address
 * @property string $name
 * @property int $gridPointA
 * @property int $gridPointB
 * @property int $gridPointC
 * @property int $gridPointD
 */
class Building extends Entity
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
        'campusId' => true,
        'address' => true,
        'name' => true,
        'gridPointA' => true,
        'gridPointB' => true,
        'gridPointC' => true,
        'gridPointD' => true
    ];
}
