<?php
namespace App;

class IndexController extends ControllerPublic {

	public function __construct()
	{
		parent::__construct();
	}


	/**
	* Get all movies
	* 
	* @param object PDO connect db
	* @return array results
	*/
	public function getMovies(): array
	{
		$movies = $this->getMoviesByCat();
		if (!$movies) {
			if (!empty($_GET['search'])) {
				$data['search'] = '%' . $_GET['search'] . '%';
				$sql = 'SELECT id, title, released, poster, viewer FROM movies WHERE title LIKE :search ORDER BY id DESC';
				$request = $this->db->prepare($sql);
				$request->execute($data);	
			}
			else {
				$sql = 'SELECT id, title, released, poster, viewer FROM movies ORDER BY id DESC';
				$request = $this->db->query($sql);
			}

			$movies = $request->fetchAll();
		}

	   return $movies;
   }

}


$ctrl = new IndexController;
$movies = $ctrl->getMovies();
$categories = $ctrl->categories;


// SELECT title FROM `movies` INNER JOIN movies_categories ON movies.id = movies_categories.movie_id WHERE movies_categories.category_id = 2