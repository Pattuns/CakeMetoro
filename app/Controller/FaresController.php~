<?php
App::uses('AppController', 'Controller');
/**
 * Fares Controller
 *
 * @property Fare $Fare
 * @property PaginatorComponent $Paginator
 * @property SessionComponent $Session
 */
class FaresController extends AppController {

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
	public function index() {
		$this->Fare->recursive = 1;
        debug($this->Fare->find('all'));
		$this->set('fares', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Fare->exists($id)) {
			throw new NotFoundException(__('Invalid fare'));
		}
		$options = array('conditions' => array('Fare.' . $this->Fare->primaryKey => $id));
		$this->set('fare', $this->Fare->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Fare->create();
			if ($this->Fare->save($this->request->data)) {
				$this->Session->setFlash(__('The fare has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The fare could not be saved. Please, try again.'));
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
	public function edit($id = null) {
		if (!$this->Fare->exists($id)) {
			throw new NotFoundException(__('Invalid fare'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Fare->save($this->request->data)) {
				$this->Session->setFlash(__('The fare has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The fare could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Fare.' . $this->Fare->primaryKey => $id));
			$this->request->data = $this->Fare->find('first', $options);
		}
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->Fare->id = $id;
		if (!$this->Fare->exists()) {
			throw new NotFoundException(__('Invalid fare'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->Fare->delete()) {
			$this->Session->setFlash(__('The fare has been deleted.'));
		} else {
			$this->Session->setFlash(__('The fare could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
