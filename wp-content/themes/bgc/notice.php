<?php /*Template Name: notice*/ ?>
    <?php
        if(''!==(get_post(98)->post_content)){
            echo "<div class='alert'>";
            $post_id = 98;
            $queried_post = get_post($post_id);
            $title = $queried_post->post_title;
            echo "<p>General Notice</p>";
            echo "<p>".$queried_post->post_content."</p>";
            echo "</div>";
        }
    ?>
