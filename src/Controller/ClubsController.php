<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Clubs Controller
 *
 * @property \App\Model\Table\ClubsTable $Clubs
 */
class ClubsController extends AppController
{

    /**
     * Index method
     *
     * @return void
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Managers', 'Stadia']
        ];
        $this->set('clubs', $this->paginate($this->Clubs));
        $this->set('_serialize', ['clubs']);
    }

    /**
     * View method
     *
     * @param string|null $id Club id.
     * @return void
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function view($id = null)
    {
        $club = $this->Clubs->get($id, [
            'contain' => ['Managers', 'Stadia', 'Players', 'Rankings', 'Teams']
        ]);
        $this->set('club', $club);
        $this->set('_serialize', ['club']);
    }

    /**
     * Add method
     *
     * @return void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $club = $this->Clubs->newEntity();
        if ($this->request->is('post')) {
            $club = $this->Clubs->patchEntity($club, $this->request->data);
            if ($this->Clubs->save($club)) {
                $this->Flash->success('The club has been saved.');
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error('The club could not be saved. Please, try again.');
            }
        }
        $managers = $this->Clubs->Managers->find('list', ['limit' => 200]);
        $stadia = $this->Clubs->Stadia->find('list', ['limit' => 200]);
        $this->set(compact('club', 'managers', 'stadia'));
        $this->set('_serialize', ['club']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Club id.
     * @return void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $club = $this->Clubs->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $club = $this->Clubs->patchEntity($club, $this->request->data);
            if ($this->Clubs->save($club)) {
                $this->Flash->success('The club has been saved.');
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error('The club could not be saved. Please, try again.');
            }
        }
        $managers = $this->Clubs->Managers->find('list', ['limit' => 200]);
        $stadia = $this->Clubs->Stadia->find('list', ['limit' => 200]);
        $this->set(compact('club', 'managers', 'stadia'));
        $this->set('_serialize', ['club']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Club id.
     * @return void Redirects to index.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $club = $this->Clubs->get($id);
        if ($this->Clubs->delete($club)) {
            $this->Flash->success('The club has been deleted.');
        } else {
            $this->Flash->error('The club could not be deleted. Please, try again.');
        }
        return $this->redirect(['action' => 'index']);
    }
}
