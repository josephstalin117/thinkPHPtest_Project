<?php

return array(
    //'配置项'=>'配置值'
    'SHOW_PAGE_TRACE' => true, // 显示页面Trace信息
    'DB_TYPE' => 'mysql', // 数据库类型
    'DB_HOST' => 'localhost', // 服务器地址
    'DB_NAME' => 'hehe', // 数据库名
    'DB_USER' => 'root', // 用户名
    'DB_PWD' => '', // 密码
    'DB_PORT' => 3306, // 端口
    'DB_PREFIX' => 'hehe_', // 数据库表前缀 
    
    //表单令牌
    'TOKEN_ON'=>TRUE,
    'TOKEN_NAME'=>'_hash_',
    'TOKEN_TYPE'=>'md5',
    'TOKEN_RESET'=>TRUE,
);
?>