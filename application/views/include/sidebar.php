<div class="sidebar responsive sidebar-fixed" id="sidebar">
	<ul class="nav nav-list">
		<li class="<?=($this->uri->segment(1) == "home" || $this->uri->segment(1) == "" ? "active" : "");?>">
			<a href="<?=base_url('home');?>">
				<span class="menu-text"> Dashboard </span>
			</a>

			<b class="arrow"></b>
		</li>

		<li class="<?=($this->uri->segment(1) == "developer" ? "active" : "");?>">
			<a href="<?=base_url('developer');?>">
				<span class="menu-text"> Developer </span>
			</a>

			<b class="arrow"></b>
		</li>

		<li class="<?=($this->uri->segment(1) == "job" ? "active" : "");?>">
			<a href="<?=base_url('job');?>">
				<span class="menu-text"> Job </span>
			</a>

			<b class="arrow"></b>
		</li>
	</ul><!-- /.nav-list -->

	<div class="sidebar-toggle sidebar-collapse" id="sidebar-collapse">
		<i class="ace-icon fa fa-angle-double-left" data-icon1="ace-icon fa fa-angle-double-left" data-icon2="ace-icon fa fa-angle-double-right"></i>
	</div>

	<script type="text/javascript">
		try{ace.settings.check('sidebar' , 'collapsed')}catch(e){}
	</script>
</div>
