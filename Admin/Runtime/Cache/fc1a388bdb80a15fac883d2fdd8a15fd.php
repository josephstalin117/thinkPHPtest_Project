<?php if (!defined('THINK_PATH')) exit();?><!--
To change this template, choose Tools | Templates
and open the template in the editor.
-->
<!DOCTYPE html>
<html lang="en">
    <head>
        <title></title>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
         <link href="__PUBLIC__/css/bootstrap.min.css" rel="stylesheet">
         <link href="__PUBLIC__/css/bootstrap-responsive.min.css" rel="stylesheet">
            <script src="__PUBLIC__/js/jquery.min.js"></script>
            <script src="__PUBLIC__/js/bootstrap.min.js"></script>
            <style type="text/css">
      body {
        padding-top: 40px;
        padding-bottom: 40px;
        background-color: #f5f5f5;
      }

      .form-signin {
        max-width: 300px;
        padding: 19px 29px 29px;
        margin: 0 auto 20px;
        background-color: #fff;
        border: 1px solid #e5e5e5;
        -webkit-border-radius: 5px;
           -moz-border-radius: 5px;
                border-radius: 5px;
        -webkit-box-shadow: 0 1px 2px rgba(0,0,0,.05);
           -moz-box-shadow: 0 1px 2px rgba(0,0,0,.05);
                box-shadow: 0 1px 2px rgba(0,0,0,.05);
      }
      .form-signin .form-signin-heading,
      .form-signin .checkbox {
        margin-bottom: 10px;
      }
      .form-signin input[type="text"],
      .form-signin input[type="password"] {
        font-size: 16px;
        height: auto;
        margin-bottom: 15px;
        padding: 7px 9px;
      }

    </style>
    </head>
    <body>

        <div class="container">
        	<form class="form-horizontal" action="<?php echo U('Regi/addUser');?>" method="post">
        	<div class="control-group offset1">
        		<h1>registered</h1>
        	</div>
  				<div class="control-group">
    				<label class="control-label" for="inputEmail">Email</label>
    					<div class="controls">
      						<input type="text" id="inputEmail" placeholder="Email" name="username">
    					</div>
  				</div>
  				<div class="control-group">
    				<label class="control-label" for="inputPassword">Password</label>
    					<div class="controls">
      						<input type="password" id="inputPassword" placeholder="Password" name="password">
      					</div>
  				</div>
  				<div class="control-group">
    				<div class="controls">
      					<button type="submit" class="btn">Registered</button>
                <a href="<?php echo U('Index/index');?>"><button type="button" class="btn btn-primary">Back</button></a>
    				</div>
  				</div>
			</form>
        </div>
    </body>
</html>