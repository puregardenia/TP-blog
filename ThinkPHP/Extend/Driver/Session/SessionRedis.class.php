<?php
/**
 * 自定义REDIS 处理SESSION驱动
 */
Class SessionRedis{

  //REDIS连接对象
  Private $redis;

  //SESSION有效时间
  Private $expire;

  Public function execute(){
    session_set_save_handler(
      array(&$this,'open'),
      array(&$this,'close'),
      array(&$this,'read'),
      array(&$this,'write'),
      array(&$this,'destroy'),
      //不能多逗号
      array(&$this,'gc')
      );
  }

  /**
   * 打开
   * @param  [type] $path [description]
   * @param  [type] $name [description]
   * @return [type]       [description]
   */
  Public function open($path,$name){
    $this->expire = C('SESSION_EXPIRE') ? C('SESSION_EXPIRE') : ini_get('session.gc_maxlifetime');
    $this->redis = new Redis();
    return $this->redis->connect(C('REDIS_HOST'),C('REDIS_PORT'));
  }

  Public function close(){
    return $this->redis->close();
  }

  Public function read($id){
    $id = C('SESSION_PREFIX').$id;
    $data = $this->redis->get($id);
    return $data?$data:'';
  }

  /**
   * 写入
   * @param  [type] $id   [description]
   * @param  [type] $data [description]
   * @return [type]       [description]
   */
  Public function write($id,$data){
    $id = C('SESSION_PREFIX').$id;
    return $this->redis->set($id,$data,$this->expire);
  }

  /**
   * 销毁SESSION
   * @param  [type] $id [description]
   * @return [type]     [description]
   */
  Public function destroy($id){
    $id = C('SESSION_PREFIX').$id;
    return $this->redis->delete($id);
  }

  Public function gc($maxlifetime){
    return true;
  }
}
?>