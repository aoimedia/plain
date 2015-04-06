<?php if(!defined('KIRBY')) exit; ?>

title: article
pages: false
files:
	fields:
		title:
			label: title
			type: text
fields:
	title:
		label: title
		type: text
	author:
		label: author
		type: text
	date:
		label: date
		type: date
		format: YYYY-MM-DD
	location:
		label: location
		type: text
		default: on earth
	line:
		type: line
	text:
		label: text
		type: textarea