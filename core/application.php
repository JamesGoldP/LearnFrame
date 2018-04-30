<?php
namespace core;

class application
{

	static $classMap = array();

	static public function run()
	{
		new route();
	}

	static public function load($class)
	{
		if(isset(self::$classMap[$class])){
			return true;
		}
		$file = FRAME.str_replace('\\', DIRECTORY_SEPARATOR, $class).'.php';
		if( file_exists($file) ){
			include $file;
			self::$classMap[$class] = $class;
		} else {
			return false;
		}

	}
} 