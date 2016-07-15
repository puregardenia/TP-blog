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
  <form action="<?php echo U('Admin/MsgManage/modifyBlog');?>" method='post'>
    <table class="table">
      <input type="hidden" name="id" value="<?php echo ($blog["id"]); ?>">
      <tr>
        <th colspan="2">博文发布</th>
      </tr>
      <tr>
        <td>
          <div align="right">点击次数：</div>
          <td><input type="text" name='click' value="<?php echo ($blog[click]); ?>"></td>
        </td>
      </tr>
      <tr>
        <td align="right">标题：</td>
        <td>
          <input type="text" name='title' value="<?php echo ($blog["title"]); ?>">
        </td>
      </tr>
      <tr>
        <td align="right">摘要：</td>
        <td>
          <input type="text" name="summary" value="<?php echo ($blog["summary"]); ?>" />
        </td>
      </tr>
      <tr>
        <td colspan="2">
          <textarea name="content" id="content" style="width: 100%;height:200px;"><?php echo ($blog["content"]); ?></textarea>
        </td>
      </tr>
      <tr>
        <td align="center" colspan="2">
          <input type="submit" value="修改"/>
        </td>
      </tr>
    </table>
  </form>
</body>
</html>