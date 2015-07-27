<?php if (!defined('THINK_PATH')) exit();?><html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
</head>
<body>
	<form action="<?php echo U('WorkTendency/example');?>" method="POST">
		<div style="height:300px"><?php echo ($editorHtml); ?></div> <input type="submit" value="提交">
	</form>
</body>
</html>