<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="description" content="">
	<meta name="author" content="">
    <title>Boys and Girls club</title>
    <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"> -->
    <link href="<?php echo get_bloginfo( 'template_directory' );?>/style.css" rel="stylesheet">
    <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script> -->
    <?php wp_head();?>
</head>
<body>
    <header>
        <div id="logo">
            <img src="<?php echo 'http://'.$_SERVER['HTTP_HOST']; ?>/bgc/wp-content/uploads/2019/01/logogood.png">
        </div>
        <div id="translate">
            <ul>
                <li>
                    <a href="">French</a> <!-- write php to check if already translated -->
                </li>
            </ul>
        </div>
        <?php wp_nav_menu( array( 'theme_location' => 'header-menu' ) ); ?>
    </header>