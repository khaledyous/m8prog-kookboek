<?php get_header(); ?>

<main class="container my-5">
    <?php the_post(); ?>

    <article>
        <h1><?php the_title(); ?></h1>
        
        <p class="text-muted">
            Gepubliceerd op: <?php the_date(); ?> | Laatst aangepast: <?php the_modified_date(); ?>
        </p>

        <div>
            <?php the_content(); ?>
        </div>

        <hr>

        <div class="author-info d-flex align-items-center mt-4">
            <?php echo get_avatar( get_the_author_meta('user_email'), 80 ); ?>
            <div class="ms-3">
                <h5><?php the_author(); ?></h5>
                <p><?php the_author_meta('description'); ?></p>
            </div>
        </div>

        <nav class="post-navigation mt-5">
            <?php 
            the_post_navigation([
                'next_text' => __('Volgende post', 'jouwdomein'),
                'prev_text' => __('Vorige post', 'jouwdomein'),
            ]);
            ?>
        </nav>
    </article>
</main>

<?php get_footer(); ?>
