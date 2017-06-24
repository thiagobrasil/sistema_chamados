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
    $this->set('chamados', $this->Chamados->find('all'));
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
    $chamado = $this->Chamados->get($id);
    $this->set(compact('chamado'));
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
        $this->Flash->success(__('Seu chamado foi salvo.'));
        return $this->redirect(['action' => 'index']);
      }
      $this->Flash->error(__('Não é possível adicionar o seu chamado.'));
    }
    $this->set('chamado', $chamado);
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
    $chamado = $this->Chamados->get($id);
    if ($this->request->is(['post', 'put'])) {
      $this->Chamados->patchEntity($chamado, $this->request->getData());
      if ($this->Chamados->save($chamado)) {
        $this->Flash->success(__('Seu chamado foi atualizado.'));
        return $this->redirect(['action' => 'index']);
      }
      $this->Flash->error(__('Seu chamado não pôde ser atualizado.'));
    }

    $this->set('chamado', $chamado);
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
      $this->Flash->success(__('O chamado com id: {0} foi deletado.', h($id)));
      return $this->redirect(['action' => 'index']);
    }
  }
} 
