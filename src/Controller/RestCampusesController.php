<?php
/**
 * CakePHP(tm) : Rapid Development Framework (https://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 * @link      https://cakephp.org CakePHP(tm) Project
 * @since     0.2.9
 * @license   https://opensource.org/licenses/mit-license.php MIT License
 */
namespace App\Controller;

use Cake\Controller\Controller;
use Cake\Event\Event;


/**
 * Application Controller
 *
 * Add your application-wide methods in the class below, your controllers
 * will inherit them.
 *
 * @link https://book.cakephp.org/3.0/en/controllers.html#the-app-controller
 */

class ClientController extends Controller
{

    public function index() {
        $users = $this->paginate($this->Campuses);

        $this->set(compact('Campuses'));
        $this->set('_serialize', ['Campuses']);
    }

    public function requestindex() {
        $link = "http://" . $_SERVER['HTTP_HOST'] . $this->webroot.'rest_campuses.json';

        $data = null;
        $httpSocket = new HttpSocket();
        $response = $httpSocket->get($link, $data);
        $this->set('response_code', $response->code);
        $this->set('response_body', $response->body);

        $this-> render('/Client/request_response');
    }

    public function request_view($id)
    {
        $campus = $this->Campuses->get($id, ['contain' => []
        ]);

        $this->set('campus', $campus);
        $this->set('_serialize', ['campus']);
    }

    public function request_edit($id)
    {
        $campus = $this->Campuses->get($id, [
            'contain' => []
        ]);
        $res = array();
        if ($this->request->is(['patch', 'post', 'put'])) {
            $campus = $this->Campuses->patchEntity($campus, $this->request->data);
            if ($this->Campuses->save($campus)) {
                $res['status'] = 1;
                $res['msg'] = 'Campus updated successfully';
            } else {
                $res['status'] = 0;
                $res['msg'] = 'The campus could not be saved. Please, try again.';
            }
        }
        $this->set(compact('res'));
        $this->set('_serialize', ['res']);
    }

    public function request_add()
    {
        $res = array();
        $campus = $this->Campuses->newEntity();
        if ($this->request->is('post')) {
            $user = $this->Campuses->patchEntity($campus, $this->request->data);
            if ($this->Campuses->save($campus)) {
                $res['status'] = 1;
                $res['msg'] = 'The campus has been saved.';
            } else {
                $res['status'] = 0;
                $res['msg'] = 'The campus could not be saved. Please, try again.';
            }
        }
        $this->set(compact('res'));
        $this->set('_serialize', ['res']);
    }

    public function request_delete($id)
    {
        $res = array();
        $this->request->allowMethod(['post','delete']);
        $campus = $this->Campuses->get($id);
        if ($this->Campuses->delete($campus)) {
            $res['status'] = 1;
            $res['msg'] = 'The campus has been deleted.';
        } else {
            $res['status'] = 0;
            $res['msg'] = 'The user could not be deleted. Please, try again.';
        }
        $this->set(compact('res'));
        $this->set('_serialize', ['res']);
    }
}
