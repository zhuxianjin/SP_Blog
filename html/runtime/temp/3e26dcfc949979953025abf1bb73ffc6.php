<?php /*a:2:{s:87:"/Users/xc/Downloads/ThinkPHP/thinkphp-blog/tp/application/index/view/index/article.html";i:1550249908;s:78:"/Users/xc/Downloads/ThinkPHP/thinkphp-blog/tp/application/index/view/base.html";i:1550161603;}*/ ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>主页</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width">

    <link rel="shortcut icon" type="image/ico" href="/static/img/favicon.ico"/>

    <!-- Bootstrap styles -->
    <link rel="stylesheet" href="/static/bloggo/css/bootstrap.min.css">
   
    <!-- Font-Awesome -->
    <link rel="stylesheet" href="/static/bloggo/css/font-awesome/css/font-awesome.min.css">

    <!-- Google Webfonts -->
    <!--<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,600|PT+Serif:400,400italic' rel='stylesheet' type='text/css'>-->
    <link rel="stylesheet" href="/static/css/fontsGoogleapis.css">

    <!-- Styles -->
    <link rel="stylesheet" href="/static/bloggo/css/style.css" id="theme-styles">

    <!--[if lt IE 9]>      
        <script src="js/vendor/google/html5-3.6-respond-1.1.0.min.js"></script>
    <![endif]-->
    
</head>
<body>
    <header>
        <div class="widewrapper masthead">
            <div class="container">
                <a href="index.html" id="logo">
                    <img src="/static/bloggo/img/logo.png" alt="clean Blog">
                </a>

                <div id="mobile-nav-toggle" class="pull-right">
                    <a href="#" data-toggle="collapse" data-target=".clean-nav .navbar-collapse">
                        <i class="fa fa-bars"></i>
                    </a>
                </div>

                <nav class="pull-right clean-nav">
                    <div class="collapse navbar-collapse">
                        <ul class="nav nav-pills navbar-nav">
                          
                            <li>
                                <a href="index.html">主页</a>
                            </li>
                            <li>
                                <a href="about.html">关于</a>
                            </li>
                            <li>
                                <a href="contact.html">联系</a>
                            </li>                        
                        </ul>
                    </div>
                </nav>        

            </div>
        </div>

        <div class="widewrapper subheader">
            <div class="container">
                <div class="clean-breadcrumb">
                    <a href="/">SP_Blog</a>
                </div>

                <div class="clean-searchbox">
                    <form action="#" method="get" accept-charset="utf-8">
                        <input class="searchfield" id="searchbox" type="text" placeholder="Search">
                        <button class="searchbutton" type="submit">
                            <i class="fa fa-search"></i>
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </header>

    <div class="widewrapper main">
        <div class="container">
            <div class="row">
                    

</title> <!--引入样式文件--> 
<link rel="stylesheet" href="/static/editor/css/style.css" /> 
<link rel="stylesheet" href="/static/editor/css/editormd.preview.css" /> 
<!--引入js文件--> <script src="/static/editor/js/jquery.min.js"></script> 
<script src="/static/editor/lib/marked.min.js"></script> 
<script src="/static/editor/lib/prettify.min.js"></script> 
<script src="/static/editor/lib/raphael.min.js"></script> 
<script src="/static/editor/lib/underscore.min.js"></script> 
<script src="/static/editor/lib/sequence-diagram.min.js"></script> 
<script src="/static/editor/lib/flowchart.min.js"></script> 
<script src="/static/editor/lib/jquery.flowchart.min.js"></script> 
<script src="/static/editor/editormd.js"></script> 


<main class="col-md-8">
        
    <div style="display:none">
        <textarea id="demo1" style="width:0px;height:0px;"><?php echo htmlentities($art['content']); ?></textarea>
    </div>

        <div id="testEditorMdview"> 
                <textarea id="appendTest" style="display:none;"></textarea> 
                </div> 

<!--js开始--> 
<script type="text/javascript"> 
    //markDown转HTMl的方法
    (function mdToHml(){

        //先对容器初始化，在需要展示的容器中创建textarea隐藏标签，
        $("#testEditorMdview").html('<textarea id="appendTest" style="display:none;"></textarea>');
        var content=$("#demo1").val();//获取需要转换的内容
        $("#appendTest").val(content);//将需要转换的内容加到转换后展示容器的textarea隐藏标签中

        //转换开始,第一个参数是上面的div的id
        editormd.markdownToHTML("testEditorMdview", {
            htmlDecode: "style,script,iframe", //可以过滤标签解码
            emoji: true,
            taskList:true,
            tex: true,               // 默认不解析
            flowChart:true,         // 默认不解析
            sequenceDiagram:true,  // 默认不解析
        });
    })();
</script> 
<!--改代码源自：https://blog.csdn.net/zhoumengshun/article/details/76019942-->
<!--js结束--> 

    </main>

<!--aside-->
    <aside class="col-md-4 blog-aside">
        
        <div class="aside-widget">
            <header>
                <h3>最新文章</h3>
            </header>
            <div class="body">
                <ul class="clean-list">
                        <?php if(is_array($art_list) || $art_list instanceof \think\Collection || $art_list instanceof \think\Paginator): $i = 0; $__LIST__ = $art_list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$art): $mod = ($i % 2 );++$i;?>
                        <li><a href=""><?php echo htmlentities($art['title']); ?></a></li>
                        <?php endforeach; endif; else: echo "" ;endif; ?>
                </ul>
            </div>
        </div>
    
        <div class="aside-widget">
            <header>
                <h3>文章标签</h3>
            </header>
            <div class="body clearfix">
                <ul class="tags">
                        <?php if(is_array($art_list) || $art_list instanceof \think\Collection || $art_list instanceof \think\Paginator): $i = 0; $__LIST__ = $art_list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$art): $mod = ($i % 2 );++$i;?>
                        <li><a href=""><?php echo htmlentities($art['tags']); ?></a></li>
                        <?php endforeach; endif; else: echo "" ;endif; ?>
                    </ul>
            </div>
        </div>
    </aside>
<!--aside end-->
    
            </div>
        </div>
    </div>

    <footer>
        <div class="widewrapper footer">
            <div class="container">
                <div class="row">
                    <div class="col-md-4 footer-widget">
                        <h3> <i class="fa fa-user"></i>About</h3>

                       <p>欢迎使用 SP_Blog</p>
                       <p>本站用于学习交流，切勿用于商业用途，否则后果自负。</p>
                    </div>

                    <div class="col-md-4 footer-widget">
                        <h3> <i class="fa fa-envelope"></i>联系我</h3>

                        <p>admin@admin.com</p>
                        <p>+86 123******01</p>
                         <div class="footer-widget-icon">
                            <i class="fa fa-facebook"></i><i class="fa fa-twitter"></i><i class="fa fa-google"></i>
                        </div>
                    </div>
                   
                </div>
            </div>
        </div>
        <div class="widewrapper copyright">
                Copyright 2015 More Templates <a href="http://www.cssmoban.com/" target="_blank" title="模板之家">模板之家</a> - Collect from <a href="http://www.cssmoban.com/" title="网页模板" target="_blank">网页模板</a>
        </div>
    </footer>
    
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <script src="/static/bloggo/js/bootstrap.min.js"></script>
    <script src="/static/bloggo/js/modernizr.js"></script>

</body>
</html>