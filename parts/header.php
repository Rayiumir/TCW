<!-- سربرگ -->
<nav class="navbar navbar-expand-lg bg-body-tertiary">
		<div class="container">
			<a class="navbar-brand" href="#">
				<?php if(ot_get_option('on_1') != "off") { ?>
				<figure class="logo">
					<?php
					$logo = ot_get_option('logo');
					if(!empty($logo)){
					?>
					<img src="<?php echo $logo; ?>" class="img-fluid" alt="" srcset="">
					<?php } ?>
				</figure>
				<?php } ?>
			</a>
			<button class="navbar-toggler" type="button" data-bs-toggle="collapse"
				data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
				aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>
			<div class="collapse navbar-collapse" id="navbarSupportedContent">
				<?php
					wp_nav_menu(array(
						'theme_location' => 'main-menu',
						'container' => false,
						'menu_class' => '',
						'fallback_cb' => '__return_false',
						'items_wrap' => '<ul id="%1$s" class="navbar-nav me-auto mb-2 mb-md-0 %2$s">%3$s</ul>',
						'depth' => 2,
						'walker' => new bootstrap_5_wp_nav_menu_walker()
					));
				?>
				<?php if(ot_get_option('on_2') != "off") { ?>
				<div class="d-flex">
					<a href="<?php echo ot_get_option('text1'); ?>" title="تلگرام"><i class="fa-brands fa-telegram me-2 fa-2x"></i></a>
					<a href="<?php echo ot_get_option('text2'); ?>" title="واتساپ" ><i class="fa-brands fa-whatsapp me-2 fa-2x"></i></a>
					<a href="<?php echo ot_get_option('text3'); ?>" title="اینستاگرام" ><i class="fa-brands fa-instagram me-2 fa-2x"></i></a>
				</div>
				<?php } ?>
			</div>
		</div>
	</nav>
	<!-- پایان سربرگ -->