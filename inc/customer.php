<?php

function Rayium_customer(){
    add_meta_box('Rayium_meta_boxs', 'اطلاعات مشتریان ما', 'Rayium_customers', 'customer', 'normal', 'high');
}
add_action('add_meta_boxes', 'Rayium_customer');

function Rayium_customers($post){
    wp_nonce_field(basename(__FILE__), 'Rayium_security_nonce');

    ?>
    <table>
        <tbody>
            <tr>
                <lable for="link">پیوند لوگو</lable>
                <input type="text" id="link" name="link" size="50" value="<?php echo get_post_meta($post->ID, 'link', true) ?>">
            </tr>
        </tbody>
    </table>
    <?php
}

function Rayium_save_customer($post_id) {
    
    $is_autosave = wp_is_post_autosave($post_id);
    $is_revision = wp_is_post_revision($post_id);

    $is_vali_nonce = (isset($_POST['Rayium_security_nonce']) && wp_verify_nonce($_POST['Rayium_security_nonce'], basename(__FILE__))) ? 'true' : 'false';


    if($is_autosave || $is_revision || !$is_vali_nonce){
        return;
    }

    if(defined('DOING_AUTOSAVE') && DOING_AUTOSAVE) return;

    if(isset($_POST['link'])){
        update_post_meta($post_id, 'link', $_POST['link']);
    }

}
add_action('save_post', 'Rayium_save_customer');