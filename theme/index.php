<?php get_header(); ?> 
      <div>
      <a class="go2about" href=""><img src="<?php bloginfo('template_url'); ?>/images/go2about.png"></a>
      <a class="connect_us" href=""><img src="<?php bloginfo('template_url'); ?>/images/connect_us.png"></a>
      <a class="homelogo" href="<?php echo home_url(); ?>"><img src="<?php bloginfo('template_url'); ?>/images/logo.png"></a>
      <a class="stuff" href=""><img src="<?php bloginfo('template_url'); ?>/images/stuff.png"></a>
      <a class="search" href=""><img src="<?php bloginfo('template_url'); ?>/images/search.png"></a>
      </div>
      <article>
        <ul>
        <?php $last_category = ""; ?>
            <?php while(have_posts()) : the_post(); ?>
            <?php $current_category = get_the_category(); ?>
            <?php if($last_category != $current_category[0]->cat_name) { ?>
              <?php if($last_category != "") { ?>
          </ul>
          <ul>
              <?php } ?>
              <?php $last_category = $current_category[0]->cat_name; } ?>

              <?php $large_image_url = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'large'); ?>

          <li><a href="<?php the_permalink() ?>"><img class="small" src="<?php echo $large_image_url[0]?>" /></a></li>
            <?endwhile; ?>
        </ul>

      </article>
<?php get_footer(); ?>
