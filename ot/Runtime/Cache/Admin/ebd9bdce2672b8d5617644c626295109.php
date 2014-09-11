<?php if (!defined('THINK_PATH')) exit();?><style>
	.lineD {border-bottom: 1px dashed #e2e2e2;}
	#themes {overflow: hidden;list-style: none;padding: 0;margin: 0;margin-top: 20px;}
	#themes li {float: left;padding: 10px;}
	#themes li.current {background: yellow;}
	#themes li a:hover{color: #f6f6f6}
</style>
<ul class="tab-nav nav">
	<li data-tab="tab1" class="current"><a href="javascript:void(0);">设置</a></li>
	<li data-tab="tab2" ><a href="javascript:void(0);">主题</a></li>
	<li data-tab="tab3" ><a href="javascript:void(0);">清除历史</a></li>
</ul>
<?php echo trace($data['config']['group']['options']['setting']['options']);?>
<div class="tab-content">
	<div style="heigh:50px; background-color:#FFC; border: 1px #CCC solid; padding:30px; color:#F00;">WebIM插件通过跨域JSONP实现，以保证对OneThink主站没有负载压力。使用前请前往【<a target="_blank" href="http://nextalk.im"><strong>http://nextalk.im</strong></a>】购买独立的消息服务器，或者申请免费在线ApiKey。</div>
	<div id="tab1" class="tab-pane in tab1">
		<?php
 $setting = $data['config']['group']['options']['setting']['options']; $theme = $data['config']['group']['options']['theme']['options']['theme']['value']; ?>
		<label class="item-label">
			注册域名:<span class="check-tips">在线版用户输入在nextalk.im中注册的域名</span>
		</label>
		<div class="controls">
			<input type="text" name="config[domain]" class="text input-large" value="<?php echo ($setting['domain']['value']); ?>">
		</div>
		<label class="item-label">
			注册ApiKey:
		</label>
		<div class="controls">
			<input type="text" name="config[apikey]" class="text input-large" value="<?php echo ($setting['apikey']['value']); ?>">
		</div>
		<label class="item-label">
			IM服务器:
		</label>
		<div class="controls">
			<input type="text" name="config[host]" class="text input-large" value="<?php echo ($setting['host']['value']); ?>">
		</div>
		<label class="item-label">
			IM服务器端口：
		</label>
		<div class="controls">
			<input type="text" name="config[port]" class="text input-large" value="<?php echo ($setting['port']['value']); ?>">
		</div>
		<label class="item-label">
			本地语言:
		</label>
		<div class="controls">
			<select name="config[local]">
				<option value="zh-CN">简体中文</option>
				<option value="zh-TW">繁体中文</option>
				<option value="en">English</option>
			</select>

		</div>
		<label class="item-label">
			表情：
		</label>
		<div class="controls">
			<input type="text" name="config[emot]" class="text input-large" value="<?php echo ($setting['emot']['value']); ?>">
		</div>
		<label class="item-label">
			工具条透明度:
		</label>
		<div class="controls">
			<input type="text" name="config[opacity]" class="text input-large" value="<?php echo ($setting['opacity']['value']); ?>">
		</div>
		<label class="item-label">
			关闭群组聊天:
		</label>
		<div class="controls">
			<label class="radio">
				<input type="radio" name="config[enable_room]" value="0" >是
			</label>
			<label class="radio">
				<input type="radio" name="config[enable_room]" value="1" checked>否
			</label>
		</div>
		<label class="item-label">
			关闭陌生人聊天:
		</label>
		<div class="controls">
			<label class="radio">
				<input type="radio" name="config[enable_chatlink]" value="0" >是
			</label>
			<label class="radio">
				<input type="radio" name="config[enable_chatlink]" value="1" checked>否
			</label>
		</div>
		<label class="item-label">
			显示真实姓名:
		</label>
		<div class="controls">
			<label class="radio">
				<input type="radio" name="config[show_realname]" value="1" >是
			</label>
			<label class="radio">
				<input type="radio" name="config[show_realname]" value="0" checked>否
			</label>
		</div>
		<label class="item-label">
			隐藏菜单:
		</label>
		<div class="controls">
			<label class="radio">
				<input type="radio" name="config[enable_menu]" value="0" >是
			</label>
			<label class="radio">
				<input type="radio" name="config[enable_menu]" value="1" checked>否
			</label>
		</div>
	</div>
	<div id="tab2" class="tab-pane tab2">
		<label class="item-label">设置主题</label>
		<div class="controls">
			<?php
 function scanDir2( $dir ) { $d = dir( $dir."/" ); $dn = array(); while ( false !== ( $f = $d->read() ) ) { if(is_dir($dir."/".$f) && $f!='.' && $f!='..') $dn[]=$f; } $d->close(); return $dn; } $theme_url = $path = ONETHINK_ADDON_PATH.'Webim/_static/static/themes'; $files = scanDir2($path); $themes = array(); foreach ($files as $k => $v){ $t_path = $path.'/'.$v; if(is_dir($t_path) && is_file($t_path."/jquery.ui.theme.css")) { $cur = $v == $_IMC['theme'] ? " class='current'" : ""; $themes[] = "<li$cur><a href=\"javascript:;\" onclick=\"fChange('$v',$(this));\"><img width=100 height=134 src='$theme_url/images/$v.png' alt='$v' title='$v'/></a></li>"; } } ?>
			<dl class="lineD">
                <dt></dt>
                <dd>
					<ul id="themes">
						<?php if(is_array($themes)): $i = 0; $__LIST__ = $themes;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$t): $mod = ($i % 2 );++$i; echo ($t); endforeach; endif; else: echo "" ;endif; ?>
					</ul>
                </dd>
            </dl>
		</div>
		<input type="hidden" name="config[theme]" id="theme" value="">
	</div>
	<div id="tab3" class="tab-pane tab3">
		<label class="item-label">清除历史：</label>
		<div class="controls">
			<select name="config[ago]" class="hide-data">
				<option value="weekago" >清除一周前历史</option>
				<option value="monthago" >清除一月前历史</option>
				<option value="3monthago" >清除三月前历史</option>
			</select>
			<a class="btn submit-btn ajax-post" hide-data="true" href="<?php echo addons_url('Webim://Webim/clearHistory');?>">确 定</a>
		</div>
	</div>
	<script type="text/javascript">
		/**
		 * 改变选中样式
		 * @param string key 选中样式Key值
		 * @param object this 点击按钮对象
		 * @return void
		 */
		var fChange = function(key, obj){
		    $('#themes').find('li').removeClass('current');
		    $(obj).parent().addClass('current');
		    $('#theme').val(key);
		    return false;
		}
		$('ul.tab-nav li').bind('click', function(){
			if($(this).index() == 2){
				$('button.submit-btn').hide();
			}else{
				$('button.submit-btn').show();
			}
		});
		$(function(){
			//多语言赋值
			Think.setValue('config[local]', "<?php echo ($setting['local']['value']); ?>");
			//群组聊天赋值
			Think.setValue('config[enable_room]', "<?php echo ($setting['enable_room']['value']); ?>");
			//陌生人聊天关闭
			Think.setValue('config[enable_chatlink]', "<?php echo ($setting['enable_chatlink']['value']); ?>");
			//显示真实姓名
			Think.setValue('config[show_realname]', "<?php echo ($setting['show_realname']['value']); ?>");
			//隐藏菜单
			Think.setValue('config[enable_menu]', "<?php echo ($setting['enable_menu']['value']); ?>");

			//设置高亮主题
			fChange(
				'<?php echo ($theme); ?>',
				$('#themes img[alt="<?php echo ($theme); ?>"]').parent()
			);
		});
	</script>
</div>