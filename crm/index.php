<?php
// +----------------------------------------------------------------------
// | ThinkPHP [ WE CAN DO IT JUST THINK ]
// +----------------------------------------------------------------------
// | Copyright (c) 2006-2014 http://thinkphp.cn All rights reserved.
// +----------------------------------------------------------------------
// | Licensed ( http://www.apache.org/licenses/LICENSE-2.0 )
// +----------------------------------------------------------------------
// | Author: liu21st <liu21st@gmail.com>
// +----------------------------------------------------------------------

// 应用入口文件
// 检测PHP环境
if(version_compare(PHP_VERSION,'5.3.0','<'))  die('require PHP > 5.3.0 !');

// 开启调试模式 建议开发阶段开启 部署阶段注释或者设为false
define('APP_DEBUG',True);
// 定义项目的根目录
//define('ROOT_PATH',dirname($_SERVER['SCRIPT_FILENAME']).'/');
define('ROOT_PATH','./');
// 定义应用目录
define('APP_PATH',ROOT_PATH.'Apps/');
// ThinkPHP框架所在的目录
define('THINK_PATH',dirname(ROOT_PATH).'/ThinkPHP/');
// 定义Runtime所在的目录
define('RUNTIME_PATH',ROOT_PATH.'/Runtime/');
// 绑定到Admin中
define('BIND_MODULE','Admin');
// 引入ThinkPHP入口文件
require THINK_PATH.'ThinkPHP.php';

// 亲^_^ 后面不需要任何代码了 就是如此简单