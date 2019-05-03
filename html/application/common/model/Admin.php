<?php

namespace app\common\model;

use think\Model;
use think\db;

class Admin extends Model
{
    protected $user_table = "user"; //Admin数据库表名
    protected $article_table = "article"; //文章数据库表

    public function login($data)    //Admin 登录
    {
        $admininfo = Db::table($this->user_table)->where('email',$data['email'])->where('passwd',sha1($data['password']))->find();
        if(!$admininfo)
        {
            return false;
        }
        else{
            session('admin.username',$admininfo['username']);
            return true;
        }
    }

    public function logout()    //Admin 登出
    {
            session('admin.username',null);
            return true;
    }
    
    public function addarticle($art_data)   //添加文章
    {
        $art_title = $art_data['title'];
        $art_author = 'admin';
        $art_digest = $art_data['digest'];
        $art_content = $art_data['editor-doc-md'];
        $art_posttime = date('Y-m-d',time());
        $art_updatetime = date('Y-m-d',time());
        $art_tags = $art_data['tags'];
        $art_click = 0;

        $art_insert_data = ['id'=>null,'title'=>$art_title,'author'=>$art_author,'digest'=>$art_digest,'content'=>$art_content,'posttime'=>$art_posttime,'updatetime'=>$art_updatetime,'click'=>$art_click,'tags'=>$art_tags];
        $resinfo = Db::name($this->article_table)->insert($art_insert_data);
        
        if (!$resinfo)
        {
            return false;
        }
        else
        {
            return true;
        }

    }

    public function getAllart()
    {
        $allArtinfo = Db::table($this->article_table)->order('id desc')->select();
        return $allArtinfo;
    }

}
