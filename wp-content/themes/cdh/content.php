<div class="blog-mission row">
    <?php $post = get_post_by_title('Missions'); //var_dump($post);?>
    <h3 class="lptitle">
        <?php echo $post->post_title;?>
        <span class="subheader"></span>
    </h3>
    <p><?php the_excerpt(); ?></p>
</div><!-- /.blog-post -->

<div class="row">
<h3 class="lptitle" style="text-align: center; padding-bottom:0;">Voici ce que nous faisons</h3>
</div>

<div class="blocImage row">
    <div class="image" style="background:  #f0f8ff; background-size: cover;min-width: 120px;"></div>
    <!-- <div class="image" style="background: #FF00FF; background-size: cover;min-width: 120px; width:25%; height: 100%;"></div>
    <div class="image" style="background: #f0f8ff; background-size: cover;min-width: 120px; width:25%; height: 100%;"></div>
    <div class="image" style="background: #FF00FF; background-size: cover;min-width: 120px; width:25%; height: 100%;"></div>
    <div class="image" style="background:  #f0f8ff; background-size: cover;min-width: 120px; width:25%; height: 100%;"></div>
    <div class="image" style="background: #FF00FF; background-size: cover;min-width: 120px; width:25%; height: 100%;"></div>
    <div class="image" style="background: #f0f8ff; background-size: cover;min-width: 120px; width:25%; height: 100%;"></div> -->
</div>
<div class="blog-mission row">
    <?php $post = get_post_by_title('Vous avez un rôle à jouer'); //var_dump($post);?>
    <h3 class="lptitle">
        <?php echo $post->post_title;?>
        <span class="subheader"></span>
    </h3>
    <p><?php the_excerpt(); ?></p>
</div>
<div class="blocImage">
    <div class="image" style="background:  #f0f8ff; background-size: cover;min-width: 120px; width:25%; height: 100%;"></div>
    <div class="image" style="background: #FF00FF; background-size: cover;min-width: 120px; width:25%; height: 100%;"></div>
    <div class="image" style="background: #f0f8ff; background-size: cover;min-width: 120px; width:25%; height: 100%;"></div>
    <div class="image" style="background: #FF00FF; background-size: cover;min-width: 120px; width:25%; height: 100%;"></div>
</div>
<div class="row">   
    <div class="nos-valeurs">
    <?php 
        $args = array("posts_per_page" => 6, "orderby" => "comment_count", "tax_query" => array(
            array(
                "taxonomy" => "category",
                "field" => "slug",
                "terms" => "valeurs"
            )
        ));
        $posts_array = get_posts($args);
        foreach($posts_array as $post)
        {
            echo "<div class='valeur-item'>";
                echo "<div class='valeur-item-title'>";
                    echo "<h1>" . $post->post_title . "</h1>";
                echo "</div>";
                echo "<div class='valeur-item-content'>";
                    echo "<p>" . $post->post_content . "</p>";
                echo "</div>";
            echo "</div>";
        } 
    ?>
    </div>
</div> 
<div class="blog-chart row">
    <div id="chartdiv"></div>
</div>
<div class="don">je fais un don</div>
