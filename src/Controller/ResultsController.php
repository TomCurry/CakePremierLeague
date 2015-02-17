<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Results Controller
 *
 * @property \App\Model\Table\ResultsTable $Results
 */
class ResultsController extends AppController
{

    /**
     * Index method
     *
     * @return void
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Matches']
        ];
        $this->set('results', $this->paginate($this->Results));
        $this->set('_serialize', ['results']);
    }

    /**
     * View method
     *
     * @param string|null $id Result id.
     * @return void
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function view($id = null)
    {
        $result = $this->Results->get($id, [
            'contain' => ['Matches']
        ]);
        $this->set('result', $result);
        $this->set('_serialize', ['result']);
    }

    /**
     * Add method
     *
     * @return void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $result = $this->Results->newEntity();
        if ($this->request->is('post')) {
            $result = $this->Results->patchEntity($result, $this->request->data);
            if ($this->Results->save($result)) {
                $this->Flash->success('The result has been saved.');
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error('The result could not be saved. Please, try again.');
            }
        }
        $matches = $this->Results->Matches->find('list', ['limit' => 200]);
        $this->set(compact('result', 'matches'));
        $this->set('_serialize', ['result']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Result id.
     * @return void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $result = $this->Results->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $result = $this->Results->patchEntity($result, $this->request->data);
            if ($this->Results->save($result)) {
                $this->Flash->success('The result has been saved.');
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error('The result could not be saved. Please, try again.');
            }
        }
        $matches = $this->Results->Matches->find('list', ['limit' => 200]);
        $this->set(compact('result', 'matches'));
        $this->set('_serialize', ['result']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Result id.
     * @return void Redirects to index.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $result = $this->Results->get($id);
        if ($this->Results->delete($result)) {
            $this->Flash->success('The result has been deleted.');
        } else {
            $this->Flash->error('The result could not be deleted. Please, try again.');
        }
        return $this->redirect(['action' => 'index']);
    }
}
