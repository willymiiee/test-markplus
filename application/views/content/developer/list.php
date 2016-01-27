<table id="simple-table" class="table table-striped table-bordered table-hover">
	<thead>
		<tr>
			<th>Developers</th>
			<th>Actions</th>
		</tr>
	</thead>

	<tbody>
		<?php foreach ($developer as $dev): ?>
		<tr>
			<td><?=$dev['description'];?></td>
			<td>
				<a href="<?=base_url('developer/edit/'.$dev['id']);?>">
					<i class="fa fa-pencil"></i>
				</a>
				<a href="<?=base_url('developer/delete/'.$dev['id']);?>">
					<i class="fa fa-times"></i>
				</a>				
			</td>
		</tr>
		<?php endforeach ?>
	</tbody>
</table>

<form method="POST" action="<?=base_url('developer/insert');?>">
	<input type="text" name="nama" placeholder="Masukkan Nama" required>
	<button type="submit" class="btn btn-info btn-sm">Submit</button>
</form>