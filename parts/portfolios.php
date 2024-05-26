<?php if(ot_get_option('on_4') != "off") { ?>
<!-- نمونه کارها -->
<section class="bg-light p-3">
		<div class="container">

			<div class="title text-center mb-5">
				<h2>نمونه کارها</h2>
			</div>

			<div class="buttons text-center mb-5">
				<button type="button" class="btn btn-secondary rounded-5" data-name="all">همه</button>
				<?php
					$terms = get_terms([
						'taxonomy' => 'CategoryPortfolio'
					]);

					foreach($terms as $row){
						
				?>
				<button type="button" class="btn btn-secondary rounded-5" data-name="<?php echo $row->slug; ?>"><?php echo $row->name; ?></button>
				<?php } ?>
			</div>

			<div class="cards">
				<div class="row">
					<?php
						$portfolio = new WP_Query(
							array(
								'post_type' => 'portfolio',
								'posts_per_page' => 12
							)
						);

						if($portfolio->have_posts()){
							while($portfolio->have_posts()){
								$portfolio->the_post();
								$terms = get_the_terms(get_the_ID(), 'CategoryPortfolio');
								$terms = join(', ', wp_list_pluck($terms, 'slug'));
					?>
					<div class="col-md-4">
						<div class="card item rounded-4" data-name="<?php echo $terms; ?>" data-aos="fade-up" data-aos-anchor-placement="top-bottom">
							<?php the_post_thumbnail('full', ['class' => 'img-fluid rounded-4']) ?>
							<div class="overlay title-overlay text-center text-white">
								<div class="row">
									<div class="col-md-8"><?php the_title() ?></div>
									<div class="col-md-4"><a href="<?php the_permalink()?>" class="text-white"><i class="fa-duotone fa-eye"></i></a></div>
								</div>
							</div>
						</div>
					</div>
					<?php } } ?>
				</div>
			</div>

		</div>
	</section>
	<!-- پایان نمونه کارها -->
	<?php } ?>