<?php

/**
 * The template for displaying all pages.
 *
 * @package RED_Starter_Theme
 */

get_header(); ?>


<div id="primary" class="content-area">
   <main id="main" class="site-main" role="main">
      <div class="main-img-logo">
         <img src='<?php echo get_template_directory_uri(); ?>/images/logos/inhabitent-logo-full.svg' alt='inhabitent logo' />
      </div>
      <section class="product-info container">
         <h2>Shop Stuff</h2>
         <?php

         $termArgs = [
            'taxonomy' => 'product-type',
            'hide-empty' => true,
         ];

         $terms = get_terms($termArgs);
         // echo '<pre>';
         // var_dump($terms);
         // echo '</pre>';

         echo '<div class= front-page-flex-box>';
         foreach ($terms as $term) {
            echo '<div class="front-page-product-item">';
            $icon = get_template_directory_uri() . '/images/product-type-icons/' . $term->slug . '.svg';
            echo '<img src="' . $icon . '"/>';
            $name = $term->name;
            // echo '<p>'.$name.'</p>';
            $description = $term->description;
            echo '<p>' . $description . '</p>';
            echo '<a href="' . get_term_link($term) . '">' . $name . ' Stuff</a></div>';
         }
         echo '</div>'
         ?>
      </section>

      <section class="journal-info-container">
         <h2>Inhabitent Journal</h2>

         <?php
         $args = array(
            'numberposts'      => 3,
            'orderby'          => 'date',
            'order'            => 'DESC',
            'post_type'        => 'post',
         );

         $journals = get_posts($args); ?>

         <div class='front-page-journal-container'>
            <?php foreach ($journals as $post) : ?>
            <!-- var_dump($post); -->
            <?php setup_postdata($post); ?>

            <div class='front-page-post-container'>
               <div class='front-page-journal-thumbnail'>
                  <?php the_post_thumbnail(); ?>
               </div>
               <div class='front-page-post-meta-container'>
                  <div class='front-page-post-date'>
                     <?php the_date(); ?>
                  </div>
                  <div class='front-page-post-comment'>
                  </div>
                  / <?php comments_number('0 Comments', '1 Comment', '% Comments'); ?>
               </div>
               <div class='front-page-post-title'>
                  <a href="<?php the_permalink() ?>" rel="bookmark"><?php the_title(); ?></a>

               </div>
               <div class='front-page-post-permalink'>
                  <a href="<?php the_permalink() ?>" rel="bookmark">Read Entry</a>
               </div>

            </div>
            <?php endforeach; ?>
         </div>
         <?php //wp_reset_postdata(); ?>


      </section>

   </main><!-- #main -->
</div><!-- #primary -->


<?php get_footer(); ?>
















<!-- Other option to do it -->

<!-- TODO add banner image with logo  -->
<!-- <?php
      $args = [
         'post_type' => 'post',
         'posts_per_page' => 3,
      ];
      $query = new WP_Query($args);

      ?> -->

<!-- this is from the class -->
<!-- foreach ( $terms as $term ) {
      echo '<pre>' . var_dump( $term ) . '</pre>';

      $icon = get_template_directory_uri() . '/images/' . $term->slug . '.svg';
      var_dump( file_exists( $icon ) );
      var_dump( $icon );
      
      echo '<img src="' . $icon . '" />';
      echo $term->name;
      echo $term->description;
   } -->

<!-- <?php if ($query->have_posts()) : ?>
   <?php while ($query->have_posts()) : $query->the_post(); ?> -->




<!-- post thumbnail -->
<!-- post date and comment count -->
<!-- <?php the_title(); ?> -->
<!-- read more e.g. the permalink -->
<!-- <?php endwhile; ?>
   <?php wp_reset_postdata(); ?>
<?php else : ?>
	<p>No posts found :(</p>
<?php endif; ?> -->