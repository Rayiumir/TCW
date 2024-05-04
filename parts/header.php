<!-- سربرگ -->
<nav class="navbar navbar-expand-lg bg-body-tertiary">
		<div class="container">
			<a class="navbar-brand" href="#">
				<figure class="logo">
					<img src="<?php echo Rayium_Url; ?>/img/LogoRayium.png" class="img-fluid" alt="" srcset="">
				</figure>
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
				<div class="d-flex">
					<i class="fa-brands fa-telegram me-2 fa-2x"></i>
					<i class="fa-brands fa-whatsapp me-2 fa-2x"></i>
					<i class="fa-brands fa-instagram me-2 fa-2x"></i>
				</div>
			</div>
		</div>
	</nav>
	<!-- پایان سربرگ -->