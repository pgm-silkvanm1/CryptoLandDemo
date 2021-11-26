<?php get_header(); ?>


<div>
    <?php get_template_part( 'components/hero', 'hero', ['description' => get_the_excerpt()
    ]); ?>

    <article>
        <?php the_content(); ?>
    </article>
</div>

<?php get_footer(); ?>
