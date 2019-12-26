<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html lang="en-CA" dir="ltr" xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset='<?php echo get_bloginfo('charset') ?>'>
    <meta name="description" content='<?php echo get_bloginfo('description') ?>'>
    <meta name="author" content="Jenna Amirault">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        <?php if(is_front_page() || is_home()) {
            echo get_bloginfo('name');
        } else {
            echo wp_title('') . " | " .  get_bloginfo('name');
        }?>
    </title>
    <?php wp_head(); ?>
</head>
