<?php
/**
 * Initialize the custom Meta Boxes. 
 */
add_action( 'admin_init', 'custom_meta_boxes' );

/**
 * Meta Boxes By Reza Kianoosh From IranThemes.com And Rkianoosh.ir.
 *
 * You can find all the available option types in demo-theme-options.php.
 *
 * @return    void
 * @since     2.0
 */
function custom_meta_boxes() {
  
$kianoosh_box = array(
    'id'          => 'reza_kianoosh_box',
    'title'       => __( 'تنظیمات دانلود و پیوند', 'iranthemes' ),
    'desc'        => '',
    'pages'       => array( 'post' ),
    'context'     => 'normal',
    'priority'    => 'high',
    'fields'      => array(
        array(
            'label'       => 'پیوند',
            'id'          => 'links',
            'type'        => 'text',
            'desc'        =>'',
        ),
        array(
            'label'       => 'گیت هاب',
            'id'          => 'github',
            'type'        => 'text',
            'desc'        =>'',
        ),
        array(
            'label'       => 'دانلود',
            'id'          => 'download',
            'type'        => 'text',
            'desc'        =>'',
        ),
        array(
            'label'       => 'پیش نمایش',
            'id'          => 'eyes',
            'type'        => 'text',
            'desc'        =>'',
        ),
    )
);
	
$kianoosh_box = array(
    'id'          => 'reza_kianoosh_box',
    'title'       => __( 'تنظیمات محصول', 'iranthemes' ),
    'desc'        => '',
    'pages'       => array( 'download' ),
    'context'     => 'normal',
    'priority'    => 'high',
    'fields'      => 
        array(
            array(
                'label'       => 'عنوان انگلیسی',
                'id'          => 'texten',
                'type'        => 'text',
                'desc'        =>'',
            ),
			
			array(
                'label'       => 'نسخه به روز رسانی',
                'id'          => 'Version',
                'type'        => 'text',
                'desc'        =>'',
            ),

            array(
                'label'       => __( 'زبان و چارچوب ها', 'theme-text-domain' ),
                'id'          => 'tab1',
                'type'        => 'tab'
            ),

            array(
                'id'          => 'k1',
                'desc'        => 'اچ تی ام ال (HTML)',
                'type'        => 'checkbox',
                'section'     => 'option_types',
                'operator'    => 'and',
                'choices'     => array( 
                    array(
                    'value'       => 'Yes',
                    'label'       => __( 'فعال', 'theme-text-domain' ),
                    'src'         => ''
                    )
                )
            ),

            array(
                'id'          => 'k2',
                'desc'        => 'سی اس اس (CSS)',
                'type'        => 'checkbox',
                'section'     => 'option_types',
                'operator'    => 'and',
                'choices'     => array( 
                    array(
                    'value'       => 'Yes',
                    'label'       => __( 'فعال', 'theme-text-domain' ),
                    'src'         => ''
                    )
                )
            ),
            array(
                'id'          => 'k3',
                'desc'        => 'جاوا اسکریپت (Javascript)',
                'type'        => 'checkbox',
                'section'     => 'option_types',
                'operator'    => 'and',
                'choices'     => array( 
                    array(
                    'value'       => 'Yes',
                    'label'       => __( 'فعال', 'theme-text-domain' ),
                    'src'         => ''
                    )
                )
            ),
            array(
                'id'          => 'k4',
                'desc'        => 'پی اچ پی (PHP)',
                'type'        => 'checkbox',
                'section'     => 'option_types',
                'operator'    => 'and',
                'choices'     => array( 
                    array(
                    'value'       => 'Yes',
                    'label'       => __( 'فعال', 'theme-text-domain' ),
                    'src'         => ''
                    )
                )
            ),
            array(
                'id'          => 'k5',
                'desc'        => 'بوت استرپ (Bootstrap)',
                'type'        => 'checkbox',
                'section'     => 'option_types',
                'operator'    => 'and',
                'choices'     => array( 
                    array(
                    'value'       => 'Yes',
                    'label'       => __( 'فعال', 'theme-text-domain' ),
                    'src'         => ''
                    )
                )
            ),
            array(
                'id'          => 'k6',
                'desc'        => 'وردپرس (Wordpress)',
                'type'        => 'checkbox',
                'section'     => 'option_types',
                'operator'    => 'and',
                'choices'     => array( 
                    array(
                    'value'       => 'Yes',
                    'label'       => __( 'فعال', 'theme-text-domain' ),
                    'src'         => ''
                    )
                )
            ),

            array(
                'label'       => __( 'پیش نمایش', 'theme-text-domain' ),
                'id'          => 'tab2',
                'type'        => 'tab'
            ),
            array(
                    'label'       => __( 'پیوند پیش نمایش', 'iranthemes' ),
                    'id'          => 'demolink1',
                    'type'        => 'text',
                    'desc'        => '',
            ),

            array(
                'label'       => __( 'جلسات آموزش', 'theme-text-domain' ),
                'id'          => 'tab3',
                'type'        => 'tab'
	        ),
            array(
                'id'          => 'list_item',
                'label'       => __( 'تعداد جلسات آموزشی', 'theme-text-domain' ),
                'type'        => 'list-item',
                'section'     => 'option_types',
                'operator'    => 'and',
                'settings'    => 
                    array(
                        array(
                            'id'          => 'text1',
                            'desc'        => 'عنوان',
                            'type'        => 'text',
                            'rows'        => '5',
                            'operator'    => 'and'
                        ),
                        array(
                            'id'          => 'clock1',
                            'desc'        => 'مدت زمان',
                            'type'        => 'text',
                            'rows'        => '5',
                            'operator'    => 'and'
                        ),
                        array(
                            'id'          => 'date1',
                            'desc'        => 'تاریخ انتشار',
                            'type'        => 'text',
                            'rows'        => '5',
                            'operator'    => 'and'
                        ),
                    )
                ),
            array(
                'label'       => __( 'اطلاعات محصول', 'theme-text-domain' ),
                'id'          => 'tab4',
                'type'        => 'tab'
            ),
            array(
                'label'       => __( ' مدت دوره', 'iranthemes' ),
                'id'          => 't1',
                'type'        => 'text',
                'desc'        => '',
            ),
            array(
                'label'       => __( ' تعداد جلسات', 'iranthemes' ),
                'id'          => 't2',
                'type'        => 'text',
                'desc'        => '',
            ),
            array(
                'label'       => __( ' وضعیت در', 'iranthemes' ),
                'id'          => 't3',
                'type'        => 'text',
                'desc'        => '',
            ),
            array(
                'label'       => __( ' به روز رسانی', 'iranthemes' ),
                'id'          => 't4',
                'type'        => 'text',
                'desc'        => '',
            ),
            array(
                'label'       => __( 'سطح دوره', 'iranthemes' ),
                'id'          => 't5',
                'type'        => 'text',
                'desc'        => '',
            ),
            array(
                'label'       => __( 'فعال سازی', 'iranthemes' ),
                'id'          => 't6',
                'type'        => 'checkbox',
                'desc'        => '',
                'choices'     => array( 
                    array(
                    'value'       => 'Yes',
                    'label'       => __( 'فعال', 'theme-text-domain' ),
                    'src'         => ''
                    )
                )
            ),
        )
    );

if ( function_exists( 'ot_register_meta_box' ) )
    ot_register_meta_box( $kianoosh_box );
}