<?php
return array(
	//'配置项'=>'配置值'
  //开启分组
  'APP_GROUP_LIST' => 'Index,Admin',
  //默认分组
  'DEFAULT_GROUP' => 'Index',
  // 开启独立分组
  'APP_GROUP_MODE' => 1,
  // 独立分组文件夹名称
  'APP_GROUP_PATH' => 'Modules',

  // 数据库连接参数
  'DB_HOST' => '127.0.0.1',
  'DB_USER' => 'root',
  'DB_PWD' => 'root',
  'DB_NAME' => 'blog',
  'DB_PREFIX' => 'hd_',

  // 点语法默认解析
  'TMPL_VAR_IDENTIFY' => 'array',

  // 模板路径分割符
  'TMPL_FILE_DEPR' => '_',

  // 默认过滤函数(THINK官方已修复此漏洞)
  // 'DEFAULT_FILTER' => 'htmlspecialchars',

  //自定义session数据库存储
  'SESSION_TYPE' => 'db',


  //SESSION 前缀
  // 'SESSION_PREFIX' => 'sess_',
  // 'SESSION_TYPE' => 'Redis',
  //REDIS服务器地址
  // 'REDIS_HOST' => '127.0.0.1',
  //REDIS端口
  // 'REDIS_PORT' => 6379,
  // 'SESSION_EXPIRE' => 1000,
);
?>