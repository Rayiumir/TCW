<?php

function Rayium_gallery() {
    add_meta_box('Rayium_gallery', 'گالری عکس', 'Rayium_gallery_callback', 'portfolio', 'normal', 'high');
}
add_action('add_meta_boxes', 'Rayium_gallery');

function Rayium_gallery_callback($post) {
    
    wp_nonce_field(basename(__FILE__), 'Rayium_nonce');

    $gallery = get_post_meta($post->ID, '_my_custom_gallery');

    if(!is_array($gallery)){
        $gallery = array();
    }

    echo '<a href="#" type="button" class="button button-secondary" id="upload_gallery_button">+ افزودن عکس ها</a>';
    echo '<div id="custom_gallery_container">';
    foreach($gallery as $row){
        $imgae_src = wp_get_attachment_image_src($row, 'thumbnail');
        if($imgae_src && !is_array($imgae_src)){
            echo '<div class="gallery_item" data-attachment_id="'.esc_attr( $row ).'">
            <img src="'.esc_url($imgae_src[0]).'">
            <a href="#" id="remove-image">حذف</a>
            </div>';
        }else{
            echo '<div>عکسی برای نمایش وجود ندارد.</div>';
        }
    }
    echo '</div>';
    echo '<input type="hidden" id="custom_gallery_input" name="my_custom_gallery" value="'.esc_attr( implode(',', $gallery) ).'"/>';
}

function Rayium_gallery_save($post_id) {
    
    if(!isset($_POST['my_custom_gallery_nonce']) || !wp_verify_nonce($_POST['my_custom_gallery_nonce'], basename(__FILE__))){
        return;
    }

    if(defined('DOING_AUTOSAVE') && DOING_AUTOSAVE){
        return;
    }

    if(isset($_POST['post_type']) && 'page' == $_POST['post_type']){
        if(!current_user_can('edit_page', $post_id)){
            return;
        }
    }else{
        if(!current_user_can('edit_post', $post_id)){
            return;
        }
    }

    if(isset($_POST['my_custom_gallery'])){
        $gallery = array_map('inval', explode(',', _POST['my_custom_gallery']));
        update_post_meta($post_id, '_my_custom_gallery', $gallery);
    }else{
        delete_post_meta($post_id, '_my_custom_gallery');
    }
}
add_action('save_post', 'Rayium_gallery_save');