<main class="container mt-5 mb-5">
    <div class="row">
        <section class="col-md-8">
            <?php
                $posts = new WP_Query(
                    array(
                        'post_type' =>'post',
                        'posts_per_page' => '5'
                    )
                );
                if($posts->have_posts()){
                    while($posts->have_posts()){
                        $posts->the_post();
            ?>
            <a href="<?php the_permalink()?>" class="text-decoration-none">
                <article class="card rounded-4 mb-3">
                    <div class="card-body">
                        <figure class="text-center">
                            <?php the_post_thumbnail('full', ['class' => 'img-fluid rounded-4']);?>
                        </figure>
                        <h1 class="fs-3 fw-bold mb-3"><?php the_title() ?></h1>
                        <?php the_excerpt()?>
                        <i class="fa-duotone fa-heart"></i> ۱۰۰۰
                        <div class="float-end">
                            <i class="fa-duotone fa-comments"></i> ۱۰۰۰
                        </div>
                    </div>
                </article>
            </a>
            <?php } } ?>
            <?php echo bootstrap_pagination(); ?>
        </section>
        <aside class="col-md-4">
            <?php get_sidebar() ?>
        </aside>
    </div>
</main>