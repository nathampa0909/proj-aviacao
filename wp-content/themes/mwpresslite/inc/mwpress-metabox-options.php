<?php

$array_choices      = array();
if(shortcode_exists("rev_slider"))  { 
$new_slider       = new RevSlider();
$tot_revsliders   = $new_slider->getArrSliders();

foreach ( $tot_revsliders as $rev_single ) {
     $alias   = $rev_single->getAlias();
     $title   = $rev_single->getTitle();
     array_push($array_choices, 
                array($alias => $title,
                     ));
}}

    $opt_name = 'mwpress_opt';

 
 
    Redux::setExtensions( $opt_name, dirname( __FILE__ ) . '/redux/ReduxCore/inc/extensions' );
	$iconmwpress = ''.get_template_directory_uri().'/assets/img/icons_mwpress/icon_mwpress.png';


	 Redux_Metaboxes::setBox( $opt_name, array(
        'id'         => 'sistema-notas',
        'title'      => __( 'Sistema de notas/review', 'mwpress' ),
        'post_types' => array( 'adsadas', ),

        'position'   => 'normal',
        'priority'   => 'low',
        'sections'   => array(
		
		
		
		
			array (
		
		'id'       => 'sist-notas',
		'title'    => __('Sistema de Notas/Review', 'mwpress'),
		'icon' => $iconmwpress,
		'desc' => __('Você pode estabelecer critérios e definir notas. Isso pode ser útil se você esteja avaliando algo em sua postagem e queira atribuir uma pontuação', 'mwpress'),
    	'type'=> 'switch',
		'default' =>  false,
		'fields' => array(
	


  

$fields = 


		array(
				 'id'       => 'review_hab_this',
		  'title'    => __('Habilitar sistema de notas', 'mwpress'),
    'subtitle' => __('Habilite caso você deseje exibir o sistema de notas neste post', 'mwpress'),
    	'type'=> 'switch',
		'default' =>  false, ),



array(
    'id'       => 'txt_criterio1',
    'type'     => 'text',
    'title'    => __('Critério 1'),
),
 array(
    'id' => 'value_criterio1',
    'type' => 'slider',
    
   
    'desc' => __('Valor do critério 1', 'mwpress'),
    "default" => '',
    "min" => 0,
    "step" => 0.1,
    "max" => 10,
    'resolution' => 0.1,
    'display_value' => 'text'
),

array(
    'id'       => 'txt_criterio2',
    'type'     => 'text',
    'title'    => __('Critério 2'),
),
 array(
    'id' => 'value_criterio2',
    'type' => 'slider',
    
   
    'desc' => __('Valor do critério 2', 'mwpress'),
    "default" => '',
    "min" => 0,
    "step" => 0.1,
    "max" => 10,
    'resolution' => 0.1,
    'display_value' => 'text'
),

array(
    'id'       => 'txt_criterio3',
    'type'     => 'text',
    'title'    => __('Critério 3'),
),
 array(
    'id' => 'value_criterio3',
    'type' => 'slider',
    
   
    'desc' => __('Valor do critério 3', 'mwpress'),
    "default" => '',
    "min" => 0,
    "step" => 0.1,
    "max" => 10,
    'resolution' => 0.1,
    'display_value' => 'text'
),

array(
    'id'       => 'txt_criterio4',
    'type'     => 'text',
    'title'    => __('Critério 4'),
),
 array(
    'id' => 'value_criterio4',
    'type' => 'slider',
    
   
    'desc' => __('Valor do critério 4', 'mwpress'),
    "default" => '',
    "min" => 0,
    "step" => 0.1,
    "max" => 10,
    'resolution' => 0.1,
    'display_value' => 'text'
),

array(
    'id'       => 'txt_criterio5',
    'type'     => 'text',
    'title'    => __('Critério 5'),
),
 array(
    'id' => 'value_criterio5',
    'type' => 'slider',
    
   
    'desc' => __('Valor do critério 5', 'mwpress'),
    "default" => '',
    "min" => 0,
    "step" => 0.1,
    "max" => 10,
    'resolution' => 0.1,
    'display_value' => 'text'
),

array(
    'id'       => 'txt_criterio6',
    'type'     => 'text',
    'title'    => __('Critério 6'),
),
 array(
    'id' => 'value_criterio6',
    'type' => 'slider',
    
   
    'desc' => __('Valor do critério 6', 'mwpress'),
    "default" => '',
    "min" => 0,
    "step" => 0.1,
    "max" => 10,
    'resolution' => 0.1,
    'display_value' => 'text'
),

)))));	
	
	
	   Redux_Metaboxes::setBox( $opt_name, array(
        'id'         => 'PRO',
        'title'      => __( 'Configurações individuais do post/página', 'mwpress' ),
        'post_types' => array( 'page', 'post', 'lp_course' ),

        'position'   => 'normal',
        'priority'   => 'high',
        'sections'   => array(
	
	array (
		
		'id'       => 'teste333',
		'title'    => __('Adquira a versão premium', 'mwpress'),
		'icon' => $iconmwpress,
		'desc' => __('As configurações individuais de post/página apenas estão disponíveis nas versões premium, adquira acessando www.mwpress.com.br', 'mwpress'),
    	'type'=> 'switch',
		'default' =>  true,
		'fields' => array( 
		
		
		
			array(
				 'id'       => 'post_banner_img_t_coloraa',
		 
    	'type'=> 'none',
		'default' =>  true, ),

		
		) ))));
		
		
		
	
	
	
    Redux_Metaboxes::setBox( $opt_name, array(
        'id'         => 'demo-layout',
        'title'      => __( 'Configurações individuais do post/página', 'mwpress' ),
        'post_types' => array( 'asda' ),

        'position'   => 'normal',
        'priority'   => 'high',
        'sections'   => array(
		
		
		
		
			array (
		
		'id'       => 'layout_postpage',
		'title'    => __('Layouts pré-definidos', 'mwpress'),
		'icon' => $iconmwpress,
		'desc' => __('Você pode selecionar um layout de post/página predefinido, por padrão ele irá utilizar o layout definido no painel geral de customização do post/página', 'mwpress'),
    	'type'=> 'switch',
		'default' =>  true,
		'fields' => array(
	


$fields = array(
    'id'       => 'layout_pronto_this',
    'type'     => 'image_select',
    'title'    => __('Tipos de Layouts', 'mwpress'), 
    'desc'    => __('Caso você deseje personalizar o estilo do layout você precisa selecionar a opção custom', 'mwpress'), 
    'options'  => array(
	
		  'default'      => array(
         
            'img'   => ReduxFramework::$_url.'../../../assets/img/opt/layout-default.png'
        ),
		
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
    'default' => 'default'
),

		array(
				 'id'       => 'post_banner_img_t_color',
		  'title'    => __('Título Banner (cor branca)', 'mwpress'),
    'subtitle' => __('Ativar acor branca para o título do banner', 'mwpress'),
    	'type'=> 'switch',
		'default' =>  true, ),



)),
		
		
	

						array (
		
		'id'       => 'config_post',
		'title'    => __('Configurações Principais', 'mwpress'),
		'icon' => $iconmwpress,
		'subtitle' => __('Exibir imagem destacada no banner', 'mwpress'),
    	'type'=> 'switch',
		'default' =>  true,
		'fields' => array(
				array(
    'id'       => 'banner_hab_this',
    'type'     => 'button_set',
	
    'title'    => __('Exibir Banner', 'mwpress'),
     'desc'     => __('Marque se desejar habilitar o banner neste post/página', 'mwpress'),
    
    'options' => array(
        '1' => __('Habilitado', 'mwpress'), 
        '2' => __('Padrão', 'mwpress'), 
        '0' => __('Desabilitado', 'mwpress'), 
        
     ), 
    'default' => '2'
),
				array(
    'id'       => 'postpage_banner_img_this',
    'type'     => 'button_set',
	
    'title'    => __('Imagem Destacada no Banner', 'mwpress'),
     'desc'     => __('Marque se desejar habilitar a imagem destacada no banner neste post/página', 'mwpress'),
    
    'options' => array(
        '1' => __('Habilitado', 'mwpress'),  
        '' => __('Padrão', 'mwpress'), 
        'naoexibe' => __('Desabilitado', 'mwpress'), 
        
     ), 
    'default' => ''
),

				array (
		'id' => 'postpage_banner_hab_tit_this',
	    'title' => __('Exibir Título no Banner', 'mwpress'),
		'type' => 'button_set',
		'desc' => __('Esta opção habilita/desabilita o Título banner', 'mwpress'),
    'options' => array(
        '1' => __('Habilitado', 'mwpress'),  
        '' => __('Padrão', 'mwpress'), 
        'naoexibe' => __('Desabilitado', 'mwpress'), 
        
     ), 
    'default' => ''
),

				array (
		
		'id' => 'postpage_hab_tit_this',
	    'title' => __('Exibir título dentro do Post', 'mwpress'),
		'type' => 'button_set',
		'desc' => __('Esta opção habilita/desabilita o Título dentro do Post', 'mwpress'),
    'options' => array(
        '1' => __('Habilitado', 'mwpress'),  
        '2' => __('Padrão', 'mwpress'), 
        '0' => __('Desabilitado', 'mwpress'), 
        
     ), 
    'default' => '2'
),
		

		
		array(
    'id'       => 'banner_size_this',
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
    'id' => 'banner_transp_this',
    'type' => 'slider',
    'title' => __('Opacidade do Banner', 'mwpress'),
   
    'desc' => __('Quanto menor o valor mais transparência estará sendo aplicada', 'mwpress'),
    "default" => '',
    "min" => 0,
    "step" => 0.01,
    "max" => 1,
    'resolution' => 0.01,
    'display_value' => 'text'
),

array(
    'id'       => 'banner_overlay',
    'type'     => 'color',
    'title'    => __('Banner Cor de fundo', 'mwpress'), 
    'subtitle' => __('Por padrão a cor de fundo é a cor de esquema do tema, mas você pode alterar selecionando uma', 'mwpress'),
    'default'  => 'transparent',
    'validate' => 'color',
),

		
				array(
				 'id'       => 'banner_custom_hab',
		  'title'    => __('Banner customizado', 'mwpress'),
    'subtitle' => __('Habilitar Imagem customizada para o banner', 'mwpress'),
    	'type'=> 'switch',
		'default' =>  '', ),
		array (
		'id' => 'banner_custom_this',
		'output' => '#BANNER-EXT-CUST',
		'title' => __('Banner image', 'mwpress'),
		

		'type'=> 'background',
		'default'=> ''
		),
		
				array(
    'id'       => 'page_full_this',
    'type'     => 'button_set',
	
    'title'    => __('Conteúdo da Página (Fullwidth)', 'mwpress'),
    'subtitle' => __('Habilite para widescreen', 'mwpress'),

    
    'options' => array(
        'no-container' => __('Habilitado', 'mwpress'),  
		'' => __('Padrão', 'mwpress'), 
        'container' => __('Desabilitado', 'mwpress'), 
        
     ), 
    'default' => ''
),

            array(
    'id'          => 'slider_select',
	'title'    => __('Revslider', 'mwpress'),
    'label'       => __( 'Revolution Slider', 'theme-text-domain' ),
   
    'type'        => 'select',
    'options'     => $array_choices
  ),
  
  
		
		)),
		
		
			array (
		 'id'       => 'config_cores',
		  'title'    => __('Configurações de Cores', 'mwpress'),
		   'icon' => $iconmwpress,

		'fields' => array(
		

		
			array (
		 'id'       => 'config_hab_scheme_this',
		  'title'    => __('Esquema de Cores', 'mwpress'),
    'subtitle' => __('Habilite os esquema de cores', 'mwpress'),

    	'type'=> 'button_set',
	    'options' => array(
        'hab' => __('Habilitado', 'mwpress'), 
        'default' => __('Padrão', 'mwpress'), 
        'desab' => __('Desabilitado', 'mwpress'), 
        
     ), 
    'default' => 'default'
		),	


$fields = array(
    'id'       => 'esquema_pronto_this',
    'type'     => 'image_select',
    'title'    => __('Esquema de cores', 'mwpress'), 
    'options'  => array(
	
		  'default'      => array(
         
            'img'   => ReduxFramework::$_url.'../../../assets/img/opt/default2.png'
        ),
		
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
				 'custom'      => array(
            
            'img'  => ReduxFramework::$_url.'../../../assets/img/opt/color_custom.png'
        ),
		
		
    ),
    'default' => 'default'
),

		
		
array (
		'id' => 'config_colorP_this',
		'output'    => array('color' => '.corP',),
		'title' => __('Cor (Primária)', 'mwpress'),
		

		'type'=> 'color',
		'default'=> '#0f3958'
				),

array (
		'id' => 'config_colorS_this',
		'output'    => array('color' => '.corS',),
		'title' => __('Cor (Secundária)', 'mwpress'),
		

		'type'=> 'color',
		'default'=> '#1565a0'
				
		
		),

		array (
		'id' => 'config_colorT_this',
		'output'    => array('color' => '.corT',),
		'title' => __('Cor (Terceira)', 'mwpress'),
		

		'type'=> 'color',
		'default'=> '#1383bf'
				
		
		),
		
		array (
		'id' => 'config_colorD_this',
		'output'    => array('color' => '.corD',),
		'title' => __('Cor (Destaque)', 'mwpress'),

		'type'=> 'color',
		'default'=> '#5ab4f1'
				
		
		),
		
		array (
		'id' => 'config_colorTxt_this',
		'output'    => array('color' => '.corTxt',),
		'title' => __('Cor (Texto Padrão)', 'mwpress'),

		'type'=> 'color',
		'default'=> '#5f5f5f'
				
		
		))),
		
		
		
		
		
		
		array (
		 'id'       => 'config_post_elements',
		  'title'    => __('Elementos do Post/Página', 'mwpress'),
		   'icon' => $iconmwpress,

		'fields' => array(
		
					array (
		'id' => 'post_hab_social_this',
	    'title' => __('Ícones de compartilhamento', 'mwpress'),
		'type' => 'button_set',

    'options' => array(
        '1' => __('Habilitado', 'mwpress'),  
        '2' => __('Padrão', 'mwpress'), 
        '0' => __('Desabilitado', 'mwpress'),
        
     ), 
    'default' => '2'
),

			array (
		'id' => 'post_hab_date_this',
	    'title' => __('Exibir Data', 'mwpress'),
		'type' => 'button_set',

    'options' => array(
        '1' => __('Habilitado', 'mwpress'),  
        '2' => __('Padrão', 'mwpress'), 
        '0' => __('Desabilitado', 'mwpress'),
        
     ), 
    'default' => '2'
),
		
												array (
		'id' => 'post_hab_autor_this',
	    'title' => __('Exibir Autor', 'mwpress'),
		'type' => 'button_set',

    'options' => array(
        '1' => __('Habilitado', 'mwpress'),  
        '2' => __('Padrão', 'mwpress'), 
        '0' => __('Desabilitado', 'mwpress'), 
        
     ), 
    'default' => '2'
),
		
														array (
		'id' => 'post_hab_cat_this',
	    'title' => __('Exibir Categorias', 'mwpress'),
		'type' => 'button_set',

    'options' => array(
        '1' => __('Habilitado', 'mwpress'),  
        '2' => __('Padrão', 'mwpress'), 
        '0' => __('Desabilitado', 'mwpress'),
        
     ), 
    'default' => '2'
),
				array (
		'id' => 'post_hab_autbio_this',
	    'title' => __('Exibir Autor Bio', 'mwpress'),
		'type' => 'button_set',
    'options' => array(
        '1' => __('Habilitado', 'mwpress'),  
        '2' => __('Padrão', 'mwpress'), 
        '0' => __('Desabilitado', 'mwpress'), 
        
     ), 
    'default' => '2'
),
			array (
		'id' => 'post_hab_tags_this',
	    'title' => __('Exibir Tags', 'mwpress'),
		'type' => 'button_set',
    'options' => array(
        '1' => __('Habilitado', 'mwpress'),  
        '2' => __('Padrão', 'mwpress'), 
        '0' => __('Desabilitado', 'mwpress'), 
        
     ), 
    'default' => '2'
),
		array (
		'id' => 'post_hab_mod_this',
	    'title' => __('Exibir Modificações', 'mwpress'),
		'type' => 'button_set',

		
    'options' => array(
        '1' => __('Habilitado', 'mwpress'),  
        '2' => __('Padrão', 'mwpress'), 
        '0' => __('Desabilitado', 'mwpress'),
        
     ), 
    'default' => '2'
),
		
		array (
		'id' => 'post_hab_coment_this',
	    'title' => __('Exibir Comentários', 'mwpress'),
		'type' => 'button_set',

    'options' => array(
        '1' => __('Habilitado', 'mwpress'),  
        '2' => __('Padrão', 'mwpress'),
        '0' => __('Desabilitado', 'mwpress'), 
        
     ), 
    'default' => '2'
),
		

		
		)),
            
            array(
                'title'  => __( 'Configurações Gerais', 'mwpress' ),
                'icon' => $iconmwpress,
                'id' => 'config-g-layout',
                'fields' => array(
	
	
					array(
    'id'       => 'header_margin_top_this',
    'type'     => 'dimensions',
	'width'    => false,
    'units'    => array('px','em','%'),
  'title'    => __('Margem Superior do Cabeçalho', 'mwpress'),
    'subtitle' => __('Selecione a altura da distância do cabeçalho', 'mwpress'),

    'default'  => array(
        
        'height'  => '',
        'width'  => ''
    )),

	
		array(
    'id'             => 'page_margin_c_this',
    'type'           => 'spacing',
    'mode'           => 'margin',
    'units'          => array('em', 'px'),
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
		'id' => 'page_bg_this',
		'output' => '#ALL-SITE-THIS',
		'title' => __('Fundo da Página', 'mwpress'),
		

		'type'=> 'background',
		'default'=> ''
		),

		

)),

            array(
                'title'  => __( 'Opções de Menu', 'mwpress' ),
                'icon' => $iconmwpress,
                'id' => 'menu-opt',
                'fields' => array(
				
				

                    array(
                        'id'      => 'menuP-select',
						'title'   => __( 'Opção de menu', 'mwpress' ),
                        'desc'    => __('Aqui você pode selecionar um menu customizado', 'mwpress'),
                        'type'    => 'select',
                        'data'    => 'menu',
                        'default' => '',
                    ),

     
				
				
                    		
									array (
		'id' => 'menu_sch',
	    'title' => __('Herdar Esquema de Cores', 'mwpress'),
		'type' => 'switch',
		'desc' => __('Com esta opção todas as confiburações de cores aqui setadas serão ignoradas e serão herdadas as cores do esquema', 'mwpress'),
		'default'=> '',
		),
							array(
    'id'       => 'menu_position_this',
    'type'     => 'image_select',
    'title'    => __('Posicionamento do Menu', 'mwpress'), 

    'options'  => array(
	'default'      => array(
            'alt'   => 'Padrão', 
            'img'   => ReduxFramework::$_url.'../../../assets/img/opt/default-bt.png'
        ),
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
    'default' => 'default'
),

array(
    'id'       => 'menu_align_this',
    'type'     => 'button_set',
    'title'    => __('Alinhamento Horizontal (Menu)', 'mwpress'),
    'subtitle' => __('Selecione o alinhamento dos itens do Menu', 'mwpress'),

    
    'options' => array(
        'default' => __('Padrão', 'mwpress'), 
        'ul-left' => __('Esquerda', 'mwpress'), 
        'ul-center' => __('Centralizado', 'mwpress'), 
        'ul-right' => __('Direita', 'mwpress'),
     ), 
    'default' => 'default'
),



									array (
		'id' => 'woo_cart_hab_this',
	    'title' => __('Menu Carrinho','mwpress'),
		'type' => 'button_set',
    'options' => array(
        '1' => __('Habilitado', 'mwpress'),  
        '2' => __('Padrão', 'mwpress'), 
        '0' => __('Desabilitado', 'mwpress'), 
        
     ), 
    'default' => '2'
),
		
		)),
		
		

            array(
                'title'  => __( 'Opções de Header', 'mwpress' ),
                 'icon' => $iconmwpress,
                'id' => 'header-opt',
                'fields' => array(



				
				
			
				
				array (
		'id' => 'header_hab_this',
		'title' => __('Habilitar Cabeçalho', 'mwpress'),
	
		'type' => 'button_set',
    'options' => array(
        '1' => __('Habilitado', 'mwpress'),  
        '2' => __('Padrão', 'mwpress'), 
        '0' => __('Desabilitado', 'mwpress'), 
        
     ), 
    'default' => '2'
),
	
		
				array (
		'id' => 'top_hab_this',
		'title' => __('Barra do Topo', 'mwpress'),

		'type' => 'button_set',
    'options' => array(
        '1' => __('Habilitado', 'mwpress'),  
        '2' => __('Padrão', 'mwpress'), 
        '0' => __('Desabilitado', 'mwpress'), 
        
     ), 
    'default' => '2'
),
		
		array (
		'id' => 'header_box_geral_this',
		'title' => __('Cabeçalho Boxed', 'mwpress'),

		'type' => 'button_set',
    'options' => array(
        '1' => __('Habilitado', 'mwpress'),  
        '2' => __('Padrão', 'mwpress'), 
        '0' => __('Desabilitado', 'mwpress'), 
        
     ), 
    'default' => '2'
),
		

				array (
		'id' => 'header_ext_this',
		'output' => '.headerext_this',
		'title' => __('Fundo do Cabeçalho', 'mwpress'),

		'type'=> 'background',
		'default'=> '',
		),
				array(
    'id'       => 'header_size_this',
    'type'     => 'dimensions',
	'width'    => false,
    'units'    => array('px','em','%'),
    'title'    => __('Dimensões para o Cabeçalho', 'mwpress'),
    'subtitle' => __('Selecione a altura do seu cabeçalho', 'mwpress'),

    'default'  => array(
        
        'height'  => '',
        'width'  => ''
    )),

		array (
		'id' => 'logo_this',
		'title' => __('Site Logo', 'mwpress'),
		'url' => true,
		'desc' => __('Envie sua logo', 'mwpress'),
		'type'=> 'media',
		'default'=>  ''
		),
		
	
	array(
    'id'       => 'logo_align_v_this',
    'type'     => 'image_select',
    'title'    => __('Alinhamento Vertical (Logo)', 'mwpress'), 
    'subtitle' => __('Selecione o alinhamento vertical da Logo', 'mwpress'),
    'options'  => array(
	 'default'      => array(
            'alt'   => 'Logo Default', 
            'img'   => ReduxFramework::$_url.'../../../assets/img/opt/default-bt.png'
        ),
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
    'default' => 'default'
),
array(
    'id'       => 'logo_align_h_this',
    'type'     => 'button_set',
    'title'    => __('Alinhamento Horizontal (Logo)', 'mwpress'),
    'subtitle' => __('Selecione o alinhamento do conteúdo do Topo', 'mwpress'),
    'desc'     => __('Marque a opção de alinhamento do Topo', 'mwpress'),
    
    'options' => array(
        'default' => __('Padrão', 'mwpress'), 
        'top' => __('No topo', 'mwpress'), 
        'middle' => __('No meio', 'mwpress'), 
        'bottom' => __('Em baixo', 'mwpress'), 
     ), 
    'default' => 'default'
),	


                ),
				
		
            ),
			
			
			array (
		 'id'       => 'seo_config',
		  'title'    => __('SEO', 'mwpress'),
		   'icon' => $iconmwpress,

		'fields' => array(
		
					array (
		'id' => 'seo_meta_this',
	    'title' => __('Descrição Meta (SEO)', 'mwpress'),
		'type' => 'textarea',

    'default' => ''
)))
        )
    ) );
	
	

    Redux_Metaboxes::setBox( $opt_name, array(
        'id'         => 'demo-layout2',

        'post_types' => array( 'page', 'post', 'lp_course' ),

        'position'   => 'side', 
        'priority'   => 'high', 
        'sections'   => array(
            array(
                         'icon_class' => 'icon-large',
               'icon' => $iconmwpress,
                'fields'     => array(
                   	array(
    'id'       => 'page_display',
    'type'     => 'image_select',
    'title'    => __('Posicionamento das Sidebars', 'mwpress'), 
    'subtitle' => __('Selecione o posicionamento das sidebars', 'mwpress'),
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
   
),


                
				
				)
            )
        )
    ) );

    Redux_Metaboxes::setBox( $opt_name, array(
        'id'          => 'page-options',
        'title'       => __( 'Selecionar Sidebar', 'mwpress' ),
        'post_types'  => array( 'page', 'post', 'lp_course' ),

        
        'position'    => 'side', // normal, advanced, side
        'priority'    => 'normal', // high, core, default, low
        'sidebar'     => false, // enable/disable the sidebar in the normal/advanced positions
        'sections'    => array(
            array(

                'icon_class' => 'icon-large',
                'icon' => $iconmwpress,
                'fields'     => array(
                    array(
                        'id'      => 'sidebar',
						'title'   => __( 'Sidebar Opção 1', 'mwpress' ),
                        'desc'    => __('Aqui você pode selecionar uma sidebar customizada', 'mwpress'),
                        'type'    => 'select',
                        'data'    => 'sidebars',
                        'default' => 'sidebar-1',
                    ),
					array(
                        'id'      => 'sidebar2',
						"compiler" => 'true',
                        'required' => array( 'page_display', '=', '3-left-right' ),
                        'title'   => __( 'Sidebar Opção 2', 'mwpress' ),
                        'desc'    => __('Aqui você pode selecionar uma sidebar customizada', 'mwpress'),
                        'type'    => 'select',
                        'data'    => 'sidebars',
                        'default' => 'sidebar-2',
                    ),
                )
            ),
        ),
    ) );

	
	
	
	?>