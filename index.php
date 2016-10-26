<?php
// +----------------------------------------------------------------------
// | ThinkPHP [ WE CAN DO IT JUST THINK ]
// +----------------------------------------------------------------------
// | Copyright (c) 2006-2015 http://thinkphp.cn All rights reserved.
// +----------------------------------------------------------------------
// | Licensed ( http://www.apache.org/licenses/LICENSE-2.0 )
// +----------------------------------------------------------------------
// | Author: liu21st <liu21st@gmail.com>
// +----------------------------------------------------------------------

// [ 应用入口文件 ]
//定义系统常量

// 定义应用目录
define('APP_PATH', __DIR__ . '/application/');
//根目录
define('ROOT_PATH', __DIR__ . '/');
//数据库备份目录
define('DATABASE_PATH', __DIR__ . '/public/database/');
// 开启调试模式
define('APP_DEBUG', true);
//扩展类目录
define('EXTEND_PATH', __DIR__ . '/extend/');
define('WAP_CSS_URL', '/public/static/wap/css/');
define('WAP_JS_URL', '/public/static/wap/js/');
define('WAP_IMAGE_URL', '/public/static/wap/image/');
define('VENDOR_URL', '/public/vendor/');

define('ADMIN_CSS_URL', '/public/static/admin/css/');
define('ADMIN_JS_URL', '/public/static/admin/js/');
define('ADMIN_IMAGE_URL', '/public/static/admin/image/');

define('INDEX_CSS_URL', '/public/static/index/css/');
define('INDEX_JS_URL', '/public/static/index/js/');
define('INDEX_IMAGE_URL', '/public/static/index/image/');
define('IMG_UPLOAD', '/public/upload/');
define('INDEX_PUBLIC_URL', '/public/static/');
define('CACHE_PATH', __DIR__ . '/runtime/cache/');
define('HTML_PATH', __DIR__ . '/html/');

define('HTML_FILE_SUFFIX','.html');

//define('HTML_PATH', './');

// 加载框架引导文件
require __DIR__ . '/thinkphp/start.php';
