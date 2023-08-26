<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * Maintag Controller
 *
 * @property \App\Model\Table\MaintagTable $Maintag
 * @method \App\Model\Entity\Maintag[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class MaintagController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $maintag = $this->paginate($this->Maintag);

        $this->set(compact('maintag'));
    }

    /**
     * View method
     *
     * @param string|null $id Maintag id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $maintag = $this->Maintag->get($id, [
            'contain' => [],
        ]);

        $this->set(compact('maintag'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $maintag = $this->Maintag->newEmptyEntity();
        if ($this->request->is('post')) {
            $maintag = $this->Maintag->patchEntity($maintag, $this->request->getData());
            if ($this->Maintag->save($maintag)) {
                $this->Flash->success(__('The maintag has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The maintag could not be saved. Please, try again.'));
        }
        $this->set(compact('maintag'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Maintag id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $maintag = $this->Maintag->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $maintag = $this->Maintag->patchEntity($maintag, $this->request->getData());
            if ($this->Maintag->save($maintag)) {
                $this->Flash->success(__('The maintag has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The maintag could not be saved. Please, try again.'));
        }
        $this->set(compact('maintag'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Maintag id.
     * @return \Cake\Http\Response|null|void Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $maintag = $this->Maintag->get($id);
        if ($this->Maintag->delete($maintag)) {
            $this->Flash->success(__('The maintag has been deleted.'));
        } else {
            $this->Flash->error(__('The maintag could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
