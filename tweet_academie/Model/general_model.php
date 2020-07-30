<?php
class General_model {
	public function connexion() {
		try {
			$dbconnect = new PDO("mysql:host=localhost;dbname=common-database", "root", "root")
			return $dbconnect;
		}
		catch (Exceptions $e) {
			echo $e->getMessage();
		}
	}
}