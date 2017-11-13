<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Comprador Controller
 *
 * @property \App\Model\Table\CompradorTable $Comprador
 *
 * @method \App\Model\Entity\Comprador[] paginate($object = null, array $settings = [])
 */
class CompradorController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $comprador = $this->paginate($this->Comprador);

        $this->set(compact('comprador'));
        $this->set('_serialize', ['comprador']);
    }

    /**
     * View method
     *
     * @param string|null $id Comprador id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $comprador = $this->Comprador->get($id, [
            'contain' => []
        ]);

        $this->set('comprador', $comprador);
        $this->set('_serialize', ['comprador']);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $comprador = $this->Comprador->newEntity();
        if ($this->request->is('post')) {
            $comprador = $this->Comprador->patchEntity($comprador, $this->request->getData());
            if ($this->Comprador->save($comprador)) {
                $this->Flash->success(__('The comprador has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The comprador could not be saved. Please, try again.'));
        }
        $this->set(compact('comprador'));
        $this->set('_serialize', ['comprador']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Comprador id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $comprador = $this->Comprador->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $comprador = $this->Comprador->patchEntity($comprador, $this->request->getData());
            if ($this->Comprador->save($comprador)) {
                $this->Flash->success(__('The comprador has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The comprador could not be saved. Please, try again.'));
        }
        $this->set(compact('comprador'));
        $this->set('_serialize', ['comprador']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Comprador id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $comprador = $this->Comprador->get($id);
        if ($this->Comprador->delete($comprador)) {
            $this->Flash->success(__('The comprador has been deleted.'));
        } else {
            $this->Flash->error(__('The comprador could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
