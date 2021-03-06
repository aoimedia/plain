<?php

// Kirby Disqus snippet
// by Bastian Allgeier
// https://github.com/bastianallgeier/kirbycms-extensions/tree/master/snippets/disqus

// set the defaults
if(!isset($disqus_shortname)) die('Please pass the disqus shortname');
if(!isset($disqus_title))      $disqus_title = $page->title();
if(!isset($disqus_developer))  $disqus_developer = false;
if(!isset($disqus_identifier)) $disqus_identifier = $page->uri();
if(!isset($disqus_url))        $disqus_url = thisURL();

$disqus_title     = addcslashes($disqus_title, "'");
$disqus_developer = ($disqus_developer) ? 'true' : 'false';

?>
<div id="disqus_thread" class="box">
	<script type="text/javascript">
		var
			disqus_shortname  = '<?php echo $disqus_shortname ?>',
			disqus_title      = '<?php echo html($disqus_title) ?>',
			disqus_developer  = '<?php echo $disqus_developer ?>',
			disqus_identifier = '<?php echo $disqus_identifier ?>',
			disqus_url        = '<?php echo $disqus_url ?>';

		(function(){
			var dsq = document.createElement('script');
			dsq.type = 'text/javascript';
			dsq.async = true;
			dsq.src = '//' + disqus_shortname + '.disqus.com/embed.js';
			(document.getElementsByTagName('head')[0] || document.getElementsByTagName('body')[0]).appendChild(dsq);
		})();
	</script>
	<noscript>
		<p>We can't show you the comments to this article, probably because you have JavaScript disabled or a script blocker enabled.</p>
	</noscript>
</div>