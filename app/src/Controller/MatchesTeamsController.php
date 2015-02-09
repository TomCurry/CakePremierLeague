<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * MatchesTeams Controller
 *
 * @property \App\Model\Table\MatchesTeamsTable $MatchesTeams
 */
class MatchesTeamsController extends AppController
{

    /**
     * Index method
     *
     * @return void
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Teams', 'Matches']
        ];
        $this->set('matchesTeams', $this->paginate($this->MatchesTeams));
        $this->set('_serialize', ['matchesTeams']);
    }

    /**
     * View method
     *
     * @param string|null $id Matches Team id.
     * @return void
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function view($id = null)
    {
        $matchesTeam = $this->MatchesTeams->get($id, [
            'contain' => ['Teams', 'Matches']
        ]);
        $this->set('matchesTeam', $matchesTeam);
        $this->set('_serialize', ['matchesTeam']);
    }

    /**
     * Add method
     *
     * @return void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $matchesTeam = $this->MatchesTeams->newEntity();
        if ($this->request->is('post')) {
            $matchesTeam = $this->MatchesTeams->patchEntity($matchesTeam, $this->request->data);
            if ($this->MatchesTeams->save($matchesTeam)) {
                $this->Flash->success('The matches team has been saved.');
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error('The matches team could not be saved. Please, try again.');
            }
        }
        $teams = $this->MatchesTeams->Teams->find('list', ['limit' => 200]);
        $matches = $this->MatchesTeams->Matches->find('list', ['limit' => 200]);
        $this->set(compact('matchesTeam', 'teams', 'matches'));
        $this->set('_serialize', ['matchesTeam']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Matches Team id.
     * @return void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $matchesTeam = $this->MatchesTeams->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $matchesTeam = $this->MatchesTeams->patchEntity($matchesTeam, $this->request->data);
            if ($this->MatchesTeams->save($matchesTeam)) {
                $this->Flash->success('The matches team has been saved.');
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error('The matches team could not be saved. Please, try again.');
            }
        }
        $teams = $this->MatchesTeams->Teams->find('list', ['limit' => 200]);
        $matches = $this->MatchesTeams->Matches->find('list', ['limit' => 200]);
        $this->set(compact('matchesTeam', 'teams', 'matches'));
        $this->set('_serialize', ['matchesTeam']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Matches Team id.
     * @return void Redirects to index.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $matchesTeam = $this->MatchesTeams->get($id);
        if ($this->MatchesTeams->delete($matchesTeam)) {
            $this->Flash->success('The matches team has been deleted.');
        } else {
            $this->Flash->error('The matches team could not be deleted. Please, try again.');
        }
        return $this->redirect(['action' => 'index']);
    }
}
