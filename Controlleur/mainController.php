<?php
require_once "../Systeme/mainSystem.php";
require_once "../Modele/mainModel.php";

class MainController extends MainSystem
{
	public function __construct()
	{
		parent::__construct();
		
		//var_dump($this->getHelpers()->getCheckH()->check("ds"));
		
		$this->index();
	}
	
	public function index()
	{
		$header_date["css"]=array();
		include "../Vue/header.php";
		include "../Vue/mainVue.php";
		$footer_data["scripts"]=array("Assets/JS/tinyMCE.js");
		include "../Vue/footer.php";
	}
}

?>