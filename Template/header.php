<html>
<head>
<?php wp_head(); ?>
    <?php
	$og = get_post_meta(get_the_ID(), 'og', true);
	if(!empty($og)) {
		echo $og;
	}
	?>
	<?php
	$schema = get_post_meta(get_the_ID(), 'schema', true);
	if(!empty($schema)) {
		echo $schema;
	}
	?>
