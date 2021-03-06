<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<!--[if lt IE 7 ]><html class="ie6" lang="zh-cn"><![endif]-->
<!--[if IE 7 ]><html class="ie7" lang="zh-cn"><![endif]-->
<!--[if IE 8 ]><html class="ie8" lang="zh-cn"><![endif]-->
<!--[if IE 9 ]><html class="ie9" lang="zh-cn"><![endif]-->
<!--[if (gt IE 9)|!(IE)]><!--><html class="" lang="zh-cn"><!--<![endif]-->
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title><?php echo ($company["name"]); ?></title>
	<meta name="renderer" content="webkit">
	<meta name="Keywords" content="<?php echo ($company["keys"]); ?>" />
	<meta name="Description" content="<?php echo ($company["desc"]); ?>" />
	<link rel="stylesheet" href="__PUBLIC__/css/combo/base.css"/>
	
	<link rel="stylesheet" href="__PUBLIC__/css/combo/contact.css"/>

	<script>
		var GV = {
			PUBLIC: '__PUBLIC__'
		}
	</script>
</head>
<body>
<div class="top">
	<div class="wrap">
		<span class="language"><a href="__APP__">中文</a>|<a href="http://auburnsys.com/" target="_blank">ENGLISH</a></span>
	</div>
</div>

<div class="header">
	<div class="wrap clearfix">
		<h1 class="fl"><a href="__APP__"><?php echo ($company["name"]); ?></a></h1>
		<div class="fr">
			<ul class="nav clearfix">
				<li><a href="__APP__" <?php if(($nav_type) == "index"): ?>class="active"<?php endif; ?>>首页</a>|</li>
				<li><a href="<?php echo U('About/index');?>" <?php if(($nav_type) == "about"): ?>class="active"<?php endif; ?>>关于奥本</a>|</li>
				<!-- <li><a href="<?php echo U('News/index');?>" <?php if(($nav_type) == "news"): ?>class="active"<?php endif; ?>>公司新闻</a>|</li> -->
				<li><a href="<?php echo U('Goods/index');?>" <?php if(($nav_type) == "goods"): ?>class="active"<?php endif; ?>>产品介绍</a>|</li>
				<li><a href="<?php echo U('Casestudy/index');?>" <?php if(($nav_type) == "company"): ?>class="active"<?php endif; ?>>案例分析</a>|</li>
				<li><a href="<?php echo U('Contact/index');?>" <?php if(($nav_type) == "contact"): ?>class="active"<?php endif; ?>>联系我们</a>|</li>
				<li class="last"><a href="<?php echo U('Help/index');?>" <?php if(($nav_type) == "help"): ?>class="active"<?php endif; ?>>帮助中心</a></li>
			</ul>
			<div class="row-sub-nav row-about clearfix <?php if(($nav_type) != "about"): ?>hide<?php endif; ?>">
				<ul class="mc">
	<li class="first <?php if(($about_type) == "index"): ?>active<?php endif; ?>">
	<a href="<?php echo U('About/index');?>">历史回顾</a>
	</li>
	<li <?php if(($about_type) == "patent"): ?>class="active"<?php endif; ?>>
	<a href="<?php echo U('About/patent');?>">公司专利</a>
	</li>
	<li <?php if(($about_type) == "compliant"): ?>class="active"<?php endif; ?>>
	<a href="<?php echo U('About/compliant');?>">认证</a>
	</li>
	<li <?php if(($about_type) == "service"): ?>class="active"<?php endif; ?>>
	<a href="<?php echo U('About/service');?>">服务宗旨</a>
	</li>
	<li <?php if(($about_type) == "greetings"): ?>class="active"<?php endif; ?>>
	<a href="<?php echo U('About/greetings');?>">总裁致辞</a>
	</li>
	<li <?php if(($about_type) == "culture"): ?>class="active"<?php endif; ?>>
	<a href="<?php echo U('About/culture');?>">企业文化</a>
	</li>
</ul>
			</div>
            <div class="row-sub-nav row-about clearfix <?php if(($nav_type) != "goods"): ?>hide<?php endif; ?>">
				<ul class="mc">
	<li class="first <?php if(($goods_type) == "index"): ?>active<?php endif; ?>">
	<a href="<?php echo U('Goods/index');?>">all</a>
	</li>
	<li class="<?php if(($goods_type) == "app"): ?>active<?php endif; ?>">
	<a href="<?php echo U('Goods/app');?>">应用范围</a>
	</li>
