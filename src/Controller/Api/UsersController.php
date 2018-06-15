<?php
namespace App\Controller\Api;

use Cake\Event\Event;
use Cake\Network\Exception\UnauthorizedException;
use Cake\Utility\Security;
use Firebase\JWT\JWT;

class UsersController extends AppController
{
    public function initialize()
    {
        parent::initialize();
        $this->Auth->allow(['add','token']);
    }

    public function add()
    {
        $user = $this->Users->newEntity(function(Event $event) {
            if ($event->subject->created) {
                $this->set('data', [
                    'id' => $event->subject->entity->id,
                    'token' => JWT::encode([
                        'sub' => $event->subject->entity->id,
                        'exp' => time() + 604800
                    ],
                        Security::salt())
                ]);
                $this->set(compact('user'));
            }
        });

        return $this;
    }
}


?>