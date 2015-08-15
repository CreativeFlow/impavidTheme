<?php get_header(); ?>

<div class="main">

  <div class="container">
      <?php if (has_post_thumbnail( $post->ID ) ): ?>
      <?php $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'single-post-thumbnail' ); ?>
      <?php endif; ?>
    <div class="fullPageHeader" style="background: linear-gradient(to left, rgba(0,0,0, 0.6), rgba(0,0,0,0.6)), url('<?php echo $image[0]; ?>') no-repeat; background-size: cover;">
      <div class="singleTitle flex">
         <h1 class="entry-title">
            <?php the_title(); ?>
          </h1>

        <div class="entry-meta">
          <?php
              global $post;
              $author_id=$post->post_author;
          ?>
          <?php hackeryou_posted_on(); ?><?php the_author_meta( 'user_nicename', $author_id );?>
        </div><!-- .entry-meta -->
      </div>
    </div>

    <div class="content">
      <?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>

        <div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

          <div class="entry-content">
            <?php the_content(); ?>
            <?php wp_link_pages(array(
              'before' => '<div class="page-link"> Pages: ',
              'after' => '</div>'
            )); ?>
          </div><!-- .entry-content -->

          <div class="entry-utility">
            <?php hackeryou_posted_in(); ?>
            <?php edit_post_link( 'Edit', '<span class="edit-link">', '</span>' ); ?>
          </div><!-- .entry-utility -->
        </div><!-- #post-## -->

        <div id="nav-below" class="navigation">
          <p class="nav-previous"><?php previous_post_link('%link', '&larr; %title'); ?></p>
          <p class="nav-next"><?php next_post_link('%link', '%title &rarr;'); ?></p>
        </div><!-- #nav-below -->

        <?php comments_template( '', true ); ?>

      <?php endwhile; // end of the loop. ?>

    </div> <!-- /.content -->

    <?php get_sidebar(); ?>

  </div> <!-- /.container -->
</div> <!-- /.main -->

<?php get_footer(); ?>