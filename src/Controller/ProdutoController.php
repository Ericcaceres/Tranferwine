<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Produto Controller
 *
 * @property \App\Model\Table\ProdutoTable $Produto
 *
 * @method \App\Model\Entity\Produto[] paginate($object = null, array $settings = [])
 */
class ProdutoController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $produto = $this->paginate($this->Produto);

        $this->set(compact('produto'));
        $this->set('_serialize', ['produto']);
    }

    /**
     * View method
     *
     * @param string|null $id Produto id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $produto = $this->Produto->get($id, [
            'contain' => []
        ]);

        $this->set('produto', $produto);
        $this->set('_serialize', ['produto']);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $produto = $this->Produto->newEntity();
        if ($this->request->is('post')) {
            $produto = $this->Produto->patchEntity($produto, $this->request->getData());
            if ($this->Produto->save($produto)) {
                $this->Flash->success(__('The produto has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The produto could not be saved. Please, try again.'));
        }
        $this->set(compact('produto'));
        $this->set('_serialize', ['produto']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Produto id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $produto = $this->Produto->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $produto = $this->Produto->patchEntity($produto, $this->request->getData());
            if ($this->Produto->save($produto)) {
                $this->Flash->success(__('The produto has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The produto could not be saved. Please, try again.'));
        }
        $this->set(compact('produto'));
        $this->set('_serialize', ['produto']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Produto id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $produto = $this->Produto->get($id);
        if ($this->Produto->delete($produto)) {
            $this->Flash->success(__('The produto has been deleted.'));
        } else {
            $this->Flash->error(__('The produto could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
