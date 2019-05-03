<?php

namespace app\admin\controller;

use think\Controller;
use think\facade\Request;
use app\common\model\Admin; //使用Admin模型

class Index extends Common
{
    //
    public function _empty()
    {
        $art_list = (new Admin())->getAllart(); //获取所有文章

        $this->assign('content_title','管理主页');
        $this->assign('art_list',$art_list);
        return $this->fetch();
    }
}
