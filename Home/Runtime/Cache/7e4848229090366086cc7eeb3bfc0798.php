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
	
	<link rel="stylesheet" href="__PUBLIC__/css/combo/index.css"/>

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
				<li><a href="<?php echo U('Goods/index');?>" <?php if(($nav_type) == "goods"): ?>class="active"<?php endif; ?>>产品</a>|</li>
				<li><a href="<?php echo U('Company/index');?>" <?php if(($nav_type) == "company"): ?>class="active"<?php endif; ?>>公司信息</a>|</li>
				<li class="last"><a href="<?php echo U('Contact/index');?>" <?php if(($nav_type) == "contact"): ?>class="active"<?php endif; ?>>联系我们</a></li>
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
            <!--<div class="row-sub-nav row-about clearfix <?php if(($nav_type) != "goods"): ?>hide<?php endif; ?>">-->
				<!--<ul class="mc">
	<li class="first <?php if(($goods_type) == "index"): ?>active<?php endif; ?>">
	<a href="<?php echo U('Goods/index');?>">all</a>
	</li>
	<?php if(is_array($list)): $i = 0; $__LIST__ = $list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><li <?php if($vo["id"] == $goods_type): ?>class="active"<?php endif; ?>>
			<a href="<?php echo U('Goods/detail');?>?id=<?php echo ($vo["id"]); ?>"><?php echo (msubstr($vo["goods_name"],0,20)); ?></a>
		</li><?php endforeach; endif; else: echo "" ;endif; ?>
</ul>-->
			<!--</div>-->
			<div class="row-sub-nav row-about clearfix <?php if(($nav_type) != "company"): ?>hide<?php endif; ?>">
				<ul class="mc">
	<li class="first <?php if(($company_type) == "caseStudy"): ?>active<?php endif; ?>">
	<a href="<?php echo U('Company/index');?>">案例分析</a>
	</li>
	<li class="first <?php if(($company_type) == "index"): ?>active<?php endif; ?>">
	    <a href="<?php echo U('Company/report');?>">论文与报道</a>
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
		</div>

	</div>
</div>

	<div class="banner" id="slt">
			<div class="u-slt" style="background-image: url(__PUBLIC__/img/index/p1.jpg);"></div>
			<div class="u-slt hide" style="background-image: url(__PUBLIC__/img/index/p2.jpg);"></div>
	</div>

	<div class="wrap clearfix w-index-info">
		<div class="fl mr5x2 m1">
			<h3 class="yahei">Product Info</h3>
			<div class="mc">
				<ul>
					<?php if(is_array($prduct)): $i = 0; $__LIST__ = $prduct;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><li><a href="<?php echo U('Goods/goods_desc');?>?time=<?php echo ($vo["goods_addtime"]); ?>"><?php echo (msubstr($vo["goods_name"],0,18)); ?></a></li><?php endforeach; endif; else: echo "" ;endif; ?>
				</ul>
				<div class="more"><a href="<?php echo U('Goods/index');?>">More</a></div>
			</div>
		</div>
		<div class="fl mr5x2 m2">
			<h3 class="yahei">About Us</h3>
			<div class="mc">
				<div class="desc"><?php echo ($company["desc"]); ?></div>
				<div class="more"><a href="<?php echo U('About/index');?>">More</a></div>
			</div>
		</div>
		<div class="span3 fl m3">
			<h3 class="yahei">Contact  Us</h3>
			<dl>
				<dt>奥本系统北京代表处</dt>
				<dd>Tel：<?php echo ($company["tel"]); ?></dd>
				<dd>Mobile：<?php echo ($company["mobile"]); ?></dd>
				<dd>Fex：<?php echo ($company["fex"]); ?></dd>
				<dd>Email：<?php echo ($company["email"]); ?></dd>
			</dl>
			<div class="address"><?php echo ($company["address"]); ?></div>
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

	<script type="text/javascript" src="__PUBLIC__/js/combo/index.js"></script>

</body>
</html>