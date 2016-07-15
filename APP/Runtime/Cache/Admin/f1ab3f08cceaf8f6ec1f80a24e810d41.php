<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Document</title>
  <link rel="stylesheet" href="__PUBLIC__/Css/public.css" />
  <!-- <link rel="stylesheet" type="text/css" href="__PUBLIC__/Css/public.css" /> -->
  <!-- <script type="text/javascript" src="__PUBLIC__/Js/jquery-1.7.2.min.js"></script> -->
</head>
<body>
  <table class='table'>
    <tr>
      <th>ID</th>
      <th>新闻标题</th>
      <th>新闻简介</th>
      <th>新闻内容</th>
      <th>发布时间</th>
      <th>点击次数</th>
      <th>操作</th>
    </tr>
    <?php if(is_array($blogList)): foreach($blogList as $key=>$v): ?><tr>
        <td><?php echo ($v["id"]); ?></td>
        <td><?php echo ($v["title"]); ?></td>
        <td><?php echo ($v["summary"]); ?></td>
        <td><?php echo ($v["content"]); ?></td>
        <td><?php echo (date('Y-m-d H:i',$v["time"])); ?></td>
        <td><?php echo ($v["click"]); ?></td>
        <td>
          <!-- URL传参数，此处不能用点语法 -->
          <a href="<?php echo U('Admin/MsgManage/modify',array('id' => $v['id']));?>">修改</a>
          <a href="<?php echo U('Admin/MsgManage/delete',array('id' => $v['id']));?>">删除</a>
        </td>
      </tr><?php endforeach; endif; ?>
    <tr>
      <td colspan='7' align='center'><?php echo ($page); ?></td>
    </tr>
  </table>
</body>
</html>