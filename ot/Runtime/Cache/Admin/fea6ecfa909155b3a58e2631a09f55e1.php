<?php if (!defined('THINK_PATH')) exit();?><div class="span<?php echo ($addons_config["width"]); ?>">
	<div class="columns-mod">
		<div class="hd cf">
			<h5>产品团队</h5>
			<div class="title-opt">
			</div>
		</div>
		<div class="bd">
			<div class="sys-info">
				<table>
					<?php if(is_array($addons_config['content'])): foreach($addons_config['content'] as $key=>$item): ?><tr>
							<th><?php echo ($item[0]); ?></th>
							<td>
								<?php if(empty($item[2])): echo ($item[1]); ?>
								<?php else: ?>
								<a href="<?php echo ($item[2]); ?>" target="_blank"><?php echo ($item[1]); ?></a><?php endif; ?>
							</td>
						</tr><?php endforeach; endif; ?>
				</table>
			</div>
		</div>
	</div>
</div>