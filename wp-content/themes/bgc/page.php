<?php get_header(); ?>
<main>
    <?php get_template_part('notice',get_post_format());?>
    <?php
        if (have_posts()):
            while (have_posts()) : the_post();
                the_content();
            endwhile;
            else: echo '<p>Sorry, no posts matched your criteria.</p>';
        endif;
    ?>
</main>
<?php get_footer();?>