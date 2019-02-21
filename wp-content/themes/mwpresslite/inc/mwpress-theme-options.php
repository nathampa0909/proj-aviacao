<?php
$iconmwpress = ''.get_template_directory_uri().'/assets/img/icons_mwpress/icon_mwpress.png';
    /**
     * ReduxFramework Barebones Sample Config File
     * For full documentation, please visit: http://docs.reduxframework.com/
     */

    if ( ! class_exists( 'Redux' ) ) {
        return;
    }

    // This is your option name where all the Redux data is stored.
    $opt_name = "mwpress_opt";

    /**
     * ---> SET ARGUMENTS
     * All the possible arguments for Redux.
     * For full documentation on arguments, please refer to: https://github.com/ReduxFramework/ReduxFramework/wiki/Arguments
     * */

    $theme = wp_get_theme(); // For use with some settings. Not necessary.

    $args = array(
        // TYPICAL -> Change these values as you need/desire
        'opt_name'             => $opt_name,
        // This is where your data is stored in the database and also becomes your global variable name.
        'display_name'         => $theme->get( 'Name' ),
        // Name that appears at the top of your panel
        'display_version'      => $theme->get( 'Version' ),
        // Version that appears at the top of your panel
        'menu_type'            => 'menu',
        //Specify if the admin menu should appear or not. Options: menu or submenu (Under appearance only)
        'allow_sub_menu'       => true,
        // Show the sections below the admin menu item or not
        'menu_title'           => __( 'MWPRESS', 'redux-framework-demo' ),
        'page_title'           => __( 'MWPRESS', 'redux-framework-demo' ),
        // You will need to generate a Google API key to use this feature.
        // Please visit: https://developers.google.com/fonts/docs/developer_api#Auth
        'google_api_key'       => '',
        // Set it you want google fonts to update weekly. A google_api_key value is required.
        'google_update_weekly' => false,
        // Must be defined to add google fonts to the typography module
        'async_typography'     => true,
        // Use a asynchronous font on the front end or font string
        //'disable_google_fonts_link' => true,                    // Disable this in case you want to create your own google fonts loader
        'admin_bar'            => true,
        // Show the panel pages on the admin bar
        'admin_bar_icon'       => 'dashicons-portfolio',
        // Choose an icon for the admin bar menu
        'admin_bar_priority'   => 50,
        // Choose an priority for the admin bar menu
        'global_variable'      => '',
        // Set a different name for your global variable other than the opt_name
        'dev_mode'             => false,
        // Show the time the page took to load, etc
        'update_notice'        => false,
        // If dev_mode is enabled, will notify developer of updated versions available in the GitHub Repo
        'customizer'           => true,
        // Enable basic customizer support
        //'open_expanded'     => true,                    // Allow you to start the panel in an expanded way initially.
        //'disable_save_warn' => true,                    // Disable the save warning when a user changes a field

        // OPTIONAL -> Give you extra features
        'page_priority'        => 10,
        // Order where the menu appears in the admin area. If there is any conflict, something will not show. Warning.
        'page_parent'          => 'themes.php',
        // For a full list of options, visit: http://codex.wordpress.org/Function_Reference/add_submenu_page#Parameters
        'page_permissions'     => 'manage_options',
        // Permissions needed to access the options panel.
        'menu_icon'            => ''.get_template_directory_uri().'/assets/img/icons_mwpress/icon_mwpress.png',
        // Specify a custom URL to an icon
        'last_tab'             => '',
        // Force your panel to always open to a specific tab (by id)
        'page_icon'            => 'icon-themes',
        // Icon displayed in the admin panel next to your menu_title
        'page_slug'            => 'mwpress_options',
        // Page slug used to denote the panel
        'save_defaults'        => true,
        // On load save the defaults to DB before user clicks save or not
        'default_show'         => false,
        // If true, shows the default value next to each field that is not the default value.
        'default_mark'         => '',
        // What to print by the field's title if the value shown is default. Suggested: *
        'show_import_export'   => true,
        // Shows the Import/Export panel when not used as a field.

        // CAREFUL -> These options are for advanced use only
        'transient_time'       => 60 * MINUTE_IN_SECONDS,
        'output'               => true,
        // Global shut-off for dynamic CSS output by the framework. Will also disable google fonts output
        'output_tag'           => true,
        // Allows dynamic CSS to be generated for customizer and google fonts, but stops the dynamic CSS from going to the head
        // 'footer_credit'     => '',                   // Disable the footer credit of Redux. Please leave if you can help it.

        // FUTURE -> Not in use yet, but reserved or partially implemented. Use at your own risk.
        'database'             => '',
        // possible: options, theme_mods, theme_mods_expanded, transient. Not fully functional, warning!

        'use_cdn'              => true,
        // If you prefer not to use the CDN for Select2, Ace Editor, and others, you may download the Redux Vendor Support plugin yourself and run locally or embed it in your code.

        //'compiler'             => true,

        // HINTS
        'hints'                => array(
            'icon'          => 'el el-question-sign',
            'icon_position' => 'right',
            'icon_color'    => 'lightgray',
            'icon_size'     => 'normal',
            'tip_style'     => array(
                'color'   => 'light',
                'shadow'  => true,
                'rounded' => false,
                'style'   => '',
            ),
            'tip_position'  => array(
                'my' => 'top left',
                'at' => 'bottom right',
            ),
            'tip_effect'    => array(
                'show' => array(
                    'effect'   => 'slide',
                    'duration' => '500',
                    'event'    => 'mouseover',
                ),
                'hide' => array(
                    'effect'   => 'slide',
                    'duration' => '500',
                    'event'    => 'click mouseleave',
                ),
            ),
        )
    );

   
    // Panel Intro text -> before the form
    if ( ! isset( $args['global_variable'] ) || $args['global_variable'] !== false ) {
        if ( ! empty( $args['global_variable'] ) ) {
            $v = $args['global_variable'];
        } else {
            $v = str_replace( '-', '_', $args['opt_name'] );
        }
        $args['intro_text'] = sprintf( __( '<p>Bem vindo ao painel de configurações do MWPRESS</p>', 'mwpress' ), $v );
    } else {
        $args['intro_text'] = __( '<p>This text is displayed above the options panel. It isn\'t required, but more info is always better! The intro_text field accepts all HTML.</p>', 'redux-framework-demo' );
    }

    // Add content after the form.
  //  $args['footer_text'] = __( '<p>This text is displayed below the options panel. It isn\'t required, but more info is always better! The footer_text field accepts all HTML.</p>', 'redux-framework-demo' );

    Redux::setArgs( $opt_name, $args );

    /*
     * ---> END ARGUMENTS
     */

    /*
     * ---> START HELP TABS
     */

    $tabs = array(
        array(
            'id'      => 'redux-help-tab-1',
            'title'   => __( 'Theme Information 1', 'redux-framework-demo' ),
            'content' => __( '<p>This is the tab content, HTML is allowed.</p>', 'redux-framework-demo' )
        ),
        array(
            'id'      => 'redux-help-tab-2',
            'title'   => __( 'Theme Information 2', 'redux-framework-demo' ),
            'content' => __( '<p>This is the tab content, HTML is allowed.</p>', 'redux-framework-demo' )
        )
    );
    Redux::setHelpTab( $opt_name, $tabs );

    // Set the help sidebar
    $content = __( '<p>This is the sidebar content, HTML is allowed.</p>', 'redux-framework-demo' );
    Redux::setHelpSidebar( $opt_name, $content );


    /*
     * <--- END HELP TABS
     */


    /*
     *
     * ---> START SECTIONS
     *
     */

    /*

        As of Redux 3.5+, there is an extensive API. This API can be used in a mix/match mode allowing for


     */

    // -> START Basic Fields
	
	
	
	
	

	
	
// Configurações Gerais
Redux::setSection($opt_name, array (
		'id' => 'config_pg_geral', 
		'title'=> __('Configurações Gerais', 'mwpress'),
		'desc' => __('Essa é a parte de opções do cabeçalho', 'mwpress'),
		'icon' => $iconmwpress
		));	
Redux::setSection($opt_name, array (
		'id' => 'config_pg', 
		'title'=> __('Esquema de Cores', 'mwpress'),
		'desc' => __('Essa é a parte de configurar as páginas', 'mwpress'),
		'subsection' => true,
		'fields' => array (
		
			$fields = 
			
		

		array (
		 'id'       => 'config_hab_scheme',
		  'title'    => __('Esquema de Cores', 'mwpress'),
    'subtitle' => __('Habilite os esquema de cores', 'mwpress'),
    'desc'     => __('Habilitando o esquema você irá sobrepor algumas configurações personalizadas do site', 'mwpress'),
    	'type'=> 'switch',
		'default' =>  true,
		),	


$fields = array(
    'id'       => 'esquema_pronto',
    'type'     => 'image_select',
    'title'    => __('Esquema de cores', 'mwpress'), 
 
    'options'  => array(
        '1'      => array(
         
            'img'   => ReduxFramework::$_url.'../../../assets/img/opt/color_01.png'
        ),
        '2'      => array(
           
            'img'   => ReduxFramework::$_url.'../../../assets/img/opt/color_02.png'
        ),
        
        '3'      => array(
            
            'img'  => ReduxFramework::$_url.'../../../assets/img/opt/color_03.png'
        ),
		
		 '4'      => array(
            
            'img'  => ReduxFramework::$_url.'../../../assets/img/opt/color_04.png'
        ),
				 '5'      => array(
            
            'img'  => ReduxFramework::$_url.'../../../assets/img/opt/color_05.png'
        ),
				 '6'      => array(
            
            'img'  => ReduxFramework::$_url.'../../../assets/img/opt/color_06.png'
        ),
				 '7'      => array(
            
            'img'  => ReduxFramework::$_url.'../../../assets/img/opt/color_07.png'
        ),
				 '8'      => array(
            
            'img'  => ReduxFramework::$_url.'../../../assets/img/opt/color_08.png'
        ),
				 '9'      => array(
            
            'img'  => ReduxFramework::$_url.'../../../assets/img/opt/color_09.png'
        ),
				 '10'      => array(
            
            'img'  => ReduxFramework::$_url.'../../../assets/img/opt/color_10.png'
        ),
				
		
		
    ),
    'default' => '1'
),

		
		
array (
		'id' => 'color',
		
		'title' => __('Cores personalizadas  (Apenas disponível nas versões premium)'),
		'desc' => __('As opções de cores personalizadas apenas estão disponíveis nas versõs premium, para adquirir uma licença basta acessar www.mwpress.com.br'),
'type'=> 'none',
				),


		array (
		'id' => 'config_colorTxt',
		'output'    => array('color' => '.corTxt',),
		'title' => __('Cor (Texto Padrão)', 'mwpress'),

		'type'=> 'color',
		'default'=> '#5f5f5f'
				
		
		),
		
		
		)));

		
		
		
		Redux::setSection($opt_name, array (
		'id' => 'config_text', 
		'title'=> __('Configurações de Texto', 'mwpress'),
		'desc' => __('Essa é a parte de configurar o texto', 'mwpress'),
		'subsection' => true,
		'fields' => array (
		$fields = 
		
		array (
		'id' => 'config_color_tit_post',
		'title' => __('Cor de Título do post', 'mwpress'),
		'desc' => __('Por padrão herda as cores do tema, mas caso você deseje uma cor específica para o título do post basta desmarcar a transparência e selecionar uma cor', 'mwpress'),
		'type'=> 'color',
		'default'=> 'transparent'
				),
				
						array (
		'id' => 'config_color_tit_plist',
		'title' => __('Cor de Título da Lista de posts', 'mwpress'),
		'desc' => __('Por padrão herda as cores do tema, mas caso você deseje uma cor específica para o título das listagens de post basta desmarcar a transparência e selecionar uma cor', 'mwpress'),
		'type'=> 'color',
		'default'=> 'transparent'
				),
		
		
		
		
				array (
		 'id'       => 'config_texy_sch',
		  'title'    => __('Herdar Esquema de Cores', 'mwpress'),
    'subtitle' => __('Habilite os esquema de cores', 'mwpress'),
    'desc'     => __('Habilitando a herança do esquema de cores, as cores aqui definidas serão ignoradas', 'mwpress'),
    	'type'=> 'switch',
		'default' =>  true,
		),
		
array(
    'id'          => 'config_font',
    'type'        => 'typography', 
    'title'       => __('Fonte do Site', 'mwpress'),
    'google'      => true, 
    'font-backup' => true,
    'output'      => array('body'),
    'units'       =>'px',

    'default'     => array(
        'color'       => '#0f3958', 
        'font-style'  => '400', 
        'font-family' => 'Lato,sans-serif', 
        'google'      => true,
        'font-size'   => '14px', 
        'line-height' => '25px'
    )),
	array (
		'id' => 'config_color_link',
		'output'    => array('color' => 'a'),
		'title' => __('Cor de Link', 'mwpress'),

		'type'=> 'color',
		'default'=> '#1f5e8c'
				),
		
	array (
		'id' => 'config_color_linkh',
		'output'    => array('color' => 'a:hover',),
		'title' => __('Cor (hover) de Link', 'mwpress'),

		'type'=> 'color',
		'default'=> '#1f5e8c'
		
		),
		
array(
    'id'          => 'config_fonth1',
    'type'        => 'typography', 
    'title'       => __('Font Título 1 (h1)', 'mwpress'),
    'google'      => true, 
    'font-backup' => true,
    'output'      => array('.h1t'),
    'units'       =>'px',

    'default'     => array(
        'color'       => '#0f3958', 
        'font-style'  => '700', 
        'font-family' => 'Lato,sans-serif', 
        'google'      => true,
        'font-size'   => '30px', 
        'line-height' => '30px'
    ))

)));	
	
	
	
	


	// Cabeçalho Geral
