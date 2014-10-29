<?php
App::uses('AppController', 'Controller');
/**
 * ApiKeys Controller
 *
 * @property ApiKey $ApiKey
 * @property PaginatorComponent $Paginator
 * @property SessionComponent $Session
 */
class ApiKeysController extends AppController {

/**
 * Components
 *
 * @var array
 */
	public $components = array('Paginator', 'Session', 'RequestHandler');

/**
 * index method
 *
 * @return void
 */
	public function _index() {
		$this->ApiKey->recursive = 0;
		$this->set('apiKeys', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function _view($id = null) {
		if (!$this->ApiKey->exists($id)) {
			throw new NotFoundException(__('Invalid api key'));
		}
		$options = array('conditions' => array('ApiKey.' . $this->ApiKey->primaryKey => $id));
		$this->set('apiKey', $this->ApiKey->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function _add() {
		if ($this->request->is('post')) {
			$this->ApiKey->create();
			if ($this->ApiKey->save($this->request->data)) {
				$this->Session->setFlash(__('The api key has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The api key could not be saved. Please, try again.'));
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
		if (!$this->ApiKey->exists($id)) {
			throw new NotFoundException(__('Invalid api key'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->ApiKey->save($this->request->data)) {
				$this->Session->setFlash(__('The api key has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The api key could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('ApiKey.' . $this->ApiKey->primaryKey => $id));
			$this->request->data = $this->ApiKey->find('first', $options);
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
		$this->ApiKey->id = $id;
		if (!$this->ApiKey->exists()) {
			throw new NotFoundException(__('Invalid api key'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->ApiKey->delete()) {
			$this->Session->setFlash(__('The api key has been deleted.'));
		} else {
			$this->Session->setFlash(__('The api key could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}

    public function show() {

        $info = $this->ApiKey->findById(1);
        $key =  $info['ApiKey']['apikey'];
        $this->set(array('apikey' => $key));  

    }
}
