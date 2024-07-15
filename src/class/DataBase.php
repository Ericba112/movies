<?php 
namespace App;

class DataBase {

	protected $db;

	public function __construct()
	{
		try {
			// Connect database
			$this->db = new \PDO('mysql:host=' . DB_HOST . ';dbname=' . DB_NAME, DB_USER, DB_PASSWORD);

			// Config PDO
			$this->db->setAttribute(\PDO::ATTR_DEFAULT_FETCH_MODE, \PDO::FETCH_OBJ);
			$this->db->exec('SET CHARACTER SET utf8');
			if (DEBUG) :
				$this->db->setAttribute(\PDO::ATTR_ERRMODE, \PDO::ERRMODE_WARNING);
			endif;
		}
		catch (\Exception $e) {
			if (DEBUG) :
				$message = utf8_encode($e->getMessage());
				echo $message;
			else :
				echo 'Erreur de connexion à la base de données.';
			endif;
			die();
		}
	}
}
