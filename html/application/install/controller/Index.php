<?php

namespace app\install\controller;

use think\Controller;

class Index extends Controller
{
    //安装面板
    public function _empty(){
        return $this->fetch();
    }
}
