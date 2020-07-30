<?php
class General_controller {
	public function encrypter_passe($password) {
		return hash("ripemd160", $password . "vive le projet tweet_academy");
	}
	public function redirect_to_connexion() {
		if (!isset($_SESSION["user-token"]))
			header("Location: index.php");
	}
	public function redirect_to_tweet() {
		if (isset($_SESSION["user-token"]))
			header("Location: compte.php");
	}
}
session_start();