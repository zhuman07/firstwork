<!doctype html>
<!--[if lt IE 7]> <html class="no-js lt-ie9 lt-ie8 lt-ie7" <?php language_attributes(); ?>> <![endif]-->
<!--[if IE 7]>    <html class="no-js lt-ie9 lt-ie8" <?php language_attributes(); ?>> <![endif]-->
<!--[if IE 8]>    <html class="no-js lt-ie9" <?php language_attributes(); ?>> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" <?php language_attributes(); ?>> <!--<![endif]-->
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>" />
	<title><?php wp_title('|', true, 'right'); bloginfo('name'); ?></title>
	<?php wp_head(); ?>
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
</head>
<body <?php if(is_page_template('template-portfolio.php')) { body_class('portfolio-page'); } ?> >

<div class="page-thanks">
	<div class="thanks-content">
		<span class="x-button"></span>
		<?php if(ale_get_option('sitelogo')): ?>
		<img src="<?php echo ale_get_option('sitelogo'); ?>" alt="logo">
		<?php else: ?>
		<img src="<?php echo get_template_directory_uri(); ?>/img/logo.png" />
				<?php endif; ?>
		<p><?php echo ale_get_option('thanks_page'); ?></p>
	</div>
</div>

	<header>
		<div class="header-top">
			<div class="header-block">
			
				<div class="logo">
				<?php if(ale_get_option('sitelogo')): ?>
				<a href="<?php echo get_home_url(); ?>"><img src="<?php echo ale_get_option('sitelogo'); ?>" /></a>
				<?php else: ?>
				<a href="<?php echo get_home_url(); ?>"><img src="<?php echo get_template_directory_uri(); ?>/img/logo.png" /></a>
			<?php endif; ?>
			</div>
			
			
				<div class="header-info">
				<?php if(ale_get_option('header_text')): ?>
						<ul>
							<?php echo ale_get_option('header_text'); ?>
						</ul>
						<a href="#why-us" class="get-all">Посмотреть все преимущества</a>
					<ul>
				<?php else: ?>
					<ul>
						<li><span class="orange-text">С 2001 года</span> на рынке инженерных систем!</li>
						<li>Оснащено более <span class="orange-text">5200 объектов!</span></li>
						<li><span class="orange-text">5 лет гарантия</span> на все виды работ!</li>
					</ul>
					<a href="#why-us" class="get-all">Посмотреть все преимущества</a>
					<?php endif; ?>
				</div>
			

			<div class="call-back">
				<p><?php echo ale_get_option('contact_text'); ?></p>
				<span class="orange-number"><?php echo ale_get_option('contact_number'); ?></span>
				<p><?php echo ale_get_option('work_time'); ?></p>
				<a href="#popup-form" class="btn-call btn-call-1">Заказать звонок</a>
			</div>
			</div>
			<div class="clear"></div>
		</div>

		<nav class="header-nav">
		<?php if( has_nav_menu('header_menu') ) {

							wp_nav_menu( array(
								'theme_location'  => '',
								'menu'            => 'header_menu', 
								'container'       => '', 
								'container_class' => '', 
								'container_id'    => '',
								'menu_class'      => 'sf-menu', 
								'menu_id'         => 'parent-list',
								'echo'            => true,
								'fallback_cb'     => 'wp_page_menu',
								'before'          => '',
								'after'           => '',
								'link_before'     => '',
								'link_after'      => '',
								'items_wrap'      => '<ul id="%1$s" class="%2$s">%3$s</ul>',
								'depth'           => 0,
								'walker'          => '',
							) ); } ?>
		</nav>

		<div class="header-slide">
			<div class="owl-carousel">
				<?php $slider = ale_sliders_get_slider('header-slide'); ?>
				<?php if($slider): ?>
					<?php foreach($slider['slides'] as $slide): ?>
						<div class="item"><img src="<?php echo $slide['image']; ?>" alt="<?php echo $slide['title']; ?>"></div>
					<?php endforeach; ?>
				<?php else: ?>
					<div class="item"><img src="<?php echo get_template_directory_uri(); ?>/img/header-slide/ffffff.jpg" alt="alt"></div>
				<?php endif; ?>
			</div>

			
			<?php if(ale_get_option('order_form_text')){ ?>
			<div class="free-call">
				<h6><?php echo ale_get_option('order_form_text'); ?></h6>
				<form action="" id="slide-form">
					<div class="note3"></div>
					<label for="phone">Введите Ваш номер телефона</label>
					<input type="text" name="phone" id="phone" placeholder="+7 777 7777777" required />
					<button class="form-button" type="submit">Заказать БЕСПЛАТНЫЙ расчет</button>
				</form>
				<p>Заполнение заявки ни к чему Вас не обязывает</p>
			</div>
			<?php } ?>
		</div>
	</header>