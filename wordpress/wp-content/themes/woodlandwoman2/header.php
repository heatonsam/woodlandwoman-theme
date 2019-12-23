<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8"> 
    <meta http-equiv="X-UA-COMPATIBLE" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="<?php echo get_bloginfo('description'); ?>">
    <meta name="author" content="Jenna Amirault">
    <!-- <title><?php echo get_bloginfo('name'); ?></title> -->
    <?php wp_head(); ?>
    <?php if (is_singular()) wp_enqueue_script('comment-reply'); ?>
</head>
<div class="container-fluid sitetop"> <!-- 1. top container -->
<div class="blog-header">     <!-- 2. header/menu container, ends right after -->
<?php require "menu.php"; ?>
</div> <!-- 2. end of header/menu container -->

<div class="container">

    <div class="row"> <!-- 3. row -->
        <div class="col-sm-12 col-md-9 col-lg-9 blog-main"> <!-- 4. main blog space container -->

