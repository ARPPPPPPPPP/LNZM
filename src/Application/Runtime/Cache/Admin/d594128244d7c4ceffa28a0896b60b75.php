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
<!-- jQuery Datepicker Plugin -->
<script type="text/javascript" src="/LNZM/Public/resources/scripts/jquery.datePicker.js"></script>
<script type="text/javascript" src="/LNZM/Public/resources/scripts/jquery.date.js"></script>
</head>
<body>
	<div id="body-wrapper">
		<!-- Wrapper for the radial gradient background -->
		<div id="sidebar">
			<div id="sidebar-wrapper">
				<!-- Logo (221px wide) -->
				<img id="logo" src="/LNZM/Public/resources/images/logo.png"
					alt="<?php echo ($APPLICATION_NAME); ?>系统后台" />
				<!-- Sidebar Profile links -->
				<div id="profile-links">
					您好, <a href="<?php echo U('User/userSetting');?>" title="Edit your profile"><?php echo session('userAccount');?>
						! </a><br /> <br /> <a href="<?php echo U('User/userSetting');?>"
						title="View the Site">个人信息设置</a> | <a href="<?php echo U('Login/logout');?>"
						title="Sign Out">登出</a>
				</div>
				<ul id="main-nav">
					<li><a href="<?php echo U('WorkTendency/allPage');?>"
						class="nav-top-item no-submenu current">工作动态</a></li>
					<li><a href="#" class="nav-top-item">专题建设</a>
						<ul>
							<li><a href="#">在这里感悟爱国</a></li>
							<li><a href="#">在这里领悟创新</a></li>
							<li><a href="#">在这里追求富强</a></li>
							<li><a href="#">在这里勇于担当</a></li>
						</ul></li>
					<li><a href="#" class="nav-top-item no-submenu">通知公告</a></li>
					<li><a href="#" class="nav-top-item no-submenu">活动实践</a></li>
					<li><a href="#" class="nav-top-item no-submenu">支部风采</a></li>
					<li><a href="#" class="nav-top-item no-submenu">系统设置</a></li>
				</ul>
			</div>
		</div>
		<!-- End #sidebar -->

	</div>
</body>
</html>