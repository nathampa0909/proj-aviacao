<?php
/**
 * Theme: MWPRESS
 * Template for comments
 * @package Multiwordpress
 */ 
 ?>
<br><h1 class="h1t" style="color:<?php global $mwpress_opt; echo   $mwpress_opt['config_colorP']; ?>"> <?php echo __('Comentários', 'mwpress'); ?></h2><br>
<?php 
 


 

  wp_list_comments( array(
      'style'         => 'ol',
      'max_depth'     => 4,
      'short_ping'    => true,
      'avatar_size'   => '50',
      'walker'        => new comment_walker(),
  ) );
?>
<br>



<?php $comments_args = array(
        // change the title of send button 
        'label_submit'=> __('Enviar', 'mwpress'),
        // change the title of the reply section
        'title_reply'=>  __('Adicionar Comentário', 'mwpress'),
        // remove "Text or HTML to be displayed after the set of comment fields"
        'comment_form_top' => 'ds',
        'comment_notes_before' => '',
        'comment_notes_after' => '',
        // redefine your own textarea (the comment body)
        'comment_field' => false,
		'submit_button' => '
            <input name="%1$s" type="submit" id="%2$s" class="button buttonSub" value="'.__('Enviar', 'mwpress').'" />
       ',
	'comment_field' => '<div style="max-width:400px;"><p class=""><textarea id="comment" name="comment" class="textarea" placeholder="'.__('Seu Comentário', 'mwpress').'" aria-required="true"></textarea></p><br>',
        'fields' => apply_filters( 'comment_form_default_fields', array(


	
	'author' =>
      '
	  <p class="comment-form-author">'  .
      '<input id="author" class="blog-form-input input" placeholder="'.__('Seu nome', 'mwpress').'" name="author" type="text" value="' . esc_attr( $commenter['comment_author'] ) .
      '" size="30"  /></p><br>',

    'email' =>
      '<p class="comment-form-email">'.
      '<input id="email" class="blog-form-input input" placeholder="'.__('Seu e-mail', 'mwpress').'* " name="email" type="text" value="' . esc_attr(  $commenter['comment_author_email'] ) .
      '" size="30"  /></p><br>',


	 
	 

   )
  ),
);

$comentform =comment_form($comments_args); ?>
<?php

if(is_page() and $mwpress_opt['page_hab_coment'] == true) {
echo $comentform;  }

if( is_single() and $mwpress_opt['post_hab_coment'] == true) {
echo $comentform; }

?>






