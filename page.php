<?php get_header() ?>
    <?php get_template_part('parts/header'); ?>
    <div class="col-md-7 offset-md-3 mt-5 mb-5">
        <?php
            if(have_posts()){
                while(have_posts()){
                    the_post();
        ?>
        <article class="card rounded-4">
            <div class="card-body">
                <figure class="text-center">
                    <?php the_post_thumbnail('full', ['class' => 'img-fluid rounded-4']);?>
                </figure>
                <h1 class="fs-3 fw-bold"><?php the_title() ?></h1>
                <?php the_content() ?>
            </div>
        </article>
        <?php } } ?>
    </div>
<?php get_footer() ?>