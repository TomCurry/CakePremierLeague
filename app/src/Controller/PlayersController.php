<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Players Controller
 *
 * @property \App\Model\Table\PlayersTable $Players
 */
class PlayersController extends AppController
{

    /**
     * Index method
     *
     * @return void
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Clubs']
        ];
        $this->set('players', $this->paginate($this->Players));
        $this->set('_serialize', ['players']);
    }

    /**
     * View method
     *
     * @param string|null $id Player id.
     * @return void
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function view($id = null)
    {
        $player = $this->Players->get($id, [
            'contain' => ['Clubs', 'Teams']
        ]);
        $this->set('player', $player);
        $this->set('_serialize', ['player']);
    }

    /**
     * Add method
     *
     * @return void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $player = $this->Players->newEntity();
        if ($this->request->is('post')) {
            $player = $this->Players->patchEntity($player, $this->request->data);
            if ($this->Players->save($player)) {
                $this->Flash->success('The player has been saved.');
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error('The player could not be saved. Please, try again.');
            }
        }
        $clubs = $this->Players->Clubs->find('list', ['limit' => 200]);
        $teams = $this->Players->Teams->find('list', ['limit' => 200]);
        $this->set(compact('player', 'clubs', 'teams'));
        $this->set('_serialize', ['player']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Player id.
     * @return void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $player = $this->Players->get($id, [
            'contain' => ['Teams']
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $player = $this->Players->patchEntity($player, $this->request->data);
            if ($this->Players->save($player)) {
                $this->Flash->success('The player has been saved.');
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error('The player could not be saved. Please, try again.');
            }
        }
        $clubs = $this->Players->Clubs->find('list', ['limit' => 200]);
        $teams = $this->Players->Teams->find('list', ['limit' => 200]);
        $this->set(compact('player', 'clubs', 'teams'));
        $this->set('_serialize', ['player']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Player id.
     * @return void Redirects to index.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $player = $this->Players->get($id);
        if ($this->Players->delete($player)) {
            $this->Flash->success('The player has been deleted.');
        } else {
            $this->Flash->error('The player could not be deleted. Please, try again.');
        }
        return $this->redirect(['action' => 'index']);
    }
}
