<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Campusevents Controller
 *
 * @property \App\Model\Table\CampuseventsTable $Campusevents
 *
 * @method \App\Model\Entity\Campusevent[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class CampuseventsController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $campusevents = $this->paginate($this->Campusevents);

        $this->set(compact('campusevents'));
    }

    /**
     * View method
     *
     * @param string|null $id Campusevent id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $campusevent = $this->Campusevents->get($id, [
            'contain' => []
        ]);

        $this->set('campusevent', $campusevent);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $campusevent = $this->Campusevents->newEntity();
        if ($this->request->is('post')) {
            $campusevent = $this->Campusevents->patchEntity($campusevent, $this->request->getData());
            if ($this->Campusevents->save($campusevent)) {
                $this->Flash->success(__('The campusevent has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The campusevent could not be saved. Please, try again.'));
        }
        $this->set(compact('campusevent'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Campusevent id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $campusevent = $this->Campusevents->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $campusevent = $this->Campusevents->patchEntity($campusevent, $this->request->getData());
            if ($this->Campusevents->save($campusevent)) {
                $this->Flash->success(__('The campusevent has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The campusevent could not be saved. Please, try again.'));
        }
        $this->set(compact('campusevent'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Campusevent id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $campusevent = $this->Campusevents->get($id);
        if ($this->Campusevents->delete($campusevent)) {
            $this->Flash->success(__('The campusevent has been deleted.'));
        } else {
            $this->Flash->error(__('The campusevent could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
