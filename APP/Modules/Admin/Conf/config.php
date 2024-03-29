<?php
return array(
  //'配置项'=>'配置值'

  'RBAC_SUPERADMIN' => 'admin',     //超级管理员名称
  'ADMIN_AUTH_KEY' => 'superadmin', //超级管理员识别
  'USER_AUTH_ON' => true,           //是否开启验证
  'USER_AUTH_TYPE' => 1,            //验证类型(1:登录验证，2:实时验证)
  'USER_AUTH_KEY' => 'uid',         //用户认证识别号
  'NOT_AUTH_MODULE' => 'Index',          //无需验证的控制器
  'NOT_AUTH_ACTION' => 'addUserHandle,addRoleHandle,addNodeHandle',          //无需验证的动作方法
  'RBAC_ROLE_TABLE' => 'hd_role',   //角色表名称
  'RBAC_USER_TABLE' => 'hd_role_user',  //角色与用户的中间表名称
  'RBAC_ACCESS_TABLE' => 'hd_access',   //权限表名称
  'RBAC_NODE_TABLE' => 'hd_node',       //节点表名称


  'TMPL_PARSE_STRING' => array(
    '__PUBLIC__' => __ROOT__.'/'.APP_NAME.'/'.'Modules'.'/'.GROUP_NAME.'/Tpl/Public',
    ),

  'URL_HTML_SUFFIX' => '',

  //显示追踪信息
  // 'SHOW_PAGE_TRACE' => true
);
?>