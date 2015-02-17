<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Matchdays Controller
 *
 * @property \App\Model\Table\MatchdaysTable $Matchdays
 */
class MatchdaysController extends AppController
{

    /**
     * Index method
     *
     * @return void
     */
    public function index()
    {
        $this->set('matchdays', $this->paginate($this->Matchdays));
        $this->set('_serialize', ['matchdays']);
    }

    /**
     * View method
     *
     * @param string|null $id Matchday id.
     * @return void
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function view($id = null)
    {
        $matchday = $this->Matchdays->get($id, [
            'contain' => ['Matches']
        ]);
        $this->set('matchday', $matchday);
        $this->set('_serialize', ['matchday']);
    }

    /**
     * Add method
     *
     * @return void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $matchday = $this->Matchdays->newEntity();
        if ($this->request->is('post')) {
            $matchday = $this->Matchdays->patchEntity($matchday, $this->request->data);
            if ($this->Matchdays->save($matchday)) {
                $this->Flash->success('The matchday has been saved.');
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error('The matchday could not be saved. Please, try again.');
            }
        }
        $this->set(compact('matchday'));
        $this->set('_serialize', ['matchday']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Matchday id.
     * @return void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $matchday = $this->Matchdays->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $matchday = $this->Matchdays->patchEntity($matchday, $this->request->data);
            if ($this->Matchdays->save($matchday)) {
                $this->Flash->success('The matchday has been saved.');
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error('The matchday could not be saved. Please, try again.');
            }
        }
        $this->set(compact('matchday'));
        $this->set('_serialize', ['matchday']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Matchday id.
     * @return void Redirects to index.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $matchday = $this->Matchdays->get($id);
        if ($this->Matchdays->delete($matchday)) {
            $this->Flash->success('The matchday has been deleted.');
        } else {
            $this->Flash->error('The matchday could not be deleted. Please, try again.');
        }
        return $this->redirect(['action' => 'index']);
    }
}