Redux::setSection($opt_name, array (
		'id' => 'header_opt_geral', 
		'title'=> __('Parte Superior', 'mwpress'),
		'desc' => __('Essa é a parte de opções do cabeçalho', 'mwpress'),
		'icon' => $iconmwpress,
		));

		
		// Opções de Topo

		Redux::setSection($opt_name, array (
		'id' => 'header_opt_geral2', 
		'title'=> __('Opções Gerais', 'mwpress'),
		'desc' => __('Opções gerais do cabeçalho', 'mwpress'),
		'subsection' => true,
		'fields' => array (
		array (
		'id' => 'header_box_geral',
		'title' => __('Cabeçalho Boxed', 'mwpress'),

		'type'=> 'switch',
		'default' =>  false,
		),
		
		array (
		'id' => 'header_bg_boxed',
		'output' => array('#HEADER-BOX-BG'),
		'title' => __('Fundo Header Boxed', 'mwpress'),
		
		'desc' => __('Selecione a cor ou imagem de fundo para aparecer quando o boxed estiver ativado', 'mwpress'),
		'type'=> 'background',
		'default'=> array( 'background-color' => 'transparent',
		)
		),
		
		
		
		)));
		
		
		
		
		
		
		// Opções de Topo

		Redux::setSection($opt_name, array (
		'id' => 'top_sub_options', 
		'title'=> __('Barra do Topo', 'mwpress'),

		'subsection' => true,
		'fields' => array (
		array (
		'id' => 'top_hab',
		'title' => __('Exibir Barra do Topo', 'mwpress'),

		'type'=> 'switch',
		'default' =>  true,
		),
		array (
		'id' => 'top_full',
		'title' => __('Topo Widescreen (fullwidth)', 'mwpress'),

		'type'=> 'switch',
		'default' =>  false,
		),
		
		
			array (
		'id' => 'top_sch',
		'title' => __('Herdar Esquema de Cores', 'mwpress'),
		'desc' => __('Selecione se você desejar herdar o esquema principal de cores, habilitando esta opção as cores aqui definidas serão ignoradas', 'mwpress'),
		'type'=> 'switch',
		'default' =>  true,
		),
		
		
		array (
		'id' => 'top_hab_social',
		'title' => __('Exibir Social Ícones', 'mwpress'),

		'type'=> 'switch',
		'default' =>  true,
		),
		
		array(
    'id'       => 'top_size',
    'type'     => 'dimensions',
	'width'    => false,
    'units'    => array('px','em','%'),
    'title'    => __('Dimensões para o Topo', 'mwpress'),
    'subtitle' => __('Selecione a altura do seu topo', 'mwpress'),

    'default'  => array(
        
        'height'  => '38px',
        'width'  => ''
    )),
	array(
    'id'             => 'top_margin',
    'type'           => 'spacing',
    'output'         => array('.topobarM'),
    'mode'           => 'margin',
    'units'          => array('em', 'px'),
    'units_extended' => 'false',
    'title'          => __('Topo Margin', 'mwpress'),
    'subtitle'       => __('Selecione o margin do topo', 'mwpress'),
    'desc'           => __('Altere a margem externa do topo', 'mwpress'),
    'default'            => array(
        'margin-top'     => '0px', 
        'margin-right'   => '0px', 
        'margin-bottom'  => '0px', 
        'margin-left'    => '0px',
        'units'          => 'px', 
    )
),
array(
    'id'             => 'top_padding',
    'type'           => 'spacing',
    'output'         => array('.topobarP'),
    'mode'           => 'padding',
    'units'          => array('em', 'px'),
    'units_extended' => 'false',
    'title'          => __('Topo Padding', 'mwpress'),
    'subtitle'       => __('Selecione o padding do topo', 'mwpress'),
    'desc'           => __('Altere a margem interna do Topo', 'mwpress'),
    'default'            => array(
        'padding-top'     => '5px', 
        'padding-right'   => '20px', 
        'padding-bottom'  => '5px', 
        'padding-left'    => '0px',
        'units'          => 'px', 
    )
),
	array(
    'id'       => 'top_align',
    'type'     => 'button_set',
    'title'    => __('Disposição do conteúdo do Topo', 'mwpress'),
    'subtitle' => __('Selecione o alinhamento do conteúdo do Topo', 'mwpress'),

    //Must provide key => value pairs for options
    'options' => array(
        'left' => __('Esquerda', 'mwpress'), 
        'center' => __('Centralizado', 'mwpress'), 
        'right' => __('Direita', 'mwpress'),
     ), 
    'default' => 'right'
),
		
		array(
    'id'       => 'top_color_int',
    'type'     => 'color',
    'title'    => __('Cor de fundo do Topo (Interno)', 'mwpress'), 
    'subtitle' => __('Selecione a cor para seu fundo de topo (default: #0f3958).', 'mwpress'),
    'default'=> '#0f3958',
	
	'output'  => array('background-color' => '#TOPBAR-INT',),

),
		array(
    'id'       => 'top_color_ext',
    'type'     => 'color',
    'title'    => __('Cor de fundo do Topo (Externa)', 'mwpress'), 
    'subtitle' => __('Selecione a cor para seu fundo de topo (default: #0f3958).', 'mwpress'),
    'default'=> '#0f3958',
	
	'output'  => array('background-color' => '#TOPBAR-EXT',),

),
	array(
    'id'       => 'top_font_color',
    'type'     => 'color',
    'title'    => __('Cor da letra do topo', 'mwpress'), 
    'subtitle' => __('Selecione a cor para a letra do topo (default: #FFFFFF).', 'mwpress'),
    'default'  => '#d8d8d8',
    'validate' => 'color',
),
array(
    'id'       => 'top_font_size',
    'type'     => 'dimensions',
	'width'    => false,
    'units'    => array('px','em','%'),
    'title'    => __('Tamanho da fonte', 'mwpress'),
    'subtitle' => __('Selecione o tamanho da fonte do topo', 'mwpress'),

    'default'  => array(
        
        'height'  => '12px',
        'width'  => ''
    )),
	
			array(
    'id'       => 'top_email',
    'type'     => 'text',
    'title'    => __('E-mail','mwpress'),
	'default' => __('temamwpress@gmail.com','mwpress')
),

			array(
    'id'       => 'top_tel',
    'type'     => 'text',
    'title'    => __('Telefone','mwpress'),
	'default' => __('+55(82) 0000-0000', 'mwpress')

),
	
	array(
    'id'               => 'top_content',
    'type'             => 'editor',
    'title'            => __('Conteúdo do Topo', 'mwpress'), 
    'subtitle'         => __('Escreva o conteúdo do Topo', 'mwpress'),
    'default'          => '',
    'args'   => array(
        'teeny'            => true,
        'textarea_rows'    => 10
    )
),

                    array(
                        'id'      => 'top_menu_select',
						'title'   => __( 'Opção de menu', 'mwpress' ),
                        'desc'    => __('Aqui você pode selecionar um menu customizado', 'mwpress'),
                        'type'    => 'select',
                        'data'    => 'menu',
                        'default' => '',
                    ),

		)
		));
		
		
		// Opções de Logo
		
		
		Redux::setSection($opt_name, array (
		'id' => 'header_sub_options', 
		'title'=> __('Logo', 'mwpress'),
		'desc' => __('Essa é a parte de opções do cabeçalho', 'mwpress'),
		'subsection' => true,
		'fields' => array (
		array (
		'id' => 'logo',
		'title' => __('Site Logo', 'mwpress'),
		'url' => true,
		'desc' => __('Envie sua logo', 'mwpress'),
		'type'=> 'media',
		'default'=>  array ('url' =>get_template_directory_uri().'/assets/img/mwpress-logo3.png')
		),
		
		array(
    'id' => 'logo_size_w',
    'type' => 'slider',
    'title' => __('Largura (Logo)', 'mwpress'),
    'subtitle' => __('Selecione a largura de exibição de sua', 'mwpress'),

    "default" => 267,
    "min" => 20,
    "step" => 1,
    "max" => 600,
    'display_value' => 'text'
),
	array(
    'id' => 'logo_size_h',
    'type' => 'slider',
    'title' => __('Altura (Logo)', 'mwpress'),
    'subtitle' => __('Selecione a altura de exibição de sua', 'mwpress'),

    "default" => 70,
    "min" => 20,
    "step" => 5,
    "max" => 600,
    'display_value' => 'text'
),


$fields = array(
    'id'       => 'logo_align_v',
    'type'     => 'image_select',
    'title'    => __('Alinhamento Vertical (Logo)', 'mwpress'), 
    'subtitle' => __('Selecione o alinhamento vertical da Logo', 'mwpress'),
    'options'  => array(
        'left'      => array(
            'alt'   => 'Logo Esquerda', 
            'img'   => ReduxFramework::$_url.'../../../assets/img/opt/logol.png'
        ),
        'center'      => array(
            'alt'   => 'Logo Centralizada', 
            'img'   => ReduxFramework::$_url.'../../../assets/img/opt/logoc.png'
        ),
        
        'right'      => array(
            'alt'  => 'Logo Direita', 
            'img'  => ReduxFramework::$_url.'../../../assets/img/opt/logor.png'
        )
    ),
    'default' => 'left'
),
array(
    'id'       => 'logo_align_h',
    'type'     => 'button_set',
    'title'    => __('Alinhamento Horizontal (Logo)', 'mwpress'),
    'subtitle' => __('Selecione o alinhamento do conteúdo do Topo', 'mwpress'),

    
    'options' => array(
        'top' => __('No topo', 'mwpress'), 
        'middle' => __('No meio', 'mwpress'), 
        'bottom' => __('Em baixo', 'mwpress'), 
     ), 
    'default' => 'middle'
),




		)))	;
		
		
		
		// Opções de Cabeçalho
		
		
