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

// elimina el ancho y alto para que tome el width 100% y class img-fluid de bootstrap4
// remove width & height attributes from images

function remove_img_attr ($html)
{
    return preg_replace('/(width|height)="\d+"\s/', "", $html);
}
 
add_filter( 'post_thumbnail_html', 'remove_img_attr' );


// crea un custom post type para evenots 
// Register Custom Post Type
// para generar CTP rapidamente 
// https://generatewp.com/post-type/

// function eventos_post_type() {

// 	$labels = array(
// 		'name'                  => _x( 'Eventos', 'Post Type General Name', 'eventos_domain' ),
// 		'singular_name'         => _x( 'Evento', 'Post Type Singular Name', 'eventos_domain' ),
// 		'menu_name'             => __( 'Eventos', 'eventos_domain' ),
// 		'name_admin_bar'        => __( 'Eventos', 'eventos_domain' ),
// 		'archives'              => __( 'Archivos eventos', 'eventos_domain' ),
// 		'attributes'            => __( 'Item Attributes', 'eventos_domain' ),
// 		'parent_item_colon'     => __( 'Evento padre:', 'eventos_domain' ),
// 		'all_items'             => __( 'Todos los eventos', 'eventos_domain' ),
// 		'add_new_item'          => __( 'Agregar nuevo evento', 'eventos_domain' ),
// 		'add_new'               => __( 'Agregar', 'eventos_domain' ),
// 		'new_item'              => __( 'Nuevo', 'eventos_domain' ),
// 		'edit_item'             => __( 'Editar', 'eventos_domain' ),
// 		'update_item'           => __( 'Actualizar', 'eventos_domain' ),
// 		'view_item'             => __( 'Ver evento', 'eventos_domain' ),
// 		'view_items'            => __( 'Ver eventos', 'eventos_domain' ),
// 		'search_items'          => __( 'Buscar evento', 'eventos_domain' ),
// 		'not_found'             => __( 'No encontrado', 'eventos_domain' ),
// 		'not_found_in_trash'    => __( 'No encontrado en la categoría', 'eventos_domain' ),
// 		'featured_image'        => __( 'Imagen destacada', 'eventos_domain' ),
// 		'set_featured_image'    => __( 'Agregar imagen destacada', 'eventos_domain' ),
// 		'remove_featured_image' => __( 'Remover imagen destacada', 'eventos_domain' ),
// 		'use_featured_image'    => __( 'Usar como imagen destacada', 'eventos_domain' ),
// 		'insert_into_item'      => __( 'Insertar en el evento', 'eventos_domain' ),
// 		'uploaded_to_this_item' => __( 'Subir a eventos', 'eventos_domain' ),
// 		'items_list'            => __( 'Lista de eventos', 'eventos_domain' ),
// 		'items_list_navigation' => __( 'Navegacion eventos', 'eventos_domain' ),
// 		'filter_items_list'     => __( 'Filtro eventos', 'eventos_domain' ),
// 	);
// 	$rewrite = array(
// 		'slug'                  => 'eventos',
// 		'with_front'            => true,
// 		'pages'                 => true,
// 		'feeds'                 => true,
// 	);
// 	$args = array(
// 		'label'                 => __( 'Evento', 'eventos_domain' ),
// 		'description'           => __( 'Descripción de eventos', 'eventos_domain' ),
// 		'labels'                => $labels,
// 		'supports'              => array( 'title', 'editor', 'thumbnail' ),
// 		'taxonomies'            => array( 'category', 'post_tag' ),
// 		'hierarchical'          => false,
// 		'public'                => true,
// 		'show_ui'               => true,
// 		'show_in_menu'          => true,
// 		'menu_position'         => 5,
// 		'menu_icon'             => 'dashicons-calendar-alt',
// 		'show_in_admin_bar'     => true,
// 		'show_in_nav_menus'     => true,
// 		'can_export'            => true,
// 		'has_archive'           => true,
// 		'exclude_from_search'   => false,
// 		'publicly_queryable'    => true,
// 		'rewrite'               => $rewrite,
// 		'capability_type'       => 'page',
// 		'show_in_rest'          => true,
// 	);
// 	register_post_type( 'eventos_post_type', $args );

// }
// add_action( 'init', 'eventos_post_type', 0 );

// cuando el el tema de wordpress no soporta los CTM se usa el siguiente codigo para corregirlo

// add_action( 'pre_get_posts', 'add_my_post_types_to_query' );

// function add_my_post_types_to_query( $query ) {
// 	if ( (is_single() || is_home() || is_category() ) && $query->is_main_query() )
// 		$query->set( 'post_type', array( 'post', 'eventos_post_type' ) );

// 	return $query;
// }

?>


