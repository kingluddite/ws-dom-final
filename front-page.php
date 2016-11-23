<?php get_header(); ?>
  <div class="content-container">
    <main class="main">
      <?php if (have_posts() ) : while ( have_posts() ) : the_post(); ?>
        <?php the_content(); ?>
      <?php endwhile; endif; ?>
      <?php if ( dynamic_sidebar( 'front-left' ) ); ?>
      <?php if ( dynamic_sidebar( 'front-center' ) ); ?>
      <?php if ( dynamic_sidebar( 'front-right' ) ); ?>
      <div class="gallery">
        <img src="http://placekitten.com/g/200/300" alt=""/>
        <img src="http://placekitten.com/g/200/300" alt=""/>
        <img src="http://placekitten.com/g/200/300" alt=""/>
        <img src="http://placekitten.com/g/200/300" alt=""/>
      </div>
      <!-- /.gallery -->
    </main>
    <aside class="aside" id="aside">
      <h2>More Stuff</h2>

    </aside>
    <!-- END main -->
  </div>
  <!-- /.content-container -->
<?php get_footer(); ?>
