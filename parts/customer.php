<?php if(ot_get_option('on_7') != "off") { ?>
<!-- مشتریان ما -->
<section class="p-3">
		<div class="container">
			<div class="title text-center mb-5">
				<h2>مشتریان ما</h2>
			</div>

			<div class="row">
				<?php
					$customer = new WP_Query(
						array(
							'post_type' => 'customer',
							'posts_per_page' => 6
						)
					);

					if($customer->have_posts()){
						while($customer->have_posts()){
							$customer->the_post();
				?>
				<div class="col-6 col-md-2" data-aos="fade-up" data-aos-duration="1000">
					<?php
						$link = get_post_meta($post->ID, 'link', true);
						if(!empty($link)) :
					?>
					<a href="<?php echo $link; ?>" class="text-dark">
						<figure>
							<?php echo the_post_thumbnail('full', ['class' => 'img-fluid rounded-4']); ?>
						</figure>
					</a>
					<?php endif; ?>
				</div>
				<?php } } ?>
			</div>
		</div>
	</section>
	<?php } ?>
	<!-- پایان مشتریان ما -->