<?php get_header(); ?>
  <nav>
    <ul>
      <li><a href="index.html">Home</a></li>
      <li><a href="about.html">About</a></li>
      <li><a href="photos.html">Photos</a></li>
      <li><a href="live.html">Live</a></li>
      <li><a href="contact.html">Contact</a></li>
    </ul>
  </nav>
  <div id="content">
    <?php if (have_posts() ) : while ( have_posts() ) : the_post(); ?>
      <?php the_content(); ?>
    <?php endwhile; endif; ?>
  </div>
<?php get_footer(); ?>
