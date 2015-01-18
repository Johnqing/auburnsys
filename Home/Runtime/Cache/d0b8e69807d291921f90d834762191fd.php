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
				<h2>企业文化</h2>
				<ul class="breadcrumb">
					<li>
						<a href="__APP__">首页</a> <span class="divider">&gt;</span>
					</li>
					<li>
						<a href="<?php echo U('About/index');?>">关于奥本</a> <span class="divider">&gt;</span>
					</li>
					<li class="active">企业文化</li>
				</ul>
			</div>
			<div class="culture-box clearfix">
				<h4>工作场地道德标准个人观点</h4>
				<div class="address">马萨诸塞州LLC Danvers，Ron Dechene Auburn Systems， 2002年9月1日</div>

				<p>工作场所的道德近来讨论得很多，也是商务学校顾问委员会讨论的主题。首先，我假定适当的道德争论问题研究会提出一种适合讨论的框架。 但在初步了解了该主题的书面资料和意见后，很明显就是数卷这类案例研究也不够，需要更具有结构性的方法。</p>
				<p>如果有精确的定义道德行为的构成，也就是明确定义出工作场恰当的道德准则以及如何管理，应该是有用帮助的。 可惜的是，要陈述起来需要正确认识各公司领导层的价值、信仰、个人观点、培训和生活经历。 很明显，无法给出单一的定义，公司之间各种因素变化逐步发展为遇到道德问题时各自特有的反应。 另外，道德问题通常不是涉及正确与否的问题，更是一种正确与正确之间发生的冲突性。 比如，在知道他或她是一个大家庭的唯一支撑后，你如何看待一个受尊敬的人的行为态度。</p>
				<p>其他因素使得问题更为复杂。 想一想， 有人说我们处于道德危机的时代，但更大的危机可能是道义勇气的危机。 举一个道德问题的例子来说吧，您可能知道什么事情是道德的正确的，却选择另一种行为过程。 这种缺乏道义勇气是不愿意做正确的事，原因是“要付出的代价”是您承受不起的。 因此，代价可能会更重于金钱，可能是一种不方便，失去面子，或者最终只是旁观。 阻碍一个人推理的能力另一种情况，在遇到道德问题时决定是否能够做了道德的决定，这是从学到的本事，这可能是领导没有掌握到的。</p>
				<p>对古典哲学历史做一番研究或许能提供道德规范的框架较为有效的背景。 但哲学家对这个问题思考过几千年，只是后来才发现几年前认为恰当的事再不适用。 今天恰当的行为可能明天就不适合了。 有些商校选择古典哲学历史为现代商业环境下道德学习的基础。 但Prentiss写道：在Enron、WorldCom和ImClon不存在流言蜚语是因为执行者们不懂得解决道德问题的目的论和道义论方法之间的不同点。还有其他更为世俗的的理由。</p>
				<p>为什么我们不能简单的凭良心做事、守规矩、多多的挣钱？为什么要小题大做？</p>
				<p>可惜的是商业环境里统领道德会极为复杂。太多人只注意利润而在此方面失败，或希望更好。 如果有一套强有力的广泛的道德指南或标准，专门针对各种形式的道德问题，由领导层严格监控，是否能避免发生灾难呢？ 最近发生的实例来看，答案无疑是肯定的。 工作场所大多数道德问题不是“张某偷了李某的东西？”这样简单，或“老王对老板撒谎没有？”道德原则以个人价值以及指导我们生活的基本行动准则为基础是否正确？ 正确的道德选择是否取决于当时的环境，包括个人做出决定的情况呢？ 另外，有些道德家相信今天特定的道德准则将在明天最终出现在法规条文上。 那么，道德商务仅仅是遵守法规吗？ 不一定。</p>
				<p>那如果没有法律涉及到的地方如何办呢？ Prentiss 写道，道德方面可以帮助那些善意的人在没有明确法律规定情况下能处理好道德问题。 但即使这样的人如果去一个价值高于诚实的公司上班也会沉没的，这样的单位里，按道德行为总是很难的。 现在比任何时候都更注意在商业课程中强调法规。 太多人忘记了由于30年代通过的证券法而使得资本主义幸免于其本身的过激行为。最近的知识表明有强有力的司法系统管理严格的金属法的国家使得公司能更快挣钱并促进更有效的股票市场。 合法的公司需要规定精确金属披露的法律和惩罚欺骗性公司的规定。 商业道德研究中心有必要描述出我们所希望的理想情况。 但多数商业学生总看商业道德看成劝告而不是强行的，额外信用是否不需要？</p>
				<h4>罪犯制裁与自愿守法</h4>
				<p>从德州州长减轻污染的手段到作为总统对待企业渎职的手段，George W. Bush自动地遵守其座右铭。 为解释就那他最先反对严历制裁犯罪到最近通过的企业欺诈法，他说他严格的法规可能有用，最终美国商业的道德取决于美国商业领导人的自觉。</p>
				<p>自愿守法（当遇到道德行动受检验的时候）可能是合理的商务理想，Frank辩论说让那些人自愿守规矩是要承受不公平的负担的。 比如公平申报收益和发展前景很复杂，因为需要做出客观的判断。 这种情况下，可以计算出很宽范围的结果。 同时，一家公司以后发展的能力主要看报告结果。 这样，多数竞争对手乐观申报收益的情况下，就会发现很难假定出中性的或甚至不利财务状态。</p>
				<p>如果我们希望人们从公益出发约束自己，那么就要大家作出奉献。 这也适用于商业以外的情况。 如果没有有效的制裁，让体育运动员不使用兴奋剂就是处罚守规矩的而奖励不守规矩的。要人们在完全自己的环境里正确报税就是给不诚信的纳税人减税，给诚实的纳税人加税。</p>
				<p>所以为什么把焦点放在道德研究、准则或宣言上，这是否是徒劳之举？</p>
				<p>有没有一种驱动力确保工作场所的道德行为因为怕违法而得以遵守呢？ 可惜，看看兴兴衰衰的历史，一旦有机会，贪欲和诡计占了上风，再一次不顾处罚也不管有没有风险，有些人就不在乎道德问题了。 但有很多人是在面对这种挑战时会想到道德意义的，特别是在他的早期商务生涯中。 明显的，恰当定义的道德基础或准则或平台对这一层是有用的。</p>
				<p>是否有其他本质价值与此类准则相关呢？ 我相信有。 立出有效的道德平台将远远比加强组织的道德支柱更有益。 比如，良好的准则将会： 遇到问题时的道德驱动；扬起希望展示正面的形象；加强团队工作；提供积累经验的特性；明确规定出要考虑到什么；提倡多样性和环境意识；为所有风险承担者和公众提供组织更多守信和质量声誉。</p>

				<h4>结论</h4>
				<p>如果我们商业人员希望吸引最好的最有前途的（或对于教育者的使命是鼓励学生想到商业事业并提供允许毕业生在不断变化的工作场所有信心的背景），我们需要明确声明我们的道德标准以及那些标准在做决定时起到什么作用。 我们要说明清楚的是道德问题（即：对一个组织什么是对的，什么是错的）以及他们在这些问题与职责有关的道德环境中如何做，和我们希望在出现严峻的道德问题时如何反应。</p>
				<p>为此，我相信值得为我们公司结合最新的使命报告写出一种道德准则或报告。 了解到大家都清楚知道作为一个公司我们代表什么以及我们希望什么是有用的。 另外，我还相信特别是现在对其他业务不管大小都会是一种有用的保证。</p>

				<h4>参考</h4>
				<ol>
					<li>1. <a href="http://www.cba.unl.edu/news/emag/volume1/issue1/page4.html" target="_blank" rel="nofollow">内布拉斯加州大学商务管理学院</a></li>
					<li>2, 3. Prentice, Robert, (2002年8月20日),《纽约时报》“商校的一堂道德课”</li>
					<li>4, 5.Frank, Robert,(2002年8月24日), 《纽约时报》“制裁案例”</li>
				</ol>
				<h4>其他相关网址</h4>
				<ol>
					<li><a href="http://www.mapnp.org/library/ethics/ethics.htm#anchor1419177" target="_blank" rel="nofollow">商业道德: “工作场所道德管理和社会责任感”, Carter McNamara, MBA, PhD. </a></li>
					<li><a href="http://roger.babson.edu/ethics/" target="_blank" rel="nofollow">巴布森学院，商业道德课程</a></li>
				</ol>
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