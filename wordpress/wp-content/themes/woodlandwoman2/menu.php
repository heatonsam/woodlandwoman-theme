<div class="container sitetop">
<div class="col-sm-12 col-md-9 col-lg-9">
<div class="logo"><a href="<?php echo home_url()?>"><?php 
echo "<img src=" . get_template_directory_uri() . "/img/logo@05x.png'>";?></a></div>
<?php
if (is_front_page()) {
    echo "<img src=" . get_template_directory_uri() . "/img/bannerww.jpg'>";
}
?>
<div class="menu">
<span class="menu-item"><img class="menu-line" src="https://woodlandwoman.ca/wp/wp-content/uploads/2018/05/bar-left.png">
<a href="<?php echo home_url()?>">Blog</a>
<a href="<?php echo home_url()?>/category">Archives</a>
<a href="<?php echo home_url()?>/about">About</a>
<a href="<?php echo home_url()?>/contact">Contact</a>
<img class="menu-line" src="https://woodlandwoman.ca/wp/wp-content/uploads/2018/05/bar-right.png"></span>
</div>
</div>
</div>