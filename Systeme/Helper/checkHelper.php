<?php

class CheckHelper
{
	public function __construct()
	{
		
	}
	
	public function check($value)
	{
		return isset($value)&&!empty($value)?strip_tags($value):false;
	}
	
	public function checkAll($values)
	{
		for($i=0;$i<count($values)&&$isOk[array_keys($values)[$i]]=$this->check($values[array_keys($values)[$i]]);$i++);
		return $isOk[array_keys($isOk)[count($isOk)-1]]?$isOk:false;
	}
}
?>