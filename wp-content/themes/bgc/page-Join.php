<?php get_header(); ?>
<main>
        <?php
            echo '<div class="content3">';
            if(''!==(get_post(123)->post_content)){
                $post_id = 123;
                $queried_post = get_post($post_id);
                $title = $queried_post->post_title;
                echo "<div id='join'>";
                echo "<h3>".$queried_post->post_title."</p>";
                echo "<p>".$queried_post->post_content."</p>";
                echo "</div>";
            }
            // if (have_posts()):
            //     while (have_posts()) : the_post();
            //         the_content();
            //     endwhile;
            //     else: echo '<p>Sorry, no posts matched your criteria.</p>';
            // endif;
            echo '</div>';
        ?>
</main>
<?php get_footer();?>