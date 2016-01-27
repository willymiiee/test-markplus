<form method="POST" action="<?=base_url('job/update');?>">
	<input type="hidden" name="id" value="<?=$job['id'];?>">

	<div class="form-group">
		<label for="form-field-1" class="col-sm-3 control-label no-padding-right"> Project </label>

		<div class="col-sm-9" style="margin-bottom: 20px;">
			<input type="text" name="deskripsi" class="col-xs-10 col-sm-5" id="form-field-1" value="<?=$job['description'];?>">
		</div>
	</div>
	
	<div class="form-group">
		<label for="form-field-2" class="col-sm-3 control-label no-padding-right"> Developer </label>

		<div class="col-sm-9" style="margin-bottom:40px;">
			<select name="developer">
				<?php foreach ($developer as $dev): ?>
				<option value="<?=$dev['id'];?>" <?=($dev['id'] == $job['assign'] ? "selected" : "");?>><?=$dev['description'];?></option>
				<?php endforeach ?>
			</select>
		</div>
	</div>

	<center>
		<button type="submit" class="btn btn-info">
			<i class="ace-icon fa fa-check bigger-110"></i>
			Submit
		</button>
	</center>
</form>