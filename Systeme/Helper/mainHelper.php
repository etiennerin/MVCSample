<?php
require_once "checkHelper.php";
require_once "dbHelper.php";

class MainHelper
{
	private $checkH;
	private $dbH;
	
	public function __construct($db)
	{
		$this->checkH=new CheckHelper();
		$this->dbH=new DbHelper($db);
	}
	
	public function getCheckH()
	{
		return $this->checkH;
	}
	
	public function getDbH()
	{
		return $this->dbH;
	}
}
?>