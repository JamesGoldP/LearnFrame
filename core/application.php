<?php
namespace core;

class Application
{

	static $classMap = array();

	static public function run()
	{
		//加载配置
		new Config(CORE.'configs'.DIRECTORY_SEPARATOR);
		
		//加载日志
		new Log();

		//加载路由
		new Route();
	}

	/**
	 * 自动加载类
	 * @param type $class 
	 * @return type
	 */
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