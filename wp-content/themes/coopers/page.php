<?php get_header(); ?>
    <div class="grid-container fluid">
        <div class="grid-x grid-margin-x">
           <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
                <?php the_content(); ?>
           <?php endwhile; endif; ?>
        </div>
    </div>
<?php get_footer();