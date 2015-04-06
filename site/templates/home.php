<?php snippet('head'); ?>
<body>
	<h1><?php echo $site->title(); ?></h1>
	<?php echo $page->text()->kirbytext(); ?>
	<nav role="navigation">
		<ul id="articles">
			<?php foreach($site->children()->visible() as $article): ?>
				<li>
					<a href="<?php echo $article->url(); ?>"><?php echo $article->title(); ?></a>&emsp;<time datetime="<?php echo $article->date('c'); ?>"><?php echo $article->date('d.m.Y'); ?></time>
				</li>
			<?php endforeach; ?>
		</ul>
	</nav>
</body>
</html>