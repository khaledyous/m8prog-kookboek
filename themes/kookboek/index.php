<?php get_header(); ?>

<main class="container my-5">
    <?php if ( have_posts() ) : ?>
        <?php while ( have_posts() ) : the_post(); ?>
            <article class="mb-5">
                <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
                <div><?php the_excerpt(); ?></div>
            </article>
        <?php endwhile; ?>
    <?php else : ?>
        <p>Volgens mij zoek je iets dat er niet is.</p>
    <?php endif; ?>
</main>

<?php get_footer(); ?>
