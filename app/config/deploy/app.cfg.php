<?php

// 设置错误报告
error_reporting(E_ERROR);

// URL手动设置, 结尾必须带上/
define('ROOT_URL', 'http://masterlab.ink/');

// 附件URL
define('ATTACHMENT_URL', ROOT_URL . 'attachment/');

// 当前版本号
define('MASTERLAB_VERSION', '1.0');

// 设置缓存的存储引擎
define('CACHE_HANDLER', 'Redis');

// 定义数据缓存的过期时间(秒)
define('CACHE_EXPIRE', 360000);

// Xhprof设置
define('ENABLE_XHPROF', false);

//触发xhprof的几率
define('XHPROF_RATE', 1);

// 是否记录访问日志
define('WRITE_REQUEST_LOG', false);

// 是否在网页底部显示debug信息
define('XPHP_DEBUG', false);

// api和ajax请求时是否开启Trace
define('ENABLE_TRACE', false);

// 是否开启反射和检验返回值格式功能
define('ENABLE_REFLECT_METHOD', true);