</ul>
			</div>
			<div class="row-sub-nav row-about clearfix <?php if(($nav_type) != "company"): ?>hide<?php endif; ?>">
				<ul class="mc">
	<li class="first <?php if(($company_type) == "caseStudy"): ?>active<?php endif; ?>">
	<a href="<?php echo U('Company/index');?>">案例分析</a>
	</li>
</ul>
			</div>
			<div class="row-sub-nav row-about clearfix <?php if(($nav_type) != "contact"): ?>hide<?php endif; ?>">
				<ul class="mc">
	<li class="first <?php if(($contact_type) == "index"): ?>active<?php endif; ?>">
	<a href="<?php echo U('Contact/index');?>">联系我们</a>
	</li>
</ul>
			</div>
			<div class="row-sub-nav row-about clearfix <?php if(($nav_type) != "help"): ?>hide<?php endif; ?>">
				<ul class="mc">
	<li class="first <?php if(($help_type) == "index"): ?>active<?php endif; ?>">
	<a href="<?php echo U('Help/index');?>">常见问题</a>
	</li>
	<li class="<?php if(($help_type) == "tech"): ?>active<?php endif; ?>">
	<a href="<?php echo U('Help/tech');?>">奥本技术</a>
	</li>
</ul>
			</div>
		</div>

	</div>
</div>

	<div class="wrap mb5x4">
		<img src="__PUBLIC__/img/banner/contact.png" alt="联系我们"/>
	</div>
	<div class="wrap clearfix">

		<div class="sub-nav fl">
			<h2>Contact</h2>
			<ul class="mc">
	<li class="first <?php if(($contact_type) == "index"): ?>active<?php endif; ?>">
	<a href="<?php echo U('Contact/index');?>">联系我们</a>
	</li>
</ul>
		</div>

		<div class="sub-wrap fr contact-box">

			<div class="m1 s-mt">
				<h2>联系我们</h2>
				<ul class="breadcrumb">
					<li>
						<a href="__APP__">首页</a> <span class="divider">&gt;</span>
					</li>
					<li class="active">联系我们</li>
				</ul>
			</div>
			<div class="city">北京</div>
			<div class="company">奥本系统北京代表处</div>
			<table class="tbl-type2 mgb_40" cellspacing="0">
				<tr>
					<th width="188">
						<span>Address</span>
					</th>
					<td class="last">
						<span><?php echo ($company["address"]); ?></span>
					</td>
				</tr>
				<tr>
					<th>
						<span>Phone</span>
					</th>
					<td class="last">
						<span><?php echo ($company["mobile"]); ?></span>
					</td>
				</tr>
				<tr>
					<th>
						<span>email</span>
					</th>
					<td class="last">
						<span><a href="mailto:<?php echo ($company["email"]); ?>"><?php echo ($company["email"]); ?></a></span>
					</td>
				</tr>
			</table>
			<?php if(is_array($agents)): $i = 0; $__LIST__ = $agents;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><div class="city"><?php echo ($vo["city"]); ?></div>
				<div class="company"><?php echo ($vo["name"]); ?></div>
				<table class="tbl-type2 mgb_40" cellspacing="0">
					<tr>
						<th width="188">
							<span>Contact</span>
						</th>
						<td class="last">
							<span><?php echo ($vo["contact"]); ?></span>
						</td>
					</tr>
					<?php if(!empty($vo["address"])): ?><tr>
						<th width="188">
							<span>Address</span>
						</th>
						<td class="last">
							<span><?php echo ($vo["address"]); ?></span>
						</td>
					</tr><?php endif; ?>
					<tr>
						<th>
							<span>Phone</span>
						</th>
						<td class="last">
							<span><?php echo ($vo["tel"]); ?></span>
						</td>
					</tr>
					<tr>
						<th>
							<span>email</span>
						</th>
						<td class="last">
							<span><a href="mailto:<?php echo ($vo["email"]); ?>"><?php echo ($vo["email"]); ?></a></span>
						</td>
					</tr>
					<tr>
						<th>
							<span>Fax</span>
						</th>
						<td class="last">
							<span><?php echo ($vo["fax"]); ?></span>
						</td>
					</tr>
				</table><?php endforeach; endif; else: echo "" ;endif; ?>
		</div>
	</div>

<div class="footer">
	<div class="wrap">
		<?php echo ($company["copyright"]); ?><br>
		<a href="http://www.miibeian.gov.cn/" target="_blank" rel="nofollow">京ICP证080047号</a>
	</div>
</div>
<script src="__PUBLIC__/js/lib/171.js"></script>
<script src="__PUBLIC__/js/lib/base.js"></script>
<script src="__PUBLIC__/js/combo/ui.js"></script>

</body>
</html>