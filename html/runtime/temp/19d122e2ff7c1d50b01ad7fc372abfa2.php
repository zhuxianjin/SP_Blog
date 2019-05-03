<?php /*a:2:{s:85:"/Users/xc/Downloads/ThinkPHP/thinkphp-blog/tp/application/index/view/index/index.html";i:1550161322;s:78:"/Users/xc/Downloads/ThinkPHP/thinkphp-blog/tp/application/index/view/base.html";i:1550161603;}*/ ?>
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
                    

<main class="col-md-8">
        <?php if(is_array($art_list) || $art_list instanceof \think\Collection || $art_list instanceof \think\Paginator): $i = 0; $__LIST__ = $art_list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$art): $mod = ($i % 2 );++$i;?>
        <article class="post post-1">
            <header class="entry-header">
                <h2 class="entry-title">
                    <a href="single.html"><?php echo htmlentities($art['title']); ?></a>
                </h2>
                <div class="entry-meta">
                    <span class="post-category"><a href="#">标签：<?php echo htmlentities($art['tags']); ?></a></span>

                    <span class="post-date"><a href="#"><time class="entry-date" datetime="2012-11-09T23:15:57+00:00">时间：<?php echo htmlentities($art['posttime']); ?></time></a></span>

                    <span class="post-author"><a href="#">作者：<?php echo htmlentities($art['author']); ?></a></span>

                    <span class="click-link"><a href="#">点击数：<?php echo htmlentities($art['click']); ?></a></span>
                </div>
            </header>
            <div class="entry-content clearfix">
                <p><?php echo htmlentities($art['digest']); ?></p>
                <div class="read-more cl-effect-14">
                    <a href="/index/index/view?art=<?php echo htmlentities($art['id']); ?>" class="more-link">阅读更多<span class="meta-nav">→</span></a>
                </div>
            </div>
        </article>

        <?php endforeach; endif; else: echo "" ;endif; ?>

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