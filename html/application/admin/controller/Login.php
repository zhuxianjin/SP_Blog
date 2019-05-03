<?php

namespace app\admin\controller;

use think\Controller;
use think\db;
use app\common\model\Admin; //使用Admin模型

class Login extends Controller
{
    //管理员登陆模块
    public function _empty()
    {
        if(Request()->isPost())
        {
            $res = ((new Admin())->login(input('post.'))); //将POST数据交给Admin模型处理
            //return "OK";
            if (!$res)
            {
                $this->assign('msg','邮箱或密码错误');
                return $this->fetch();
            }
            else{
                $this->redirect('/admin');
            }
        }

        $this->assign('msg','');
        return $this->fetch();
    }

    public function logout()
    {
        $res = ((new Admin())->logout()); //将POST数据交给Admin模型处理
        if (!$res)
        {
            $this->assign('content_title','错误');
            $this->assign('msg','退出登录错误');
            return $this->fetch('logout_err');
        }        
        $this->redirect('/admin/login');        
    }

}