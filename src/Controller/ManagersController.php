<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Managers Controller
 *
 * @property \App\Model\Table\ManagersTable $Managers
 */
class ManagersController extends AppController
{

    /**
     * Index method
     *
     * @return void
     */
    public function index()
    {
        $this->set('managers', $this->paginate($this->Managers));
        $this->set('_serialize', ['managers']);
    }

    /**
     * View method
     *
     * @param string|null $id Manager id.
     * @return void
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function view($id = null)
    {
        $manager = $this->Managers->get($id, [
            'contain' => ['Clubs']
        ]);
        $this->set('manager', $manager);
        $this->set('_serialize', ['manager']);
    }

    /**
     * Add method
     *
     * @return void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $manager = $this->Managers->newEntity();
        if ($this->request->is('post')) {
            $manager = $this->Managers->patchEntity($manager, $this->request->data);
            if ($this->Managers->save($manager)) {
                $this->Flash->success('The manager has been saved.');
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error('The manager could not be saved. Please, try again.');
            }
        }
        $this->set(compact('manager'));
        $this->set('_serialize', ['manager']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Manager id.
     * @return void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $manager = $this->Managers->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $manager = $this->Managers->patchEntity($manager, $this->request->data);
            if ($this->Managers->save($manager)) {
                $this->Flash->success('The manager has been saved.');
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error('The manager could not be saved. Please, try again.');
            }
        }
        $this->set(compact('manager'));
        $this->set('_serialize', ['manager']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Manager id.
     * @return void Redirects to index.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $manager = $this->Managers->get($id);
        if ($this->Managers->delete($manager)) {
            $this->Flash->success('The manager has been deleted.');
        } else {
            $this->Flash->error('The manager could not be deleted. Please, try again.');
        }
        return $this->redirect(['action' => 'index']);
    }
}
