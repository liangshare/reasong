<?php
/*
Template Name: Blog page
*/ 
; ?>
              <?php if(have_posts()) : ?><?php while(have_posts()) : the_post(); ?>
              <?php
                $args = array(
                  'post_type' => 'attachment',
                  'numberposts' => null,
                  'post_status' => null,
                  'post_parent' => $post->ID
                ); 
                $attachments = get_posts($args);
                if ($attachments) {
                  foreach ($attachments as $attachment) {
                    echo apply_filters('the_title', $attachment->post_title);
                    the_attachment_link($attachment->ID, false);
                  }
                }
              ?>
