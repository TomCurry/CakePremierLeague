<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Stadia Controller
 *
 * @property \App\Model\Table\StadiaTable $Stadia
 */
class StadiaController extends AppController
{

    /**
     * Index method
     *
     * @return void
     */
    public function index()
    {
        $this->set('stadia', $this->paginate($this->Stadia));
        $this->set('_serialize', ['stadia']);
    }

    /**
     * View method
     *
     * @param string|null $id Stadia id.
     * @return void
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function view($id = null)
    {
        $stadia = $this->Stadia->get($id, [
            'contain' => []
        ]);
        $this->set('stadia', $stadia);
        $this->set('_serialize', ['stadia']);
    }

    /**
     * Add method
     *
     * @return void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $stadia = $this->Stadia->newEntity();
        if ($this->request->is('post')) {
            $stadia = $this->Stadia->patchEntity($stadia, $this->request->data);
            if ($this->Stadia->save($stadia)) {
                $this->Flash->success('The stadia has been saved.');
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error('The stadia could not be saved. Please, try again.');
            }
        }
        $this->set(compact('stadia'));
        $this->set('_serialize', ['stadia']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Stadia id.
     * @return void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $stadia = $this->Stadia->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $stadia = $this->Stadia->patchEntity($stadia, $this->request->data);
            if ($this->Stadia->save($stadia)) {
                $this->Flash->success('The stadia has been saved.');
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error('The stadia could not be saved. Please, try again.');
            }
        }
        $this->set(compact('stadia'));
        $this->set('_serialize', ['stadia']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Stadia id.
     * @return void Redirects to index.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $stadia = $this->Stadia->get($id);
        if ($this->Stadia->delete($stadia)) {
            $this->Flash->success('The stadia has been deleted.');
        } else {
            $this->Flash->error('The stadia could not be deleted. Please, try again.');
        }
        return $this->redirect(['action' => 'index']);
    }
}
