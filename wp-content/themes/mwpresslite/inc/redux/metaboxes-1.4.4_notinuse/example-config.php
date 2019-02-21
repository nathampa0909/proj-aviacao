<?php

    // Replace this string your opt_name
    $opt_name = 'redux_extensions_demo';

    Redux::setExtensions( $opt_name, dirname( __FILE__ ) . '/../extensions/' );

    /*
     * If you are not using the Redux API (Redux 4.5+), you will need to manually include the metaboxes API.
     * include_once( 'FOLDER_PATH' . 'metaboxes_api.php' );
     */


    Redux_Metaboxes::setBox( $opt_name, array(
        'id'         => 'demo-layout',
        'title'      => __( 'Cool Options', 'redux-framework-demo' ),
        'post_types' => array( 'page', 'post', 'acme_product' ),
        //'page_template' => array('page-test.php'),
        //'post_format' => array('image'),
        'position'   => 'normal', // normal, advanced, side
        'priority'   => 'high', // high, core, default, low
        //'sidebar' => false, // enable/disable the sidebar in the normal/advanced positions
        'sections'   => array(

            array(
                'title'  => __( 'Home Settings', 'redux-framework-demo' ),
                'id' => 'home-settings',
                //'desc' => __('Redux Framework was created with the developer in mind. It allows for any theme developer to have an advanced theme panel with most of the features a developer would need. For more information check out the Github repo at: <a href="https://github.com/ReduxFramework/Redux-Framework">https://github.com/ReduxFramework/Redux-Framework</a>', 'redux-framework-demo'),
                'icon'   => 'el-icon-home',
                'fields' => array(
                    array(
                        'id'              => 'repeater-field-id',
                        'type'            => 'serialized_repeater',
                        'title'           => __( 'Repeater Demo', 'redux-framework-demo' ),
                        // TODO - Fix
                        'full_width'      => true,
                        // Make the repeater be full-width or not
                        'subtitle'        => __( '', 'redux-framework-demo' ),
                        'desc'            => __( '', 'redux-framework-demo' ),
                        // TODO - Fix
                        //'group_values'    => true, // Group all fields below within the repeater ID
                        // TODO - Fix
                        //'init_empty'      => true, // Init the repeater without any slides if empty.
                        'item_name'       => '',
                        // Add a name to the Add and Delete buttons to denote this repeater
                        //'bind_title'      => 'textarea_field',
                        // Bind the repeater block title to this field ID
                        //'static'          => 2,
                        // Set and limit the number of repeater blocks to be output
                        // TODO - Fix
                        //'start'           => 2,
                        // Set the number of repeater blocks to initially be output
                        //'limit'           => 2,
                        // Limit the number of repeater blocks a user can create
                        // TODO - Fix
                        //'sortable'        => false,
                        // Allow the users to sort the repeater blocks or not
                        // TODO - Fix
                        'active'          => false,
                        // Set an index number for default open panel, or false for all closed
                        // TODO - Fix???
                        //'height_style'    => '', // auto | fill | content (default)
                        /*
                            "auto": All panels will be set to the height of the tallest panel.
                            "fill": Expand to the available height based on the accordion's parent height.
                            "content": Each panel will be only as tall as its content.
                         */
                        // TODO - Fix
                        //'forced_collapse' => false,
                        // Only one slide can be open at once, or set to false to allow independent collapsing
                        // TODO - Fix
                        'collapsible'     => false,
                        // One slide will always be open if set to false
                        // TODO - Fix
                        'icons'           => array( // Default icon classes for open/close states
                                                    'open'   => 'ui-icon-minus',
                                                    'closed' => 'ui-icon-plus',
                        ),
                        'fields'          => array(
                            array(
                                'id'          => 'title_field',
                                'type'        => 'text',
                                //'placeholder' => __( 'Title', 'redux-framework-demo' ),
                            ),
                            array(
                                'id'          => 'textarea_field',
                                'type'        => 'color_rgba',
                                'placeholder' => __( 'Text Field', 'redux-framework-demo' ),
                                //'required'    => array( 'title_field', '!=', '' ),
                            ),
                            array(
                                'id'          => 'select_field',
                                'type'        => 'select',
                                'title'       => __( 'Select Field', 'redux-framework-demo' ),
                                'options'     => array(
                                    '1' => __( 'Option 1', 'redux-framework-demo' ),
                                    '2' => __( 'Option 2', 'redux-framework-demo' ),
                                    '3' => __( 'Option 3', 'redux-framework-demo' ),
                                ),
                                'placeholder' => __( 'Listing Field', 'redux-framework-demo' ),
                            ),
                            array(
                                'id'          => 'repeater2',
                                'type'        => 'serialized_repeater',
                                'title'       => __( 'Text repeat', 'redux-framework-demo' ),
                                'fields'=> array(
                                    array(
                                        'id'          => 'text_field_repeat_nested',
                                        'type'        => 'text',
                                        'placeholder' => __( 'Nested Title', 'redux-framework-demo' ),
                                    ),
                                )
                            ),
                            //array(
                            //    'id'          => 'select_field2',
                            //    'type'        => 'typography',
                            //    'title'       => __( 'Select Field', 'redux-framework-demo' ),
                            //    'placeholder' => __( 'Listing Field', 'redux-framework-demo' ),
                            //),
                            //array(
                            //    'id'          => 'editor_field',
                            //    'type'        => 'editor',
                            //    'placeholder' => __( 'Editor Field', 'redux-framework-demo' ),
                            //),
                        )
                    ),
                    array(
                        'id'       => 'webFonts',
                        'type'     => 'media',
                        'title'    => __( 'Web Fonts', 'redux-framework-demo' ),
                        'compiler' => 'true',
                        'mode'     => false,
                        // Can be set to false to allow any media type, or can also be set to any mime type.
                        'desc'     => __( 'Basic media uploader with disabled URL input field.', 'redux-framework-demo' ),
                        'subtitle' => __( 'Upload any media using the WordPress native uploader', 'redux-framework-demo' ),
                    ),
                    array(
                        'id'       => 'section-media-start',
                        'type'     => 'section',
                        'title'    => __( 'Media Options', 'redux-framework-demo' ),
                        'subtitle' => __( 'With the "section" field you can create indent option sections.' ),
                        'indent'   => true // Indent all options below until the next 'section' option is set.
                    ),
                    array(
                        'id'       => 'media',
                        'type'     => 'media',
                        'url'      => true,
                        'title'    => __( 'Media w/ URL', 'redux-framework-demo' ),
                        'compiler' => 'true',
                        //'mode' => false, // Can be set to false to allow any media type, or can also be set to any mime type.
                        'desc'     => __( 'Basic media uploader with disabled URL input field.', 'redux-framework-demo' ),
                        'subtitle' => __( 'Upload any media using the WordPress native uploader', 'redux-framework-demo' ),
                        'default'  => array( 'url' => 'http://s.wordpress.org/style/images/codeispoetry.png' ),
                    ),
                    array(
                        'id'     => 'section-media-end',
                        'type'   => 'section',
                        'indent' => false // Indent all options below until the next 'section' option is set.
                    ),
                    array(
                        'id'       => 'media-nourl',
                        'type'     => 'media',
                        'title'    => __( 'Media w/o URL', 'redux-framework-demo' ),
                        'desc'     => __( 'This represents the minimalistic view. It does not have the preview box or the display URL in an input box. ', 'redux-framework-demo' ),
                        'subtitle' => __( 'Upload any media using the WordPress native uploader', 'redux-framework-demo' ),
                    ),
                    array(
                        'id'       => 'media-nopreview',
                        'type'     => 'media',
                        'preview'  => false,
                        'title'    => __( 'Media No Preview', 'redux-framework-demo' ),
                        'desc'     => __( 'This represents the minimalistic view. It does not have the preview box or the display URL in an input box. ', 'redux-framework-demo' ),
                        'subtitle' => __( 'Upload any media using the WordPress native uploader', 'redux-framework-demo' ),
                    ),
                    array(
                        'id'       => 'gallery',
                        'type'     => 'gallery',
                        'title'    => __( 'Add/Edit Gallery', 'so-panels' ),
                        'subtitle' => __( 'Create a new Gallery by selecting existing or uploading new images using the WordPress native uploader', 'so-panels' ),
                        'desc'     => __( 'This is the description field, again good for additional info.', 'redux-framework-demo' ),
                    ),
                    array(
                        'id'      => 'slider1bDOVY23',
                        'type'    => 'slider',
                        'title'   => __( 'JQuery UI Slider Example 1', 'redux-framework-demo' ),
                        'desc'    => __( 'JQuery UI slider description. Min: 1, max: 500, step: 3, default value: 45', 'redux-framework-demo' ),
                        "default" => "45",
                        "min"     => "1",
                        "step"    => "3",
                        "max"     => "500",
                    ),
                    array(
                        'id'      => 'slider2bc',
                        'type'    => 'slider',
                        'title'   => __( 'JQuery UI Slider Example 2 w/ Steps (5)', 'redux-framework-demo' ),
                        'desc'    => __( 'JQuery UI slider description. Min: 0, max: 300, step: 5, default value: 75', 'redux-framework-demo' ),
                        "default" => "0",
                        "min"     => "0",
                        "step"    => "5",
                        "max"     => "300",
                    ),
                    array(
                        'id'      => 'spinner1bcd',
                        'type'    => 'spinner',
                        'title'   => __( 'JQuery UI Spinner Example 1', 'redux-framework-demo' ),
                        'desc'    => __( 'JQuery UI spinner description. Min:20, max: 100, step:20, default value: 40', 'redux-framework-demo' ),
                        "default" => "40",
                        "min"     => "20",
                        "step"    => "20",
                        "max"     => "100",
                    ),
                    array(
                        'id'       => 'switch-on',
                        'type'     => 'switch',
                        'title'    => __( 'Switch On', 'redux-framework-demo' ),
                        'subtitle' => __( 'Look, it\'s on!', 'redux-framework-demo' ),
                        "default"  => 1,
                    ),
                    array(
                        'id'       => 'switch-off',
                        'type'     => 'switch',
                        'title'    => __( 'Switch Off', 'redux-framework-demo' ),
                        'subtitle' => __( 'Look, it\'s on!', 'redux-framework-demo' ),
                        "default"  => 0,
                    ),
                )
            ),
            array(
                'title'  => __( 'Home Layout', 'redux-framework-demo' ),
                'desc'   => __( 'Redux Framework was created with the developer in mind. It allows for any theme developer to have an advanced theme panel with most of the features a developer would need. For more information check out the Github repo at: <a href="https://github.com/ReduxFramework/Redux-Framework">https://github.com/ReduxFramework/Redux-Framework</a>', 'redux-framework-demo' ),
                'icon'   => 'el-icon-home',
                'id' => 'home-layout',
                'fields' => array(
                    array(
                        "id"       => "homepage_blocks",
                        "type"     => "sorter",
                        "title"    => "Homepage Layout Manager",
                        "desc"     => "Organize how you want the layout to appear on the homepage",
                        "compiler" => 'true',
                        'required' => array( 'layout', '=', '1' ),
                        'options'  => array(
                            "enabled"  => array(
                                "placebo"    => "placebo", //REQUIRED!
                                "highlights" => "Highlights",
                                "slider"     => "Slider",
                                "staticpage" => "Static Page",
                                "services"   => "Services"
                            ),
                            "disabled" => array(
                                "placebo" => "placebo", //REQUIRED!
                            ),
                        ),
                    ),

                    array(
                        'id'       => 'slides',
                        'type'     => 'slides',
                        'title'    => __( 'Slides Options', 'redux-framework-demo' ),
                        'subtitle' => __( 'Unlimited slides with drag and drop sortings.', 'redux-framework-demo' ),
                        'desc'     => __( 'This field will store all slides values into a multidimensional array to use into a foreach loop.', 'redux-framework-demo' )
                    ),
//                    array(
//                        'id'          => 'slides',
//                        'type'        => 'slides',
//                        'title'       => __( 'Slides Options', 'redux-framework-demo' ),
//                        'subtitle'    => __( 'Unlimited slides with drag and drop sortings.', 'redux-framework-demo' ),
//                        'options'     => array(
//                            'flash'              => 'flash',
//                            'bounce'             => 'bounce',
//                            'shake'              => 'shake',
//                            'tada'               => 'tada',
//                            'wobble'             => 'wobble',
//                            'pulse'              => 'pulse',
//                            'flip'               => 'flip',
//                            'flipInX'            => 'flipInX',
//                            'flipOutX'           => 'flipOutX',
//                            'flipInY'            => 'flipInY',
//                            'flipOutY'           => 'flipOutY',
//                            'fadeIn'             => 'fadeIn',
//                            'fadeInUp'           => 'fadeInUp',
//                            'fadeInDown'         => 'fadeInDown',
//                            'fadeInLeft'         => 'fadeInLeft',
//                            'fadeInRight'        => 'fadeInRight',
//                            'fadeInUpBig'        => 'fadeInUpBig',
//                            'fadeInDownBig'      => 'fadeInDownBig',
//                            'fadeInLeftBig'      => 'fadeInLeftBig',
//                            'fadeInRightBig'     => 'fadeInRightBig',
//                            'fadeOut'            => 'fadeOut',
//                            'fadeOutUp'          => 'fadeOutUp',
//                            'fadeOutDown'        => 'fadeOutDown',
//                            'fadeOutLeft'        => 'fadeOutLeft',
//                            'fadeOutRight'       => 'fadeOutRight',
//                            'fadeOutUpBig'       => 'fadeOutUpBig',
//                            'fadeOutDownBig'     => 'fadeOutDownBig',
//                            'fadeOutLeftBig'     => 'fadeOutLeftBig',
//                            'fadeOutRightBig'    => 'fadeOutRightBig',
//                            'slideInDown'        => 'slideInDown',
//                            'slideInLeft'        => 'slideInLeft',
//                            'slideInRight'       => 'slideInRight',
//                            'slideOutUp'         => 'slideOutUp',
//                            'slideOutLeft'       => 'slideOutLeft',
//                            'slideOutRight'      => 'slideOutRight',
//                            'bounceIn'           => 'bounceIn',
//                            'bounceInDown'       => 'bounceInDown',
//                            'bounceInUp'         => 'bounceInUp',
//                            'bounceInLeft'       => 'bounceInLeft',
//                            'bounceInRight'      => 'bounceInRight',
//                            'bounceOut'          => 'bounceOut',
//                            'bounceOutDown'      => 'bounceOutDown',
//                            'bounceOutUp'        => 'bounceOutUp',
//                            'bounceOutLeft'      => 'bounceOutLeft',
//                            'bounceOutRight'     => 'bounceOutRight',
//                            'rotateIn'           => 'rotateIn',
//                            'rotateInDownLeft'   => 'rotateInDownLeft',
//                            'rotateInDownRight'  => 'rotateInDownRight',
//                            'rotateInUpLeft'     => 'rotateInUpLeft',
//                            'rotateInUpRight'    => 'rotateInUpRight',
//                            'rotateOut'          => 'rotateOut',
//                            'rotateOutDownLeft'  => 'rotateOutDownLeft',
//                            'rotateOutDownRight' => 'rotateOutDownRight',
//                            'rotateOutUpLeft'    => 'rotateOutUpLeft',
//                            'rotateOutUpRight'   => 'rotateOutUpRight',
//                            'lightSpeedIn'       => 'lightSpeedIn',
//                            'lightSpeedOut'      => 'lightSpeedOut',
//                            'hinge'              => 'hinge',
//                            'rollIn'             => 'rollIn',
//                            'rollOut'            => 'rollOut'
//                        ),
//                        'placeholder' => array(
//                            'title'       => "This is the title",
//                            'description' => "Description here",
//                            'url'         => "Link",
//                            'select'      => "Select an Animation",
//                        ),
//                        // 'select2' => array() // Select 2 options
//                        'desc'        => __( 'This field will store all slides values into a multidimensional array to use into a foreach loop.', 'redux-framework-demo' )
//                    ),

                    array(
                        'id'       => 'presets',
                        'type'     => 'image_select',
                        'presets'  => true,
                        'title'    => __( 'Preset', 'redux-framework-demo' ),
                        'subtitle' => __( 'This allows you to set a json string or array to override multiple preferences in your theme.', 'redux-framework-demo' ),
                        'default'  => 0,
                        'desc'     => __( 'This allows you to set a json string or array to override multiple preferences in your theme.', 'redux-framework-demo' ),
                        'options'  => array(
                            '1' => array(
                                'alt'     => 'Preset 1',
                                'img'     => ReduxFramework::$_url . '../sample/presets/preset1.png',
                                'presets' => array(
                                    'switch-on'     => 1,
                                    'switch-off'    => 1,
                                    'switch-custom' => 1
                                )
                            ),
                            '2' => array(
                                'alt'     => 'Preset 2',
                                'img'     => ReduxFramework::$_url . '../sample/presets/preset2.png',
                                'presets' => '{"slider1":"1", "slider2":"0", "switch-on":"0"}'
                            ),
                        ),
                    ),
                ),
            )
        )
    ) );

    Redux_Metaboxes::setBox( $opt_name, array(
        'id'         => 'demo-layout2',
        //'title' => __('Cool Options', 'redux-framework-demo'),
        'post_types' => array( 'page', 'post', 'acme_product' ),
        //'page_template' => array('page-test.php'),
        //'post_format' => array('image'),
        'position'   => 'side', // normal, advanced, side
        'priority'   => 'high', // high, core, default, low
        'sections'   => array(
            array(
                //'title'      => __( 'Home Settings', 'redux-framework-demo' ),
                //'desc' => __('Redux Framework was created with the developer in mind. It allows for any theme developer to have an advanced theme panel with most of the features a developer would need. For more information check out the Github repo at: <a href="https://github.com/ReduxFramework/Redux-Framework">https://github.com/ReduxFramework/Redux-Framework</a>', 'redux-framework-demo'),
                'icon_class' => 'icon-large',
                'icon'       => 'el-icon-home',
                'fields'     => array(
                    array(
                        'title'      => __( 'Cross Box Required', 'redux-framework-demo' ),
                        'desc'       => __( 'Required arguments work across metaboxes! Click on Home Layout under the Cool Options metabox, then adjust this field to see the fields within Home Layout visibility being modified.', 'redux-framework-demo' ),
                        'id'         => 'layout',
                        'default'    => 1,
                        'type'       => 'image_select',
                        'customizer' => array(),
                        'options'    => array(
                            0 => ReduxFramework::$_url . 'assets/img/1c.png',
                            1 => ReduxFramework::$_url . 'assets/img/2cr.png',
                        )
                    ),
                )
            )
        )
    ) );

    Redux_Metaboxes::setBox( $opt_name, array(
        'id'          => 'page-options',
        'title'       => __( 'Page Options', 'fusion-framework' ),
        'post_types'  => array( 'page', 'post', 'demo_metaboxes' ),
        //'page_template' => array('page-test.php'),
        'post_format' => array( '0' ),
        'position'    => 'side', // normal, advanced, side
        'priority'    => 'normal', // high, core, default, low
        'sidebar'     => false, // enable/disable the sidebar in the normal/advanced positions
        'sections'    => array(
            array(
                //'title'      => __( 'General Settings', 'redux-framework-demo' ),
                'icon_class' => 'icon-large',
                'icon'       => 'el-icon-home',
                'fields'     => array(
                    array(
                        'id'      => 'sidebar',
                        'title'   => __( 'Sidebar', 'fusion-framework' ),
                        'desc'    => 'This metabox is bound to the Post Format. It will only appear when the post format is set to standard.',
                        'type'    => 'select',
                        'data'    => 'sidebars',
                        'default' => 'None',
                    ),
                )
            ),
        ),
    ) );
