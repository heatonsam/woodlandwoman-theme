<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Woodland_Woman
 */
?>
<head>
	  <meta charset="<?php bloginfo( 'charset' ); ?>">
	  <meta name="viewport" content="width=device-width, initial-scale=1">
	  <link rel="profile" href="https://gmpg.org/xfn/11">
    <link href="//cdn-images.mailchimp.com/embedcode/slim-10_7.css" rel="stylesheet" type="text/css">
    <style type="text/css">
     #mc-embedded-subscribe {
         margin-top: 17px !important;
         font-family: $font__header !important;
         font-size: $font__entry-content-size !important;
         background-color: #21759b !important;
         color: #f6f6f6 !important;
         text-transform: uppercase !important;
         border: 0px solid black !important;
         letter-spacing: 0.08rem !important;
     }

     #mc-embedded-subscribe:hover {
         background-color: #1a6384 !important;
         cursor: pointer !important;
     }
    </style>
	<?php wp_head(); ?>
</head>
