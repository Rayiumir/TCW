<?php if(ot_get_option('on_5') != "off") { ?>
<!-- آمار شرکت -->
<section class="parallax p-5 text-white">
		<div class="container text-center">
			<div class="row">
				<?php
					$statictis = new WP_Query(
						array(
							'post_type' => 'statictis',
							'posts_per_page' => 3
						)
					);

					if($statictis->have_posts()){
						while($statictis->have_posts()){
							$statictis->the_post();
				?>
				<div class="col-md-4">
					<?php
						$iconOne = get_post_meta($post->ID, 'iconOne', true);
						$number = get_post_meta($post->ID, 'number', true);
						if(!empty($iconOne) || !empty($number)) :
					?>
					<i class="fa-duotone <?php echo $iconOne; ?> fa-4x mb-4"></i>
					<h4><?php the_title() ?></h4>
					<h5>+<?php echo $number; ?></h5>
					<?php endif; ?>
				</div>
				<?php } } ?>
			</div>
		</div>
	</section>
	<!-- پایان آمار شرکت -->
	<?php } ?>