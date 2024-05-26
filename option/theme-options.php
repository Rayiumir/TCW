<?php

add_action( 'admin_init', 'custom_theme_options', 1 );

function custom_theme_options() {

$saved_settings = get_option( 'option_tree_settings', array() );
$custom_settings = array( 
    'contextual_help' => array( 
      'sidebar'       => ''
    ),
    'sections'        => array( 
      array(
        'id'          => 'header',
        'title'       => 'سربرگ'
      ),
      array(
        'id'          => 'OnOff',
        'title'       => 'فعال سازی'
      ),
      array(
        'id'          => 'footer',
        'title'       => 'پابرگ'
      ),

),

'settings'        => array( 

// General

array(
  'id'          => 'favicon',
  'label'       => 'فاویکون',
  'type'        => 'upload',
  'section'     => 'header',
  'operator'    => 'and'
),
array(
    'id'          => 'logo',
    'label'       => 'لوگو سایت',
    'type'        => 'upload',
    'section'     => 'header',
    'operator'    => 'and'
),

array(
    'id'          => 'on_1',
    'label'       => 'لوگو',
    'type'        => 'on-off',
    'section'     => 'OnOff',
    'operator'    => 'and'
),

array(
    'id'          => 'on_2',
    'label'       => 'شبکه اجتماعی',
    'type'        => 'on-off',
    'section'     => 'OnOff',
    'operator'    => 'and'
),

array(
    'id'          => 'on_3',
    'label'       => 'خدمات ما',
    'type'        => 'on-off',
    'section'     => 'OnOff',
    'operator'    => 'and'
),

array(
    'id'          => 'on_4',
    'label'       => 'نمونه کارها',
    'type'        => 'on-off',
    'section'     => 'OnOff',
    'operator'    => 'and'
),

array(
    'id'          => 'on_5',
    'label'       => 'آمار شرکت',
    'type'        => 'on-off',
    'section'     => 'OnOff',
    'operator'    => 'and'
),

array(
    'id'          => 'on_6',
    'label'       => 'تیم ما',
    'type'        => 'on-off',
    'section'     => 'OnOff',
    'operator'    => 'and'
),

array(
    'id'          => 'on_7',
    'label'       => 'مشتریان ما',
    'type'        => 'on-off',
    'section'     => 'OnOff',
    'operator'    => 'and'
),

array(
    'id'          => 'on_8',
    'label'       => 'تب های نوشته و دیدگاه ها',
    'type'        => 'on-off',
    'section'     => 'OnOff',
    'operator'    => 'and'
),

array(
    'id'          => 'on_9',
    'label'       => 'ابزارک ها',
    'type'        => 'on-off',
    'section'     => 'OnOff',
    'operator'    => 'and'
),

array(
    'id'          => 'about',
    'label'       => 'درباره ما',
    'type'        => 'textarea',
    'section'     => 'footer',
    'operator'    => 'and'
),

array(
    'id'          => 'text1',
    'label'       => 'تلگرام',
    'type'        => 'text',
    'section'     => 'footer',
    'operator'    => 'and'
),

array(
    'id'          => 'text2',
    'label'       => 'اینستاگرام',
    'type'        => 'text',
    'section'     => 'footer',
    'operator'    => 'and'
),

array(
    'id'          => 'text3',
    'label'       => 'واتساپ',
    'type'        => 'text',
    'section'     => 'footer',
    'operator'    => 'and'
),
  

));
  /* allow settings to be filtered before saving */
  $custom_settings = apply_filters( 'option_tree_settings_args', $custom_settings );
  /* settings are not the same update the DB */
  if ( $saved_settings !== $custom_settings ) {
    update_option( 'option_tree_settings', $custom_settings ); 
  }
}
