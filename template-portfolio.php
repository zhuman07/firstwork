<?php
/**
 * Template Name: Template Portfolio
 */
get_header(); ?>
    <!-- Content -->
    
    <section class="single">
        <div class="sidebar">
         <nav class="servic-bar">

                <?php if( has_nav_menu('sidebar_menu') ) {

                            wp_nav_menu(array(
                                'theme_location' => 'sidebar_menu',
                                'menu'           => 'Sidebar Menu',
                                'menu_class'     => 'parent-nav',
                                'walker'         => new Aletheme_Nav_Walker(),
                                'container'      => '',
                                'container_class' => '', 
                                'container_id'    => '',
                                'menu_id'         => '',
                                'echo'            => true,
                                'fallback_cb'     => 'wp_page_menu',
                                'before'          => '',
                                'after'           => '',
                                'link_before'     => '',
                                'link_after'      => '',
                                'items_wrap'      => '<ul id="%1$s" class="%2$s">%3$s</ul>',
                                'depth'           => 0,
                                ));
                            } ?>

              <!--  <ul class="parent-nav">
                    <li><a>Отопление</a>
                        <ul >
                            <li><a href="">Котельные</a></li>
                            <li><a href="">Теплые полы</a></li>
                            <li><a href="">Радиаторное отопление</a></li>
                        </ul>
                    </li>
                    <li><a>Водоснабжение</a>
                        <ul >
                            <li><a href="">Котельные</a></li>
                            <li><a href="">Теплые полы</a></li>
                            <li><a href="">Радиаторное отопление</a></li>
                        </ul>
                    </li>
                    <li><a>Электроснабжение</a>
                        <ul >
                            <li><a href="">Котельные</a></li>
                            <li><a href="">Теплые полы</a></li>
                            <li><a href="">Радиаторное отопление</a></li>
                        </ul>
                    </li>
                    <li><a>Слаботочные сети</a>
                        <ul >
                            <li><a href="">Котельные</a></li>
                            <li><a href="">Теплые полы</a></li>
                            <li><a href="">Радиаторное отопление</a></li>
                        </ul>
                    </li>
                </ul>-->
            </nav>
            <?php dynamic_sidebar('about_us'); ?>

            <div class="sidebar-widget">
                <div class="sidebar-widget-header"><h3><?php $idObj = get_category_by_slug('sertificat'); 
        $id = $idObj->term_id;
        echo get_cat_name($id); ?></h3></div>
                <div class="certificates">
                <?php $post_query = new WP_Query(array('post_type'=>'post', 'posts_per_page'=>'4', 'category_name'=>'sertificat')); ?>
                <?php if ($post_query->have_posts()) : while ($post_query->have_posts()) : $post_query->the_post(); ?>
                    <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail(array(105, 150)); ?></a>
                     <?php endwhile; else: ?>
            <?php ale_part('notfound')?>
            <?php endif; ?>
                </div>
            </div>

            <div class="sidebar-widget">
                <div class="sidebar-widget-header"><h3>Отзывы</h3></div>
                <div class="widget-reviews">
                 <?php $reviews_query = new WP_Query(array('post_type'=>'reviews', 'posts_per_page'=>'6')); ?>
                 <?php if ($reviews_query->have_posts()) : while ($reviews_query->have_posts()) : $reviews_query->the_post(); ?>
                    <div class="review-item">
                        <?php the_post_thumbnail(array(95, 95)); ?>
                        <h5><?php the_title(); ?></h5>
                        <div class="clear"></div>
                        <p><?php the_content(); ?></p>
                    </div>
                    <?php endwhile; else: ?>
            <?php ale_part('notfound')?>
            <?php endif; ?>
                </div>
            </div>

            <div class="sidebar-widget">
                <div class="sidebar-widget-header"><h3><?php $idObj = get_category_by_slug('blogs'); 
        $id = $idObj->term_id;
        echo get_cat_name($id); ?></h3></div>
                <div class="widget-blogs">
                <?php $post_query = new WP_Query(array('post_type'=>'post', 'posts_per_page'=>'6', 'category_name'=>'blogs')); ?>
                <?php if ($post_query->have_posts()) : while ($post_query->have_posts()) : $post_query->the_post(); ?>
                    <div class="blog-item">
                        <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail(array(80, 60)); ?></a>
                        <h5><a href="">Как выбрать трубы для теплого пола</a></h5>
                        <div class="clear"></div>
                        <p><?php the_content(); ?><a href="<?php the_permalink(); ?>">Далее</a></p>
                    </div>
                     <?php endwhile; else: ?>
            <?php ale_part('notfound')?>
            <?php endif; ?>
                    <a href="" class="big-link">Все статьи</a>
                </div>
            </div>

            <div class="last-sidebar-widget">
                <div class="sidebar-widget-header"><h3>Главный инженер</h3></div>
                <div class="engener">
                    <img src="<?php echo ale_get_option('engine_photo') ?>" alt="photo">
                    <h4><?php echo ale_get_option('engine_lastname') ?></h4>
                    <h4><?php echo ale_get_option('engine_name') ?></h4>
                </div>
                <div class="engener-contacts">
                    <ul>
                        <li><?php echo ale_get_option('engine_phone') ?></li>
                        <li><?php echo ale_get_option('engine_email') ?></li>
                        <li><?php echo ale_get_option('engine_skype') ?></li>
                    </ul>
                </div>
            </div>

        </div>
        
            <div class="portfolio-block">

                <div class="page-menu">
                    <ul>
                        <li><a href="<?php echo get_home_url(); ?>">Главная</a></li>
                        <li class="active"><a href="">Наши работы</a></li>
                    </ul>
                </div>
                <div class="our-works">
                <?php $services_query = new WP_Query(array('post_type'=>'services', 'posts_per_page'=>'4')); ?>
                <?php if ($services_query->have_posts()) : while ($services_query->have_posts()) : $services_query->the_post(); ?>
                    <div class="work-item">
                        <h2><?php the_title(); ?></h2>
                        <a href="<?php the_permalink(); ?>"><img src="<?php echo ale_get_meta('img1'); ?>" alt="">
                        <img src="<?php echo ale_get_meta('img2'); ?>" alt="">
                        <img src="<?php echo ale_get_meta('img3'); ?>" alt="">
                        <img src="<?php echo ale_get_meta('img4'); ?>" alt=""></a>
                    </div>
                    <?php endwhile; else: ?>
            <?php ale_part('notfound')?>
            <?php endif; ?>
                    <div class="clear"></div>
                </div>
                    
                <div class="portfolio-bottom">
                    <h3>Остались вопросы? Хотите сделать заказ?</h3>
                    <div class="portfolio-bottom-call"><div>Звоните: <span><?php echo ale_get_option('contact_number'); ?></span></div>
                        <a href="#popup-form" class="btn-call btn-call-1">Заказать звонок</a>
                    </div>
                    <div class="portfolio-bottom-write"><div>Пишите: <span><?php echo ale_get_option('engine_email') ?></span></div>
                        <a href="#form-2" class="btn-call btn-call-2">написать письмо</a>
                    </div>
                    <div></div>
                </div>
            </div>


        <div class="clear"></div>
    </section>



<?php get_footer(); ?>