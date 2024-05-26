<?php if(ot_get_option('on_3') != "off") { ?>
<!-- خدمات ما -->
<section class="p-3">
		<div class="title text-center mb-5">
			<h2>خدمات ما</h2>
		</div>
		<div class="container">
			<div class="row">
				<?php
					$services = new WP_Query(
						array(
							'post_type' => 'service',
							'posts_per_page' => '3'
						)
					);

					if($services->have_posts()){
						while($services->have_posts()){
							$services->the_post();
				?>
				<div class="col-md-4">
					<article class="card rounded-4 mb-2 " data-aos="fade-up" data-aos-anchor-placement="top-bottom">
						<div class="card-body">
							<div class="text-center">
								<?php
									$icon = get_post_meta($post->ID, 'icon', 'true');
									if(!empty($icon)){
								?>
								<i class="fa-brands <?php echo $icon; ?> fa-5x mb-3"></i>
								<?php } ?>
								<h2 class="fs-6 fw-bold"><?php the_title() ?></h2>
							</div>
							<p class="text-muted"><?php the_excerpt() ?></p>
						</div>
					</article>
				</div>
				<?php } } ?>
			</div>
		</div>
	</section>
	<!-- پایان خدمات ما -->
	<?php } ?>