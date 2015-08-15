<?php

/*
	Template Name: Full Page, No Sidebar
*/

get_header();  ?>

<div class="main">


  <div class="container">
  	<?php if (has_post_thumbnail( $post->ID ) ): ?>
  	<?php $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'single-post-thumbnail' ); ?>
  	<?php endif; ?>
  <div class="fullPageHeader" style="background: url('<?php echo $image[0]; ?>') no-repeat; background-size: cover;">
  	<div class="fullPageTitle flex">
  		<h2 class="pageTitle"><?php the_title(); ?></h2>
  	</div>
  </div>

   <?php // Start the loop ?>
   <?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
     <?php the_content(); ?>
   <?php endwhile; // end the loop?>
  </div> <!-- /.container -->
</div> <!-- /.main -->

<?php get_footer(); ?>