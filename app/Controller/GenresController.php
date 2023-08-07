<?php
App::uses('AppController', 'Controller');
/**
 * Genres Controller
 *
 * @property Genre $Genre
 * @property PaginatorComponent $Paginator
 */
class GenresController extends AppController
{

	/**
	 * Components
	 *
	 * @var array
	 */
	public $components = array('Paginator');

	/**
	 * index method
	 *
	 * @return void
	 */
	public function index()
	{
		$this->Genre->recursive = 0;
		$this->set('genres', $this->Paginator->paginate());
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
		if (!$id) {
			throw new NotFoundException(__('Invalid Genre'));
		}

		$genre = $this->Genre->findById($id);
		if (!$genre) {
			throw new NotFoundException(__('Cant find this genre'));
		}

		$this->set('genre', $genre);
	}

	/**
	 * add method
	 *
	 * @return void
	 */
	public function add()
	{
		if ($this->request->is('post')) {
			$this->Genre->create();
			if ($this->Genre->save($this->request->data)) {
				return $this->flash(__('The genre has been saved.'), array('action' => 'index'));
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
	public function edit($id = null)
	{
		if (!$this->Genre->exists($id)) {
			throw new NotFoundException(__('Invalid genre'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Genre->save($this->request->data)) {
				return $this->flash(__('The genre has been saved.'), array('action' => 'index'));
			}
		} else {
			$options = array('conditions' => array('Genre.' . $this->Genre->primaryKey => $id));
			$this->request->data = $this->Genre->find('first', $options);
		}
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
		if (!$this->Genre->exists($id)) {
			throw new NotFoundException(__('Invalid genre'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Genre->delete($id)) {
			return $this->flash(__('The genre has been deleted.'), array('action' => 'index'));
		} else {
			return $this->flash(__('The genre could not be deleted. Please, try again.'), array('action' => 'index'));
		}
	}
}