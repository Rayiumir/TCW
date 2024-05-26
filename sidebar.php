<?php if(ot_get_option('on_8') != "off") { ?>
<div class="card rounded-4 mb-3">
    <div class="card-body">
        <ul class="nav nav-pills nav-fill gap-2 p-1 small bg-light rounded-5 shadow-sm" id="pills-tab" role="tablist">
            <li class="nav-item" role="presentation">
                <button class="nav-link rounded-5 active" id="pills-home-tab" data-bs-toggle="pill" data-bs-target="#pills-home" type="button" role="tab" aria-controls="pills-home" aria-selected="true"><i class="fa-duotone fa-sparkles"></i> نوشته جدید</button>
            </li>
            <li class="nav-item" role="presentation">
                <button class="nav-link rounded-5" id="pills-profile-tab" data-bs-toggle="pill" data-bs-target="#pills-profile" type="button" role="tab" aria-controls="pills-profile" aria-selected="false"><i class="fa-duotone fa-comments"></i> دیدگاه ها </button>
            </li>             
        </ul>
        <div class="tab-content" id="pills-tabContent">
            <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab" tabindex="0">
                <ul class="list-group list-group-flush mt-3">
                    <?php
                        $recent_post = new WP_Query(
                            array(
                                'post_type' => 'post',
                                'post_status' => 'publish',
                                'order' => 'DESC',
                                'orderby' => 'ID',
                                'posts_per_page' => '10'
                            )
                        );

                        if($recent_post->have_posts()){
                            while($recent_post->have_posts()){
                                $recent_post->the_post();
                    ?>
                    <li class="list-group-item">
                        <a href="<?php the_permalink() ?>" class="text-decoration-none text-dark"> <?php the_title() ?> </a>
                    </li>
                    <?php } } ?>
                </ul>
            </div>
            <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab" tabindex="0">
                <ul class="list-group list-group-numbered rounded-4 mt-3">
                    <?php
                        $comments = get_comments('status=approve&number=10');
                        foreach($comments as $row){
                    ?>
                    <li class="list-group-item d-flex justify-content-between align-items-start">
                        <div class="ms-2 me-auto">
                            <div class="fw-bold"><?php echo strip_tags($row->comment_author) ?> می گوید :</div>
                            <?php echo strip_tags($row->comment_content) ?>
                        </div>
                    </li>
                    <?php } ?>
                </ul>
            </div>
        </div>
    </div>
</div>
<?php } ?>
<?php if(ot_get_option('on_9') != "off") { ?>
    <?php dynamic_sidebar("sidebar") ?>
<?php } ?>