<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Matches Controller
 *
 * @property \App\Model\Table\MatchesTable $Matches
 */
class MatchesController extends AppController
{

    /**
     * Index method
     *
     * @return void
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Stadia', 'Matchdays']
        ];
        $this->set('matches', $this->paginate($this->Matches));
        $this->set('_serialize', ['matches']);
    }

    /**
     * View method
     *
     * @param string|null $id Match id.
     * @return void
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function view($id = null)
    {
        $match = $this->Matches->get($id, [
            'contain' => ['Stadia', 'Matchdays', 'Teams', 'Results']
        ]);
        $this->set('match', $match);
        $this->set('_serialize', ['match']);
    }

    /**
     * Add method
     *
     * @return void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $match = $this->Matches->newEntity();
        if ($this->request->is('post')) {
            $match = $this->Matches->patchEntity($match, $this->request->data);
            if ($this->Matches->save($match)) {
                $this->Flash->success('The match has been saved.');
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error('The match could not be saved. Please, try again.');
            }
        }
        $stadia = $this->Matches->Stadia->find('list');
        $matchdays = $this->Matches->Matchdays->find('list');
        $teams = $this->Matches->Teams->find('list');
        $this->set(compact('match', 'stadia', 'matchdays', 'teams'));
        $this->set('_serialize', ['match']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Match id.
     * @return void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $match = $this->Matches->get($id, [
            'contain' => ['Teams']
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $match = $this->Matches->patchEntity($match, $this->request->data);
            if ($this->Matches->save($match)) {
                $this->Flash->success('The match has been saved.');
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error('The match could not be saved. Please, try again.');
            }
        }
        $stadia = $this->Matches->Stadia->find('list', ['limit' => 200]);
        $matchdays = $this->Matches->Matchdays->find('list', ['limit' => 200]);
        $teams = $this->Matches->Teams->find('list', ['limit' => 200]);
        $this->set(compact('match', 'stadia', 'matchdays', 'teams'));
        $this->set('_serialize', ['match']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Match id.
     * @return void Redirects to index.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $match = $this->Matches->get($id);
        if ($this->Matches->delete($match)) {
            $this->Flash->success('The match has been deleted.');
        } else {
            $this->Flash->error('The match could not be deleted. Please, try again.');
        }
        return $this->redirect(['action' => 'index']);
    }
}
