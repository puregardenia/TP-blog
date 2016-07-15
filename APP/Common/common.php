<?php
  /**
   * 打印函数
   * @param  [type] $array [description]
   * @return [type]        [description]
   */
  function p($array){
    dump($array,1,'<pre>',0);
  }
  /**
   * 发布内容表情替换
   * @param  [type] $content [description]
   * @return [type]          [description]
   */
  function replace_phiz($content){
    preg_match_all('/\[.*?\]/is', $content, $arr);

    if ($arr[0]) {
      $phiz = F('phiz','','./Data/');
      foreach ($arr[0] as $v) {
        foreach ($phiz as $key => $value) {
          if ($v =='['.$value.']') {
            $content=str_replace($v,'<img src="'.__ROOT__.'/Public/Images/phiz/'.$key.'.gif"/>',$content);
            break;
          }
        }
      }
    }
    return $content;

    //thinkphp读写配置文件
    /*
    //写文件
    $phiz=array(
          'zhuakuang' => '抓狂',
          'baobao' => '抱抱',
          'haixiu' => '害羞',
          'ku' => '酷',
          'xixi' => '嘻嘻',
          'taikaixin' => '太开心',
          'touxiao' => '偷笑',
          'qian' => '钱',
          'huaxin' => '花心',
          'jiyan' => '挤眼'
      );
    F('phiz',$phiz,'./Data/');
    */
  }
?>