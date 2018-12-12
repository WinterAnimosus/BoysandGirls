<?php get_header(); ?>
<main>
    <?php get_template_part('notice',get_post_format());?>
    <div class="content">
        <?php
            if (have_posts()):
                while (have_posts()) : the_post();
                    the_content();
                endwhile;
                else: echo '<p>Sorry, no posts matched your criteria.</p>';
            endif;
        ?>
    </div>
    <?php get_template_part('sponsers',get_post_format());?>
</main>
<?php get_footer();?>