<?php
namespace App;

class ControllerPublic extends DataBase {

	public $categories;


	public function __construct()
	{
		parent::__construct();
		$this->categories = $this->getCategories();
	}


	protected function getCategories(): array
	{

		$sql = 'SELECT slug, name FROM categories ORDER BY name ASC';
		$request = $this->db->query($sql);
		return $request->fetchAll();
	}


	protected function getMoviesByCat()
	{
		global $router;

		if (!empty($_GET['slug'])) {
			$search = (!empty($_GET['search'])) ? $_GET['search'] : '';

			$data = [
				'search' => '%' . $search . '%',
				'slug'   => $_GET['slug']
			];

			$sql = 'SELECT movies.id, movies.title, movies.released, movies.poster, movies.viewer 
				FROM categories 
				INNER JOIN movies_categories 
				ON categories.id = movies_categories.category_id
				INNER JOIN movies
				ON movies.id = movies_categories.movie_id
				WHERE categories.slug = :slug
				AND movies.title LIKE :search 
				ORDER BY movies.viewer DESC
			';
			$request = $this->db->prepare($sql);
			$request->execute($data);
			$results = $request->fetchAll();

			if ($results) {
				return $results;
			}
			else {
				header('Location: ' . $router->generate('home'));
				die;
			}
		}
		else {
			return false;
		}
	}
}
