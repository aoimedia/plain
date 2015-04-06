<!DOCTYPE HTML>

<html>
<head>
	<title><?php echo $page->title(); ?> – <?php echo $site->title(); ?></title>
	<meta charset="utf-8">
	<meta name="description" content="<?php echo $page->description() || ''; ?>">
	<meta name="author" content="<?php echo $page->description(); ?>">
	<meta name="apple-mobile-web-app-capable" content="yes">
	<meta name="viewport" content="width=device-width,initial-scale=1">
	<link rel="stylesheet" href="/assets/base.css">
	<link rel="stylesheet" href="/assets/<?php echo $page->template(); ?>.css">
</head>