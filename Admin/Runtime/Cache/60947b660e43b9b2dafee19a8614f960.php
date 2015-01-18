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
	<li><a href="<?php echo U('Casestudy/index');?>">论文与报道管理</a></li>
	<li><a href="<?php echo U('Casestudy/add');?>">添加论文与报道</a></li>
</ul>

<ul class="cs">
	<li><a href="<?php echo U('Casestudy/caseStudy');?>">案例分析管理</a></li>
	<li><a href="<?php echo U('Casestudy/addCS');?>">添加案例分析</a></li>
</ul>

<ul class="goods">
	<li><a href="<?php echo U('Goods/index');?>">产品管理</a></li>
	<li><a href="<?php echo U('Goods/add');?>">添加产品</a></li>
</ul>
<ul class="MM">
	<li><a href="<?php echo U('System/index');?>">修改密码</a></li>
</ul>

<div class="wrap">
	
	<div class="add-news">
		<a href="<?php echo U('modifyOverview');?>">添加的历史概况</a>
	</div>
	<div class="old-content">
		<ul>
			<?php if(is_array($list)): $i = 0; $__LIST__ = $list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><li>
					<span><?php echo ($vo["overview_desc"]); ?></span>
					<a href="<?php echo U('modifyOverview');?>?id=<?php echo ($vo["id"]); ?>">修改</a>
				</li><?php endforeach; endif; else: echo "" ;endif; ?>
		</ul>
	</div>

</div>

<script src="__PUBLIC__/js/lib/171.js"></script>
<script src="__PUBLIC__/js/lib/base.js"></script>

<script src="__PUBLIC__/admin/js/lib/g.js"></script>
</body>
</html>