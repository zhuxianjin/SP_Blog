<?php

namespace app\admin\controller;

use think\Controller;
use app\common\model\Admin; //使用Admin模型

class Writer extends Common
{
    //写文章
    public function _empty()    //默认为写文章
    {
        $this->assign('content_title','写文章');
        return $this->fetch();
    }
    public function list()  //列出文章
    {
        $art_list = (new Admin())->getAllart(); //获取所有文章

        $this->assign('content_title','所有文章');
        $this->assign('art_list',$art_list);
        return $this->fetch("list");
    }
    public function md2ml() //markdown to html 测试页面
    {
        return $this->fetch('md2ml');
    }
    public function addarticle()    //添加文章控制器函数
    {
        if(Request()->isPost())
        {
            $res = ((new Admin())->addarticle(input('post.'))); //将POST数据交给Admin模型处理
            if (!$res)
            {
                $this->assign('content_title','写文章');
                return $this->fetch('index');
            }
            else{
                $this->redirect('../admin');
            }
        }
    }
}
