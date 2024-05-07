<?php

function Rayium_team(){
    add_meta_box('Rayium_meta_boxs', 'اطلاعات تیم ما', 'Rayium_teams', 'team', 'normal', 'high');
}
add_action('add_meta_boxes', 'Rayium_team');

function Rayium_teams($post){
    wp_nonce_field(basename(__FILE__), 'Rayium_security_nonce');

    ?>
    <table>
        <tbody>
            <tr>
                <lable for="telegram">آدرس تلگرام :</lable>
                <input type="text" id="telegram" name="telegram" size="50" value="<?php echo get_post_meta($post->ID, 'telegram', true) ?>">
            </tr>
            <br>
            <tr>
                <lable for="whatsapp">آدرس واتساپ :</lable>
                <input type="text" id="whatsapp" name="whatsapp" size="50" value="<?php echo get_post_meta($post->ID, 'whatsapp', true) ?>">
            </tr>
            <br>
            <tr>
                <lable for="instagram">آدرس اینستاگرام :</lable>
                <input type="text" id="instagram" name="instagram" size="50" value="<?php echo get_post_meta($post->ID, 'instagram', true) ?>">
            </tr>
        </tbody>
    </table>
    <?php
}

function Rayium_save_team($post_id) {
    
    $is_autosave = wp_is_post_autosave($post_id);
    $is_revision = wp_is_post_revision($post_id);

    $is_vali_nonce = (isset($_POST['Rayium_security_nonce']) && wp_verify_nonce($_POST['Rayium_security_nonce'], basename(__FILE__))) ? 'true' : 'false';


    if($is_autosave || $is_revision || !$is_vali_nonce){
        return;
    }

    if(defined('DOING_AUTOSAVE') && DOING_AUTOSAVE) return;

    if(isset($_POST['telegram'])){
        update_post_meta($post_id, 'telegram', $_POST['telegram']);
    }

    if(isset($_POST['whatsapp'])){
        update_post_meta($post_id, 'whatsapp', $_POST['whatsapp']);
    }

    if(isset($_POST['instagram'])){
        update_post_meta($post_id, 'instagram', $_POST['instagram']);
    }

}
add_action('save_post', 'Rayium_save_team');