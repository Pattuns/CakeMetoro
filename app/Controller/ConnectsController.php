<?php
App::uses('AppController', 'Controller');
/**
 * Connects Controller
 *
 * @property Connect $Connect
 * @property PaginatorComponent $Paginator
 * @property SessionComponent $Session
 */
class ConnectsController extends AppController {

/**
 * Components
 *
 * @var array
 */
	public $components = array('Paginator', 'Session');

/**
 * index method
 *
 * @return void
 */
	public function _index() {
		$this->Connect->recursive = 0;
		$this->set('connects', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function _view($id = null) {
		if (!$this->Connect->exists($id)) {
			throw new NotFoundException(__('Invalid connect'));
		}
		$options = array('conditions' => array('Connect.' . $this->Connect->primaryKey => $id));
		$this->set('connect', $this->Connect->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function _add() {
		if ($this->request->is('post')) {
			$this->Connect->create();
			if ($this->Connect->save($this->request->data)) {
				$this->Session->setFlash(__('The connect has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The connect could not be saved. Please, try again.'));
			}
		}
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function _edit($id = null) {
		if (!$this->Connect->exists($id)) {
			throw new NotFoundException(__('Invalid connect'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Connect->save($this->request->data)) {
				$this->Session->setFlash(__('The connect has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The connect could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Connect.' . $this->Connect->primaryKey => $id));
			$this->request->data = $this->Connect->find('first', $options);
		}
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function _delete($id = null) {
		$this->Connect->id = $id;
		if (!$this->Connect->exists()) {
			throw new NotFoundException(__('Invalid connect'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->Connect->delete()) {
			$this->Session->setFlash(__('The connect has been deleted.'));
		} else {
			$this->Session->setFlash(__('The connect could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}

}
