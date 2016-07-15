<?php
Class MsgManageAction extends CommonAction{

  // 查看所有新闻
  Public function index(){

    import('ORG.Util.Page');

    $count = M('blog')->count();

    $page = new Page($count,10);
    $limit = $page->firstRow.','.$page->listRows;

    $blogList=M('blog')->order('time Desc')->limit($limit)->select();

    $this->blogList = $blogList;
    $this->page = $page->show();
    $this->display();
  }

  // 删除新闻
  Public function delete(){
    $id = I('id','','intval');

    if(M('blog')->delete($id)){
      $this->success('删除成功',U('Admin/MsgManage/index'));
    }else{
      $this->error('删除失败');
    }
  }

  // 增加新闻(显示页)
  Public function add(){
    $this->display();
  }

  // 增加新闻表单处理
  Public function addBlog(){

    $data = array(
      'title' => $_POST['title'],
      'summary' =>$_POST['summary'],
      'content' =>$_POST['content'],
      'time' => time(),
      'click' => (int)$_POST['click']
      );

    if ($bid = M('blog')->add($data)) {
      $this->success('发表成功',U('Admin/MsgManage/add'));
    }else{
      $this->error('发表失败');
    }
  }

  // 修改新闻
  Public function modify(){
    $id = I('id','','intval');
    // p($id);
    // die;
    $blog = M('blog')->where('id='.$id)->select();
    // p($blog);      // 二维数组
    $this->blog = $blog[0];
    $this->display();
  }

  // 修改新闻表单处理
  Public function modifyBlog(){
    // p($_POST);
    // die;

    $id = $_POST['id'];

    $data = array(
      'title' => $_POST['title'],
      'summary' =>$_POST['summary'],
      'content' =>$_POST['content'],
      'time' => time(),
      'click' => (int)$_POST['click']
      );

    if ($bid = M('blog')->where('id='.$id)->save($data)) {
      $this->success('修改成功',U('Admin/MsgManage/index'));
    }else{
      $this->error('修改失败');
    }
  }


}
?>