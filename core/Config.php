<?php
namespace core;

class Config
{

	static $path = NULL;
	static $configs = array(); //所有配置

	public function __construct($path)
	{
		self::$path = $path;
	}	

	/**
	 * 获取数组
	 * @var type
	 */	
	static function get( $offset )
	{
		if(empty(self::$configs[$offset])){
			$file = self::$path.$offset.'.php';
			if( file_exists($file) ){
				$config = include $file;
				self::$configs[$offset] = $config;
			}
		}
		return self::$configs[$offset];
	}




}