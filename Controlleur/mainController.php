<?php
require_once "../Systeme/mainSystem.php";
require_once "../Modele/mainModel.php";

class MainController extends MainSystem
{
	public function __construct()
	{
		parent::__construct();
		var_dump($this->getHelpers()->getCheckH()->check("ds"));
		$this->index();
	}
	
	public function index()
	{
		include "../Vue/mainVue.php";
	}
}

?>