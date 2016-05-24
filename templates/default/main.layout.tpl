<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>{block name=title}{/block} | {$domain}</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
	<meta name="description" content="{block name=meta_description}{/block}">
	<meta name="keywords" content="{block name=meta_keywords}{/block}">

	<link rel="shortcut icon" href="favicon.png">

	{block name=stylesheet}
		<link rel="stylesheet" href="{$assets}/css/bootstrap.min.css">
		<link rel="stylesheet" href="{$assets}/css/sweetalert.css">
		<link rel="stylesheet" href="{$assets}/css/font-awesome.min.css">
		<link rel="stylesheet" href="{$assets}/css/app.css">
	{/block}

	{block name=script}
		<script src="{$assets}/js/jquery.min.js"></script>
		<script src="{$assets}/js/bootstrap.min.js"></script>
		<script src="{$assets}/js/sweetalert.min.js"></script>
		<script src="{$assets}/js/parsley.min.js"></script>
		<script src="{$assets}/js/isotope.min.js"></script>
		<script src="{$assets}/js/app.js"></script>
	{/block}
</head>
<body>
	{block name=content}{/block}
	{block name=footer}
		<footer>
			<div class="container-fluid">
				<div class="row">
					<div class="col-sm-12">
						Copyright &copy; {'Y'|date} <a href="{$url}">{$domain}</a>
					</div>
				</div>
			</div>
		</footer>
	{/block}

{block name=analytics}
	{include file="default/partials/ga.tpl"}
{/block}
{block name=bottom}{/block}
</body>
</html>
