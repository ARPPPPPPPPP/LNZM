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
						class="nav-top-item no-submenu">工作动态</a></li>
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
					<li><a href="#" class="nav-top-item no-submenu current">系统设置</a></li>
				</ul>
			</div>
		</div>
		<div id="main-content">
			<div class="content-box">
				<!-- Start Content Box -->
				<div class="content-box-header">
					<h3>系统设置:学院</h3>
					<ul class="content-box-tabs">
						<li><a href="#tab1" class="default-tab">当前设置</a></li>
						<!-- href must be unique and match the id of target div -->
						<li><a href="#tab2">添加学院</a></li>
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
									<th>学院名称</th>
									<th>学院描述</th>
									<th>操作</th>
								</tr>
							</thead>
							<tfoot>
								<tr>
									<td colspan="4">
										<div class="bulk-actions align-left">
											<a class="button" onclick="deleteAcademyMulti()">删除选中</a>
										</div>
										<div class="pagination"><?php echo ($pageAcademy); ?></div> <!-- End .pagination -->
										<div class="clear"></div>
									</td>
								</tr>
							</tfoot>
							<tbody>
								<?php if(is_array($listAcademy)): foreach($listAcademy as $key=>$itemAcademy): ?><tr>
									<td><input type="checkbox" name='checkboxacademy'
										id='<?php echo ($itemAcademy[academyid]); ?>' /></td>
									<td><?php echo ($itemAcademy[academyname]); ?></td>
									<td><?php echo ($itemAcademy[academydescription]); ?></td>
									<td><a
										href="<?php echo U('SystemSetting/editAcademy','academyid=' . $itemAcademy[academyid]);?>"
										title="Edit" target="_blank"><img
											src="/LNZM/Public/resources/images/icons/pencil.png" alt="编辑" /></a>
										<a
										href="<?php echo U('SystemSetting/organizationSystemSetting','deleteAcademy=' . $itemAcademy[academyid]);?>"
										title="Delete"><img
											src="/LNZM/Public/resources/images/icons/cross.png"
											onclick="javascript:return confirm('确定要删除吗?');" alt="删除" /></a></td>
								</tr><?php endforeach; endif; ?>

							</tbody>
						</table>
					</div>
					<!-- End #tab1 -->
					<div class="tab-content" id="tab2">
						<form action="<?php echo U('SystemSetting/addAcademy');?>" method="post">
							<fieldset>
								<!-- Set class to "column-left" or "column-right" on fieldsets to divide the form into columns -->
								<p>
									<label>学院名称</label> <input
										class="text-input medium-input datepicker" type="text"
										id="medium-input" name="academyName" /> <br />
								</p>
								<p>
									<label>学院描述</label> <input
										class="text-input medium-input datepicker" type="text"
										id="medium-input" name="academyDescription" /> <br />
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
			<div class="content-box">
				<!-- Start Content Box -->
				<div class="content-box-header">
					<h3>系统设置:支部</h3>
					<ul class="content-box-tabs">
						<li><a href="#tab3" class="default-tab">当前设置</a></li>
						<!-- href must be unique and match the id of target div -->
						<li><a href="#tab4">添加支部</a></li>
					</ul>
					<div class="clear"></div>
				</div>
				<!-- End .content-box-header -->
				<div class="content-box-content">
					<div class="tab-content default-tab" id="tab3">

						<table>
							<thead>
								<tr>
									<th><input class="check-all" type="checkbox" /></th>
									<th>支部名称</th>
									<th>学院</th>
									<th>操作</th>
								</tr>
							</thead>
							<tfoot>
								<tr>
									<td colspan="4">
										<div class="bulk-actions align-left">
											<a class="button" onclick="deleteBranchMulti()">删除选中</a>
										</div>
										<div class="pagination"><?php echo ($pageBranch); ?></div> <!-- End .pagination -->
										<div class="clear"></div>
									</td>
								</tr>
							</tfoot>
							<tbody>
								<?php if(is_array($listBranch)): foreach($listBranch as $key=>$itemBranch): ?><tr>
									<td><input type="checkbox" name='checkboxbranch'
										id='<?php echo ($itemBranch[branchid]); ?>' /></td>
									<td><?php echo ($itemBranch[branchname]); ?></td>
									<td><?php echo ($itemBranch[branchacademy]); ?></td>
									<td><a
										href="<?php echo U('SystemSetting/editBranch','branchid=' . $itemBranch[branchid]);?>"
										title="Edit" target="_blank"><img
											src="/LNZM/Public/resources/images/icons/pencil.png" alt="编辑" /></a>
										<a
										href="<?php echo U('SystemSetting/organizationSystemSetting','deleteBranch=' . $itemBranch[branchid]);?>"
										title="Delete"><img
											src="/LNZM/Public/resources/images/icons/cross.png"
											onclick="javascript:return confirm('确定要删除吗?');" alt="删除" /></a></td>
								</tr><?php endforeach; endif; ?>

							</tbody>
						</table>
					</div>
					<!-- End #tab3 -->
					<div class="tab-content" id="tab4">
						<form action="<?php echo U('SystemSetting/addBranch');?>" method="post">
							<fieldset>
								<!-- Set class to "column-left" or "column-right" on fieldsets to divide the form into columns -->
								<p>
									<label>支部名称</label> <input
										class="text-input medium-input datepicker" type="text"
										id="medium-input" name="branchName" /> <br />
								</p>
								<p>
									<label>支部描述</label> <input
										class="text-input medium-input datepicker" type="text"
										id="medium-input" name="branchDescription" /> <br />
								</p>
								<p>
									<label>学院</label> <select name="branchAcademy"
										class="small-input">
										<?php if(is_array($listAcademy)): foreach($listAcademy as $key=>$itemAcademy): ?><option value="<?php echo ($itemAcademy[academyid]); ?>"><?php echo ($itemAcademy[academyname]); ?></option><?php endforeach; endif; ?>
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
					<!-- End #tab4 -->
				</div>
				<!-- End .content-box-content -->
			</div>
		</div>
	</div>
</body>
</html>
<script type="text/javascript">
	function deleteAcademyMulti() {
		if (confirm('确定要删除吗?')) {
			var id = document.getElementsByName('checkboxacademy');
			var value = new Array();
			for (var i = 0; i < id.length; i++) {
				if (id[i].checked)
					value.push(id[i].id);
			}
			//alert(value.toString());
			window.location = "<?php echo U('SystemSetting/organizationSystemSetting','deleteAcademyMulti=-1');?>"
					+ "," + value.toString();
		}
	}
	
	function deleteBranchMulti() {
		if (confirm('确定要删除吗?')) {
			var id = document.getElementsByName('checkboxbranch');
			var value = new Array();
			for (var i = 0; i < id.length; i++) {
				if (id[i].checked)
					value.push(id[i].id);
			}
			//alert(value.toString());
			window.location = "<?php echo U('SystemSetting/organizationSystemSetting','deleteBranchMulti=-1');?>"
					+ "," + value.toString();
		}
	}
</script>