Redux::setSection($opt_name, array (
		'id' => 'header_opt', 
		'title'=> __('Cabeçalho', 'mwpress'),
		'desc' => __('Essa é a parte do Header (Cabeçalho)', 'mwpress'),
		'subsection' => true,
		'fields' => array (
		
				array (
		'id' => 'header_hab',
		'title' => __('Exibir Cabeçalho', 'mwpress'),
		'desc' => __('Selecione se você desejar Exibir/desabilitar o cabeçalho', 'mwpress'),
		'type'=> 'switch',
		'default' =>  true,
		),
		
		array (
		'id' => 'header_ext',
		'output' => '.headerext',
		'title' => __('Cabeçalho Externo', 'mwpress'),
		
		'desc' => __('Selecione a cor ou imagem do cabeçalho', 'mwpress'),
		'type'=> 'background',
		'default'=> array( 'background-color' => '#fff',
		)
		),
		
		array (
		'id' => 'header_int',
		'output' => '.headerint',
		'title' => __('Cabeçalho Interno', 'mwpress'),
		
		'desc' => __('Selecione a cor ou imagem do cabeçalho', 'mwpress'),
		'type'=> 'background',
		'default'=> array( 'background-color' => 'transparent',
		)
		),
		
		array(
    'id'       => 'header_size',
    'type'     => 'dimensions',
	'width'    => false,
    'units'    => array('px','em','%'),
    'title'    => __('Dimensões para o Cabeçalho', 'mwpress'),
    'subtitle' => __('Selecione a altura do seu cabeçalho', 'mwpress'),

    'default'  => array(
        
        'height'  => '160px',
        'width'  => ''
    )),
	
	array(
    'id'       => 'header_margin_top',
    'mode' => 'padding',
	'type' => 'spacing',
	'output' => '#HEADER-BOX-BG',
	'width'    => false,
    'units'    => array('px','em','%'),
    'title'    => __('Margin-top', 'mwpress'),
    'subtitle' => __('Selecione a altura que você deseja afastar o seu cabeçalho da parte superior', 'mwpress'),
    'desc'     => __('Distância da margem superior', 'mwpress'),
    'default'  => array(
        
  'padding-top'     => '0px',
    )),
	
	array(
    'id'       => 'header_full',
    'type'     => 'button_set',
    'title'    => __('Fullwidth (widescreen)', 'mwpress'),
    'subtitle' => __('Selecione se desejar o cabeçalho extendido por toda tela', 'mwpress'),
    'desc'     => __('Selecione a opção acima', 'mwpress'),
    
    'options' => array(
        'container is-fluid' => __('Habilitado', 'mwpress'), 
        'container' => __('Desabilitado', 'mwpress'),
     
     ), 
    'default' => 'container'
),

		array (
		'id' => 'header_shadow',
		'title' => __('Exibir Sombra', 'mwpress'),
		'desc' => __('Selecione se você desejar Exibir a sombra externa inferior', 'mwpress'),
		'type'=> 'switch',
		'default' =>  true,
		),
	
		
		

)));



// Opções de Menu
		
		
Redux::setSection($opt_name, array (
		'id' => 'menu_opt', 
		'title'=> __('Menu', 'mwpress'),
		'icon' => $iconmwpress,
		'desc' => __('Essa é a parte de opções de Menu', 'mwpress'),
		'subsection' => false,
		'fields' => array (
		

		array (
		'id' => 'menu_sch_geral',
	    'title' => __('Herdar Esquema de Cores', 'mwpress'),
		'type' => 'switch',
		'desc' => __('Com esta opção todas as confiburações de cores aqui setadas serão ignoradas e serão herdadas as cores do esquema', 'mwpress'),
		'default'=> true,
		),
		
		/* ainda não está pronto precisa de revisão
		array (
		'id' => 'menu_stk',
	    'title' => __('Menu Fixo', 'mwpress'),
		'type' => 'switch',
		'desc' => __('Esta opção habilita/desabilita o Menu Fixo', 'mwpress'),
		'default'=> false,
		),
		
		
		array (
		'id' => 'menu_stk_color',
		'output' => '.headerstk',
		'title' => __('Cor do Menu Fixo', 'mwpress'),
		
		'desc' => __('Selecione a cor ou imagem do cabeçalho', 'mwpress'),
		'type'=> 'color',
		'default'=> array( 'background-color' => '#fff',
		)
		),
		*/
	array(
    'id'       => 'menu_full',
    'type'     => 'button_set',
	
    'title'    => __('Menu Widescreen (Fullwidth)', 'mwpress'),
    'subtitle' => __('Habilite para widescreen', 'mwpress'),
    'desc'     => __('Marque se desejar Exibir', 'mwpress'),
    
    'options' => array(
        'no-container' => __('Habilitado', 'mwpress'), 
        'container' => __('Desabilitado', 'mwpress'), 
        
     ), 
    'default' => 'container'
),

$fields = array(
    'id'       => 'menu_position',
    'type'     => 'image_select',
    'title'    => __('Posicionamento do (Menu)', 'mwpress'), 
    'subtitle' => __('Selecione o posicionamento do Menu', 'mwpress'),
    'options'  => array(
        'menu-bt'      => array(
            'alt'   => 'Em baixo do Header', 
            'img'   => ReduxFramework::$_url.'../../../assets/img/opt/menu-bt.png'
        ),
        'menu-tp'      => array(
            'alt'   => 'Acima do Header', 
            'img'   => ReduxFramework::$_url.'../../../assets/img/opt/menu-tp.png'
        ),
        
        'menu-header'      => array(
            'alt'  => 'Ao lado da Logo', 
            'img'  => ReduxFramework::$_url.'../../../assets/img/opt/menu-header.png'
        ),
		

    ),
    'default' => 'menu-bt'
),


array(
    'id'       => 'menu_align',
    'type'     => 'button_set',
    'title'    => __('Alinhamento Horizontal (Menu)', 'mwpress'),
    'subtitle' => __('Selecione o alinhamento dos itens do Menu', 'mwpress'),
    'desc'     => __('Marque a opção de alinhamento', 'mwpress'),
    
    'options' => array(
        'ul-left' => __('Esquerda', 'mwpress'), 
        'ul-center' => __('Centralizado', 'mwpress'), 
        'ul-right' => __('Direita', 'mwpress'),
     ), 
    'default' => 'ul-left'
),
		
	array(
    'id'       => 'menu_size',
    'type'     => 'dimensions',
	'output' => '#menuP, #menuext, #menu-item, #cssmenu > ul > li > a',
	'width'    => false,
    'units'    => array('px','em','%'),
    'title'    => __('Altura do Menu', 'mwpress'),
    'subtitle' => __('Selecione a altura do seu menu', 'mwpress'),
    'desc'     => __('Escolha a altura', 'mwpress'),
    'default'  => array(
        
        'height'  => '50px',
        'width'  => ''
    )),
	
	array(
    'id'             => 'menu_li_margin',
    'type'           => 'spacing',
    'output'         => array('#cssmenu > ul > li '),
    'mode'           => 'margin',
    'units'          => array('em', 'px'),
    'units_extended' => 'false',
    'title'          => __('Menu Botão Margin', 'mwpress'),
    'subtitle'       => __('Selecione o margin dos menus', 'mwpress'),
    'desc'           => __('Altere a margem', 'mwpress'),
    'default'            => array(
        'margin-top'     => '0px', 
        'margin-right'   => '0px', 
        'margin-bottom'  => '0px', 
        'margin-left'    => '0px',
        'units'          => 'px', 
    )
),
	
	array (
		'id' => 'menuP_int_color',
		'output'    => array('background-color' => '.menuint',),
		'title' => __('Cor interna do Menu Principal', 'mwpress'),
		
		'desc' => __('Selecione a cor do menu principal', 'mwpress'),
		'type'=> 'color',
		'default'=> 'transparent'
		
		
		),
		
		array (
		'id' => 'menuP_ext_color',
		'output'    => array('background-color' => '.menuext',),
		'title' => __('Cor externa do Menu Principal', 'mwpress'),
		
		'desc' => __('Selecione a cor do menu principal', 'mwpress'),
		'type'=> 'color',
		'default'=> '#efefef'
		
		),
		
		array (
		'id' => 'menuP_bot_color',
		'output'    => array('background-color' => '#cssmenu ul li a',),
		'title' => __('Cor do Item do Menu Principal', 'mwpress'),
		
		'desc' => __('Selecione a cor do Item do Menu Principal', 'mwpress'),
		'type'=> 'color',
		'default'=> 'transparent'
		
		),
		array (
		'id' => 'menuP_botH_color',
		'output'    => array('background-color' => '#cssmenu ul li a:hover',),
		'title' => __('Cor Hover do Item do Menu Principal', 'mwpress'),
		
		'desc' => __('Selecione a cor Hover do Item do Menu Principal', 'mwpress'),
		'type'=> 'color',
		'default'=> '#e2e2e2'
		
		),
		
		array (
		'id' => 'menuP_Sbot_color',
		'output'    => array('background-color' => '#cssmenu ul ul li a,#cssmenu .submenu-button.submenu-opened',),
		'title' => __('Cor do SubItem do Menu Principal', 'mwpress'),
		
		'desc' => __('Selecione a cor do SubItem do Menu Principal', 'mwpress'),
		'type'=> 'color',
		'default'=> '#efefef'
		
		),
		
		array (
		'id' => 'menuP_SbotH_color',
		'output'    => array('background-color' => '#cssmenu ul ul li a:hover',),
		'title' => __('Cor Hover do SubItem do Menu Principal', 'mwpress'),
		
		'desc' => __('Selecione a cor SubHover do Item do Menu Principal', 'mwpress'),
		'type'=> 'color',
		'default'=> '#e2e2e2'
		
		),
		array(
    'id'          => 'menu_font',
    'type'        => 'typography', 
    'title'       => __('Font(Menu)', 'mwpress'),
    'google'      => true, 
    'font-backup' => true,
    'output'      => array('#cssmenu > ul > li > a', '#cssmenu > ul > li > a:active'),
    'units'       =>'px',
    'subtitle'    => __('Selecione a font do menu', 'mwpress'),
    'default'     => array(
        'color'       => '#0f3958', 
        'font-style'  => '400', 
        'font-family' => 'Allerta', 
        'google'      => true,
        'font-size'   => '13px', 
        'line-height' => '15px'
    )),
	
	array(
    'id'          => 'menu_font_h',
    'type'        => 'typography', 
    'title'       => __('Font:Hover (Menu)', 'mwpress'),
    'google'      => true, 
    'font-backup' => true,
    'output'      => array('#cssmenu > ul > li > a:hover'),
    'units'       =>'px',
    'subtitle'    => __('Selecione a font do menu', 'mwpress'),
    'default'     => array(
        'color'       => '#0f3958', 
        'font-style'  => '400', 
        'font-family' => 'Allerta', 
        'google'      => true,
        'font-size'   => '13px', 
        'line-height' => '15px'
    )),
	array(
    'id'          => 'menu_font_sub',
    'type'        => 'typography', 
    'title'       => __('Font (Sub-Menu)', 'mwpress'),
    'google'      => true, 
    'font-backup' => true,
    'output'      => array('#cssmenu ul ul li a'),
    'units'       =>'px',
    'subtitle'    => __('Selecione a font do menu', 'mwpress'),
    'default'     => array(
         'color'       => '#0f3958', 
      'font-style'  => '400', 
        'font-family' => 'Allerta',  
        'google'      => true,
        'font-size'   => '13px', 
        'line-height' => '15px'
    )),
	array(
    'id'          => 'menu_font_sub_h',
    'type'        => 'typography', 
    'title'       => __('Font:Hover (Sub-Menu)', 'mwpress'),
    'google'      => true, 
    'font-backup' => true,
    'output'      => array('#cssmenu ul ul li a:hover'),
    'units'       =>'px',
    'subtitle'    => __('Selecione a font do menu', 'mwpress'),
    'default'     => array(
        'color'       => '#0f3958', 
    'font-style'  => '400', 
        'font-family' => 'Allerta', 
        'google'      => true,
        'font-size'   => '13px', 
        'line-height' => '15px'
    )),
	
	array (
		'id' => 'menu_border_ret',
		'output'    => array('border-color' => '#cssmenu > ul > li','#cssmenu > ul > li:first-child'),
		'title' => __('Cor da Borda do menu Retangular','mwpress'),
		
		'desc' => __('Selecione a cor da borda','mwpress'),
		'type'=> 'color',
		'default'=> '#0f3958'
		
		),
		array(
    'id'       => 'menu_rounded',
    'type'     => 'button_set',
	'output' => '#cssmenu > ul > li > a',
    'title'    => __('Botão Arredondado','mwpress'),
    'subtitle' => __('Selecione se desejar Exibir o botão arredondado','mwpress'),
    'desc'     => __('Habilite caso deseje','mwpress'),
    
    'options' => array(
        'roundeD' => __('Habilitado', 'mwpress'), 
        '' => __('Desabilitado', 'mwpress'),
       
     ), 
    'default' => ''
),

		array (
		'id' => 'menu_shadow',
		'title' => __('Exibir Sombra','mwpress'),
		'desc' => __('Selecione se você desejar Exibir a sombra externa inferior','mwpress'),
		'type'=> 'switch',
		'default' =>  true,
		),
		
				array (
		'id' => 'menu_shadow_text',
		'title' => __('Exibir Sombra clara no texto','mwpress'),
		'desc' => __('Selecione se você desejar Exibir a sombra no texto do meu','mwpress'),
		'type'=> 'switch',
		'default' =>  true,
		),
		
				$fields = array( 
    'id'       => 'menu_sub_border',
    'type'     => 'border',
    'title'    => __('Borda do submenu','mwpress'),
    'subtitle' => __('selecione a cor da borda','mwpress'),
    'output'   => array('#cssmenu ul ul li'),
 
    'default'  => array(
        'border-color'  => '#d3d3d3', 
        'border-style'  => 'solid', 
        'border-top'    => '1px', 
        'border-right'  => '1px', 
        'border-bottom' => '1px', 
        'border-left'   => '1px'
    )
),

				$fields = array( 
    'id'       => 'menu_sub_border_inf',
    'type'     => 'border',
    'title'    => __('Borda do submenu - inferior','mwpress'),
    'subtitle' => __('selecione a cor da borda','mwpress'),
    'output'   => array('#cssmenu ul ul li:last-child > a,#cssmenu ul ul li.last-item > a '),
 
    'default'  => array(
        'border-color'  => '#0f3958', 
        'border-style'  => 'solid', 
       
       
        'border-bottom' => '3px', 
     
    )
),

	array (
		'id' => 'menu_mobile_fundo',
		'output'    => array('background-color' => '.dl-menuwrapper button, .dl-menuwrapper button:hover,.dl-menuwrapper button.dl-active,.dl-menuwrapper ul'),
		'title' => __('Menu Mobile - Cor de Fundo','mwpress'),
		
		'desc' => __('Selecione a cor de fundo','mwpress'),
		'type'=> 'color',
		'default'=> '#0f3958'
		
		),
		
			array (
		'id' => 'menu_mobile_fonte',
		'output'    => array('color' => '.dl-menuwrapper li a'),
		'title' => __('Menu Mobile - Cor da Fonte','mwpress'),
		
		'desc' => __('Selecione a cor da fonte','mwpress'),
		'type'=> 'color',
		'default'=> '#fff'
		
		),
		
		
		

	)));

