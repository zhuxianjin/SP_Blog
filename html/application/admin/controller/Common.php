<?php

namespace app\admin\controller;

use think\Controller;
use think\Request;

class Common extends Controller
{
    public function __construct()
    {
        parent::__construct(); //父类
        //验证登录
        if (!session('admin.username'))
        {
            $this->redirect('login/');
        }
    }
}
