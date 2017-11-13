<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * TipoVino Controller
 *
 * @property \App\Model\Table\TipoVinoTable $TipoVino
 *
 * @method \App\Model\Entity\TipoVino[] paginate($object = null, array $settings = [])
 */
class TipoVinoController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $tipoVino = $this->paginate($this->TipoVino);

        $this->set(compact('tipoVino'));
        $this->set('_serialize', ['tipoVino']);
    }

    /**
     * View method
     *
     * @param string|null $id Tipo Vino id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $tipoVino = $this->TipoVino->get($id, [
            'contain' => []
        ]);

        $this->set('tipoVino', $tipoVino);
        $this->set('_serialize', ['tipoVino']);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $tipoVino = $this->TipoVino->newEntity();
        if ($this->request->is('post')) {
            $tipoVino = $this->TipoVino->patchEntity($tipoVino, $this->request->getData());
            if ($this->TipoVino->save($tipoVino)) {
                $this->Flash->success(__('The tipo vino has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The tipo vino could not be saved. Please, try again.'));
        }
        $this->set(compact('tipoVino'));
        $this->set('_serialize', ['tipoVino']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Tipo Vino id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $tipoVino = $this->TipoVino->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $tipoVino = $this->TipoVino->patchEntity($tipoVino, $this->request->getData());
            if ($this->TipoVino->save($tipoVino)) {
                $this->Flash->success(__('The tipo vino has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The tipo vino could not be saved. Please, try again.'));
        }
        $this->set(compact('tipoVino'));
        $this->set('_serialize', ['tipoVino']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Tipo Vino id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $tipoVino = $this->TipoVino->get($id);
        if ($this->TipoVino->delete($tipoVino)) {
            $this->Flash->success(__('The tipo vino has been deleted.'));
        } else {
            $this->Flash->error(__('The tipo vino could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