// Opções do Banner
		
		
Redux::setSection($opt_name, array (
		'id' => 'banner_opt',
'icon' => $iconmwpress,		
		'title'=> __('Banner','mwpress'),
		'desc' => __('Essa é a parte de opções do Banner','mwpress'),
		'subsection' => false,
		'fields' => array (
		
		array (
		'id' => 'banner_hab',
	    'title' => __('Banner (Habilitação)','mwpress'),
		'type' => 'switch',
		'desc' => __('Esta opção habilita/desabilita o banner','mwpress'),
		'default'=> true,
		),
		
		array (
		'id' => 'banner_sch',
	    'title' => __('Herdar Esquema de Cores','mwpress'),
		'type' => 'switch',
		'desc' => __('Habilitando esta opção as cores aqui definidas serão ignoradas e serão herdadas as cores do esquema','mwpress'),
		'default'=> true,
		),

		
	array(
    'id'       => 'banner_full',
    'type'     => 'button_set',
	
    'title'    => __('Banner(Fullwidth)','mwpress'),
    'subtitle' => __('Habilite para widescreen','mwpress'),
    'desc'     => __('Marque se desejar Exibir','mwpress'),
    
    'options' => array(
        'no-container' => __('Habilitado', 'mwpress'), 
        'container' => __('Desabilitado', 'mwpress'), 
        
     ), 
    'default' => 'container'
),

	array(
    'id'          => 'banner_font',
    'type'        => 'typography', 
    'title'       => __('Font (Banner)','mwpress'),
    'google'      => true, 
    'font-backup' => true,
    'output'      => array('#BANNER-INT'),
    'units'       =>'px',
    'subtitle'    => __('Selecione a font do Banner','mwpress'),
    'default'     => array(
         'color'       => '#0f3958', 
      'font-style'  => '400', 
        'font-family' => 'Allerta',  
        'google'      => true,
        'font-size'   => '20px', 
        'line-height' => '20px'
    )),
	
	array(
    'id'       => 'banner_size',
    'type'     => 'dimensions',
	
	'width'    => false,
    'units'    => array('px','em','%'),
    'title'    => __('Altura do Banner','mwpress'),
    'subtitle' => __('Selecione a altura do seu Banner','mwpress'),
    'desc'     => __('Escolha a altura','mwpress'),
    'default'  => array(
        
        'height'  => '200px',
        'width'  => ''
    )),
    
        array(
    'id' => 'banner_transp',
    'type' => 'slider',
    'title' => __('Opacidade do Banner', 'mwpress'),
   
    'desc' => __('Quanto menor o valor mais transparência estará sendo aplicada', 'mwpress'),
    "default" => .85,
    "min" => 0,
    "step" => 0.01,
    "max" => 1,
    'resolution' => 0.01,
    'display_value' => 'text'
),
/*
	array (
		'id' => 'banner_bg_int',
		'output' => '#BANNER-INT',
		'title' => __('Bread (Interno)','mwpress'),
		
		'desc' => __('Selecione a cor ou imagem do Banner','mwpress'),
		'type'=> 'background',
		'default'=> array( 'background-color' => 'transparent',
		)
		), */
			array (
		'id' => 'banner_bg_ext',
		'output' => '#BANNER-EXT',
		'title' => __('Imagem/cor Banner','mwpress'),
		
		'desc' => __('Selecione a cor ou imagem do Banner','mwpress'),
		'type'=> 'background',
		'default'=> 
		array( 
		'background-color' => '#eaeaea', 'background-image' => get_template_directory_uri().'/assets/img/banner/1.jpg',
		'background-repeat' => 'no-repeat',
		'background-size' => 'cover',
		'background-attachment' => 'scroll',
		)
		),
		
		
		



		
	
		
		)));
	
	// Configurações de página

