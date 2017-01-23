<?php

class counter{
	
	private static $count =0;

	function __construct(){
		self::$count++;
	}

	public static function getCount(){
		return self::$count;
	}
}

$count =new counter();
echo counter::getCount();
$next = new counter();
echo  counter::getCount();
$third = new counter();
echo counter:: getCount();