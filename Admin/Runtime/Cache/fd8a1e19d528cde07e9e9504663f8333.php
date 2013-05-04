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
                                <a href="<?php echo U('Arti/arti');?>">New Article</a>
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
                        Blog List
                    </h2>
                </div>
                <table class="table table-striped">
                <div class="row">
                    <tr>
                        <th>number</th>
                        <th>title</th>
                        <th>delete</th>
                    </tr>
                    <p>
                        <?php if(is_array($list)): $i = 0; $__LIST__ = $list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><tr>
                                <td><strong><?php echo ($i); ?></strong></td>
                                <td><a href="../Arti/showArti?Aid=<?php echo ($vo["Aid"]); ?>"><?php echo ($vo["Title"]); ?></a></td><br/>
                                <td><a href="#myModal" role="button" class="btn btn-danger" data-toggle="modal">Delete</a></td>
                            </tr><?php endforeach; endif; else: echo "" ;endif; ?>
                    </p>
                        
                       
                </div>
                <table class="table table-striped">
            </div>
            <p>
                Welcome <?php echo ($vn['username']); ?><br>
                This is your Blog
            </p>
        </div>
        <div id="myModal" class="modal hide fade">
            <div class="modal-header">
                <h3>warning</h3>
            <div>
            <div class="modal-body">
                <p>Are you sure to delete this article</p>
            </div>
            <div class="modal-footer">
                <a href="<?php echo U('Home/home');?>" class="btn">close</a>
                <a href="../Home/delete?Aid=<?php echo ($vo["Aid"]); ?>" class="btn btn-primary">OK</a>
            </div>
        </div>
        <!-- /container -->
        <!-- Le javascript
    ================================================== -->
        <!-- Placed at the end of the document so the pages load faster -->
        <script src="__PUBLIC__/js/jquery.min.js" type="text/javascript">
</script><script src="__PUBLIC__/js/bootstrap.min.js" type="text/javascript">
</script>
    </body>
</html>