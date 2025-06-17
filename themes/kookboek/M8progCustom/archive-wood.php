<?php get_header(); ?>

<h1>Woods overzicht</h1>

<?php if ( have_posts() ) : ?>
    <div class="wood-archive">
        <?php while ( have_posts() ) : the_post(); ?>
            <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                <a href="<?php the_permalink(); ?>">
                    <?php 
                    if ( has_post_thumbnail() ) {
                        the_post_thumbnail('medium');
                    }
                    ?>
                    <h2><?php the_title(); ?></h2>
                </a>
                <div class="excerpt">
                    <?php the_excerpt(); ?>
                </div>
            </article>
        <?php endwhile; ?>
    </div>

    <?php the_posts_pagination(); ?>

<?php else : ?>
    <p>Geen items gevonden.</p>
<?php endif; ?>

<?php get_footer(); ?>
