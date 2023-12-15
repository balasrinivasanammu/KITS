<?php

class balaji
{
	public $result;
	function rev($name)
	{
		$result=strrev($name);
		echo $result;
	}

}
$obj=new balaji();
$obj->rev("mango");

?>