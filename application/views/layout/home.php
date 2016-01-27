<!DOCTYPE html>
<html lang="en" id="listdata">
	<head>
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
		<meta charset="utf-8" />
		<title>Markplus Inc CRM</title>

		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0" />

		<!-- bootstrap & fontawesome -->
		<link rel="stylesheet" href="<?=ASSETS;?>css/bootstrap.min.css" />
		<link rel="stylesheet" href="<?=ASSETS;?>font-awesome/4.2.0/css/font-awesome.min.css" />

		<!-- page specific plugin styles -->

		<!-- text fonts -->
		<link rel="stylesheet" href="<?=ASSETS;?>fonts/fonts.googleapis.com.css" />

		<!-- ace styles -->
		<link rel="stylesheet" href="<?=ASSETS;?>css/ace.min.css" class="ace-main-stylesheet" id="main-ace-style" />

		<!-- inline styles related to this page -->

		<!-- ace settings handler -->

		<!-- HTML5shiv and Respond.js for IE8 to support HTML5 elements and media queries -->

		<script src="//code.jquery.com/jquery-1.12.0.min.js"></script>

	</head>

	<body class="no-skin">
		<?=$navbar;?>
		
		<div class="main-container" id="main-container">
			<?=$sidebar;?>

			<div class="main-content">
				<div class="main-content-inner">
					<div class="page-content">
						<div class="row">
							<div class="col-xs-12">
								<!-- PAGE CONTENT BEGINS -->
								<?=$content; ?>
								<!-- PAGE CONTENT ENDS -->
							</div><!-- /.col -->
						</div><!-- /.row -->
					</div><!-- /.page-content -->
				</div>
			</div><!-- /.main-content -->

			<a href="#" id="btn-scroll-up" class="btn-scroll-up btn btn-sm btn-inverse">
				<i class="ace-icon fa fa-angle-double-up icon-only bigger-110"></i>
			</a>
		</div><!-- /.main-container -->

		<!-- basic scripts -->

		<script src="<?=ASSETS;?>js/bootstrap.min.js"></script>

		<!-- page specific plugin scripts -->

		<script src="<?=ASSETS;?>js/jquery-ui.custom.min.js"></script>
		<script src="<?=ASSETS;?>js/jquery.ui.touch-punch.min.js"></script>
		<script src="<?=ASSETS;?>js/jquery.sparkline.min.js"></script>
		<script src="<?=ASSETS;?>js/jquery.flot.min.js"></script>
		<script src="<?=ASSETS;?>js/jquery.flot.resize.min.js"></script>

		<!-- ace scripts -->
		<script src="<?=ASSETS;?>js/ace-elements.min.js"></script>
		<script src="<?=ASSETS;?>js/ace.min.js"></script>

		<!-- inline scripts related to this page -->
		
	</body>
</html>