Redux::setSection($opt_name, array (
		'id' => 'layout_opt', 
		'title'=> __('Layout Padrão','mwpress'),
		'icon' => $iconmwpress,
		'desc' => __('Essa é a parte de configurações comum a todas as páginas','mwpress'),
		'subsection' => false,
		'fields' => array (
		
			$fields = 
			
			
		array(
    'id'       => 'page_full',
    'type'     => 'button_set',
	
    'title'    => __('Page Conteúdo (Fullwidth)','mwpress'),
    'subtitle' => __('Habilite para widescreen','mwpress'),
    'desc'     => __('Marque se desejar Exibir','mwpress'),
    
    'options' => array(
        'no-container' => __('Habilitado', 'mwpress'),
        'container' => __('Desabilitado', 'mwpress'), 
        
     ), 
    'default' => 'container'
),	
			
			
			
			array(
    'id'       => 'page_display',
    'type'     => 'image_select',
    'title'    => __('Posicionamento das Sidebars', 'mwpress'), 
    'subtitle' => __('Selecione o posicionamento das sidebars','mwpress'),
    'options'  => array(
        '2-right'      => array(
            'alt'   => 'Sidebar Direita', 
            'img'   => ReduxFramework::$_url.'../../../assets/img/opt/2-right.png'
        ),
        '2-left'      => array(
            'alt'   => 'Sidebar Esquerda', 
            'img'   => ReduxFramework::$_url.'../../../assets/img/opt/2-left.png'
        ),
        
        '3-left-right'      => array(
            'alt'  => 'Sidebars Esquerda e Direita', 
            'img'  => ReduxFramework::$_url.'../../../assets/img/opt/3-left-right.png'
        ),
		
		 '1-full'      => array(
            'alt'   => 'Fullwidth (widescreen)', 
            'img'   => ReduxFramework::$_url.'../../../assets/img/opt/1-full.png'
        )
    ),
    'default' => '2-right'
),

array (
		'id' => 'page_bg',
		'output' => '#ALL-SITE',
		'title' => __('Fundo da Página','mwpress'),
		
		'desc' => __('Selecione a cor ou imagem de fundo','mwpress'),
		'type'=> 'background',
		'default'=> array( 'background-color' => '#FFF',
		)
		),
		
		array (
		'id' => 'page_bg_content',
		'output' => '#CONTENT-P',
		'title' => __('Cor do Conteúdo','mwpress'),
		
		'desc' => __('Selecione a cor ou imagem de fundo','mwpress'),
		'type'=> 'background',
		'default'=> array( 'background-color' => '#FFF',
		)
		),
		array (
		'id' => 'page_bg_sidebar',
		'output' => array('#SIDEBAR-LEFT, #SIDEBAR-RIGHT'),
		'title' => __('Cor Sidebars','mwpress'),
		
		'desc' => __('Selecione a cor ou imagem de fundo','mwpress'),
		'type'=> 'background',
		'default'=> array( 'background-color' => '#f2f2f2',
		)
		),
		


		array(
    'id'             => 'page_margin_c',
    'type'           => 'spacing',
    'output'         => array('#CONTEUDO'),
    'mode'           => 'margin',
    'units'          => array('em', 'px'),
    'units_extended' => 'false',
    'title'          => __('Página Conteúdo interno Margin','mwpress'),
    'subtitle'       => __('Selecione o margin do conteúdo da página','mwpress'),

    'default'            => array(
        'margin-top'     => '25px', 
        'margin-right'   => '0px', 
        'margin-bottom'  => '25px', 
        'margin-left'    => '0px',
        'units'          => 'px', 
    )
),


		array(
    'id'             => 'page_pading_c_int',
    'type'           => 'spacing',
    'output'         => array('.cont-p-int'),
    'mode'           => 'padding',
    'units'          => array('em', 'px'),
    'units_extended' => 'false',
    'title'          => __('Padding o padding do conteúdo da página','mwpress'),
    'desc'           => __('Altere a margem','mwpress'),
    'default'            => array(
        'padding-top'     => '25px', 
        'padding-right'   => '25px', 
        'padding-bottom'  => '25px', 
        'padding-left'    => '25px',
        'units'          => 'px', 
    )
),




)));



	// Footer



		Redux::setSection($opt_name, array (
		'id' => 'footer_opt', 
		'icon' => $iconmwpress,
		'title'=> __('Rodapé','mwpress'),
		'desc' => __('Opções gerais do Rodapé','mwpress'),
		'subsection' => false,
		'fields' => array (
		array (
		'id' => 'footer_hab',
		'title' => __('Rodapé Habilitado','mwpress'),
		'desc' => __('Para Exibir o Rodapé','mwpress'),
		'type'=> 'switch',
		'default' =>  true,
		),
		array (
		'id' => 'footer_full',
		'title' => __('Rodapé Widescreen','mwpress'),
		'desc' => __('Para Exibir o Rodapé Widescreen','mwpress'),
		'type'=> 'switch',
		'default' =>  false,
		),
		
		array (
		'id' => 'footer_sch',
		'title' => __('Herdar Esquema de Cores','mwpress'),
		'desc' => __('Caso esta opção esteja habilitada as cores serão herdadas do esquema de cores, e as cores abaixo serão ignoradas','mwpress'),
		'type'=> 'switch',
		'default' =>  true,
		),
		
		
		$fields = array(
    'id'       => 'footer_disp',
    'type'     => 'image_select',
    'title'    => __('Estrutura do Rodapé','mwpress'), 
    'subtitle' => __('Selecione a estrutura do rodapé','mwpress'),
    'options'  => array(
        'footer4'      => array(
            'alt'   => '4 colunas', 
            'img'   => ReduxFramework::$_url.'../../../assets/img/opt/footer-4.png'
        ),
        'footer3'      => array(
            'alt'   => '3 colunas', 
            'img'   => ReduxFramework::$_url.'../../../assets/img/opt/footer-3.png'
        ),
        
        'footer2'      => array(
            'alt'  => '2 colunas', 
            'img'  => ReduxFramework::$_url.'../../../assets/img/opt/footer-2.png'
        ),
		
		 'footer1'      => array(
            'alt'   => '1 colunas', 
            'img'   => ReduxFramework::$_url.'../../../assets/img/opt/footer-1.png'
        )
    ),
    'default' => 'footer4'
),
		
		array(
    'id'               => 'footer_text',
    'type'             => 'editor',
    'title'            => __('Conteúdo do Rodapé', 'mwpress'), 

    'default'          => __('<p>Tema desenvolvido por: ( <a href="http://www.mwpress.com.br">MWPRESS</a> ) Todos os direitos reservados</p>', 'mwpress'),
        
    'args'   => array(
        'teeny'            => true,
        'textarea_rows'    => 10
    )
),	
		
		array (
		'id' => 'footer_bg_p',
		'output' => array('#FOOTER-CONTENT',),
		'title' => __('Fundo do Rodapé (Principal)','mwpress'),
		
		'desc' => __('Selecione a cor do footer','mwpress'),
		'type'=> 'background',
		'default'=> array( 'background-color' => '#124069',
		)
		),
		
		array (
		'id' => 'footer_bgbar',
		'output' => array('#FOOTER-BAR',),
		'title' => __('Fundo da (Barra) de Rodapé','mwpress'),
		
		'desc' => __('Selecione a cor da barra de rodapé','mwpress'),
		'type'=> 'background',
		'default'=> array( 'background-color' => '#21598c',
		)
		),
		
			array(
    'id'          => 'footer_font_text',
    'type'        => 'typography', 
    'title'       => __('Font (Texto)','mwpress'),
    'google'      => true, 
    'font-backup' => true,
    'output'      => array('#FOOTER-CONTENT a', '#FOOTER-CONTENT', '#FOOTER-BAR'),
    'units'       =>'px',
    'subtitle'    => __('Selecione a font do Rodapé','mwpress'),
    'default'     => array(
         'color'       => '#fff', 
      'font-style'  => '', 
        'font-family' => 'Allerta',  
        'google'      => true,
        'font-size'   => '12px', 
        'line-height' => '20px'
    )),
	
	array(
	'id'          => 'footer_font_tit',
    'type'        => 'typography', 
    'title'       => __('Fonte Título (Rodapé)','mwpress'),
    'google'      => true, 
    'font-backup' => true,
    'output'      => array('#FOOTER-CONTENT h1',),
    'units'       =>'px',
    'subtitle'    => __('Selecione a font do título do Rodapé','mwpress'),
    'default'     => array(
         'color'       => '#ccc', 
      'font-style'  => '400', 
        'font-family' => 'Allerta',  
        'google'      => true,
        'font-size'   => '15px', 
        'line-height' => '20px'
    )),
	
	array (
		'id' => 'footer_text_hover',
		'output' => array('#FOOTER-CONTENT a:hover',),
		'title' => __('Hover do Rodapé','mwpress'),
		
		'desc' => __('Selecione a cor do hover de rodapé','mwpress'),
		'type'=> 'color',
		'default'=> '#CCC'
		),
		
		array(
	'id'          => 'footer_font_bar',
    'type'        => 'typography', 
    'title'       => __('Fonte Título (Barra)','mwpress'),
    'google'      => true, 
    'font-backup' => true,
    'output'      => array('#FOOTER-BAR',),
    'units'       =>'px',
    'subtitle'    => __('Selecione a font do título do Rodapé','mwpress'),
    'default'     => array(
         'color'       => '#F2F2F2', 
      'font-style'  => '', 
        'font-family' => 'Allerta',  
        'google'      => true,
        'font-size'   => '12px', 
        'line-height' => '20px'
    )),
	
	
	array (
		'id' => 'footer_text_link_bar',
		'output' => array('#FOOTER-BAR a',),
		'title' => __('Link da barra de Rodapé','mwpress'),
		
		'desc' => __('Selecione a cor do hover de rodapé','mwpress'),
		'type'=> 'color',
		'default'=> '#FFF'
		),
	
	array (
		'id' => 'footer_text_hover_bar',
		'output' => array('#FOOTER-BAR a:hover',),
		'title' => __('Hover da barra de Rodapé','mwpress'),
		
		'desc' => __('Selecione a cor do hover de rodapé','mwpress'),
		'type'=> 'color',
		'default'=> '#CCC'
		),
	
		)));
		
		
		

