<?php if(ot_get_option('on_6') != "off") { ?>
<!-- تیم ما -->
<section class="bg-light p-5">
		<div class="container">
			<div class="title text-center mb-5">
				<h2>تیم ما</h2>
			</div>
	
			<div class="row">
				<?php
					$team = new WP_Query(
						array(
							'post_type' => 'team',
							'posts_per_page' => 4
						)
					);

					if($team->have_posts()){
						while($team->have_posts()){
							$team->the_post();
				?>
				<div class="col-md-3">
					<div class="card text-center rounded-4" data-aos="fade-up" data-aos-duration="1000">
						<div class="card-body">
							<figure class="team">
								<?php echo the_post_thumbnail('full', ['class' => 'rounded-5']); ?>
							</figure>
							<h2 class="fs-4 fw-bold"><?php the_title() ?></h2>
							<h6><?php the_excerpt()?></h6>
							<div class="social mt-4">
								<?php
									$telegram = get_post_meta($post->ID, 'telegram', true);
									$whatsapp = get_post_meta($post->ID, 'whatsapp', true);
									$instagram = get_post_meta($post->ID, 'instagram', true);

									if(!empty($telegram) || !empty($whatsapp) || !empty($instagram)) :
								?>
								<a href="<?php echo $telegram; ?>" class="text-dark"><i class="fa-brands fa-telegram me-2 fa-2x"></i></a>
								<a href="<?php echo $whatsapp; ?>" class="text-dark"><i class="fa-brands fa-whatsapp me-2 fa-2x"></i></a>
								<a href="<?php echo $instagram; ?>" class="text-dark"><i class="fa-brands fa-instagram me-2 fa-2x"></i></a>
								<?php endif; ?>
							</div>
						</div>
					</div>
				</div>
				<?php } } ?>
			</div>
		</div>
	</section>
	<!-- پایان تیم ما -->
	<?php } ?>