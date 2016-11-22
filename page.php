<?php get_header(); ?>
  <nav>
    <ul class="main-nav">
      <li><a href="http://localhost:3000/ws-dom-final/">Home</a></li>
      <li><a href="http://localhost:3000/ws-dom-final/about">About</a></li>
      <li><a href="http://localhost:3000/ws-dom-final/photos">Photos</a></li>
      <li><a href="http://localhost:3000/ws-dom-final/live">Live</a></li>
      <li><a href="http://localhost:3000/ws-dom-final/contact">Contact</a></li>
    </ul>
  </nav>
  <div class="content-container">
    <main class="main full-page">
      <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
        <h1><?php the_title(); ?></h1>
        <?php the_content(); ?>
      <?php endwhile; else: ?>
        <h1>Wups!</h1>
        <p>Looks like we have no content for this page?</p>
      <?php endif; ?>
    </main>
  </div>
  <!-- /.content-container -->
<?php get_footer(); ?>
