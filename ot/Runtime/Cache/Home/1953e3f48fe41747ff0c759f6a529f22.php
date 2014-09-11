<?php if (!defined('THINK_PATH')) exit();?><div class="banner" data-interval="<?php echo ($config['second']); ?>" data-style="border-main">
	<div class="carousel">
		<?php if(is_array($images)): foreach($images as $key=>$item): ?><div class="item">
				<a href="<?php echo ($urls[$key]); ?>" target="_bank"><img src="/OT/<?php echo ($item['path']); ?>" width="100%" /></a>
			</div><?php endforeach; endif; ?>
	</div>
</div>
<div class="padding-small"></div>