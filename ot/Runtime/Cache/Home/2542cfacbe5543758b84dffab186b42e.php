<?php if (!defined('THINK_PATH')) exit();?><div class="keypoint bg text-center">
	<h1><?php echo ($config['hello']); ?></h1>
	<p><?php echo ($config['desc']); ?></p>
	<p>
		<button class="button bg-main" onclick="window.location.href='<?php echo ($config['url']); ?>';">详细介绍</button>
	</p>
</div>
<div class="padding-small"></div>