<!-- پابرگ -->
<footer class="footer p-3 text-white">
		<div class="container">
			<div class="row">
				<div class="col-md-4">
					<h5 class="fw-bold mb-4"><i class="fa-duotone fa-pen-nib"></i> درباره ما </h5>
					<p>
						<?php echo ot_get_option('about'); ?>
					</p>
				</div>

				<div class="col-md-4">
					<h5 class="fw-bold mb-4"><i class="fa-duotone fa-list-tree"></i> پیوند های مفید </h5>
					
					<ul>
						<?php wp_list_categories( array(
							'orderby'    => 'name',
							'show_count' => false,
							'exclude'    => array( 10 ),
							'title_li' => ''
						) ); ?> 
					</ul>
				</div>

				<div class="col-md-4">
					<h5 class="fw-bold"><i class="fa-duotone fa-share-nodes"></i> اشتراک گذاری </h5>
					
					<div class="mt-4 text-center">
						<a href="<?php echo ot_get_option('text1'); ?>" title="تلگرام"><i class="fa-brands fa-telegram me-2 fa-2x"></i></a>
						<a href="<?php echo ot_get_option('text2'); ?>" title="واتساپ" ><i class="fa-brands fa-whatsapp me-2 fa-2x"></i></a>
						<a href="<?php echo ot_get_option('text3'); ?>" title="اینستاگرام" ><i class="fa-brands fa-instagram me-2 fa-2x"></i></a>
					</div>
				</div>
			</div>
			<hr>
			<div class="text-center">
				طراحی شده توسط راییوم
			</div>
		</div>
	</footer>
	<!-- پایان پابرگ -->
	<!-- JavaScript -->
	<?php wp_footer() ?>
	<script>
		AOS.init({
			duration: 1000,
			easing: "ease-in-out",
			once: true,
			mirror: false
		});

		Fancybox.bind('#gallery a', {
			groupAll: true,
		});
		
	</script>
</body>

</html>
