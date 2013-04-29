<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>
            JosephStalin
        </title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="">
        <meta name="author" content=""><!-- Le styles -->
        <link href="__PUBLIC__/css/bootstrap.min.css" rel="stylesheet" type="text/css">
        <style type="text/css">
        body {
        padding-top: 60px; /* 60px to make the container go all the way to the bottom of the topbar */
        }
        </style>
        <link href="__PUBLIC__/css/bootstrap-responsive.min.css" rel="stylesheet" type="text/css"><!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
        <!--[if lt IE 9]>
      <script src="//cdnjs.bootcss.com/ajax/libs/html5shiv/3.6.2/html5shiv.js"></script>
    <![endif]-->
        <!-- Fav and touch icons -->
    </head>
    <body>
        <div class="navbar navbar-inverse navbar-fixed-top">
            <div class="navbar-inner">
                <div class="container">
                    <a class="brand" href="#">Blog</a>
                    <div class="nav-collapse collapse">
                        <ul class="nav">
                            <li class="active">
                                <a href="#">Home</a>
                            </li>
                            <li>
                                <a href="<?php echo U('Arti/arti');?>">Article</a>
                            </li>
                            <li>
                                <a href="<?php echo U('Login/loginOut');?>">SignOut</a>
                            </li>
                        </ul>
                    </div><!--/.nav-collapse -->
                </div>
            </div>
        </div>
        <div class="container">
            <div class="hero-unit">
                <div class="row">
                    <h2>
                        <?php echo ($vo['title']); ?>
                    </h2>
                </div>
                <div class="row">
                    <p>
                        <?php echo ($vo['content']); ?>
                    </p>
                </div>
            </div>
            <p>
                Welcome <?php echo ($vn['username']); ?><br>
                This is your Blog
            </p>
        </div><!-- /container -->
        <!-- Le javascript
    ================================================== -->
        <!-- Placed at the end of the document so the pages load faster -->
        <script src="__PUBLIC__/js/jquery.min.js" type="text/javascript">
</script><script src="__PUBLIC__/js/bootstrap.min.js" type="text/javascript">
</script>
    </body>
</html>