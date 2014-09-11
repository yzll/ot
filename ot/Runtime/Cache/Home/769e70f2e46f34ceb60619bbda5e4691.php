<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="zh-cn">
<head>
	<meta name="keywords" content="关键词" />
<meta name="description" content="描述" />
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title><?php echo C('WEB_SITE_TITLE');?></title>
<link href="/OT/Public/Home/css/pintuer.css" rel="stylesheet">



<script src="/OT/Public/static/jquery-1.10.2.min.js"></script>
<script src="/OT/Public/Home/js/pintuer.js"></script>
<script src="/OT/Public/Home/js/respond.js"></script>
<!-- 页面header钩子，一般用于加载插件CSS文件和代码 -->
<?php echo hook('pageHeader');?>

</head>
<body>
	<!-- 头部 -->
	<!-- 导航条
================================================== -->
<style>
	.fixed.fixed-top{z-index:8;background:#fff;width:100%;padding:0;border-bottom:solid 3px #0a8;-webkit-box-shadow:0 3px 6px rgba(0, 0, 0, .175);box-shadow:0 3px 6px rgba(0, 0, 0, .175);}
</style>

<div class="layout bg-black bg-inverse hidden-l">
    <div class="container height-large"> 
    	<span class="float-right text-small text-gray hidden-l">
          <a class="text-main" href="http://www.pintuer.com">注册</a>
          <span> | </span>
          <a class="text-main" href="http://www.pintuer.com">登录</a>
          <span> | </span>
          <a class="text-main" href="http://www.pintuer.com">积分兑换</a>
          <span> | </span>
          <a class="text-main" href="http://www.pintuer.com">帮助中心</a>
          <span> | </span>
          <a href="#" class="text-main win-homepage">设为首页</a>
	      <span> | </span>
	      <a href="#" class="text-main win-favorite">加入收藏</a>
        </span>
		欢迎浏览<a href="http://www.pintuer.com">扬州灵力电子商务</a>
    </div>
</div>
<!--导航-->
<div class="container-layout padding-big-top padding-big-bottom fixed">
    <div class="container padding-top padding-bottom">
        <div class="line">
            <div class="xl12 xs3 xm3 xb2">
                <button class="button icon-navicon float-right" data-target="#header-demo"></button>
                <a target="_blank" href="http://www.pintuer.com">
                    <img src="/OT/Public/Home/images/onethink.png"/>
                </a>
            </div>
            <div class=" xl12 xs9 xm9 xb10 nav-navicon" id="header-demo">
                <div class="xs8 xm6 xb5 padding-small">
                    <ul class="nav nav-menu nav-inline nav-big">
                    	<?php if(is_array($channel)): foreach($channel as $key=>$item): ?><li>
	                       		<a href="<?php echo ($item['url']); ?>"><?php echo ($item['title']); ?></a>
	                       		<?php if(!empty($item['_child'])): ?><ul class="drop-menu">
	                       				<?php if(is_array($item['child'])): foreach($item['child'] as $key=>$ite): ?><li>
			                                	<a href="<?php echo ($ite['url']); ?>"><?php echo ($ite['title']); ?></a>
			                                </li><?php endforeach; endif; ?>
		                            </ul><?php endif; ?>
	                        </li><?php endforeach; endif; ?>
                    </ul>
                </div>
                <div class="xs4 xm3 xb4">
                    <form>
                        <div class="input-group padding-little-top">
                            <input type="text" class="input border-main radius-none" name="keywords" size="30" placeholder="关键词" /> <span class="addbtn"><button type="button" class="button bg-main icon-search radius-none"></button></span>
                        </div>
                    </form>
                </div>
                <div class="hidden-l hidden-s xm3 xb3">
                    <div class="text-red text-big icon-phone height-large text-right">热线 400 1234567</div>
                </div>
            </div>
        </div>
    </div>
</div>
	<!-- /头部 -->
	
	<!-- 主体 -->
	
<!-- 页面body钩子，一般用于加载导航后的信息，如图片轮播 -->
<?php echo hook('pageBody', 'widget');?>


<div class="container">
	<div class="line-small">
		<div class="xl12 xm12 bg">
			<h2 class="bg-main padding">公司简介</h2>
			<div class="media-inline border border-main padding-little">
				<div class="media media-x clearfix">
					<a class="float-left hidden-l" href="#">
					  <img src="/OT/Public/Home/images/gs1.jpg" class="img-responsive" alt="...">
					</a>
					<a class="show-l hidden-m hidden-s hidden-b" href="#">
					  <img src="/OT/Public/Home/images/gs1.jpg" class="img-responsive" alt="...">
					</a>
					<div class="media-body padding-little">
						<div class="padding-small hidden-m hidden-b show-l show-s"></div>
					  <strong>公司名称</strong>
					  <p>公司简介公司简介公司简介公司简介公司简介公司简介公司简介公司简介公司简介公司简介公司简介</p>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="padding-small"></div>
	<div class="line-small">
		<div class="xl12 xm6">
			<h2 class="bg-main padding">服务项目</h2>
			<div class="list-link radius-none border border-main">
				<a href="#" class="active">服务项目一</a>
				<a href="#">服务项目二</a>
				<a href="#">服务项目三</a>
				<a href="#">服务项目四</a>
				<a href="#">服务项目五</a>
				<a href="#">服务项目六</a>
				<a href="#">服务项目七</a>
			</div>
		</div>
		<div class="xl12 xm3">
			<div class="padding-small hidden-m hidden-b show-l hidden-s"></div>
			<h2 class="bg-main padding">公司新闻</h2>
			<ul class="list-group radius-none border border-main">
			  <li><a href="#"><span class="float-right badge">12</span>新闻标题</a></li>
			  <li><a href="#"><span class="float-right">2014-9-9</span>新闻标题</a></li>
			  <li><a href="#"><span class="float-right tag">new</span>新闻标题</a></li>
			  <li><a href="#"><span class="float-right badge">...</span>新闻标题</a></li>
			  <li><a href="#"><span class="float-right">...</span>新闻标题</a></li>
			  <li><a href="#"><span class="float-right tag">...</span>新闻标题</a></li>
			  <li><a href="#"><span class="float-right tag">...</span>新闻标题</a></li>
			</ul>
		</div>
		<div class="xl12 xm3">
			<div class="padding-small hidden-m hidden-b show-l hidden-s"></div>
			<h2 class="bg-main padding">行业动态</h2>
			<ul class="list-group radius-none border border-main">
			  <li><a href="#"><span class="float-right badge">...</span>新闻标题</a></li>
			  <li><a href="#"><span class="float-right">...</span>新闻标题</a></li>
			  <li><a href="#"><span class="float-right tag">...</span>新闻标题</a></li>
			  <li><a href="#"><span class="float-right badge">...</span>新闻标题</a></li>
			  <li><a href="#"><span class="float-right">...</span>新闻标题</a></li>
			  <li><a href="#"><span class="float-right tag">99</span>新闻标题</a></li>
			  <li><a href="#"><span class="float-right tag">...</span>新闻标题</a></li>
			</ul>
		</div>
	</div>
	<div class="padding-big-top"></div>
	<div class="line-small border border-main">
		<h2 class="bg-main padding">公司产品</h2>
		<div class="xl12 xs12 xm12">
			<div class="media media-x">
			  <a class="float-left hidden-l" href="#">
			    <img src="/OT/Public/Home/images/u21_normal.png" class="img-responsive" alt="...">
			  </a>
			  <a class="show-l hidden-m hidden-s hidden-b" href="#">
			    <img src="/OT/Public/Home/images/u21_normal.png" class="img-responsive" alt="...">
			  </a>
			  <div class="media-body">
			  	<div class="padding-small hidden-m hidden-b show-l show-s"></div>
			    <strong>产品名称</strong>
			    <p>产品描述产品描述产品描述产品描述产品描述产品描述产品描述产品描述产品描述产品描述产品描述产品描述产品描述产品描述产品描述产品描述产品描述产品描述产品描述</p>
			  </div>
			</div>
			<hr class="bg-main" />
			<div class="media media-x padding">
			  <a class="float-right hidden-l" href="#">
			    <img src="/OT/Public/Home/images/u21_normal.png" class="img-responsive" alt="...">
			  </a>
			  <a class="show-l hidden-m hidden-s hidden-b" href="#">
			    <img src="/OT/Public/Home/images/u21_normal.png" class="img-responsive" alt="...">
			  </a>
			  <div class="media-body">
			  	<div class="padding-small hidden-m hidden-b show-l show-s"></div>
			    <strong>产品名称</strong>
			    <p>产品描述产品描述产品描述产品描述产品描述产品描述产品描述产品描述产品描述产品描述产品描述产品描述产品描述产品描述产品描述产品描述产品描述产品描述产品描述</p>
			  </div>
			</div>
			<hr class="bg-main" />
			<div class="media media-x padding">
			  <a class="float-left hidden-l" href="#">
			    <img src="/OT/Public/Home/images/u21_normal.png" class="img-responsive" alt="...">
			  </a>
			  <a class="show-l hidden-m hidden-s hidden-b" href="#">
			    <img src="/OT/Public/Home/images/u21_normal.png" class="img-responsive" alt="...">
			  </a>
			  <div class="media-body">
			  	<div class="padding-small hidden-m hidden-b show-l show-s"></div>
			    <strong>产品名称</strong>
			    <p>产品描述产品描述产品描述产品描述产品描述产品描述产品描述产品描述产品描述产品描述产品描述产品描述产品描述产品描述产品描述产品描述产品描述产品描述产品描述</p>
			  </div>
			</div>
			<hr class="bg-main" />
			<div class="media media-x padding">
			  <a class="float-right hidden-l" href="#">
			    <img src="/OT/Public/Home/images/u21_normal.png" class="img-responsive" alt="...">
			  </a>
			  <a class="show-l hidden-m hidden-s hidden-b" href="#">
			    <img src="/OT/Public/Home/images/u21_normal.png" class="img-responsive" alt="...">
			  </a>
			  <div class="media-body">
			  	<div class="padding-small hidden-m hidden-b show-l show-s"></div>
			    <strong>产品名称</strong>
			    <p>产品描述产品描述产品描述产品描述产品描述产品描述产品描述产品描述产品描述产品描述产品描述产品描述产品描述产品描述产品描述产品描述产品描述产品描述产品描述</p>
			  </div>
			</div>
		</div>
	</div>
	<div class="padding-big-top"></div>
</div>

	<!-- /主体 -->

	<!-- 底部 -->
	
<!-- 底部
    ================================================== -->
<div class="layout bg-gray bg-inverse padding-big-top padding-big-bottom">

	<div class="container padding hidden-l">
		<ul class="nav nav-sitemap">
			<li><a href="#">新闻资讯</a>
				<ul>
					<li><a href="#">新闻公告</a></li>
					<li><a href="#">业界资讯</a></li>
					<li><a href="#">媒体报道</a></li>
				</ul></li>
			<li><a href="#">产品中心</a>
				<ul>
					<li><a href="#">产品分类</a></li>
					<li><a href="#">产品品牌</a></li>
					<li><a href="#">产品特色</a></li>
				</ul></li>
			<li><a href="#">技术反馈</a>
				<ul>
					<li><a href="#">售后服务</a></li>
					<li><a href="#">营销网络</a></li>
					<li><a href="#">服务支持</a></li>
				</ul></li>
			<li><a href="#">联系方式</a>
				<ul>
					<li><a href="#"><span class="icon-qq"> QQ在线客服</a></li>
					<li><a href="#"><span class="icon-weixin"> 微信关注</a></li>
					<li><a href="#"><span class="icon-weibo"> 新浪微博 </a></li>
				</ul>
			</li>
		</ul>
	</div>

</div>
<div class="layout bg-black bg-inverse">
  <div class="container">
    <div class="navbar">
      <div class="navbar-head"><button class="button bg-gray icon-navicon" data-target="#navbar-footer"></button><a href="http://www.pintuer.com" target="_blank"><img class="logo" src="/OT/Public/Home/images/onethink.png" height="25" alt="拼图前端CSS框架" /></a></div>
      <div class="navbar-body nav-navicon" id="navbar-footer">
        <div class="navbar-text navbar-left hidden-s hidden-l"> <?php echo C('WEB_SITE_ICP');?></div>
      </div>
    </div>
  </div>
</div>


<script type="text/javascript">
(function(){
	var ThinkPHP = window.Think = {
		"ROOT"   : "/OT", //当前网站地址
		"APP"    : "/OT/index.php?s=", //当前项目地址
		"PUBLIC" : "/OT/Public", //项目公共目录地址
		"DEEP"   : "<?php echo C('URL_PATHINFO_DEPR');?>", //PATHINFO分割符
		"MODEL"  : ["<?php echo C('URL_MODEL');?>", "<?php echo C('URL_CASE_INSENSITIVE');?>", "<?php echo C('URL_HTML_SUFFIX');?>"],
		"VAR"    : ["<?php echo C('VAR_MODULE');?>", "<?php echo C('VAR_CONTROLLER');?>", "<?php echo C('VAR_ACTION');?>"]
	}
})();
</script>

<!-- 用于加载js代码 -->
<!-- 页面footer钩子，一般用于加载插件JS文件和JS代码 -->
<?php echo hook('pageFooter', 'widget');?>
<div class="hidden">
	<!-- 用于加载统计代码等隐藏元素 -->
	
</div>

	<!-- /底部 -->
</body>
</html>