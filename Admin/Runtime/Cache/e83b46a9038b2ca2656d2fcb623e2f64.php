<?php if (!defined('THINK_PATH')) exit();?><!--
To change this template, choose Tools | Templates
and open the template in the editor.
-->
<!DOCTYPE html>
<html lang="en">
	<head>
		<title>
			NEW ARTICLE
		</title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
		<link href="__PUBLIC__/css/bootstrap.min.css" rel="stylesheet" type="text/css">
		<link href="__PUBLIC__/css/bootstrap-responsive.min.css" rel="stylesheet" type="text/css">
		<script src="__PUBLIC__/js/jquery.min.js" type="text/javascript">
</script>
		<script src="__PUBLIC__/js/bootstrap.min.js" type="text/javascript">
</script>
		<style type="text/css">
body {
		padding-top: 60px; /* 60px to make the container go all the way to the bottom of the topbar */
		}
		</style>
	</head>
	<body>
		<div class="navbar navbar-inverse navbar-fixed-top">
			<div class="navbar-inner">
				<div class="container">
					<a class="brand" href="#">Blog</a>
					<div class="nav-collapse collapse">
						<ul class="nav">
							<li>
								<a href="<?php echo U('Home/home');?>">Back</a>
							</li>
						</ul>
					</div><!--/.nav-collapse -->
				</div>
			</div>
		</div>
		<div class="container">
			<div class="hero-unit">
				<div class="row">
					<form method="post" action="<?php echo U('Arti/newArti');?>">
						<!-- <fieldset> -->
							<legend>Article</legend> 
							<label>Title</label> 
							<input type="text" placeholder="Title" name="title" value="<?php echo ($vo[title]); ?>">
							 <span class="help-block">Your mind</span> 
							 <textarea rows="3" class="row span4" name="content"><?php echo ($vo[content]); ?></textarea>
							 <div class="">
							 <button type="submit" class="btn-large btn btn-primary offset1">Submit</button>
							</div>
						<!-- </fieldset> -->
					</form>
				</div>
			</div>
			<p>
				Welcome <?php echo ($vn['username']); ?><br>
				This is your Blog
			</p>
		</div>
	</body>
</html>