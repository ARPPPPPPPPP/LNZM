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
		<div id="main-content">
			<div class="content-box">
				<!-- Start Content Box -->
				<div class="content-box-header">
					<h3>系统设置:人员设置</h3>
					<ul class="content-box-tabs">
						<li><a href="#tab1" class="default-tab">当前设置</a></li>
						<!-- href must be unique and match the id of target div -->
						<li><a href="#tab2">添加人员</a></li>
					</ul>
					<div class="clear"></div>
				</div>
				<!-- End .content-box-header -->
				<div class="content-box-content">
					<div class="tab-content default-tab" id="tab1">

						<table>
							<thead>
								<tr>
									<th><input class="check-all" type="checkbox" /></th>
									<th>昵称</th>
									<th>账号</th>
									<th>用户权限等级</th>
									<th>学院</th>
									<th>支部</th>
									<th>操作</th>
								</tr>
							</thead>
							<tfoot>
								<tr>
									<td colspan="7">
										<div class="bulk-actions align-left">
											<a class="button" onclick="deleteUserMulti()">删除选中</a>
										</div>
										<div class="pagination"><?php echo ($pageUser); ?></div> <!-- End .pagination -->
										<div class="clear"></div>
									</td>
								</tr>
							</tfoot>
							<tbody>
								<?php if(is_array($listUser)): foreach($listUser as $key=>$itemUser): ?><tr>
									<td><input type="checkbox" name='checkboxuser'
										id='<?php echo ($itemUser[userid]); ?>' /></td>
									<td><?php echo ($itemUser[usernickname]); ?></td>
									<td><?php echo ($itemUser[useraccount]); ?></td>
									<td><?php if($itemUser[userlevel] == 1): ?>组织部 <?php elseif($itemUser[userlevel] == 11): ?> 学院 <?php else: ?> 支部<?php endif; ?></td>
									<td><?php echo ($itemUser[useracademy]); ?></td>
									<td><?php echo ($itemUser[userbranch]); ?></td>
									<td><a
										href="<?php echo U('SystemSetting/editUser','userid=' . $itemUser[userid]);?>"
										title="Edit" target="_blank"><img
											src="/LNZM/Public/resources/images/icons/pencil.png" alt="编辑" /></a>
										<a
										href="<?php echo U('SystemSetting/accountSetting','deleteUser=' . $itemUser[userid]);?>"
										title="Delete"><img
											src="/LNZM/Public/resources/images/icons/cross.png"
											onclick="javascript:return confirm('确定要删除吗?');" alt="删除" /></a></td>
								</tr><?php endforeach; endif; ?>

							</tbody>
						</table>
					</div>
					<!-- End #tab1 -->
					<div class="tab-content" id="tab2">
						<form action="<?php echo U('SystemSetting/addAccount');?>" method="post">
							<fieldset>
								<!-- Set class to "column-left" or "column-right" on fieldsets to divide the form into columns -->
								<p>
									<label>人员昵称</label> <input
										class="text-input medium-input datepicker" type="text"
										id="medium-input" name="userNickname" /> <br />
								</p>
								<p>
									<label>账号</label> <input
										class="text-input medium-input datepicker" type="text"
										id="medium-input" name="userAccount" /> <br />
								</p>
								<p>
									<label>密码</label> <input
										class="text-input medium-input datepicker" type="text"
										id="medium-input" name="userPassword" /> <br />
								</p>
								<p>
									<label>地址</label> <input
										class="text-input medium-input datepicker" type="text"
										id="medium-input" name="userAddress" /> <br />
								</p>
								<p>
									<label>电话</label> <input
										class="text-input medium-input datepicker" type="text"
										id="medium-input" name="userTelnumber" /> <br />
								</p>
								<p>
									<label>邮箱</label> <input
										class="text-input medium-input datepicker" type="text"
										id="medium-input" name="userMail" /> <br />
								</p>
								<p>
									<label>用户描述</label> <input
										class="text-input medium-input datepicker" type="text"
										id="medium-input" name="userDescription" /> <br />
								</p>
								<p>
									<label>用户权限等级</label> <select name="userLevel"
										class="small-input">
										<?php if(is_array($listUserLevel)): foreach($listUserLevel as $key=>$itemUserLevel): if($itemUserLevel == 1): ?><option value="1" selected="selected">组织部</option>
										<?php elseif($itemUserLevel == 11): ?>
										<option value="11">学院</option>
										<?php else: ?>
										<option value="21">支部</option><?php endif; endforeach; endif; ?>
									</select> <br />
								</p>
								<p>
									<label>学院</label> <select name="userAcademy"
										class="small-input">
										<?php if(is_array($listAllAcademy)): foreach($listAllAcademy as $key=>$itemAcademy): ?><option value="<?php echo ($itemAcademy[academyid]); ?>"><?php echo ($itemAcademy[academyname]); ?></option><?php endforeach; endif; ?>
									</select> <br />
								</p>
								<p>
									<label>支部</label> <select name="userBranch" class="small-input">
										<?php if(is_array($listAllBranch)): foreach($listAllBranch as $key=>$itemBranch): ?><option value="<?php echo ($itemBranch[branchid]); ?>"><?php echo ($itemBranch[branchname]); ?></option><?php endforeach; endif; ?>
									</select> <br />
								</p>
								<p>
									<input class="button" type="submit" value="确定" />
								</p>
							</fieldset>
							<div class="clear"></div>
							<!-- End .clear -->
						</form>
					</div>
					<!-- End #tab2 -->
				</div>
				<!-- End .content-box-content -->
			</div>

		</div>
	</div>
</body>
</html>
<script type="text/javascript">
	function deleteUserMulti() {
		if (confirm('确定要删除吗?')) {
			var id = document.getElementsByName('checkboxuser');
			var value = new Array();
			for (var i = 0; i < id.length; i++) {
				if (id[i].checked)
					value.push(id[i].id);
			}
			//alert(value.toString());
			window.location = "<?php echo U('SystemSetting/accountSetting','deleteUserMulti=-1');?>"
					+ "," + value.toString();
		}
	}
</script>