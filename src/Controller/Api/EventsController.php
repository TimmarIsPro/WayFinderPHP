<?php
namespace App\Controller\Api;

use App\Controller\Api\AppController;

/**
 * Events Controller
 *
 * @property \App\Model\Table\EventsTable $Events
 *
 * @method \App\Model\Entity\Event[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class EventsController extends AppController
{

    public function index()
    {
        $events = $this->paginate($this->Events);

        $this->set(compact('events'));
    }


    public $paginate = [
        'page' => 1,
        'limit' => 5,
        'maxLimit' => 15,
        'fields' => [
          'id','title','dateStart','dateEnd','location','description','approved','submitted','submittedId','contactEmail'
        ],
        'sortWhitelist' => [
            'id'
        ]
    ];



}
