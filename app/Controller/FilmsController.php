<?php
App::uses('AppController', 'Controller');
/**
 * Films Controller
 *
 * @property Film $Film
 * @property PaginatorComponent $Paginator
 * @property SessionComponent $Session
 * @property FlashComponent $Flash
 */

class FilmsController extends AppController
{
	/**
	 * Components
	 *
	 * @var array
	 */
	public $components = array('Paginator', 'Session', 'Flash');

	/**
	 * index method
	 *
	 * @return void
	 */
	public function index()
	{
		$this->Film->recursive = 0;
		$this->set('films', $this->Paginator->paginate());
	}

	/**
	 * view method
	 *
	 * @throws NotFoundException
	 * @param string $id
	 * @return void
	 */
	public function view($id = null)
	{
		if (!$this->Film->exists($id)) {
			throw new NotFoundException(__('Invalid film'));
		}
		$options = array('conditions' => array('Film.' . $this->Film->primaryKey => $id));
		$this->set('film', $this->Film->find('first', $options));
	}

	/**
	 * add method
	 *
	 * @return void
	 */
	public function add()
	{
		if ($this->request->is('post')) {
			$this->Film->create();


			//

			if (!empty($this->request->data['Film']['poster']['tmp_name'])) {
				$file = $this->request->data['Film']['poster'];
				$filename = time() . '_' . $file['name'];
				move_uploaded_file($file['tmp_name'], WWW_ROOT . 'media' . DS . 'filmes' . DS . $filename);
				$this->request->data['Film']['poster'] = $filename;
			}

			//

			if ($this->Film->save($this->request->data)) {
				$this->Flash->success(__('The film has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Flash->error(__('The film could not be saved. Please, try again.'));
			}
		}
		$genres = $this->Film->Genre->find('list');
		$this->set(compact('genres'));
	}

	/**
	 * edit method
	 *
	 * @throws NotFoundException
	 * @param string $id
	 * @return void
	 */
	public function edit($id = null)
	{
		if (!$this->Film->exists($id)) {
			throw new NotFoundException(__('Invalid film'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Film->save($this->request->data)) {
				$this->Flash->success(__('The film has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Flash->error(__('The film could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Film.' . $this->Film->primaryKey => $id));
			$this->request->data = $this->Film->find('first', $options);
		}
		$genres = $this->Film->Genre->find('list');
		$this->set(compact('genres'));
	}

	/**
	 * delete method
	 *
	 * @throws NotFoundException
	 * @param string $id
	 * @return void
	 */
	public function delete($id = null)
	{
		if (!$this->Film->exists($id)) {
			throw new NotFoundException(__('Invalid film'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Film->delete($id)) {
			$this->Flash->success(__('The film has been deleted.'));
		} else {
			$this->Flash->error(__('The film could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}