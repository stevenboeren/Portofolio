<!-- JavaScripts -->
<script src="https://cdn.tailwindcss.com"></script>

<!-- Styles -->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css">


<?php get_header(); ?>

<div class="content">
  <div class="container">
    <?php if ( have_posts() ) : ?>
      <?php while ( have_posts() ) : the_post(); ?>
        <div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
          <div class="post-header">
            <div class="date"><?php the_time( 'M j y' ); ?></div>
            <h2><a href="<?php the_permalink(); ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h2>
            <div class="author"><?php the_author(); ?></div>
          </div><!--end post header-->
          <div class="entry clear">
            <?php if ( function_exists( 'add_theme_support' ) ) the_post_thumbnail(); ?>
            <?php the_content(); ?>
            <?php edit_post_link(); ?>
            <?php wp_link_pages(); ?> </div>
          <!--end entry-->
          <div class="post-footer">
            <div class="comments"><?php comments_popup_link( 'Leave a Comment', '1 Comment', '% Comments' ); ?></div>
          </div><!--end post footer-->
        </div><!--end post-->
      <?php endwhile; /* rewind or continue if all posts have been fetched */ ?>
      <div class="navigation index">
        <div class="alignleft"><?php next_posts_link( 'Older Entries' ); ?></div>
        <div class="alignright"><?php previous_posts_link( 'Newer Entries' ); ?></div>
      </div><!--end navigation-->
    <?php else : ?>
    <?php endif; ?>
  </div>
</div>

<?php get_footer(); ?>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/1.19.1/TweenMax.min.js"></script>
<script src="js/main.js"></script>
<link rel="stylesheet" href="css/main.css">


