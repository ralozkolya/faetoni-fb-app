<table class="table">
	<tr>
		<th>სახელი</th>
		<th>პრიორიტეტი</th>
		<th>შეცვლა</th>
		<th>წაშლა</th>
	</tr>
	<?php foreach($items as $i): ?>
		<tr>
			<td><?php echo $i->ge_name; ?></td>
			<td><?php echo $i->priority; ?></td>
			<td>
				<a href="<?php echo base_url().'admin/edit_item/'.$i->id; ?>">
					<span class="glyphicon glyphicon-edit"></span>
				</a>
			</td>
			<td>
				<a class="delete" href="<?php echo base_url().'admin/delete_item/'.$i->id; ?>">
					<span class="glyphicon glyphicon-remove"></span>
				</a>
			</td>
		</tr>
	<?php endforeach; ?>
</table>