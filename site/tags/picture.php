<?php

// Kirby `picture` tag
// Jannis R <mail@jannisr.de>
// https://gist.github.com/derhuerst/8524f98468c9467f63dd

/* This script takes a picture in the form of `(picture: girlfriend.jpg)`, creates a thumbnail and links that thumbnail to the original file. The thumbnail will have a width of 1300px, a compromise between small and big screens.
 * This script is made for Kirby v2.
 */

kirbytext::$tags['picture'] = array(
	'html' => function($tag) {
		// picture
		$picture = $tag->file($tag->attr('picture'));
		if(!$picture)
			return;

		// thumbnail
		$thumbnail = thumb($picture, array('width' => 1300));

		// HTML
		$img = html::img($thumbnail->url(), array(
			'alt'		=> html($picture->title())
		));
		$a = html::a($picture->url(), $img, array(
			'title'		=> html($picture->title())
		));

		$figure = new Brick('figure');
		$figure->append($a);
		return $figure->toString();
	}
);