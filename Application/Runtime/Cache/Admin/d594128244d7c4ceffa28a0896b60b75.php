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
			<div id="sidebar">
				<?php if($USER_LEVEL < 10): ?><!-- 最高权限 -->
<div id="sidebar-wrapper">
	<!-- Logo (221px wide) -->
	<img id="logo" src="/LNZM/Public/resources/images/logo.png"
		alt="<?php echo ($APPLICATION_NAME); ?>系统后台" />
	<!-- Sidebar Profile links -->
	<div id="profile-links">
		您好, <a href="<?php echo U('User/userSetting','userid=' . $USER_ID);?>"
			title="Edit your profile"><?php echo session('userAccount');?> ! </a><br /> <br />
		<a href="<?php echo U('User/userSetting','userid=' . $USER_ID);?>"
			title="View the Site">个人信息设置</a> | <a href="<?php echo U('Login/logout');?>"
			title="Sign Out">登出</a>
	</div>
	<ul id="main-nav">
		<li><a href="<?php echo U('WorkTendency/allPage');?>"<?php if($CURRENT_MENU == 'WORKTENDENCY'): ?>class="nav-top-item no-submenu current" <?php else: ?>
				class="nav-top-item no-submenu"<?php endif; ?>>工作动态</a></li>

		<li><a href="#"<?php if($CURRENT_MENU == '专题建设'): ?>class="nav-top-item no-submenu current" <?php else: ?>
				class="nav-top-item no-submenu"<?php endif; ?>>专题建设</a>
			<ul>
				<li><a href="#">在这里感悟爱国</a></li>
				<li><a href="#">在这里领悟创新</a></li>
				<li><a href="#">在这里追求富强</a></li>
				<li><a href="#">在这里勇于担当</a></li>
			</ul></li>
		<li><a href="#"<?php if($CURRENT_MENU == '通知公告'): ?>class="nav-top-item no-submenu current" <?php else: ?>
				class="nav-top-item no-submenu"<?php endif; ?>>通知公告</a></li>
		<li><a href="#"<?php if($CURRENT_MENU == '活动实践'): ?>class="nav-top-item no-submenu current" <?php else: ?>
				class="nav-top-item no-submenu"<?php endif; ?>>活动实践</a></li>
		<li><a href="#"<?php if($CURRENT_MENU == '支部风采'): ?>class="nav-top-item no-submenu current" <?php else: ?>
				class="nav-top-item no-submenu"<?php endif; ?>>支部风采</a></li>
		<li><a href="<?php echo U('User/userSetting','userid=' . $USER_ID);?>"<?php if($CURRENT_MENU == 'USER'): ?>class="nav-top-item
				no-submenu current" <?php else: ?> class="nav-top-item no-submenu"<?php endif; ?>>个人设置</a></li>
		<li><a href="#"<?php if(($CURRENT_MENU == 'ACADEMYBRANCHSETTING') OR ($CURRENT_MENU == 'ACCOUNTSETTING')): ?>class="nav-top-item no-submenu current" <?php else: ?>
				class="nav-top-item no-submenu"<?php endif; ?>>系统设置</a>
			<ul>
				<li><a href="<?php echo U('SystemSetting/organizationSystemSetting');?>"<?php if($CURRENT_MENU == 'ACADEMYBRANCHSETTING'): ?>class="current" <?php else: ?> class=""<?php endif; ?>>学院支部设置</a></li>
				<li><a href="<?php echo U('SystemSetting/accountSetting');?>"<?php if($CURRENT_MENU == 'ACCOUNTSETTING'): ?>class="current" <?php else: ?> class=""<?php endif; ?>>人员设置</a></li>
			</ul></li>
	</ul>
</div>
<?php elseif(($USER_LEVEL > 10) AND ($USER_LEVEL < 20)): ?> <!-- 学院权限 -->
学院菜单 <?php else: ?> <!-- 支部权限 --> 支部菜单<?php endif; ?>

			</div>
		</div>
		<!-- End #sidebar -->

	</div>
</body>
</html>