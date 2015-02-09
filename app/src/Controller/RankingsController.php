<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Rankings Controller
 *
 * @property \App\Model\Table\RankingsTable $Rankings
 */
class RankingsController extends AppController
{

    /**
     * Index method
     *
     * @return void
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Leagues', 'Clubs']
        ];
        $this->set('rankings', $this->paginate($this->Rankings));
        $this->set('_serialize', ['rankings']);
    }

    /**
     * View method
     *
     * @param string|null $id Ranking id.
     * @return void
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function view($id = null)
    {
        $ranking = $this->Rankings->get($id, [
            'contain' => ['Leagues', 'Clubs']
        ]);
        $this->set('ranking', $ranking);
        $this->set('_serialize', ['ranking']);
    }

    /**
     * Add method
     *
     * @return void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $ranking = $this->Rankings->newEntity();
        if ($this->request->is('post')) {
            $ranking = $this->Rankings->patchEntity($ranking, $this->request->data);
            if ($this->Rankings->save($ranking)) {
                $this->Flash->success('The ranking has been saved.');
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error('The ranking could not be saved. Please, try again.');
            }
        }
        $leagues = $this->Rankings->Leagues->find('list', ['limit' => 200]);
        $clubs = $this->Rankings->Clubs->find('list', ['limit' => 200]);
        $this->set(compact('ranking', 'leagues', 'clubs'));
        $this->set('_serialize', ['ranking']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Ranking id.
     * @return void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $ranking = $this->Rankings->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $ranking = $this->Rankings->patchEntity($ranking, $this->request->data);
            if ($this->Rankings->save($ranking)) {
                $this->Flash->success('The ranking has been saved.');
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error('The ranking could not be saved. Please, try again.');
            }
        }
        $leagues = $this->Rankings->Leagues->find('list', ['limit' => 200]);
        $clubs = $this->Rankings->Clubs->find('list', ['limit' => 200]);
        $this->set(compact('ranking', 'leagues', 'clubs'));
        $this->set('_serialize', ['ranking']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Ranking id.
     * @return void Redirects to index.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $ranking = $this->Rankings->get($id);
        if ($this->Rankings->delete($ranking)) {
            $this->Flash->success('The ranking has been deleted.');
        } else {
            $this->Flash->error('The ranking could not be deleted. Please, try again.');
        }
        return $this->redirect(['action' => 'index']);
    }
}
