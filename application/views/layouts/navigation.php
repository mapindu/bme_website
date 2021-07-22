<header id="header">
<nav data-aos="zoom-out" data-aos-delay="800" class="navbar navbar-expand navbar-vs-20 navbar-flexible" style=" ">
<div class="container header default">

<a class="" href="<?php echo site_url();?>"><img src="<?php echo base_url(); ?>assets/img/logo.png" style="max-width: 30%;"></a>
<div class="ml-auto"></div>

<ul id="primary" class="navbar-nav items">
	<?php if(strcmp($this->uri->segment(1), '') == 0){ ?>
	<li id="menu-item-631" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-home menu-item-631 nav-item"><a  href="<?php echo site_url(); ?>" class="nav-link active">Home</a></li>
	<?php }else{ ?>
		<li id="menu-item-631" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-home menu-item-631 nav-item"><a  href="<?php echo site_url(); ?>" class="nav-link">Home</a></li>
	<?php } if(strcmp($this->uri->segment(1), 'About') == 0){  ?>
		<li id="menu-item-631" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-home menu-item-631 nav-item"><a  href="<?php echo site_url('About'); ?>" class="nav-link active">About Us</a></li>
	<?php }else{  ?>
		<li id="menu-item-631" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-home menu-item-631 nav-item"><a  href="<?php echo site_url('About'); ?>" class="nav-link">About Us</a></li>
	<?php } if(strcmp($this->uri->segment(1), 'Services') == 0){ ?>
		<li id="menu-item-631" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-home menu-item-631 nav-item"><a  href="<?php echo site_url('Services'); ?>" class="nav-link active">What We Do</a></li>
	<?php }else{ ?>
		<li id="menu-item-631" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-home menu-item-631 nav-item"><a  href="<?php echo site_url('Services'); ?>" class="nav-link">What We Do</a></li>
	<?php } if(strcmp($this->uri->segment(1), 'Portfolio') == 0){ ?>
		<li id="menu-item-631" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-home menu-item-631 nav-item"><a  href="<?php echo site_url('Portfolio'); ?>" class="nav-link active">Portfolio</a></li>
	<?php }else{ ?>
		<li id="menu-item-631" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-home menu-item-631 nav-item"><a  href="<?php echo site_url('Portfolio'); ?>" class="nav-link">Portfolio</a></li>
	<?php }if(strcmp($this->uri->segment(1), 'Contact') == 0){  ?>
		<li id="menu-item-631" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-home menu-item-631 nav-item"><a  href="<?php echo site_url('Contact'); ?>" class="nav-link active">Contact Us</a></li>
	<?php }else{ ?>
		<li id="menu-item-631" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-home menu-item-631 nav-item"><a  href="<?php echo site_url('Contact'); ?>" class="nav-link">Contact Us</a></li>
	<?php } ?>


</ul>

<!-- <ul class="navbar-nav icons d-sm-inline-block d-none">
<li class="nav-item">
<a href="#" target="_blank" class="nav-link">
						<i class="icon-social-instagram"></i>
				</a>
</li>
<li class="nav-item">
<a href="https://wa.me/1123987654321?text=Hello..." target="_blank" class="nav-link">
						<i class="fab fa-whatsapp"></i>
				</a>
</li>
</ul> -->
<ul class="navbar-nav custom d-sm-inline-block d-none">
<li class="nav-item">
<a href="#" target=&quot;_blank&quot; class="nav-link ">
		<i class="icon-user"></i>
</a>
</li>
</ul>
<ul class="navbar-nav toggle">
<li class="nav-item">
<a href="#" class="nav-link pr-sm-4" data-toggle="modal" data-target="#menu">
<i class="icon-menu m-0"></i>
</a>
</li>
</ul>
<ul class="navbar-nav action d-sm-inline-block d-inline-block">
<li class="nav-item ml-3">
<a href="<?php echo site_url('Pricing'); ?>" target=&quot;_blank&quot; class=" btn ml-lg-auto primary-button">
		<i class="icon-calculator"></i>
PRICING						</a>
</li>
</ul>
</div>
</nav>
</header>