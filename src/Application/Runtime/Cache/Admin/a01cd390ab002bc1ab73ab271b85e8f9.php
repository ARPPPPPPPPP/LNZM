<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN""http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title><?php echo session('userAccount');?>系统后台</title>
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
<body style="background-image:none">
	<!-- Wrapper for the radial gradient background -->
	<div id="main-content" style="width: 75%; margin: 0 auto; ">
		<div class="content-box">
			<!-- Start Content Box -->
			<div class="content-box-header">
				<h3>工作动态编辑:<?php echo ($workTendency['worktendencytitle']); ?></h3>
				<ul class="content-box-tabs">
					<li><a href="#tab2">编辑</a></li>
				</ul>
				<div class="clear"></div>
			</div>
			<!-- End .content-box-header -->
			<div class="content-box-content">
				<form
					action="<?php echo U('WorkTendency/editWorkTendencySubmit','worktendencyid=' . $workTendency[worktendencyid]);?>"
					method="post">
					<fieldset>
						<!-- Set class to "column-left" or "column-right" on fieldsets to divide the form into columns -->
						<p>
							<label>工作动态标题</label> <input
								class="text-input medium-input datepicker" type="text"
								id="medium-input" name="workTendencyTitle"
								value="<?php echo ($workTendency['worktendencytitle']); ?>" /> <br />
						</p>
						<p>
							<label>工作动态发布人</label> <input
								class="text-input medium-input datepicker" type="text"
								id="medium-input" name="workTendencyReleaseId"
								value="<?php echo ($workTendency['worktendencyreleaseid']); ?>" /> <br />
						</p>
						<p>
							<label>工作动态发布时间</label> <input
								class="text-input medium-input datepicker" type="text"
								id="medium-input" name="workTendencyReleaseDate"
								value="<?php echo ($workTendency['worktendencyreleasedate']); ?>" /> <br />
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
				<!-- End #tab2 -->
			</div>
			<!-- End .content-box-content -->
		</div>
	</div>
</body>
</html>
<script type="text/javascript">
	
</script>