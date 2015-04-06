<?php if(!defined('KIRBY')) exit; ?>

title: site
pages:
	sort: flip
	template:
		- article
		- default
fields:
	title:
		label: title
		type: text
	summary:
		label: short description
		type: textarea
	description:
		label: description
		type: textarea
files: false