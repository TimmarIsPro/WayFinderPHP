<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Maps Controller
 *
 * @property \App\Model\Table\MapsTable $Maps
 *
 * @method \App\Model\Entity\Map[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class MapsController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $maps = $this->paginate($this->Maps);

        $this->set(compact('maps'));
    }

    /**
     * View method
     *
     * @param string|null $id Map id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $map = $this->Maps->get($id, [
            'contain' => []
        ]);

        $this->set('map', $map);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */


    public function add()
    {
        $map = $this->Maps->newEntity();
        if ($this->request->is('post')) {
            $map = $this->Maps->patchEntity($map, $this->request->getData());
            if ($this->Maps->save($map)) {
                $this->Flash->success(__('The map has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The map could not be saved. Please, try again.'));
        }
        $this->set(compact('map'));
    }


    /*
    public function add($map_Id = null) {
        if (is_null($map_Id)) {
            $this->redirect(['controller' => 'Maps', 'action' => 'index']);
        }
        $map = $this->Maps->newEntity();
        if ($this->request->is('post')) {
            $file = $this->request->data['file'];
            $file['name'] = time() . '-' . str_replace(' ', '_', $file['name']); //timestamping
            if (move_uploaded_file($file['tmp_name'], WWW_ROOT . 'files/' . $file['name'])) {
                $this->request->data['filename'] = $file['name'];
                $map = $this->Maps->patchEntity($map, $this->request->data);
                if ($this->Maps->save($map)) {
                    $this->Flash->success(__('The document has been saved.'));
                    return $this->redirect(['controller' => 'Campuses', 'action' => 'view', $map->campus_Id]);
                } else {
                    $this->Flash->error(__('The document could not be saved. Try Again'));
                }
            } else {
                $this->Flash->error(__('Could not upload the file.'));
            }
        }

    }
    */

    /**
     * Edit method
     *
     * @param string|null $id Map id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */


    public function edit($id = null)
    {
        $map = $this->Maps->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $map = $this->Maps->patchEntity($map, $this->request->getData());
            if ($this->Maps->save($map)) {
                $this->Flash->success(__('The map has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The map could not be saved. Please, try again.'));
        }
        $this->set(compact('map'));
    }

/*
    public function edit($id = null)
    {
        $map = $this->Maps->get($id);
        if ($this->request_>is(['patch', 'post', 'put'])) {
            $file = $this->request->data['file'];
            if ($file['name'] != '' && move_uploaded_file($file['tmp_name'], WWW_ROOT . 'files/' . $file['name'])) {
                $this->request->data['filename'] = $file['name'];
            }
            $map = $this->Maps->patchEntity($map, $this->request->data);
            if ($this->Maps->save($map)) {
                $this->Flash->success(__('The document has been saved'));
                return $this->redirect(['controller' => 'Maps', 'action' => 'view', $map->campus_Id]);
            } else {
                $this->Flash->error(__('The document could not be saved. Please, try again.'));
            }
        }

    }
*/

    /**
     * Delete method
     *
     * @param string|null $id Map id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $map = $this->Maps->get($id);
        if ($this->Maps->delete($map)) {
            $this->Flash->success(__('The map has been deleted.'));
        } else {
            $this->Flash->error(__('The map could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }

    public function isAuthorized($user) {
        //only admin can add and edit maps
        if ($user['role'] == 'admin') {
            return true;
        }
        return false;
    }
}
