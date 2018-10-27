<?php 
// función de wordpress que sirve para cargar imágenes
if ( function_exists( 'add_theme_support' ) ) {
    add_theme_support( 'post-thumbnails' ); }

// función que sirve para agregar el sidebar widget
add_action( 'widgets_init', 'my_register_sidebars' );
function my_register_sidebars() {
    /* Register the 'primary' sidebar. */
    register_sidebar(
        array(
            'id'            => 'primary',
            'name'          => __( 'Primer Sidebar' ),
            'description'   => __( 'Sidebar para seccion de noticias' ),
            'before_widget' => '<div id="%1$s" class="widget %2$s col-12 pr-1 pr-lg-4 pt-3 text-center text-md-right f-negrita">',
            'after_widget'  => '</div>',
            'before_title'  => '<h3 class="widget-title">',
            'after_title'   => '</h3>',
        )
    );
    /* Repeat register_sidebar() code for additional sidebars. */
}
?>