// widgets

		Redux::setSection($opt_name, array (
		'id' => 'wid_opt', 
		'title'=> __('Widgets','mwpress'),
		'icon' => $iconmwpress,
		'desc' => __('Opções gerais dos Widgets','mwpress'),
		));
		
		Redux::setSection($opt_name, array (
	
		'id' => 'wid_gerais', 
		'title'=> __('Configurações Gerais','mwpress'),

		'subsection' => true,
		'fields' => array (
		array (
		'id' => 'wid_hab',
		'title' => __('Exibir customização dos Widgets','mwpress'),
		'desc' => __('Para Exibir a customização','mwpress'),
		'type'=> 'switch',
		'default' =>  true,
		),
		
					array (
		'id' => 'wid_overlay_color',
	
		'title' => __('Overlay Widget (Posts)','mwpress'),
		
		'desc' => __('Por padrão a cor de overlay é associada ao esquema de cores para habilitar uma cor específica desmarque a opção transparent e escolhar uma.','mwpress'),
		'type'=> 'color',
		'default'=> 'transparent'
		),
		
						array (
		 'id'       => 'wid_sch',
		  'title'    => __('Herdar Esquema de Cores','mwpress'),
    'subtitle' => __('Habilite os esquema de cores','mwpress'),
    'desc'     => __('Habilitando a herança do esquema de cores, as cores aqui definidas serão ignoradas','mwpress'),
    	'type'=> 'switch',
		'default' =>  true,
		),
		
			array (
		'id' => 'wid_search',
		'output'  => array('background-color' => '#searchform > div > div > a',),
		'title' => __('Cor do Botão de Busca','mwpress'),
		
		'desc' => __('Selecione a cor do botão de busca','mwpress'),
		'type'=> 'color',
		'default'=> '#1565a0'
		),
		
		array (
		'id' => 'wid_bg',
		'output' => '.widget',
		'title' =>__('Fundo do widget','mwpress'),
		
		'desc' => __('Selecione a cor ou imagem de fundo','mwpress'),
		'type'=> 'background',
		'default'=> array( 'background-color' => '#FFF',
		)
		),
		
		$fields = array( 
    'id'       => 'wid_border',
    'type'     => 'border',
    'title'    => __('Borda do Widget','mwpress'),
    'subtitle' => __('selecione a cor da borda do widget','mwpress'),
    'output'   => array('.widget'),
 
    'default'  => array(
        'border-color'  => '#ccc', 
        'border-style'  => 'solid', 
        'border-top'    => '1px', 
        'border-right'  => '1px', 
        'border-bottom' => '1px', 
        'border-left'   => '1px'
    )
),

			array(
    'id'          => 'wid_font_tit',
    'type'        => 'typography', 
    'title'       => __('Font (Título)','mwpress'),
    'google'      => true, 
    'font-backup' => true,
    'output'      => array('.widget-title'),
    'units'       =>'px',
    'subtitle'    => __('Selecione a font do título do widget','mwpress'),
    'default'     => array(
         'color'       => '#0f3958', 
      'font-style'  => '400', 
        'font-family' => 'Roboto',  
        'google'      => true,
        'font-size'   => '18px', 
        'line-height' => '20px'
    )),
		
	)));
	Redux::setSection($opt_name, array (
	
		'id' => 'wid_listpost', 
		'title'=> __('Widget PostList','mwpress'),

		'subsection' => true,
		'fields' => array (
		
					array(
    'id'          => 'wid_wid_font_tit',
    'type'        => 'typography', 
    'title'       => __('Font (Título)','mwpress'),
    'google'      => true, 
    'font-backup' => true,
    'output'      => array('.postlistwidT'),
    'units'       =>'px',
    'subtitle'    => __('Selecione a font do título do widget','mwpress'),
    'default'     => array(
         'color'       => '#0f3958', 
      'font-style'  => '400', 
        'font-family' => 'Roboto',  
        'google'      => true,
        'font-size'   => '14px', 
        'line-height' => '20px'
    ),
		
		
		
		
		
		))));
		
		

		
		// Social Icons

		Redux::setSection($opt_name, array (
		'id' => 'social_icons_MSG', 
		'title'=> __('Perfil Social','mwpress'),
		'desc' => __('Estas configurações apenas estão disponíveis nas versões premium licenciadas, para adquirir um tema premium acesse www.mwpress.com.br ','mwpress'),
		'subsection' => false,
		'icon' => $iconmwpress,
		'fields' => array (
		

		
     )));
	 
	 
	 
	 
	 
	 Redux::setSection($opt_name, array (
		'id' => 'social_icons', 
		'title'=> __('Perfil Social','mwpress'),
		'desc' => __('Estas configurações apenas estão disponíveis nas versões premium licenciadas, para adquirir um tema premium acesse www.mwpress.com.br ','mwpress'),
		'subsection' => false,
		'icon' => $iconmwpress,
		'fields' => array (
		
		array(
    'id'       => 'social_face',
    'type'     => 'text',
    'title'    => __('Facebook','mwpress'),
    'validate' => 'url',
    'msg'      => __('por favor insira uma url válida','mwpress'),
),
		array(
    'id'       => 'social_twitter',
    'type'     => 'text',
    'title'    => __('Twitter','mwpress'),
    'validate' => 'url',
    'msg'      => __('por favor insira uma url válida','mwpress'),
),
		array(
    'id'       => 'social_wapp',
    'type'     => 'text',
    'title'    => __('Whatsapp','mwpress'),
    'validate' => 'url',
    'msg'      => __('por favor insira uma url válida','mwpress'),
),
		array(
    'id'       => 'social_skype',
    'type'     => 'text',
    'title'    => __('Skype', 'mwpress'),
    'validate' => 'url',
    'msg'      => __('por favor insira uma url válida','mwpress'),
),
		array(
    'id'       => 'social_insta',
    'type'     => 'text',
    'title'    => __('Instagram','mwpress'),
    'validate' => 'url',
    'msg'      => __('por favor insira uma url válida','mwpress'),
),
		array(
    'id'       => 'social_gmais',
    'type'     => 'text',
    'title'    => __('Google+','mwpress'),
    'validate' => 'url',
    'msg'      => __('por favor insira uma url válida','mwpress'),
),
		array(
    'id'       => 'social_vimeo',
    'type'     => 'text',
    'title'    => __('Vimeo','mwpress'),
    'validate' => 'url',
    'msg'      => __('por favor insira uma url válida','mwpress'),
),
		array(
    'id'       => 'social_youtube',
    'type'     => 'text',
    'title'    => __('Youtube','mwpress'),
    'validate' => 'url',
    'msg'      => __('por favor insira uma url válida','mwpress'),
),
		
     )));





// Configurações de custom de post
Redux::setSection($opt_name, array (
		'id' => 'post_custom', 
		'post_types' => array('post'),
		'title'=> __('Post Customizado','mwpress'),
		'desc' => __('Essa é a parte de customização das páginas tipo post','mwpress'),
		'icon' => $iconmwpress,
		));	
		
		
		Redux::setSection($opt_name, array (
		'post_types' => array('post'),
		
		'id' => 'post_custom_config_g', 
		'title'=> __('Configurações Gerais','mwpress'),
		'desc' => __('Essa é a parte de configurações para os Posts, as definições aqui tomadas irão ignorar as padrões','mwpress'),
		'subsection' => true,
		'fields' => 
			array (
		
			$fields = 
		
		array(
    'id'       => 'layout_pronto',
    'type'     => 'image_select',
    'title'    => __('Tipos de Layouts', 'mwpress'), 
    'desc'    => __('Caso você deseje personalizar o estilo do layout você precisa selecionar a opção custom', 'mwpress'), 
    'options'  => array(
	

		
        '1'      => array(
         
            'img'   => ReduxFramework::$_url.'../../../assets/img/opt/layout1.png'
        ),
        '2'      => array(
           
            'img'   => ReduxFramework::$_url.'../../../assets/img/opt/layout2.png'
        ),
        
        '3'      => array(
            
            'img'  => ReduxFramework::$_url.'../../../assets/img/opt/layout3.png'
        ),
		
		 '4'      => array(
            
            'img'  => ReduxFramework::$_url.'../../../assets/img/opt/layout4.png'
        ),
 
				 'custom'      => array(
            
            'img'  => ReduxFramework::$_url.'../../../assets/img/opt/layout-custom.png'
        ),
		
		
    ),
    'default' => '1'
),
		
		
		
		
		
		
		
	
		
			array (
		'id' => 'post_banner_hab',
	    'title' => __('Banner (Habilitação)','mwpress'),
		'type' => 'switch',
		'desc' => __('Esta opção habilita/desabilita o banner','mwpress'),
		'default'=> true,
		),
		
				array (
		'id' => 'post_banner_hab_tit',
	    'title' => __('Banner Título (Exibir Título no Banner)','mwpress'),
		'type' => 'switch',
		'desc' => __('Esta opção habilita/desabilita o Título banner','mwpress'),
		'default'=> true,
		),
		
											array (
		'id' => 'post_hab_tit',
	    'title' => __('Título dentro do Post (Exibir Título)','mwpress'),
		'type' => 'switch',
		'desc' => __('Esta opção habilita/desabilita o Título dentro do post','mwpress'),
		'default'=> false,
		),
		
						array (
		'id' => 'post_banner_img',
	
    'title'    => __('Imagem Destacada no Banner','mwpress'),
     'desc'     => __('Marque se desejar Exibir a imagem destacada no banner neste post/página','mwpress'),
		'type' => 'switch',

		'default'=> true,
		),
		
			array(
    'id'       => 'post_banner_size',
    'type'     => 'dimensions',
	
	'width'    => false,
    'units'    => array('px','em','%'),
    'title'    => __('Altura do Banner', 'mwpress'),
    'subtitle' => __('Selecione a altura do seu Banner', 'mwpress'),

    'default'  => array(
        
        'height'  => '',
        'width'  => ''
    )),
	

array(
    'id'       => 'post_banner_overlay',
    'type'     => 'color',
    'title'    => __('Banner Cor de fundo', 'mwpress'), 
    'subtitle' => __('Por padrão a cor de fundo é a cor de esquema do tema, mas você pode alterar selecionando uma', 'mwpress'),
    'default'  => 'transparent',
    'validate' => 'color',
),

array(
    'id'             => 'post_page_margin_c',
    'type'           => 'spacing',
    'mode'           => 'margin',
     'units'    => array('px','em','%'),
    'units_extended' => 'false',
    'title'          => __('Página Conteúdo interno Margin', 'mwpress'),
    'subtitle'       => __('Selecione o margin do conteúdo da página', 'mwpress'),
    'default'            => array(
        'margin-top'     => '', 
        'margin-right'   => '', 
        'margin-bottom'  => '', 
        'margin-left'    => '',
        'units'          => '', 
    )
),
		
										array (
		'id' => 'post_hab_social',
	    'title' => __('Ícones de compartilhamento', 'mwpress'),
		'type' => 'switch',
		'default'=> true,
		),
		
										array (
		'id' => 'post_hab_date',
	    'title' => __('Exibir Data','mwpress'),
		'type' => 'switch',
		'desc' => __('Esta opção habilita/desabilita a data dentro do post','mwpress'),
		'default'=> true,
		),
		
												array (
		'id' => 'post_hab_autor',
	    'title' => __('Exibir Autor','mwpress'),
		'type' => 'switch',
		'desc' => __('Esta opção habilita/desabilita o autor dentro do post','mwpress'),
		'default'=> true,
		),
		
														array (
		'id' => 'post_hab_cat',
	    'title' => __('Exibir Categorias','mwpress'),
		'type' => 'switch',
		'desc' => __('Esta opção habilita/desabilita a categoria dentro do post','mwpress'),
		'default'=> true,
		),
		array (
			'id' => 'post_hab_cat_color',
	    'title' => __('Exibir Cor customizada das Categorias','mwpress'),
		'type' => 'switch',
		'desc' => __('Esta opção habilita/desabilita as cores customizadas das categorias','mwpress'),
		'default'=> true,
		),

				array (
		'id' => 'post_hab_autbio',
	    'title' => __('Exibir Autor Bio','mwpress'),
		'type' => 'switch',
		'desc' => __('Esta opção habilita/desabilita os dados biográficos do autor dentro do post','mwpress'),
		'default'=> true,
		),
		
		array (
		'id' => 'post_hab_tags',
	    'title' => __('Exibir Tags','mwpress'),
		'type' => 'switch',
		'desc' => __('Esta opção habilita/desabilita as tags dentro do post','mwpress'),
		'default'=> true,
		),
		array (
		'id' => 'post_hab_mod',
	    'title' => __('Exibir exibição de Modificações','mwpress'),
		'type' => 'switch',
		'desc' => __('Esta opção habilita/desabilita a data de alteração do post','mwpress'),
		'default'=> true,
		),
		
		array (
		'id' => 'post_hab_coment',
	    'title' => __('Exibir exibição dos comentários','mwpress'),
		'type' => 'switch',
		'desc' => __('Esta opção habilita/desabilita a exibição de comentários no post','mwpress'),
		'default'=> true,
		),
		

		
		array (
		'id' => 'post_sch',
	    'title' => __('Exibir Herança de Cores','mwpress'),
		'type' => 'switch',
		'desc' => __('Esta opção habilita/desabilita a herança de cores','mwpress'),
		'default'=> true,
		),
		
					array (
		'id' => 'post_cor_meta',
		'output'  => '.metapost',
		'title' => __('Cor do meta Post','mwpress'),
		

		'type'=> 'color',
		'default'=> '#1565a0'
		),
		
					array (
		'id' => 'post_cor_tags',
		'output'  => array('background-color' => '.metatags',),
		'title' => __('Cor das Tags','mwpress'),
		
	
		'type'=> 'color',
		'default'=> '#1565a0'
		),
		

)));
		
