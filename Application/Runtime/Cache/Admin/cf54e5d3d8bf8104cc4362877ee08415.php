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
<body style="background-image: none">
	<!-- Wrapper for the radial gradient background -->
	<div id="main-content" style="width: 75%; margin: 0 auto;">
		<div class="content-box">
			<!-- Start Content Box -->
			<div class="content-box-header">
				<h3>支部编辑:<?php echo ($branch['branchname']); ?></h3>
				<ul class="content-box-tabs">
					<li><a href="#tab2">编辑</a></li>
				</ul>
				<div class="clear"></div>
			</div>
			<!-- End .content-box-header -->
			<div class="content-box-content">
				<form
					action="<?php echo U('SystemSetting/editBranchSubmit','branchid=' . $branch['branchid']);?>"
					method="post">
					<fieldset>
						<!-- Set class to "column-left" or "column-right" on fieldsets to divide the form into columns -->
						<p>
							<label>支部名称</label> <input
								class="text-input medium-input datepicker" type="text"
								id="medium-input" name="branchname"
								value="<?php echo ($branch['branchname']); ?>" /> <br />
						</p>
						<p>
							<label>支部描述</label> <input
								class="text-input medium-input datepicker" type="text"
								id="medium-input" name="branchdescription"
								value="<?php echo ($branch['branchdescription']); ?>" /> <br />
						</p>
						<p>
							<label>学院</label> <select name="branchacademy"
								class="small-input">
								<?php if(is_array($listAcademy)): foreach($listAcademy as $key=>$itemAcademy): if($itemAcademy[academyid] == $branch['branchacademy']): ?><option value="<?php echo ($itemAcademy[academyid]); ?>" selected="selected"><?php echo ($itemAcademy[academyname]); ?></option>
								<?php else: ?>
								<option value="<?php echo ($itemAcademy[academyid]); ?>"><?php echo ($itemAcademy[academyname]); ?></option><?php endif; endforeach; endif; ?>
							</select> <br />
						</p>
						<p>
							<input class="button" type="submit" value="确定" />
						</p>
					</fieldset>
					<div class="clear"></div>
					<!-- End .clear -->
				</form>
				<!-- End #tab2 -->
			</div>
			<!-- End .content-box-content -->
		</div>
	</div>
</body>
</html>
<script type="text/javascript">
	
</script>