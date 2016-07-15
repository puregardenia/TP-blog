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
  <form action="<?php echo U('Admin/MsgManage/addBlog');?>" method='post'>
    <table class="table">
      <tr>
        <th colspan="2">博文发布</th>
      </tr>
      <tr>
        <td>
          <div align="right">点击次数：</div>
          <td><input type="text" name='click' value="100"></td>
        </td>
      </tr>
      <tr>
        <td align="right">标题：</td>
        <td>
          <input type="text" name='title'>
        </td>
      </tr>
      <tr>
        <td align="right">摘要：</td>
        <td>
          <input type="text" name="summary"/>
        </td>
      </tr>
      <tr>
        <td colspan="2">
          <textarea name="content" id="content" style="width: 100%;height:200px;"></textarea>
        </td>
      </tr>
      <tr>
        <td align="center" colspan="2">
          <input type="submit" value="保存添加"/>
        </td>
      </tr>
    </table>
  </form>
</body>
</html>