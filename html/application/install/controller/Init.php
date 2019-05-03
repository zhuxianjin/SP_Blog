<?php

namespace app\install\controller;

use think\Controller;
use think\db;

class Init extends Controller
{
    //初始化数据库
    public function _empty()
    {
      if (empty($_POST['submit']))
      {
        //return Db::hostname;//var_dump(db('user')->where('id',1)->find());
        $this->assign('msg','Where are you from ? You shout choose first.');
        return $this->fetch();
      }

      echo '准备初始化数据库<br>';      

      $host = "10.3.0.6";
      $user = "root";
      $password = "toor";

      $admin_name = "admin";
      $admin_email = "admin@admin.com";
      $admin_passwd = sha1("admin");

      $sql = mysqli_connect($host,$user,$password);

      if (!$sql) {
        $this->assign('msg','连接数据库失败');
        return $this->fetch();
      }else
      {
        //$this->assign('msg','连接数据库成功');
        //return $this->fetch();
      
      if (mysqli_query($sql,"use SP_Blog") === false && mysqli_query($sql,"CREATE DATABASE SP_Blog"))
        {
          mysqli_select_db($sql,'SP_Blog');
          $sql_user = "create table user (
               id int unsigned NOT NULL auto_increment,
               username varchar(30),
               email varchar(50),
               passwd varchar(100),
               PRIMARY KEY(`id`)
             )";
          $sql_article = "create table article (
              id int unsigned NOT NULL auto_increment,
              title varchar(50) NOT NULL,
              author varchar(50) NOT NULL,
              digest varchar(200) NOT NULL,
              content text ,
              posttime varchar(20) NOT NULL,
              updatetime varchar(20) NOT NULL,
              click int NOT NULL,
              tags varchar(10) NOT NULL,
              PRIMARY KEY(`id`)
            )";

          $sql_create_admin = "insert into user values(null,'$admin_name','$admin_email','$admin_passwd')";

        mysqli_query($sql,$sql_user);
        mysqli_query($sql,$sql_article);
        mysqli_query($sql,$sql_create_admin);

        $this->assign("msg","数据库 SP_Blog 初始化成功");
        mysqli_close($sql);
        return $this->fetch();
  
      }
      else
      {
        $this->assign("msg","数据库 SP_Blog 已存在");
        mysqli_close($sql);
        return $this->fetch();  
      }

      }              
    }
    
}
