<?php
/**
 * 前端首页控制器
 */
Class IndexAction extends Action{
  /**
   * 首页视图
   * @return [type] [description]
   */
  public function index(){
    $wish = M('wish')->select();
    $this->assign('wish',$wish)->display();
  }
  /**
   * 异步发布处理
   * @return [type] [description]
   */
  public function handle(){
    if(!IS_AJAX) halt('页面不存在');
    // p(I('post.'));
    $data=array(
      'username' => I('username'),
      'content' => I('content'),
      'time' => time()
      );
    // 可以测试js写的是否正确
    // $this->ajaxReturn(array('status'=>0),'json');

    if($id=M('wish')->data($data)->add()){
      $data['id'] =$id;
      $data['content'] = replace_phiz($data['content']);
      $data['time'] =date('Y-m-d H:i',$data['time']);
      $data['status'] =1;
      $this->ajaxReturn($data,'json');
    }else{
      // 常规返回方法
      // echo json_encode(array('status'=>0));
      $this->ajaxReturn(array('status'=>0),'json');
    }




  }
}
?>