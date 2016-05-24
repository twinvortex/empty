<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="">
	<meta name="author" content="">

	<title>Administrator 1.0</title>

	<link href="{$assets}/css/bootstrap.min.css" rel="stylesheet">
	<link href="{$assets}/dist/css/metisMenu.min.css" rel="stylesheet">
	<link href="{$assets}/dist/css/sb-admin-2.css" rel="stylesheet">
	<link href="{$assets}/css/font-awesome.min.css" rel="stylesheet" type="text/css">

	<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 9]>
	<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
	<script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
	<![endif]-->

</head>

<body>

<div id="wrapper">

	{include file="admin/partials/sidebar.tpl"}

	<!-- Page Content -->
	<div id="page-wrapper">
		<div class="container-fluid">
			<div class="row">
				<div class="col-lg-12">
					<h1 class="page-header">{block name="menu_title"}{/block}</h1>
				</div>
				<div class="col-lg-12">
					{block name="content"}{/block}
				</div>
				<!-- /.col-lg-12 -->
			</div>
			<!-- /.row -->
		</div>
		<!-- /.container-fluid -->
	</div>
	<!-- /#page-wrapper -->

</div>
<!-- /#wrapper -->

<!-- jQuery -->
<script src="{$assets}/js/jquery.min.js"></script>

<!-- Bootstrap Core JavaScript -->
<script src="{$assets}/js/bootstrap.min.js"></script>

<!-- Metis Menu Plugin JavaScript -->
<script src="{$assets}/dist/js/metisMenu.min.js"></script>

<!-- Custom Theme JavaScript -->
<script src="{$assets}/dist/js/sb-admin-2.js"></script>

</body>

</html>
