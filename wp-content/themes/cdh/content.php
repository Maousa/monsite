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
<div class="blog-chart row">
    <div id="chartdiv"></div>
</div>
<div class="don">je fais un don</div>
