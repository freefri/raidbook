<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Itineraries Controller
 *
 * @property App\Model\Table\ItinerariesTable $Itineraries
 */
class ItinerariesController extends AppController {

/**
 * Index method
 *
 * @return void
 */
	public function index() {
		$this->paginate = [
			'contain' => ['Events']
		];
		$this->set('itineraries', $this->paginate($this->Itineraries));
	}


/**
 * Add method
 *
 * @return void
 */
	public function add() {
		$itinerary = $this->Itineraries->newEntity($this->request->data);
		if ($this->request->is('post')) {
			if ($this->Itineraries->save($itinerary)) {
				$this->Flash->success('The itinerary has been saved.');
				return $this->redirect(['action' => 'index']);
			} else {
				$this->Flash->error('The itinerary could not be saved. Please, try again.');
			}
		}
		$events = $this->Itineraries->Events->find('list');
		$this->set(compact('itinerary', 'events'));
	}

/**
 * Edit method
 *
 * @param string $id
 * @return void
 * @throws NotFoundException
 */
	public function edit($id = null) {
		$itinerary = $this->Itineraries->get($id, [
			'contain' => []
		]);
		if ($this->request->is(['post', 'put'])) {
			$itinerary = $this->Itineraries->patchEntity($itinerary, $this->request->data);
			if ($this->Itineraries->save($itinerary)) {
				$this->Flash->success('The itinerary has been saved.');
				return $this->redirect(['action' => 'index']);
			} else {
				$this->Flash->error('The itinerary could not be saved. Please, try again.');
			}
		}
		$events = $this->Itineraries->Events->find('list');
		$this->set(compact('itinerary', 'events'));
	}

/**
 * Delete method
 *
 * @param string $id
 * @return void
 * @throws NotFoundException
 */
	public function delete($id = null) {
		$itinerary = $this->Itineraries->get($id);
		$this->request->allowMethod('post', 'delete');
		if ($this->Itineraries->delete($itinerary)) {
			$this->Flash->success('The itinerary has been deleted.');
		} else {
			$this->Flash->error('The itinerary could not be deleted. Please, try again.');
		}
		return $this->redirect(['action' => 'index']);
	}
}
