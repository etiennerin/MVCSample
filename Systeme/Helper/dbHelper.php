<?php
	
	class DbHelper
	{
		private $bdd;
		public function __construct($db)
		{
			$this->bdd=$db;
		}
		
		public function selectHelp($table)
		{
			return $this->bdd->query("SELECT * FROM ".$table);
		}
	}
?>