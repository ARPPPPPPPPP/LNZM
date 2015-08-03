<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>岭南追梦主页</title>
<link rel="stylesheet" type="text/css" href="/LNZM/Public/res/css/style.css" />
<script type="text/javascript" src="/LNZM/Public/res/js/jquery-1.11.3.min.js"></script>
</head>
<body>
	<div id="wrap">
		<!--头部-->
		<div id="header" class="comWidth">
			<!-- <div id="logo" class="left">
            <img src="./img/top.png" alt="logo" />

        </div>-->
			<div id="link" class="right">
				<a href="">学校主页</a> <i style="font-style: normal; color: #FFFFFF">|</i>
				<a href="">党委组织部</a>
			</div>

		</div>
		<!--END-->
		<!--导航栏-->
		<div id="nav" class="comWidth">
			<ul>
				<li><a href="">首页</a></li>
				<li class="dropdown"><a href="#">专题建设</a>
					<ul class="subnav ">
						<li><a href="https://www.baidu.com/">在这里感悟爱国</a></li>
						<li><a href="">在这里领悟创新</a></li>
						<li><a href="">在这里追求富强</a></li>
						<li><a href="">在这里用于担当</a></li>
					</ul></li>
				<li><a href="">工作动态</a></li>
				<li><a href="">通知公告</a></li>
				<li class="dropdown "><a href="">活动实践</a>
					<ul class="subnav ">
						<li><a href="">社会实践</a></li>
						<li><a href="">志愿服务</a></li>
					</ul></li>
				<li><a href="">支部风采</a></li>
				<li><a href="">下载专区</a></li>
				<li><a href="">联系我们</a></li>
			</ul>
		</div>
		<!--END-->
		<!--大图区-->
		<div id="bgPic" class="comWidth">
			<a href=""> <img src="/LNZM/Public/res/img/theme1.png" alt="专题图片">
			</a> <a href=""> <img src="/LNZM/Public/res/img/bg1.jpg" alt="专题图片" />
			</a> <a href=""> <img src="/LNZM/Public/res/img/theme1.png" alt="专题图片">
			</a> <a href=""> <img src="/LNZM/Public/res/img/bg1.jpg" alt="专题图片" />
			</a>
			<!--大图区的小块-->
			<div id="smallDiv">
				<ul>
					<li class="active">1</li>
					<li>2</li>
					<li>3</li>
					<li>4</li>
				</ul>
			</div>
		</div>
		<!--END-->

		<!--模块区-->

		<div id="content" class="comWidth">
			<!--左边模块-->
			<div id="area-1" class="left">
				<div class="area left">
					<div class="info_title">
						<b class="left">工作动态</b> <a href=""><span class="right">更多>></span></a>
					</div>
					<div class="info_body">
						<ul>
							<?php if(is_array($listWorkTendency)): foreach($listWorkTendency as $key=>$item): ?><li><a href="<?php echo U('Index/queryWorkTendency','worktendencyid=' . $item[worktendencyid]);?>"><?php echo ($item[worktendencytitle]); ?></a></li><?php endforeach; endif; ?>
						</ul>
					</div>
				</div>
				<div class="area left">
					<div class="info_title">
						<b class="left">通知公告</b> <a href=""><span class="right">更多>></span></a>
					</div>
					<div class="info_body">
						<ul>
							<li><a href="">链接</a></li>
							<li><a href="">链接</a></li>
							<li><a href="">链接</a></li>
							<li><a href="">链接</a></li>
							<li><a href="">链接</a></li>
							<li><a href="">链接</a></li>
						</ul>
					</div>
				</div>
				<div class="area left">
					<div class="info_title">
						<b class="left">活动实践</b> <a href=""><span class="right">更多>></span></a>
					</div>
					<div class="info_body">
						<ul>
							<li><a href="">广州市天河区五山路381号/广州市番禺区广州大学城邮政编码</a></li>
							<li><a href="">链接</a></li>
							<li><a href="">链接</a></li>
							<li><a href="">链接</a></li>
							<li><a href="">链接</a></li>
							<li><a href="">链接</a></li>
						</ul>
					</div>
				</div>
				<div class="area left">
					<div class="info_title">
						<b class="left">支部风采</b> <a href=""><span class="right">更多>></span></a>
					</div>
					<div class="info_body">
						<ul>
							<li><a href="">链接</a></li>
							<li><a href="">链接</a></li>
							<li><a href="">链接</a></li>
							<li><a href="">链接</a></li>
							<li><a href="">链接</a></li>
							<li><a href="">链接</a></li>
						</ul>
					</div>
				</div>
			</div>
			<!--END-->
			<!--右边模块-->
			<div id="area-2" class="right">
				<div style="width: 160px" class="left">
					<a href=""> <img src="/LNZM/Public/res/img/b_visitor.png"
						alt="访问统计" />
						<div class="bar">访问统计</div>
					</a> <a href=""> <img src="/LNZM/Public/res/img/b_blog.png"
						alt="微博关注" />
						<div class="bar">微博关注</div>
					</a> <a href=""> <img src="/LNZM/Public/res/img/b_app.png"
						alt="app下载" />
						<div class="bar">app下载</div>
					</a>
				</div>
				<div style="width: 160px" class="right">
					<a href=""> <img src="/LNZM/Public/res/img/b_rank.png"
						alt="支部足迹排行榜" />
						<div class="bar">足迹排行</div>
					</a> <a href=""> <img src="/LNZM/Public/res/img/b_wechat.png"
						alt="微信关注" />
						<div class="bar">微信关注</div>
					</a> <a href=""> <img src="/LNZM/Public/res/img/b_backstage.png"
						alt="后台登录" />
						<div class="bar">后台登录</div>
					</a>
				</div>

			</div>
			<!--END-->
		</div>
		<!--END-->

		<!--底部-->
		<div id="footer" class="comWidth">
			<p>2015 © 华南理工大学 版权所有
				地址：广州市天河区五山路381号/广州市番禺区广州大学城邮政编码：510641/510006</p>
			<p>查号台：87110228-3 网上查号招生咨询：87110737 网站设计、管理：岭南追梦小组</p>
		</div>
		<!--END-->
	</div>
	<script type="text/javascript" src="/LNZM/Public/res/js/index.js"></script>
</body>
</html>