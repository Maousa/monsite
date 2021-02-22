<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>CDH</title>
    <!-- CSS de Bootstrap -->
    <!-- <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css" rel="stylesheet"> -->
    <!-- Ajout d'une nouvelle feuille de style qui sera spécifique à notre thème -->
    <link href="<?php bloginfo('template_directory');?>/style.css" rel="stylesheet">
    <!-- HTML5 shim et Respond.js pour supporter les éléments HTML5 pour les versions plus anciennes que Internet Explorer 9 -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <?php wp_head(); ?>
</head>
<body>
    <div class="header">
        <div class="row-menu">
            <div class="col-3">
                <?php 
                    if (function_exists('the_custom_logo')) { 
                        the_custom_logo(); 
                    }
                ?>
            </div>
            <div class="col-9">
                <?php wp_nav_menu(array('theme_location' => 'menu principal' ) ); ?>
                <h1 class="assoName">Cercle diplomatique <br>international humanitaire</h1>   
                <?php wp_nav_menu(array('theme_location' => 'social' ) ); ?>
            </div>
        </div>
        <div class="information">
            <?php $post = get_post_by_title('Urgence covid-19 !'); //var_dump($post);?>
            <h3><?php echo $post->post_title;?></h3>
            <p><?php the_excerpt(); ?></p>
        </div>
        <div class="slogan"> 
            <?php $post = get_post_by_title('slogan'); //var_dump($post);?>
            <h3><?php echo $post->post_content;?></h3>
        </div>
    </div>
    <div class="container">
        <!-- <div class="blog-header">
            <h1 class="blog-title"><a href="<?php echo get_bloginfo('wpurl');?>"><?php echo get_bloginfo('name'); ?></a></h1>
            <p class="lead blog-description"><?php echo get_bloginfo( 'description'); ?></p>
        </div> -->