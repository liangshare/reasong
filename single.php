<?php
get_header("single");
?>

<div style="display:none">
<a class="go2about" href=""><img src="<?php bloginfo('template_url'); ?>/images/go2about.png"></a>
<a class="connect_us" href=""><img src="<?php bloginfo('template_url'); ?>/images/connect_us.png"></a>
<a class="" href=""><img src=""></a>
<a class="" href=""><img src=""></a>
</div>


<?php while(have_posts()) : the_post(); ?>

<?php
  $header_url = "";
  $args = array(
    'post_type' => 'attachment',
    'numberposts' => null,
    'post_status' => null,
    'post_parent' => $post->ID
  ); 
?>
<div class="single_box", style="background-color:<?php echo get_post_meta($post->ID, "background", true); ?>">
  <div id="slider">

  <a class="go2home" href="<?php echo home_url(); ?>" ><img src="<?php bloginfo('template_url'); ?>/images/go2home.png"></a>
  </div>

  <div class="single_article">
    <h1> <?php the_title(); ?> </h1>
    <h2> 撰文|&nbsp; <?php the_author(); ?> </h2>
    <h3><span class="quote_left">“</span><?php echo get_post_meta($post->ID, "sort_des", true); ?><span class="quote_right">”</span></h3>
    <div>
      <?php the_content(); ?>
      <p style="height:50px;"></p>
    </div>
  </div>
</div>

<?php endwhile; ?>

<?php get_footer(); ?>
