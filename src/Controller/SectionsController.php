<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Sections Controller
 *
 * @property App\Model\Table\SectionsTable $Sections
 */
class SectionsController extends AppController {

/**
 * Index method
 *
 * @return void
 */
	public function index() {
		$this->set('sections', $this->paginate($this->Sections));
	}

/**
 * View method
 *
 * @param string $id
 * @return void
 * @throws NotFoundException
 */
	public function view($id = null) {
		$section = $this->Sections->get($id, [
			'contain' => ['Stages']
		]);
		$this->set('section', $section);
	}

/**
 * Add method
 *
 * @return void
 */
	public function add() {
		$section = $this->Sections->newEntity($this->request->data);
		if ($this->request->is('post')) {
			if ($this->Sections->save($section)) {
				$this->Flash->success('The section has been saved.');
				return $this->redirect(['action' => 'index']);
			} else {
				$this->Flash->error('The section could not be saved. Please, try again.');
			}
		}
		$this->set(compact('section'));
	}

/**
 * Edit method
 *
 * @param string $id
 * @return void
 * @throws NotFoundException
 */
	public function edit($id = null) {
		$section = $this->Sections->get($id, [
			'contain' => []
		]);
		if ($this->request->is(['post', 'put'])) {
			$section = $this->Sections->patchEntity($section, $this->request->data);
			if ($this->Sections->save($section)) {
				$this->Flash->success('The section has been saved.');
				return $this->redirect(['action' => 'index']);
			} else {
				$this->Flash->error('The section could not be saved. Please, try again.');
			}
		}
		$this->set(compact('section'));
	}

/**
 * Delete method
 *
 * @param string $id
 * @return void
 * @throws NotFoundException
 */
	public function delete($id = null) {
		$section = $this->Sections->get($id);
		$this->request->allowMethod('post', 'delete');
		if ($this->Sections->delete($section)) {
			$this->Flash->success('The section has been deleted.');
		} else {
			$this->Flash->error('The section could not be deleted. Please, try again.');
		}
		return $this->redirect(['action' => 'index']);
	}
}
