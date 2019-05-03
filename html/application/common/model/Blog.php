<?php

namespace app\common\model;

use think\Model;
use think\db;

class Blog extends Model
{
    protected $article_table = "article"; //文章数据库表

    public function getAllart() //获取所有文章
    {
        $allArtinfo = Db::table($this->article_table)->order('id desc')->select();
        return $allArtinfo;
    }

    public function getTheart($theArt)
    {
        $artinfo = Db::table($this->article_table)->where('id',(int)$theArt['art'])->find();
        Db::name($this->article_table)->where('id',(int)$theArt['art'])->update(['click'=>$artinfo['click']+1]);
        return $artinfo;
    }
}
