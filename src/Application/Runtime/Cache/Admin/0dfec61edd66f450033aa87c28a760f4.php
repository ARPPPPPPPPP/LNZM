<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN""http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title><?php echo ($APPLICATION_NAME); ?>系统后台</title>
<!--                       CSS                       -->
<!-- Reset Stylesheet -->
<link rel="stylesheet" type="text/css" href="/LNZM/Public/resources/css/reset.css" />
<!-- Main Stylesheet -->
<link rel="stylesheet" type="text/css" href="/LNZM/Public/resources/css/style.css" />
<!-- Invalid Stylesheet. This makes stuff look pretty. Remove it if you want the CSS completely valid -->
<link rel="stylesheet" type="text/css" href="/LNZM/Public/resources/css/invalid.css" />
<!--                       Javascripts                       -->
<!-- jQuery -->
<script type="text/javascript" src="/LNZM/Public/resources/scripts/jquery-1.3.2.min.js"></script>
<!-- jQuery Configuration -->
<script type="text/javascript" src="/LNZM/Public/resources/scripts/simpla.jquery.configuration.js"></script>
<!-- Facebox jQuery Plugin -->
<script type="text/javascript" src="/LNZM/Public/resources/scripts/facebox.js"></script>
<!-- jQuery WYSIWYG Plugin -->
<script type="text/javascript" src="/LNZM/Public/resources/scripts/jquery.wysiwyg.js"></script>
</head>
<body id="login">
	<div id="login-wrapper" class="png_bg">
		<div id="login-top">
			<h1><?php echo ($APPLICATION_NAME); ?>系统后台</h1>
			<!-- Logo (221px width) -->
			<img id="logo" src="/LNZM/Public/resources/images/logo.png"
				alt="<?php echo ($APPLICATION_NAME); ?>系统后台" />
		</div>
		<!-- End #logn-top -->
		<div id="login-content">
			<form action="<?php echo U('Login/loginSubmit');?>" method="POST">
				<p>
					<label>用户名</label> <input class="text-input" type="text"
						name="account" />
				</p>
				<div class="clear"></div>
				<p>
					<label>密码</label> <input class="text-input" type="password"
						name="password" />
				</p>
				<div class="clear"></div>
				<!-- 
				<p id="remember-password">
					<input type="checkbox" /> 记住登录
				</p> 
				-->
				<div class="clear"></div>
				<p>
					<input class="button" type="submit" value="登录" />
				</p>
			</form>
		</div>
		<!-- End #login-content -->
	</div>
	<!-- End #login-wrapper -->
</body>
</html>