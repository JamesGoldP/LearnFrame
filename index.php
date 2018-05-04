<?php
//定义系统常量
define('FRAME', __DIR__.DIRECTORY_SEPARATOR);
define('CORE', FRAME.'core'.DIRECTORY_SEPARATOR);

define('DEBUG', true);

include './vendor/autoload.php';

if( DEBUG ){
	$whoops = new \Whoops\Run;
	$whoops->pushHandler(new \Whoops\Handler\PrettyPageHandler);
	$whoops->register();		
	ini_set('display_error', 'On');
} else {
	ini_set('display_error', 'Off');
}


date_default_timezone_set('Asia/shanghai');
//加载公用函数库
include CORE.'common'.DIRECTORY_SEPARATOR.'functions.php';

//加载核心类
include CORE.'application.php';

spl_autoload_register('core\application::load');
//启动核心类
core\application::run();
