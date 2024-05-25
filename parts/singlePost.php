<main class="container mt-5 mb-5">
    <div class="row">
        <section class="col-md-8">
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
                    <h1 class="fs-3 fw-bold mb-3"><?php the_title() ?></h1>
                    <?php the_content() ?>
                    <div class="mt-3 bio">
                        <i class="fa-duotone fa-list-tree"></i> <?php the_category(',') ?>
                        <i class="fa-duotone fa-calendar-days"></i> <?php the_time('M/d/Y') ?>
                        <i class="fa-duotone fa-eye"></i>
                        <span>
                            <?php
                                if(function_exists('get_post_view_count')){
                                    echo get_post_view_count(get_the_ID());
                                }
                            ?>
                        </span>
                        <div class="float-end">
                            <?php echo get_simple_likes_button( get_the_ID() ); ?>
                        </div>
                        <div class="float-end">
                            <i class="fa-duotone fa-comments ms-3"></i> <?php echo get_comments_number() ?>
                        </div>
                    </div>
                    <div class="tags mt-3">
                        <i class="fa-duotone fa-tags"></i> <?php the_tags('برچسب ها : ', ',', '') ?>
                    </div>
                </div>
            </article>
            <?php } } ?>
            <section class="card rounded-4 mt-3">
                <div class="card-body">
                    <?php comments_template(); ?>
                </div>
            </section>
        </section>
        <aside class="col-md-4">
            <?php get_sidebar() ?>
        </aside>
    </div>
</main>