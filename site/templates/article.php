<?php snippet('head'); ?>

<body>
	<nav id="nav" role="navigation">
		<a id="up" href="<?php echo $page->parent()->url(); ?>"><?php echo $site->title(); ?> - <?php echo $site->homePage()->title(); ?> </a>
	</nav>

	<article id="article">
		<h1><?php echo $page->title(); ?></h1>
		<div id="meta">
			<span id="author" rel="author"><?php echo $page->author(); ?></span>
			on
			<time id="time" class="pubdate" datetime="<?php echo $page->date('c'); ?>"><?php echo $page->date('d.m.Y'); ?></time>
			<?php if($page->location()) echo $page->location(); ?>
		</div>
		<?php echo $page->text()->kirbytext(); ?>
	</article>

	<?php
	if(c::get('disqus'))
		snippet('disqus', array(
			'disqus_shortname' => c::get('disqus')
		));
	?>

	<nav id="pagination" role="navigation">
		<?php if($page->hasPrevVisible()): ?>
			<a id="previous" href="<?php echo $page->prev()->url(); ?>">&#8592; <?php echo $page->prev()->title(); ?></a>
		<?php endif; ?>
		<?php if($page->hasNextVisible()): ?>
			<a id="next" href="<?php echo $page->next()->url(); ?>"><?php echo $page->next()->title(); ?> &#8594;</a>
		<?php endif; ?>
	</nav>
</body>
</html>