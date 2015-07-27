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
					<li><a href="<?php echo U('SystemSetting/organizationSystemSetting');?>" class="nav-top-item no-submenu">系统设置</a></li>
				</ul>
			</div>
		</div>
		<div id="main-content">
			<div class="content-box">
				<!-- Start Content Box -->
				<div class="content-box-header">
					<h3>工作动态</h3>
					<ul class="content-box-tabs">
						<li><a href="#tab1" class="default-tab">列表</a></li>
						<!-- href must be unique and match the id of target div -->
						<li><a href="#tab2">添加</a></li>
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
									<th>工作动态标题</th>
									<th>工作动态发布人</th>
									<th>工作动态发布时间</th>
									<th>工作动态浏览量</th>
									<th>操作</th>
								</tr>
							</thead>
							<tfoot>
								<tr>
									<td colspan="6">
										<div class="bulk-actions align-left">
											<a class="button" onclick="deleteMulti()">删除选中</a>
										</div>
										<div class="pagination"><?php echo ($page); ?></div> <!-- End .pagination -->
										<div class="clear"></div>
									</td>
								</tr>
							</tfoot>
							<tbody>
								<?php if(is_array($list)): foreach($list as $key=>$item): ?><tr>
									<td><input type="checkbox" name='checkboxscut'
										id='<?php echo ($item[worktendencyid]); ?>' /></td>
									<td><?php echo ($item[worktendencytitle]); ?></td>
									<td><?php echo ($item[worktendencyreleaseid]); ?></td>
									<td><?php echo ($item[worktendencyreleasedate]); ?></td>
									<td><?php echo ($item[worktendencypageview]); ?></td>
									<td><a href="<?php echo U('WorkTendency/editWorkTendency','worktendencyid=' . $item[worktendencyid]);?>" title="Edit" target="_blank"><img
											src="/LNZM/Public/resources/images/icons/pencil.png" alt="编辑" /></a>
										<a
										href="<?php echo U('WorkTendency/allPage','delete=' . $item[worktendencyid]);?>"
										title="Delete"><img
											src="/LNZM/Public/resources/images/icons/cross.png"
											onclick="javascript:return confirm('确定要删除吗?');" alt="删除" /></a></td>
								</tr><?php endforeach; endif; ?>

							</tbody>
						</table>
					</div>
					<!-- End #tab1 -->
					<div class="tab-content" id="tab2">
						<form action="<?php echo U('WorkTendency/addWorkTendency');?>" method="post">
							<fieldset>
								<!-- Set class to "column-left" or "column-right" on fieldsets to divide the form into columns -->
								<p>
									<label>工作动态标题</label> <input
										class="text-input medium-input datepicker" type="text"
										id="medium-input" name="workTendencyTitle" /> <br />
								</p>
								<p>
									<label>工作动态发布人</label> <input
										class="text-input medium-input datepicker" type="text"
										id="medium-input" name="workTendencyReleaseId" /> <br />
								</p>
								<p>
									<label>工作动态发布时间</label> <input
										class="text-input medium-input datepicker" type="text"
										id="medium-input" name="workTendencyReleaseDate" /> <br />
								</p>
								<p>
									<label>工作动态内容</label>
									<div style='height: 600px'><?php echo ($editorHtml); ?></div>
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
	function deleteMulti() {
		if (confirm('确定要删除吗?')) {
			var id = document.getElementsByName('checkboxscut');
			var value = new Array();
			for (var i = 0; i < id.length; i++) {
				if (id[i].checked)
					value.push(id[i].id);
			}
			//alert(value.toString());
			window.location = "<?php echo U('WorkTendency/allPage','deleteMulti=-1');?>"
					+ "," + value.toString();
		}
	}
</script>