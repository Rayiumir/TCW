<!DOCTYPE html>
<html lang="fa" dir="rtl">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title><?php bloginfo("name"); wp_title(); ?></title>
	<?php
		$favicon = ot_get_option('favicon');
		if(!empty($favicon)){
	?>
	<link rel="icon" href="<?php echo $favicon; ?>" type="image/x-icon">
	<?php } ?>
	<!-- Style -->
	<?php wp_head() ?>
</head>

<body <?php body_class() ?>>