Redux::setSection($opt_name, array (
		'post_types' => array('post'),
		
		'id' => 'post_custom_config', 
		'title'=> __('Layout Post','mwpress'),
		'desc' => __('Essa é a parte de configurações especificas para os Posts, as definições aqui tomadas irão ignorar as padrões','mwpress'),
		'subsection' => true,
		'fields' => array (
		
			$fields = 

	array (
		'id' => 'post_page_hab',
		'title' => __('Exibir Custom Layout Post','mwpress'),
		'desc' => __('Habilitando esta opção as definições padrões serão ignoradas e apenas estas passarão a valer.','mwpress'),
		'type'=> 'switch',
		'default' =>  false,
		),
			
			
		array(
    'id'       => 'post_page_full',
    'type'     => 'button_set',
	
    'title'    => __('Page Conteúdo (Fullwidth)','mwpress'),
    'subtitle' => __('Habilite para widescreen','mwpress'),
    'desc'     => __('Marque se desejar Exibir','mwpress'),
    
    'options' => array(
        'no-container' => __('Habilitado', 'mwpress'), 
        'container' => __('Desabilitado', 'mwpress'), 
        
     ), 
    'default' => 'container'
),	
			array(
    'id'       => 'post_page_display',
    'type'     => 'image_select',
    'title'    => __('Posicionamento das Sidebars','mwpress'),
    'subtitle' => __('Selecione o posicionamento das sidebars','mwpress'),
    'options'  => array(
        '2-right'      => array(
            'alt'   => 'Sidebar Direita', 
            'img'   => ReduxFramework::$_url.'../../../assets/img/opt/2-right.png'
        ),
        '2-left'      => array(
            'alt'   => 'Sidebar Esquerda', 
            'img'   => ReduxFramework::$_url.'../../../assets/img/opt/2-left.png'
        ),
        
        '3-left-right'      => array(
            'alt'  => 'Sidebars Esquerda e Direita', 
            'img'  => ReduxFramework::$_url.'../../../assets/img/opt/3-left-right.png'
        ),
		
		 '1-full'      => array(
            'alt'   => 'Fullwidth (widescreen)', 
            'img'   => ReduxFramework::$_url.'../../../assets/img/opt/1-full.png'
        )
    ),
    'default' => '2-right'
),

array (
		'id' => 'post_page_bg',
		'output' => '#ALL-BODY-POST',
		'title' => __('Fundo da Página','mwpress'),
		
		'desc' => __('Selecione a cor ou imagem de fundo','mwpress'),
		'type'=> 'background',
		'default'=> array( 'background-color' => '#FFF',
		)
		),
		
		array (
		'id' => 'post_page_bg_content',
		'output' => '#CONTENT-P-POST',
		'title' => __('Cor do Conteúdo','mwpress'),
		
		'desc' => __('Selecione a cor ou imagem de fundo','mwpress'),
		'type'=> 'background',
		'default'=> array( 'background-color' => '#FFF',
		)
		),
		array (
		'id' => 'post_page_bg_sidebar',
		'output' => array('#SIDEBAR-LEFT-POST, #SIDEBAR-RIGHT-POST'),
		'title' => __('Cor Sidebars','mwpress'),
		
		'desc' => __('Selecione a cor ou imagem de fundo','mwpress'),
		'type'=> 'background',
		'default'=> array( 'background-color' => '#f2f2f2',
		)
		),
)));
	

	
Redux::setSection($opt_name, array (
		'post_types' => array('post'),
		
		'id' => 'cat_custom_config', 
		'title'=> __('Categorias','mwpress'),
		'subsection' => true,
		'fields' => array (
		
			$fields = 	
	
	array (
		'id' => 'cat_banner_hab',
	    'title' => __('Banner (Habilitação)','mwpress'),
		'type' => 'switch',
		'desc' => __('Esta opção habilita/desabilita o banner','mwpress'),
		'default'=> true,
		),
		
	array(
    'id'       => 'cat_banner_size',
    'type'     => 'dimensions',
	
	'width'    => false,
    'units'    => array('px','em','%'),
    'title'    => __('Altura do Banner','mwpress'),
    'subtitle' => __('Selecione a altura do seu Banner','mwpress'),
    'desc'     => __('Escolha a altura','mwpress'),
    'default'  => array(
        
        'height'  => '80px',
        'width'  => ''
    )),

			array (
		'id' => 'cat_banner_bg_ext',
		'output' => '#BANNER-EXT-CAT',
		'title' => __('Bread (Externo)','mwpress'),
		
		'desc' => __('Selecione a cor ou imagem do Banner','mwpress'),
		'type'=> 'background',
		'default'=> array( 'background-color' => '#e6e6e6'
		)
		),
		
	)));
	
	
	
	
	
	
	
	
	
	

// Configurações de custom de página
Redux::setSection($opt_name, array (
		'id' => 'page_custom', 
		'post_types' => array('page'),
		'title'=> __('Página Customizada','mwpress'),
		'desc' => __('Essa é a parte de customização do post tipo página','mwpress'),
		'icon' => $iconmwpress,
		));	
		
		
		Redux::setSection($opt_name, array (
		
		
		'id' => 'page_custom_config_g', 
		'title'=> __('Configurações Gerais','mwpress'),
		'desc' => __('Essa é a parte de configurações para as Páginas, as definições aqui tomadas irão ignorar as padrões','mwpress'),
		'subsection' => true,
		'fields' => array (
		
			$fields = 
		
				array(
    'id'       => 'layout_pronto_page',
    'type'     => 'image_select',
    'title'    => __('Tipos de Layouts', 'mwpress'), 
    'desc'    => __('Caso você deseje personalizar o estilo do layout você precisa selecionar a opção custom', 'mwpress'), 
    'options'  => array(
	

		
        '1'      => array(
         
            'img'   => ReduxFramework::$_url.'../../../assets/img/opt/layout1.png'
        ),
        '2'      => array(
           
            'img'   => ReduxFramework::$_url.'../../../assets/img/opt/layout2.png'
        ),
        
        '3'      => array(
            
            'img'  => ReduxFramework::$_url.'../../../assets/img/opt/layout3.png'
        ),
		
		 '4'      => array(
            
            'img'  => ReduxFramework::$_url.'../../../assets/img/opt/layout4.png'
        ),
 
				 'custom'      => array(
            
            'img'  => ReduxFramework::$_url.'../../../assets/img/opt/layout-custom.png'
        ),
		
		
    ),
    'default' => 'custom'
),
		
		
			array (
		'id' => 'page_banner_hab',
	    'title' => __('Banner (Habilitação)','mwpress'),
		'type' => 'switch',
		'desc' => __('Esta opção habilita/desabilita o banner','mwpress'),
		'default'=> false,
		),
		
					array (
		'id' => 'page_banner_hab_tit',
	    'title' => __('Banner Título (Exibir Título no Banner)','mwpress'),
		'type' => 'switch',
		'desc' => __('Esta opção habilita/desabilita o Título banner','mwpress'),
		'default'=> true,
		),
								array (
		'id' => 'page_banner_img',
	
    'title'    => __('Imagem Destacada no Banner','mwpress'),
     'desc'     => __('Marque se desejar Exibir a imagem destacada no banner neste post/página','mwpress'),
		'type' => 'switch',

		'default'=> true,
		),
							array (
		'id' => 'page_hab_tit',
	    'title' => __('Título dentro da Página (Exibir Título)','mwpress'),
		'type' => 'switch',
		'desc' => __('Esta opção habilita/desabilita o Título dentro da página','mwpress'),
		'default'=> false,
		),
		
												array (
		'id' => 'page_hab_date',
	    'title' => __('Exibir Data','mwpress'),
		'type' => 'switch',
		'desc' => __('Esta opção habilita/desabilita a data dentro da página','mwpress'),
		'default'=> false,
		),
		
												array (
		'id' => 'page_hab_autor',
	    'title' => __('Exibir Autor','mwpress'),
		'type' => 'switch',
		'desc' => __('Esta opção habilita/desabilita o autor dentro da página','mwpress'),
		'default'=> false,
		),
		
array (
		
		'id' => 'page_hab_mod',
	    'title' => __('Exibir exibição de Modificações','mwpress'),
		'type' => 'switch',
		'desc' => __('Esta opção habilita/desabilita a data de alteração da página','mwpress'),
		'default'=> false,
		),
		
		array (
		'id' => 'page_hab_coment',
	    'title' => __('Exibir exibição dos comentários','mwpress'),
		'type' => 'switch',
		'desc' => __('Esta opção habilita/desabilita a exibição de comentários no post','mwpress'),
		'default'=> false,
		),
		

		

)));
		
		
Redux::setSection($opt_name, array (
		'post_types' => array('page'),
		
		'id' => 'page_custom_config', 
		'title'=> __('Layout Páginas','mwpress'),
		'desc' => __('Essa é a parte de configurações especificas para as Páginas, as definições aqui tomadas irão ignorar as padrões','mwpress'),
		'subsection' => true,
		'fields' => array (
		
			$fields = 

	array (
		'id' => 'page_page_hab',
		'title' => __('Exibir Custom Layout Página','mwpress'),
		'desc' => __('Habilitando esta opção as definições padrões serão ignoradas e apenas estas passarão a valer.','mwpress'),
		'type'=> 'switch',
		'default' =>  false,
		),
			
			
		array(
    'id'       => 'page_page_full',
    'type'     => 'button_set',
	
    'title'    => __('Page Conteúdo (Fullwidth)','mwpress'),
    'subtitle' => __('Habilite para widescreen','mwpress'),
    'desc'     => __('Marque se desejar Exibir','mwpress'),
    
    'options' => array(
        'no-container' => __('Habilitado', 'mwpress'), 
        'container' => __('Desabilitado', 'mwpress'), 
        
     ), 
    'default' => 'container'
),	
			
			
			
			array(
    'id'       => 'page_page_display',
    'type'     => 'image_select',
    'title'    => __('Posicionamento das Sidebars','mwpress'), 
    'subtitle' => __('Selecione o posicionamento das sidebars','mwpress'),
    'options'  => array(
        '2-right'      => array(
            'alt'   => 'Sidebar Direita', 
            'img'   => ReduxFramework::$_url.'../../../assets/img/opt/2-right.png'
        ),
        '2-left'      => array(
            'alt'   => 'Sidebar Esquerda', 
            'img'   => ReduxFramework::$_url.'../../../assets/img/opt/2-left.png'
        ),
        
        '3-left-right'      => array(
            'alt'  => 'Sidebars Esquerda e Direita', 
            'img'  => ReduxFramework::$_url.'../../../assets/img/opt/3-left-right.png'
        ),
		
		 '1-full'      => array(
            'alt'   => 'Fullwidth (widescreen)', 
            'img'   => ReduxFramework::$_url.'../../../assets/img/opt/1-full.png'
        )
    ),
    'default' => '2-right'
),

array (
		'id' => 'page_page_bg',
		'output' => '#ALL-BODY-PAGE',
		'title' => __('Fundo da Página','mwpress'),
		
		'desc' => __('Selecione a cor ou imagem de fundo','mwpress'),
		'type'=> 'background',
		'default'=> array( 'background-color' => '#FFF',
		)
		),
		
		array (
		'id' => 'page_page_bg_content',
		'output' => '#CONTENT-P-PAGE',
		'title' => __('Cor do Conteúdo','mwpress'),
		
		'desc' => __('Selecione a cor ou imagem de fundo','mwpress'),
		'type'=> 'background',
		'default'=> array( 'background-color' => '#FFF',
		)
		),
		array (
		'id' => 'page_page_bg_sidebar',
		'output' => array('#SIDEBAR-LEFT-PAGE, #SIDEBAR-RIGHT-PAGE'),
		'title' => __('Cor Sidebars','mwpress'),
		
		'desc' => __('Selecione a cor ou imagem de fundo','mwpress'),
		'type'=> 'background',
		'default'=> array( 'background-color' => '#f2f2f2',
		)
		),
		





)));
	

