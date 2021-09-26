<?php get_header(); ?>

<section id="contact__mv">
      <div class="container">
        <div class="contact__mv--title">
          <h1>お問い合わせ</h1>
        </div>
      </div>
    </section>

<?php if(have_posts()) : while(have_posts()) : the_post(); ?>
<?php the_content(); ?>
<?php endwhile; endif; ?>
<?php get_footer(); ?>