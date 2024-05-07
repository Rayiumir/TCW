<?php

function Rayium_statictis(){
    add_meta_box('Rayium_meta_boxs', 'اطلاعات آمار شرکت', 'Rayium_statictiss', 'statictis', 'normal', 'high');
}
add_action('add_meta_boxes', 'Rayium_statictis');

function Rayium_statictiss($post){
    wp_nonce_field(basename(__FILE__), 'Rayium_security_nonce');

    ?>
    <table>
        <tbody>
            <tr>
                <lable for="iconOne">فونت آیکون</lable>
                <input type="text" id="iconOne" name="iconOne" size="50" value="<?php echo get_post_meta($post->ID, 'iconOne', true) ?>">
            </tr>
            <br>
            <tr>
                <lable for="number">تعداد</lable>
                <input type="text" id="number" name="number" size="50" value="<?php echo get_post_meta($post->ID, 'number', true) ?>">
            </tr>
        </tbody>
    </table>
    <?php
}

function Rayium_save_statictis($post_id) {
    
    $is_autosave = wp_is_post_autosave($post_id);
    $is_revision = wp_is_post_revision($post_id);

    $is_vali_nonce = (isset($_POST['Rayium_security_nonce']) && wp_verify_nonce($_POST['Rayium_security_nonce'], basename(__FILE__))) ? 'true' : 'false';


    if($is_autosave || $is_revision || !$is_vali_nonce){
        return;
    }

    if(defined('DOING_AUTOSAVE') && DOING_AUTOSAVE) return;

    if(isset($_POST['iconOne'])){
        update_post_meta($post_id, 'iconOne', $_POST['iconOne']);
    }

    if(isset($_POST['number'])){
        update_post_meta($post_id, 'number', $_POST['number']);
    }

}
add_action('save_post', 'Rayium_save_statictis');