// Configurações de custom de post
Redux::setSection($opt_name, array (
		'id' => 'front_custom', 
		'post_types' => array('post'),
		'title'=> __('Página Inicial','mwpress'),
		'desc' => __('Essa é a parte de customização da página inicial','mwpress'),
		'icon' => $iconmwpress,
		));	
		
		
		Redux::setSection($opt_name, array (
		'post_types' => array('post'),
		
		'id' => 'front_custom_gerais', 
		'title'=> __('Configurações Gerais','mwpress'),
		'desc' => __('Essa é a parte de configurações para a Página Inicial','mwpress'),
		'subsection' => true,
		'fields' => array (
		
			$fields = 
		
			array (
		'id' => 'front_banner_hab',
	    'title' => __('Banner (Página Inicial)','mwpress'),
		'type' => 'switch',
		'desc' => __('Esta opção habilita/desabilita o banner na página inicial','mwpress'),
		'default'=> true,
		),
		
					array (
		'id' => 'banner_bg_ext_front',
		'output' => '#BANNER-EXT-FRONT',
		'title' => __('Banner','mwpress'),
		
		'desc' => __('Selecione a cor ou imagem do Banner','mwpress'),
		'type'=> 'background',
		'default'=> array( 'background-color' => '#eaeaea', 'background-image' => get_template_directory_uri().'/assets/img/banner/1.jpg'
		)
		),
		
				
			array(
    'id'       => 'front_qtd_post',
    'type'     => 'text',
    'title'    => __('Quantidade de posts por página','mwpress'),
'default'=> '6',
),
		

		

)));

// Configurações de woocommerce
Redux::setSection($opt_name, array (
		'id' => 'woo_custom', 
		'title'=> __('Woocommerce(Loja)','mwpress'),
		'desc' => __('Essa é a parte de customização do Woocommerce','mwpress'),
		'icon' => $iconmwpress,
		));	
		
		
		Redux::setSection($opt_name, array (
		'post_types' => array('post'),
		
		'id' => 'woo_custom_gerais', 
		'title'=> __('Configurações Gerais','mwpress'),
		'desc' => __('Essa é a parte de configurações para a Página Inicial','mwpress'),
		'subsection' => true,
		'fields' => array (
		
			$fields = 
			
							array (
		'id' => 'woo_cart_hab',
	    'title' => __('Menu Carrinho','mwpress'),
		'type' => 'switch',
		'desc' => __('Esta opção habilita/desabilita o carrinho de compras no menu principal','mwpress'),
		'default'=> false,
		),
			
				array (
		'id' => 'woo_banner_hab',
	    'title' => __('Banner Shop','mwpress'),
		'type' => 'switch',
		'desc' => __('Esta opção habilita/desabilita o banner na página principal da loja','mwpress'),
		'default'=> true,
		),
		

			array (
		'id' => 'woo_banner_bg',
		'output' => '#BANNER-WOO',
		'title' => __('Banner Página Loja','mwpress'),
		
		'desc' => __('Selecione a imagem do Banner','mwpress'),
		'type'=> 'background',
		'default'=> array( 'background-color' => '#eaeaea', 'background-image' => get_template_directory_uri().'/assets/img/banner/loja.jpg'
		)
		),
			array(
    'id'       => 'woo_banner_size',
    'type'     => 'dimensions',
	
	'width'    => false,
    'units'    => array('px','em','%'),
    'title'    => __('Altura do Banner','mwpress'),
    'subtitle' => __('Selecione a altura do seu Banner','mwpress'),
    'desc'     => __('Escolha a altura','mwpress'),
    'default'  => array(
        
        'height'  => '200px',
        'width'  => ''
    )),
			/*
			array (
		'id' => 'woo_cat_img_hab',
	    'title' => __('Imagem Banner Categorias','mwpress'),
		'type' => 'switch',
		'desc' => __('Esta opção habilita/desabilita o a imagem das categorias no banner','mwpress'),
		'default'=> false,
		),
	
					array(
    'id'       => 'woo_cat_banner_size',
    'type'     => 'dimensions',
	
	'width'    => false,
    'units'    => array('px','em','%'),
    'title'    => __('Altura do Banner da categoria','mwpress'),
    'subtitle' => __('Selecione a altura do seu Banner','mwpress'),
    'desc'     => __('Escolha a altura','mwpress'),
    'default'  => array(
        
        'height'  => '200px',
        'width'  => ''
    )),
		
				array (
		'id' => 'woo_cat_banner_font',
	    'title' => __('Texto claro no Banner','mwpress'),
		'type' => 'switch',
		'desc' => __('Esta opção habilita/desabilita o texto claro nos banners das categorias','mwpress'),
		'default'=> true,
		), */
		
			array(
    'id'       => 'woo_qtd_product',
    'type'     => 'text',
    'title'    => __('Quantidade de produtos por página','mwpress'),
	'default'=> '9'

),
		

		

)));

// Configurações de woocommerce
Redux::setSection($opt_name, array (
		'id' => 'vc_elementos', 
		'title'=> __('Visual Elementos','mwpress'),
		'desc' => __('Essa é a parte de customizações gerais de elementos nativos do tema no Visual Composer','mwpress'),
		'icon' => $iconmwpress,
		));	
		
		
		Redux::setSection($opt_name, array (
		'post_types' => array('post'),
		
		'id' => 'vc_postlist', 
		'title'=> __('Listagem de Posts','mwpress'),
		'desc' => __('Essa é a parte de configurações da listagem de Posts','mwpress'),
		'subsection' => true,
		'fields' => array (
		
			$fields = 
			
				array (
		'id' => 'vc_postlist_hab',
	    'title' => __('Exibir Configurações','mwpress'),
		'type' => 'switch',
		'desc' => __('Esta opção habilita/desabilita as configurações aqui definidas','mwpress'),
		'default'=> true,
		),
		
			array(
    'id'          => 'vc_postlist_h',
    'type'        => 'typography', 
    'title'       => __('Font (Título)', 'mwpress'),
    'google'      => true, 
    'font-backup' => true,
    'output'      => array('.plisth'),
    'units'       =>'px',
    'subtitle'    => __('Selecione a font do título do Postlist', 'mwpress'),
    'default'     => array(
  
      'font-style'  => 'Bold 700', 
        'font-family' => 'Oswald',  
        'google'      => true,
        'font-size'   => '22px', 
        'line-height' => '20px'
    )),
	
				array(
    'id'          => 'vc_postlist_txt',
    'type'        => 'typography', 
    'title'       => __('Font (Texto)', 'mwpress'),
    'google'      => true, 
    'font-backup' => true,
    'output'      => array('.plisttxt'),
    'units'       =>'px',
    'subtitle'    => __('Selecione a font do texto do Postlist', 'mwpress'),
    'default'     => array(
    'text-align' => 'justify',
	'color' => '#777',
      'font-style'  => '400', 
        'font-family' => 'Open Sans,arial,sans-serif',  
        'google'      => true,
        'font-size'   => '13px', 
        'line-height' => '20px'
    )),
		

		

)));


Redux::setSection($opt_name, array (
		'id' => 'vc_active', 
		'title'=> __('ADQUIRA A VERSÃO PREMIUM','mwpress'),
		'icon' => $iconmwpress,
		));	
		
		
		Redux::setSection($opt_name, array (
		'post_types' => array('post'),
		
		'id' => 'vc_activate', 
		'title'=> __('ADQUIRA A VERSÃO PRO','mwpress'),
		'desc' => __('Esta é uma versão que foi desenvolvida para os cursos sobre como criar sites, muito embora você possa criar seu site a partir dela, esta é uma versão de introdução com algumas opções limitadas. O que não a torna gratuita, você não pode redistribuir ou comercializar este tema, você deve utilizar apenas para uso pessoal. Conheça as versões premium do MWPRESS que estão com todas as opções disponíveis, basta você adquirir sua licença através do nosso site www.mwpress.com.br','mwpress'),
		'subsection' => true,
		'fields' => array (
		

		
		)));
		
global $update_mwpress;
if($update_mwpress){
$styleact = get_option('mwp_style_act');
	if($styleact != ''){ 
	
	
	}
	
	
else { 
Redux::hideSection($opt_name, vc_elementos, vc_elementos);
Redux::hideSection($opt_name, woo_custom, woo_custom);  
Redux::hideSection($opt_name, front_custom, front_custom);  
Redux::hideSection($opt_name, page_custom_config, page_custom_config);  
Redux::hideSection($opt_name, page_custom, page_custom);  
Redux::hideSection($opt_name, post_custom_config, post_custom_config);  
Redux::hideSection($opt_name, post_custom, post_custom);  
Redux::hideSection($opt_name, wid_opt, wid_opt);  
Redux::hideSection($opt_name, footer_opt, footer_opt);  
Redux::hideSection($opt_name, layout_opt, layout_opt);  
Redux::hideSection($opt_name, banner_opt, banner_opt);  
Redux::hideSection($opt_name, menu_opt, menu_opt);  
 
Redux::hideSection($opt_name, header_opt, header_opt);  
Redux::hideSection($opt_name, header_opt_geral, header_opt_geral);  

   
   }

 		
		

	}
	


    /*
     * <--- END SECTIONS
     */
?>