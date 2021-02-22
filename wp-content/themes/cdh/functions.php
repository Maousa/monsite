<?php
    /*** Ajouter un script ou un fichier CSS de la bonne façon */
    function wpdocs_theme_name_scripts() {
        wp_register_style('main-style', get_template_directory_uri().'/style.css', array(), true);
        wp_enqueue_style('main-style');
        wp_register_style('chart-style', get_template_directory_uri().'/package/dist/Chart.min.css', array(), true);
        wp_enqueue_style('chart-style');
        wp_register_style('bootstrap-style', 'https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css', array(), true);
        wp_enqueue_style('bootstrap-style');
    }
    add_action( 'wp_enqueue_scripts', 'wpdocs_theme_name_scripts' );

    register_nav_menus( array(
        'menu principal' => __('Primary','cdh'),
        'social' => __('social','cdh')
    ));
    $defaults = array( 
        ’theme_location’ => ’header-menu’, 
        ’menu’ => ’menu-uno’, 
        ’container’ => ’div’, 
        ’container_class’ => ’’, 
        ’container_id’ => ’’, 
        ’menu_class’ => ’menu-item’, 
        ’menu_id’ => ’menuHaut’, 
        ’echo’ => true, 
        ’fallback_cb’ => ’wp_page_menu’, 
        ’before’ => ’’, 
        ’after’ => ’’, 
        ’link_before’ => ’’, 
        ’link_after’ => ’’, 
        // ’items_wrap’ => ’<ul id="%1$s" class="%2$s">%3$s</ul>’, 
        ’depth’ => 0, 
        ’walker’ => ’’ 
    ); 
    
    add_theme_support('custom-logo', array( 
        'height'      => 80, 
        'width'       => 80, 
        'flex-height' => true, 
    ));
    
    //récuperation d'un article spécial dans wordpress
    function get_post_by_title($page_title, $output = OBJECT) {
        global $wpdb;
        $post = $wpdb->get_row( $wpdb->prepare( "SELECT * FROM $wpdb->posts WHERE post_title = %s AND post_type='post'", $page_title),$output);
        if ($post)
            return $post;
        return null;
    }
    //récuperation d'un lien
    function excerpt_new($outpout){  
        global $post;    
        return $outpout.'<a class="btn btn-ghost" href="'.get_permalink($post->ID).'"> 
        Lire la suite ...</a>'; 
    }
    add_filter('the_excerpt', 'excerpt_new'); 

    //function chart.js
    
?>