<?php

class Router
{
	public function __construct()
	{
		$rout = include "routes.php";
		
		if($_GET['url']=$this->check($_GET['url']))
		{
			$this->urls=explode('/',$_GET['url']);
			if(in_array($this->urls[0],array_keys($rout)))
			{
				require_once "../Controlleur/".$rout[$this->urls[0]].".php";
				$rc=ucfirst($rout[$this->urls[0]]);
				if(count($this->urls)>1)
					call_user_func(array(new $rc,$this->urls[1]));
				else new $rc;
			}
		}
	}
	
	public function check($value)
	{
		return isset($value)&&!empty($value)?strip_tags($value):false;
	}
}

$ro=new Router();

?>