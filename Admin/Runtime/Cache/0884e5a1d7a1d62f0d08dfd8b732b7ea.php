<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="zh_CN">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<meta http-equiv="X-UA-Compatible" content="chrome=1,IE=edge" />
	<meta name="renderer" content="webkit|ie-comp|ie-stand">
	<meta charset="utf-8">
	<title>后台</title>

	<script>
		//全局变量
		var GV = {
			DIMAUB: "__ROOT__",
			URL: "__URL__",
			JS_ROOT: "Public/admin/js/",
			TOKEN: ""
		};
	</script>
</head>

<body>


	<div class="navbar">
	<div class="navbar-inner">
		<div class="container-fluid">
			<a href="__ROOT__/admin.php" class="brand"><?php echo ($config["name"]); ?></a>
			<ul class="nav ace-nav pull-right">
				<li class="light-blue">
					<a data-toggle="dropdown" href="#" class="dropdown-toggle">
						<span class="user-info">
							<small>欢迎,</small><?php echo ($config["username"]); ?>
						</span>
						<i class="fa fa-caret-down"></i>
					</a>
					<ul class="user-menu pull-right dropdown-menu dropdown-yellow dropdown-caret dropdown-closer">
						<li><a href="<?php echo U('Login/loginout/');?>"><i class="fa fa-off"></i>退出</a></li>
					</ul>
				</li>
			</ul>
		</div>
	</div>
</div>


	<ul class="company">
	<li><a href="<?php echo U('About/index');?>">基本设置</a></li>
	<li><a href="<?php echo U('About/history');?>">历史回顾</a></li>
	<li><a href="<?php echo U('About/overview');?>">历史概况</a></li>
	<li><a href="<?php echo U('About/patent');?>">公司专利</a></li>
	<li><a href="<?php echo U('About/compliant');?>">公司认证</a></li>
	<li><a href="<?php echo U('About/greetings');?>">总裁致词</a></li>
	<li><a href="<?php echo U('About/culture');?>">企业文化</a></li>
	<li><a href="<?php echo U('About/service');?>">服务宗旨</a></li>
</ul>

<ul class="news">
	<li><a href="<?php echo U('News/index');?>">新闻管理</a></li>
	<li><a href="<?php echo U('News/add');?>">添加新闻</a></li>
</ul>

<ul class="pr">
	<li><a href="<?php echo U('Company/index');?>">论文与报道管理</a></li>
	<li><a href="<?php echo U('Company/add');?>">添加论文与报道</a></li>
</ul>

<ul class="cs">
	<li><a href="<?php echo U('Company/caseStudy');?>">案例分析管理</a></li>
	<li><a href="<?php echo U('Company/addCS');?>">添加案例分析</a></li>
</ul>

<ul class="goods">
	<li><a href="<?php echo U('Goods/index');?>">产品管理</a></li>
	<li><a href="<?php echo U('Goods/add');?>">添加产品</a></li>
</ul>
<ul class="MM">
	<li><a href="<?php echo U('System/index');?>">修改密码</a></li>
</ul>

<div class="wrap">
	
	<form action="<?php echo U('addData');?>" method="post" id="login">
		<div class="login-box">
			<div class="error"></div>
			<ul>
				<li>
					<span>公司名称</span>
					<input type="text" name="name" class="inp" value="<?php echo ($list["name"]); ?>"/>
				</li>
				<li>
					<span>公司地址</span>
					<input type="text" name="address" class="inp" value="<?php echo ($list["address"]); ?>"/>
				</li>
				<li>
					<span>联系电话</span>
					<input type="text" name="tel" class="inp" value="<?php echo ($list["tel"]); ?>"/>
				</li>
				<li>
					<span>邮箱</span>
					<input type="text" name="email" class="inp" value="<?php echo ($list["email"]); ?>"/>
				</li>
				<li>
					<span>版权信息及其他</span>
					<textarea name="copyright" class="tex">
						<?php echo ($list["copyright"]); ?>
					</textarea>
				</li>
				<li class="btns-box">
					<input type="submit" value="提交"/>
				</li>
			</ul>
		</div>
	</form>

</div>

<script src="__PUBLIC__/js/lib/171.js"></script>
<script src="__PUBLIC__/js/lib/base.js"></script>

<script src="__PUBLIC__/admin/js/lib/g.js"></script>
</body>
</html>