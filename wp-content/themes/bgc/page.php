<?php get_header(); ?>
<main>
    <?php get_template_part('notice',get_post_format());?>
    
        <?php
            if(''!==(get_post(98)->post_content)){
                echo '<div class="content1">';
            }else{
                echo '<div class="content2">';
            }
            if (have_posts()):
                while (have_posts()) : the_post();
                    the_content();
                endwhile;
                else: echo '<p>Sorry, no posts matched your criteria.</p>';
            endif;
            echo '</div>';
        ?>
    
    <?php get_template_part('sponsers',get_post_format());?>
</main>
<?php get_footer();?>