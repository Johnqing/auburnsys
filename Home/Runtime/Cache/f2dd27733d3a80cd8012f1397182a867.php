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
	
	<link rel="stylesheet" href="__PUBLIC__/css/combo/about.css"/>

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
				<li><a href="<?php echo U('Goods/app');?>" <?php if(($nav_type) == "app"): ?>class="active"<?php endif; ?>>应用范围</a>|</li>
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
	<li class="<?php if(($goods_type) == "measure"): ?>active<?php endif; ?>">
	<a href="<?php echo U('Goods/measure');?>">测量原理</a>
	</li>
</ul>
			</div>

            <div class="row-sub-nav row-about clearfix <?php if(($nav_type) != "app"): ?>hide<?php endif; ?>">
                <ul class="mc">
	<li class="first <?php if(($app_type) == "index"): ?>active<?php endif; ?>">
	<a href="<?php echo U('Goods/app');?>">all</a>
	</li>

    <li class="<?php if(($help_type) == "tech"): ?>active<?php endif; ?>">
    <a href="<?php echo U('Goods/tech');?>">奥本技术</a>
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
</ul>
			</div>
		</div>

	</div>
</div>

	<div class="wrap mb5x4">
		<img src="__PUBLIC__/img/banner/about.jpg" alt="关于我们"/>
	</div>
	<div class="wrap clearfix">

		<div class="sub-nav fl">
			<h2>About Us</h2>
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

		<div class="sub-wrap fr about-box">
			<div class="m1 s-mt">
				<h2>总裁致词</h2>
				<ul class="breadcrumb">
					<li>
						<a href="__APP__">首页</a> <span class="divider">&gt;</span>
					</li>
					<li>
						<a href="<?php echo U('About/index');?>">关于奥本</a> <span class="divider">&gt;</span>
					</li>
					<li class="active">总裁致词</li>
				</ul>
			</div>
			<div class="greeting-box clearfix">
				<div class="gt-text lh-25">
					<img src="__PUBLIC__/img/ceo/ron_image.gif" class="fl" alt=""/>
					<p>首先，非常感谢您对奥本公司网站的关注！为此我们将不断改进与更新网站以便您更快捷地查找到您所需要的信息。本网站所提供的资讯是奥本产品性能及其应用领域的有效说明。在此，对网站设计者表示谢意。同时，郑重感谢我的两个朋友——Tom Smith和Bob Newton。感谢他们始终如一的友谊和支持，可以说没有他们的支持就没有奥本今天的发展！</p>
					<p>奥本公司于二十世纪七十年代后期组建，当时致力于研发一项创新的检测理念。多年来，我们被国内外授予了四十多个专利技术及革新奖。在一次成功的实验中我们发现，通过和其他物质相碰撞粒子之间的电荷会发生转移，我们将这一现象通过电流成功的检测出来。当意识到这一检测技术几乎可以应用于所有大型工业集尘室的粉尘监测时，我们首次研发了Triboelectric静电粉尘监测仪，并为我们的第一代产品命名为Triboflow 。1980年，奥本的第一套设备试用于马萨诸塞州的Lynn轮转磨边机袋室上获得行业认可，自那时起奥本各类产品几乎遍布美国的整个工业监测市场，到目前已有400,000多套奥本监测设备被广泛应用于世界各地。随着奥本技术的不断革新与成熟，Tribo.series粉尘在线监测系统成为奥本最尖端的产品。该套产品性能安全可靠，无风险，对于维护清洁的工作环境意义重大。今后，奥本公司将继续致力于更新和改进粉尘在线监测技术，届时请您继续浏览我们的网站，了解更多有关于我们的高新产品。</p>
					<p>再次感谢您对我们奥本公司网站的关注！衷心希望您能获得有用有效的信息！</p>
				</div>
			</div>
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