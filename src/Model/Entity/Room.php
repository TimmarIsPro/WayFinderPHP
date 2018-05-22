<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Room Entity
 *
 * @property int $id
 * @property string $name
 * @property int $floorId
 * @property int $mapId
 * @property int $gridPointA
 * @property int $gridPointB
 * @property int $gridPointC
 * @property int $gridPointD
 */
class Room extends Entity
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
        'name' => true,
        'floorId' => true,
        'mapId' => true,
        'gridPointA' => true,
        'gridPointB' => true,
        'gridPointC' => true,
        'gridPointD' => true
    ];
}
