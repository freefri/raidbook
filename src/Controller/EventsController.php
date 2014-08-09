<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Events Controller
 *
 * @property App\Model\Table\EventsTable $Events
 */
class EventsController extends AppController {

/**
 * Index method
 *
 * @return void
 */
	public function index() {
		$this->set('events', $this->paginate($this->Events));
	}


/**
 * Add method
 *
 * @return void
 */
	public function add() {
		$event = $this->Events->newEntity($this->request->data);
		if ($this->request->is('post')) {
			if ($this->Events->save($event)) {
				$this->Flash->success('The event has been saved.');
				return $this->redirect(['action' => 'index']);
			} else {
				$this->Flash->error('The event could not be saved. Please, try again.');
			}
		}
		$this->set(compact('event'));
	}

/**
 * Edit method
 *
 * @param string $id
 * @return void
 * @throws NotFoundException
 */
	public function edit($id = null) {
		$event = $this->Events->get($id, [
			'contain' => []
		]);
		if ($this->request->is(['post', 'put'])) {
			$event = $this->Events->patchEntity($event, $this->request->data);
			if ($this->Events->save($event)) {
				$this->Flash->success('The event has been saved.');
				return $this->redirect(['action' => 'index']);
			} else {
				$this->Flash->error('The event could not be saved. Please, try again.');
			}
		}
		$this->set(compact('event'));
	}

/**
 * Delete method
 *
 * @param string $id
 * @return void
 * @throws NotFoundException
 */
	public function delete($id = null) {
		$event = $this->Events->get($id);
		$this->request->allowMethod('post', 'delete');
		if ($this->Events->delete($event)) {
			$this->Flash->success('The event has been deleted.');
		} else {
			$this->Flash->error('The event could not be deleted. Please, try again.');
		}
		return $this->redirect(['action' => 'index']);
	}
}
