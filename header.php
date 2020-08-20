<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php bloginfo('name')?> - <?php bloginfo('description');?></title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo get_stylesheet_uri();?>">
</head>
<body>
    <header>
        <div class="nav-menu">
            <div class="nav-title">
            <h1><?php echo bloginfo( 'title' ) ;?></h1>
            </div>
            <div class="nav-ul">
                <?php wp_nav_menu(); ?>
            </div>
            
        </div>
    </header>
    