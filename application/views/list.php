<?php if(count($items)): ?>
	<?php foreach($items as $i): ?>
		<?php if($i->price_1 != 0 && $i->price_2 != 0): ?>
			<?php if($i->label_1 || $i->label_2): ?>
				<div class="row labels">
					<div class="col-xs-2 col-xs-offset-8"><?php echo $i->label_1; ?></div>
					<div class="col-xs-2"><?php echo $i->label_2; ?></div>
				</div>
			<?php endif; ?>
			<div class="row item">
				<div class="col-xs-8"><?php echo $i->name; ?></div>
				<div class="col-xs-2 price"><?php echo $i->price_1; ?></div>
				<div class="col-xs-2 price"><?php echo $i->price_2; ?></div>
			</div>
		<?php elseif($i->price_1 != 0): ?>
			<div class="row item">
				<div class="col-xs-8"><?php echo $i->name; ?></div>
				<div class="col-xs-2 col-xs-offset-2 price"><?php echo $i->price_1; ?></div>
			</div>
		<?php else: ?>
			<div class="row item">
				<div class="col-xs-8"><?php echo $i->name; ?></div>
				<div class="col-xs-2 col-xs-offset-2 price"><?php echo $i->price_2; ?></div>
			</div>
		<?php endif; ?>
	<?php endforeach; ?>
<?php else: ?>
	<h2 class="text-center"><?php echo lang('no_items'); ?></h2>
<?php endif; ?>