<table id="simple-table" class="table table-striped table-bordered table-hover">
	<thead>
		<tr>
			<th>Project</th>
			<th>Assign To</th>
			<th>Actions</th>
		</tr>
	</thead>

	<tbody>
		<?php foreach ($job as $j): ?>
		<tr>
			<td><?=$j['description'];?></td>
			<td><?=$j['assign_to'];?></td>
			<td>
				<a href="<?=base_url('job/edit/'.$j['id']);?>">
					<i class="fa fa-pencil"></i>
				</a>
				<a href="<?=base_url('job/delete/'.$j['id']);?>">
					<i class="fa fa-times"></i>
				</a>
			</td>
		</tr>
		<?php endforeach ?>
	</tbody>
</table>

<form method="POST" action="<?=base_url('job/insert');?>">
	<input type="text" name="deskripsi" placeholder="Masukkan Nama Proyek" required>
	<select name="developer" required>
		<option disabled selected>-- Pilih --</option>
		<?php foreach ($developer as $dev): ?>
		<option value="<?=$dev['id'];?>"><?=$dev['description'];?></option>
		<?php endforeach ?>
	</select>
	<button type="submit" class="btn btn-info btn-sm">Submit</button>
</form>