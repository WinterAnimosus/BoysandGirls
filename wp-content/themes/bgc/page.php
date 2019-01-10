<?php get_header(); ?>
<main>
    <?php get_template_part('notice',get_post_format());?>
    
        <?php
            if(''!==(get_post(98)->post_content)){
                echo '<div class="content1">';
            }else{
                echo '<div class="content2">';
            }
            if(''!==(get_post(123)->post_content)){
                $post_id = 123;
                $queried_post = get_post($post_id);
                $title = $queried_post->post_title;
                echo "<div id='TopLeftHome'>";
                echo "<h3>".$queried_post->post_title."</h3>";
                echo "<p>".$queried_post->post_content."</p>";
                echo "</div>";
            }
            // if(''!==(get_post(125)->post_content)){
            //     $post_id = 125;
            //     $queried_post = get_post($post_id);
            //     $title = $queried_post->post_title;
            //     echo "<div id='TopRightHome'>";
            //     echo "<h3>".$queried_post->post_title."</h3>";
            //     echo "<p>".$queried_post->post_content."</p>";
            //     echo "</div>";
            // }
            echo "<div id='TopRightHome'>";
            echo do_shortcode('[metaslider id="117"]');
            echo "</div>";

            if(''!==(get_post(127)->post_content)){
                $post_id = 127;
                $queried_post = get_post($post_id);
                $title = $queried_post->post_title;
                echo "<div id='BottomHome'>";
                echo "<h3>".$queried_post->post_title."</h3>";
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
    
    <?php get_template_part('sponsers',get_post_format());?>
</main>
<?php get_footer();?>