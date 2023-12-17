<div class="footer">
	<div class="slide-inner">
		<a href="<?php echo $host; ?>">Home</a> <!-- Put your links to other pages here --> <a href="<?php echo $host; ?>privacy/" target="_blank">Privacy Policy</a>
		<p class="copyright">&copy; <?php echo date("Y"), PHP_EOL; ?> <?php echo $simpleurl; ?></p>
	</div>
	<?php if($googleanalytics_enabled == "yes") { ?>
	<script async src="https://www.googletagmanager.com/gtag/js?id=<?php echo $gtagid; ?>"></script>
	<script>
	  window.dataLayer = window.dataLayer || [];
	  function gtag(){dataLayer.push(arguments);}
	  gtag('js', new Date());
	
	  gtag('config', '<?php echo $gtagid; ?>');
	</script>
	<?php } ?>
</div>