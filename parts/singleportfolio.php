<div class="container">
    <div class="p-4">
        <div class="card rounded-4">
            <div class="card-body">
                <div class="row">
                    <div class="col-md-6">
                        <figure>
                            <?php the_post_thumbnail('full', ['class' => 'img-fluid rounded-4']);?>
                        </figure>
                    </div>
                    <div class="col-md-6">
                        <h2 class="fs-3 fw-bold"><?php the_title() ?></h2>
                        <?php the_content() ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>