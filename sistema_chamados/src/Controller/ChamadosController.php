<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Chamados Controller
 *
 * @property \App\Model\Table\ChamadosTable $Chamados
 *
 * @method \App\Model\Entity\Chamado[] paginate($object = null, array $settings = [])
 */
class ChamadosController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $chamados = $this->paginate($this->Chamados);

        $this->set(compact('chamados'));
        $this->set('_serialize', ['chamados']);
    }

    /**
     * View method
     *
     * @param string|null $id Chamado id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $chamado = $this->Chamados->get($id, [
            'contain' => []
        ]);

        $this->set('chamado', $chamado);
        $this->set('_serialize', ['chamado']);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $chamado = $this->Chamados->newEntity();
        if ($this->request->is('post')) {
            $chamado = $this->Chamados->patchEntity($chamado, $this->request->getData());
            if ($this->Chamados->save($chamado)) {
                $this->Flash->success(__('The chamado has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The chamado could not be saved. Please, try again.'));
        }
        $this->set(compact('chamado'));
        $this->set('_serialize', ['chamado']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Chamado id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $chamado = $this->Chamados->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $chamado = $this->Chamados->patchEntity($chamado, $this->request->getData());
            if ($this->Chamados->save($chamado)) {
                $this->Flash->success(__('The chamado has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The chamado could not be saved. Please, try again.'));
        }
        $this->set(compact('chamado'));
        $this->set('_serialize', ['chamado']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Chamado id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $chamado = $this->Chamados->get($id);
        if ($this->Chamados->delete($chamado)) {
            $this->Flash->success(__('The chamado has been deleted.'));
        } else {
            $this->Flash->error(__('The chamado could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
