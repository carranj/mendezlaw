 <!DOCTYPE html>

 <html lang="en">

 <head>
   <meta charset="utf-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <link rel="icon" href="<?php bloginfo('template_directory'); ?>/images/favicon.ico">
   <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css" rel="stylesheet">
   <link href="https://fonts.googleapis.com/css2?family=Work+Sans:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
   <title><?php wp_title(); ?></title>
   <?php wp_head(); ?>
 </head>

 <body <?php body_class(); ?>>
   <nav class="navbar navbar-expand-lg">

     <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
       <span class="navbar-toggler-icon"></span>
     </button>

     <div class="collapse navbar-collapse" id="navbarSupportedContent">
       <?php

        $args = array(
          'menu'      => 'menu-1',
          'container' => 'ul',
          'menu_class'      => 'nav flex-column',
        );
        wp_nav_menu($args);
        ?>

     </div>
   </nav>