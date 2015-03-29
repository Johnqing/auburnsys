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
	
	<link rel="stylesheet" href="__PUBLIC__/css/combo/goods.css"/>

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
	<li class="<?php if(($help_type) == "app"): ?>active<?php endif; ?>">
	<a href="<?php echo U('Help/index');?>">应用范围</a>
	</li>
</ul>
			</div>
		</div>

	</div>
</div>

	<div class="wrap mb5x4">
		<img src="__PUBLIC__/img/banner/product.jpg" alt="产品介绍"/>
	</div>
	<div class="wrap clearfix">

		<div class="sub-nav fl">
			<h2>Products</h2>
			<ul class="mc">
	<li class="first <?php if(($goods_type) == "index"): ?>active<?php endif; ?>">
	<a href="<?php echo U('Goods/index');?>">all</a>
	</li>
	<li class="<?php if(($goods_type) == "app"): ?>active<?php endif; ?>">
	<a href="<?php echo U('Goods/app');?>">应用范围</a>
	</li>
</ul>
		</div>

		<div class="sub-wrap fr goods-list-box">
			<div class="m1 s-mt">
				<h2>应用范围</h2>
				<ul class="breadcrumb">
					<li>
						<a href="__APP__">首页</a> <span class="divider">&gt;</span>
					</li>
					<li>
						<a href="<?php echo U('Goods/index');?>">产品介绍</a> <span class="divider">&gt;</span>
					</li>
					<li class="active">应用范围</li>
				</ul>
			</div>
			<div class="m-app-box">
				<h3>应用领域</h3>
				<table width="100%" cellpadding="0" cellspacing="0" class="m-tb-1">
					<tr>
						<th colspan="2">粉尘排放监测：</th>
						<th colspan="2">工艺应用：</th>
					</tr>
					<tr>
						<td>集尘袋检漏箱</td>
						<td>织物过滤器</td>
						<td>空气侧流量监测</td>
						<td>石灰和粉末注入</td>
					</tr>
					<tr>
						<td>减噪器</td>
						<td>袋室室内短时粉尘</td>
						<td>催化剂进给注入</td>
						<td>微粒流速</td>
					</tr>
					<tr>
						<td>减噪器</td>
						<td>袋室室内短时粉尘</td>
						<td>催化剂进给注入</td>
						<td>微粒流速</td>
					</tr>
					<tr>
						<td>卡盘式收集器</td>
						<td>隔离袋泄漏位置</td>
						<td>旋风流和溢流</td>
						<td>气动输送</td>
					</tr>
					<tr>
						<td>旋风溢流</td>
						<td>MACT 报告</td>
						<td>有流量/无流量探测</td>
						<td>螺旋输送器流量</td>
					</tr>
					<tr>
						<td>集尘器维护</td>
						<td>正压袋室</td>
						<td>飞灰输送系统</td>
						<td>喷洒式干燥器/流动床干燥器</td>
					</tr>
					<tr>
						<td>符合EPA</td>
						<td>符合V节/CAM	</td>
						<td>重力进料监测</td>
						<td>真空系统</td>
					</tr>
				</table>
				<h3>TRIBO.series Applications</h3>
				<img src="__PUBLIC__/Uploads/app/triboapp_sm.gif" alt=""/>
				<p>在全世界范围内织物过滤器被广泛地使用于各种工业应用，如在矿产工业，织物过滤器被普遍地用于排放控制和磨粉作业的产品回收，比如破碎，制粉及过筛。在高温矿物产品如水泥和石灰窑干燥中，织物过滤器也是首先的控制设备。在冶金工业中，织物过滤器也常用于控制高炉和锅炉的排放。下表格列举了一些使用到织物过滤器比较普遍的工业企业。</p>
				<p>自上世纪70年代起，全世界范围内越来越多的工业企业选择奥本粉尘在线检测系统，成为奥本（Auburnsystem)静电技术的拥护者和终端用户。</p>
				<table width="96%" border="0" cellpadding="1" cellspacing="0" class="m-tb-2">
					<tr>
						<th width="22%">行业</th>
						<th width="78%">排放源</th>
					</tr>
					<tr>
						<td>钢铁</td>
						<td><table width="100%" border="0" cellpadding="3" cellspacing="0" class="wenben-cn">
							<tr>
								<td width="34%" >电弧炉</td>
								<td width="16%" >烧结车间</td>
								<td width="16%" >锅炉</td>
								<td width="34%">&nbsp;</td>
							</tr>

							</table></td>
					</tr>
					<tr>
						<td>铸造厂</td>
						<td>熔铁炉</td>
					</tr>
					<tr>
						<td height="104">有色金属<br>
							微粒处理<br>
							矿物处理<br>
							水泥</td>
						<td valign="top"><table width="100%" border="0" cellpadding="0" cellspacing="0" class="wenben-cn">
							<tr>
								<td width="17%">炼铅熔炉</td>
								<td width="20%">炼铜熔炉</td>
								<td width="22%">筛分操作</td>
								<td width="20%">空气分级器</td>
								<td width="21%">干燥炉</td>
							</tr>
							<tr>
								<td>炼锌熔炉</td>
								<td>干燥炉</td>
								<td>煅烧炉</td>
								<td>窑式烘干机</td>
								<td>混合搅拌机</td>
							</tr>
							<tr>
								<td>清洁制作</td>
								<td>磨粉机</td>
								<td>粗磨机</td>
								<td align="left">&nbsp;</td>
								<td>成品磨粉机</td>
							</tr>
							<tr>
								<td>物料输送</td>
								<td>破碎机</td>
								<td>磨粉机</td>
								<td align="left">&nbsp;</td>
								<td>&nbsp;</td>
							</tr>


							</table></td>
					</tr>
					<tr>
						<td>沥青混凝土</td>
						<td>鼓式混合机</td>
					</tr>
					<tr>
						<td>玻璃</td>
						<td>熔融炉</td>
					</tr>
					<tr>
						<td>化学</td>
						<td>干燥机 磨碎机</td>
					</tr>
					<tr>
						<td>发电厂</td>
						<td>烧炭锅炉</td>
					</tr>
					<tr>
						<td height="26">垃圾处理</td>
						<td>焚化炉</td>
					</tr>
					</table>
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