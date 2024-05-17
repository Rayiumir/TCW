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
                    <div class="card rounded-4">
                        <div class="card-body">
                            <?php
                                $gallery = get_post_meta($post->ID, '_my_custom_gallery', true);

                                if(!empty($gallery) && is_array($gallery)){
                                    echo '<div class="row">';
                                        foreach($gallery as $row){
                                            $img_url = wp_get_attachment_image_src($row, 'full');

                                            if($img_url){
                                                echo '<div class="col-md-4 mb-2"><div class="card rounded-4" id="gallery"><a href="' . $img_url[0] . '">';
                                                echo '<img src="' . $img_url[0] . '" class="img-fluid rounded-4">';
                                                echo '</div></a></div>';
                                            }
                                        }
                                    echo '</div>';
                                }
                            ?>
                        </div>
                    </div>                 
                </div>
            </div>
        </div>
    </div>
</div>