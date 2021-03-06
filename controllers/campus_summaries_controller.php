<?php
class CampusSummariesController extends AppController {

	var $name = 'CampusSummaries';

	function index() {
		$this->CampusSummary->recursive = 0;
		$this->set('campusSummaries', $this->paginate());
	}

	function view($id = null) {
		if (!$id) {
			$this->Session->setFlash(sprintf(__('Invalid %s', true), 'campus summary'));
			$this->redirect(array('action' => 'index'));
		}
		$this->set('campusSummary', $this->CampusSummary->read(null, $id));
	}

	function add() {
		if (!empty($this->data)) {
			$this->CampusSummary->create();
			if ($this->CampusSummary->save($this->data)) {
				$this->Session->setFlash(sprintf(__('The %s has been saved', true), 'campus summary'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(sprintf(__('The %s could not be saved. Please, try again.', true), 'campus summary'));
			}
		}
	}

	function edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(sprintf(__('Invalid %s', true), 'campus summary'));
			$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) {
			if ($this->CampusSummary->save($this->data)) {
				$this->Session->setFlash(sprintf(__('The %s has been saved', true), 'campus summary'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(sprintf(__('The %s could not be saved. Please, try again.', true), 'campus summary'));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->CampusSummary->read(null, $id);
		}
	}

	function delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(sprintf(__('Invalid id for %s', true), 'campus summary'));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->CampusSummary->delete($id)) {
			$this->Session->setFlash(sprintf(__('%s deleted', true), 'Campus summary'));
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(sprintf(__('%s was not deleted', true), 'Campus summary'));
		$this->redirect(array('action' => 'index'));
	}

	function admin_index() {
		$this->CampusSummary->recursive = 0;
		$this->set('campusSummaries', $this->paginate());
	}

	function admin_view($id = null) {
		if (!$id) {
			$this->Session->setFlash(sprintf(__('Invalid %s', true), 'campus summary'));
			$this->redirect(array('action' => 'index'));
		}
		$this->set('campusSummary', $this->CampusSummary->read(null, $id));
	}

	function admin_add() {
		if (!empty($this->data)) {
			$this->CampusSummary->create();
			if ($this->CampusSummary->save($this->data)) {
				$this->Session->setFlash(sprintf(__('The %s has been saved', true), 'campus summary'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(sprintf(__('The %s could not be saved. Please, try again.', true), 'campus summary'));
			}
		}
	}

	function admin_edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(sprintf(__('Invalid %s', true), 'campus summary'));
			$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) {
			if ($this->CampusSummary->save($this->data)) {
				$this->Session->setFlash(sprintf(__('The %s has been saved', true), 'campus summary'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(sprintf(__('The %s could not be saved. Please, try again.', true), 'campus summary'));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->CampusSummary->read(null, $id);
		}
	}

	function admin_delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(sprintf(__('Invalid id for %s', true), 'campus summary'));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->CampusSummary->delete($id)) {
			$this->Session->setFlash(sprintf(__('%s deleted', true), 'Campus summary'));
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(sprintf(__('%s was not deleted', true), 'Campus summary'));
		$this->redirect(array('action' => 'index'));
	}
}
?>