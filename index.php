<?php
//定义系统常量
define('FRAME', __DIR__.DIRECTORY_SEPARATOR);
define('CORE', FRAME.'core'.DIRECTORY_SEPARATOR);

define('DEBUG', true);

if( DEBUG ){
	ini_set('display_error', 'On');
} else {
	ini_set('display_error', 'Off');
}


//加载公用函数库
include_once CORE.'common'.DIRECTORY_SEPARATOR.'functions.php';

//加载核心类
include_once CORE.'core.php';

//启动核心类
core\core::run();