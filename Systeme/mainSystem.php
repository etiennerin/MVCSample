<?php
require_once 'Helper/mainHelper.php';

	class MainSystem
	{
		private $libraries;
		private $helpers;
		private $bdd;
		
		public function __construct()
		{
			session_start();
			$config = include 'config.php';
			$this->libraries = include 'libraries.php';
			try{
				$this->bdd = new PDO('mysql:host='.$config["dbAdress"].';port='.$config['dbPort'].';dbname='.$config['dbName'].';charset=utf8', $config['dbLogin'], $config['dbPassword']);
			}
			catch(Exception $e){
				die('Erreur : '.$e->getMessage());
			}
			
			$this->helpers=new MainHelper($this->bdd);
		}
		
		public function getHelpers()
		{
			return $this->helpers;
		}
		public function getLibraries()
		{
			return $this->libraries;
		}
	}
?>