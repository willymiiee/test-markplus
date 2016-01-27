<form method="POST" action="<?=base_url('developer/update');?>">
	<input type="hidden" name="id" value="<?=$developer['id'];?>">

	<div class="form-group">
		<label for="form-field-1" class="col-sm-3 control-label no-padding-right"> Nama </label>

		<div class="col-sm-9" style="margin-bottom:40px;">
			<input type="text" name="nama" class="col-xs-10 col-sm-5" id="form-field-1" value="<?=$developer['description'];?>">
		</div>
	</div>

	<center>
		<button type="submit" class="btn btn-info">
			<i class="ace-icon fa fa-check bigger-110"></i>
			Submit
		</button>
	</center>
</form>