<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Leagues Controller
 *
 * @property \App\Model\Table\LeaguesTable $Leagues
 */
class LeaguesController extends AppController
{

    /**
     * Index method
     *
     * @return void
     */
    public function index()
    {
        $this->set('leagues', $this->paginate($this->Leagues));
        $this->set('_serialize', ['leagues']);
    }

    /**
     * View method
     *
     * @param string|null $id League id.
     * @return void
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function view($id = null)
    {
        $league = $this->Leagues->get($id, [
            'contain' => ['Rankings']
        ]);
        $this->set('league', $league);
        $this->set('_serialize', ['league']);
    }

    /**
     * Add method
     *
     * @return void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $league = $this->Leagues->newEntity();
        if ($this->request->is('post')) {
            $league = $this->Leagues->patchEntity($league, $this->request->data);
            if ($this->Leagues->save($league)) {
                $this->Flash->success('The league has been saved.');
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error('The league could not be saved. Please, try again.');
            }
        }
        $this->set(compact('league'));
        $this->set('_serialize', ['league']);
    }

    /**
     * Edit method
     *
     * @param string|null $id League id.
     * @return void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $league = $this->Leagues->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $league = $this->Leagues->patchEntity($league, $this->request->data);
            if ($this->Leagues->save($league)) {
                $this->Flash->success('The league has been saved.');
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error('The league could not be saved. Please, try again.');
            }
        }
        $this->set(compact('league'));
        $this->set('_serialize', ['league']);
    }

    /**
     * Delete method
     *
     * @param string|null $id League id.
     * @return void Redirects to index.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $league = $this->Leagues->get($id);
        if ($this->Leagues->delete($league)) {
            $this->Flash->success('The league has been deleted.');
        } else {
            $this->Flash->error('The league could not be deleted. Please, try again.');
        }
        return $this->redirect(['action' => 'index']);
    }
}
