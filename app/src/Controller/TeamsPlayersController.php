<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * TeamsPlayers Controller
 *
 * @property \App\Model\Table\TeamsPlayersTable $TeamsPlayers
 */
class TeamsPlayersController extends AppController
{

    /**
     * Index method
     *
     * @return void
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Teams', 'Players']
        ];
        $this->set('teamsPlayers', $this->paginate($this->TeamsPlayers));
        $this->set('_serialize', ['teamsPlayers']);
    }

    /**
     * View method
     *
     * @param string|null $id Teams Player id.
     * @return void
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function view($id = null)
    {
        $teamsPlayer = $this->TeamsPlayers->get($id, [
            'contain' => ['Teams', 'Players']
        ]);
        $this->set('teamsPlayer', $teamsPlayer);
        $this->set('_serialize', ['teamsPlayer']);
    }

    /**
     * Add method
     *
     * @return void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $teamsPlayer = $this->TeamsPlayers->newEntity();
        if ($this->request->is('post')) {
            $teamsPlayer = $this->TeamsPlayers->patchEntity($teamsPlayer, $this->request->data);
            if ($this->TeamsPlayers->save($teamsPlayer)) {
                $this->Flash->success('The teams player has been saved.');
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error('The teams player could not be saved. Please, try again.');
            }
        }
        $teams = $this->TeamsPlayers->Teams->find('list', ['limit' => 200]);
        $players = $this->TeamsPlayers->Players->find('list', ['limit' => 200]);
        $this->set(compact('teamsPlayer', 'teams', 'players'));
        $this->set('_serialize', ['teamsPlayer']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Teams Player id.
     * @return void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $teamsPlayer = $this->TeamsPlayers->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $teamsPlayer = $this->TeamsPlayers->patchEntity($teamsPlayer, $this->request->data);
            if ($this->TeamsPlayers->save($teamsPlayer)) {
                $this->Flash->success('The teams player has been saved.');
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error('The teams player could not be saved. Please, try again.');
            }
        }
        $teams = $this->TeamsPlayers->Teams->find('list', ['limit' => 200]);
        $players = $this->TeamsPlayers->Players->find('list', ['limit' => 200]);
        $this->set(compact('teamsPlayer', 'teams', 'players'));
        $this->set('_serialize', ['teamsPlayer']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Teams Player id.
     * @return void Redirects to index.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $teamsPlayer = $this->TeamsPlayers->get($id);
        if ($this->TeamsPlayers->delete($teamsPlayer)) {
            $this->Flash->success('The teams player has been deleted.');
        } else {
            $this->Flash->error('The teams player could not be deleted. Please, try again.');
        }
        return $this->redirect(['action' => 'index']);
    }
}
