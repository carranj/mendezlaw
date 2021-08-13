 <!DOCTYPE html>

 <html lang="en">

 <head>
   <meta charset="utf-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <link rel="icon" href="<?php bloginfo('template_directory'); ?>/images/favicon.ico">
   <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet">
   <link href="https://fonts.googleapis.com/css2?family=Work+Sans:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
   <title><?php wp_title(); ?></title>
   <?php wp_head(); ?>
 </head>

 <body <?php body_class(); ?>>
   <header class="d-flex justify-content-between align-items-center">

     <div id="logo">
       <img src="<?php echo get_template_directory_uri() ?>/images/logo.png" alt="">
     </div>
     <div>
       <?php
        $args = array(
          'menu'      => 'menu-1',
          'container' => 'ul',
          'menu_class'      => 'nav',
        );
        wp_nav_menu($args);
        ?>
     </div>
     <div id="phone">
       <a href="tel:936-539-5761"><i class="fas fa-phone"></i> 936-539-5761</a>
     </div>


   </header>