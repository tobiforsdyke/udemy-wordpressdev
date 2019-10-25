<?php

function tf_widgets(){
  register_sidebar([
    'name'          =>    __( 'First Sidebar', 'antagonist' ),
    'id'            =>    'tf_sidebar',
    'description'   =>    __( 'Sidebar for the theme Antagonist', 'antagonist' ),
    'before_widget' =>    '<div id="%1$s" class="widget clearfix %2$s">',
    'after_widget'  =>    '</div>',
    'before_title'  =>    '<h4>',
    'after_title'   =>    '</h4>'
  ]);
}
