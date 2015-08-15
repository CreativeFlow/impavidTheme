<?php get_header();  ?>
<div class="main">
  <div class="container">

    <div class="content">
      <?php // Start the loop ?>
      <?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
        <?php 
          // $postTitle = get_the_title();
          // $postTitle = strtoupper($postTitle); //a PHP function that makes a string all caps
         ?>
        <h2 class><?php the_title(); ?></h2>
       
        <p><?php echo get_avatar( get_the_author_meta( 'ID' ), 50 ); ?> Posted By <?php the_author_posts_link(); ?> on <?php the_date('D M d'); ?> (<?php the_time(); ?>)</p>
        <?php the_content(); ?>

      <?php endwhile; // end the loop?>
    </div> <!-- /,content -->

   <?php get_sidebar();?>

  </div> <!-- /.container -->
</div> <!-- /.main -->

<?php get_footer(); ?>