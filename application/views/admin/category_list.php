<table class="table">
	<tr>
		<th>სახელი</th>
		<th>პრიორიტეტი</th>
		<th class="text-center">ნაწარმი</th>
		<th class="text-center">შეცვლა</th>
		<th class="text-center">წაშლა</th>
	</tr>
	<?php foreach($categories as $c): ?>
		<tr>
			<td><?php echo $c->ge_name; ?></td>
			<td><?php echo $c->priority; ?></td>
			<td class="text-center">
				<a href="<?php echo base_url().'admin/items/'.$c->id; ?>">
					<span class="glyphicon glyphicon-list"></span>
				</a>
			</td>
			<td class="text-center">
				<a href="<?php echo base_url().'admin/edit_category/'.$c->id; ?>">
					<span class="glyphicon glyphicon-edit"></span>
				</a>
			</td>
			<td class="text-center">
				<a class="delete" href="<?php echo base_url().'admin/delete_category/'.$c->id; ?>">
					<span class="glyphicon glyphicon-remove"></span>
				</a>
			</td>
		</tr>
	<?php endforeach; ?>
</table>