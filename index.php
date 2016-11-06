<?php get_header(); ?>
 
    <section class="services">
    <?php $services_query = new WP_Query(array('post_type'=>'services', 'posts_per_page'=>'8')); ?>
         <?php $i = 0;
         if ($services_query->have_posts()) : while ($services_query->have_posts()) : $services_query->the_post(); ?>
         <?php  $i++;
         $k = $i % 4;
         if($k == 1 || $k == 2){ ?>
        <div class="servic-item-right servic-item">
            <div class="servic-text">
                <h4><?php the_title(); ?></h4>
                <ul>
                    <?php the_content(); ?>
                </ul>
                <a href="" class="calculator">Калькулятор стоимости ремонта Перейти в раздел</a>
                <a href="<?php the_permalink(); ?>" class="more">Подробнее</a>
            </div>
            <div class="servic-img">
                <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail(); ?></a>
            </div>
        </div>
        <?php } else { ?>
        <div class="servic-item-left servic-item">
            <div class="servic-img">
                <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail(); ?></a>
            </div>
            <div class="servic-text">
                <h4><?php the_title(); ?></h4>
                <ul>
                    <?php the_content(); ?>
                </ul>
                <a href="" class="calculator">Калькулятор стоимости ремонта Перейти в раздел</a>
                <a href="<?php the_permalink(); ?>" class="more">Подробнее</a>
            </div>
        </div>
        <?php } ?>
        <?php endwhile; else: ?>
            <?php ale_part('notfound')?>
            <?php endif; ?>
        <div class="clear"></div>
        <?php if($i > 4) { echo "<a href='' class='all'>Все услуги <span>>>></span></a>"; } else  ?>
        <div class="clear"></div>
    </section>
    
    <?php if(ale_get_option('whyus_header')): ?>
    <section class="why-us" id="why-us">
        <h2><?php echo ale_get_option('whyus_header'); ?></h2>
        <ul class="tabs">
            <li class="col-1 active">
                <div class="icon-1 icons"></div>
                <div><?php echo ale_get_option('whyus_table_head_1'); ?></div>
            </li>
            <li class="col-2">
                <div class="icon-2 icons"></div>
                <div><?php echo ale_get_option('whyus_table_head_2'); ?></div>
            </li>
            <li class="col-3">
                <div class="icon-3 icons"></div>
                <div><?php echo ale_get_option('whyus_table_head_3'); ?></div>
            </li>
            <li class="col-4">
                <div class="icon-4 icons"></div>
                <div><?php echo ale_get_option('whyus_table_head_4'); ?></div>
            </li>
            <li class="col-5">
                <div class="icon-5 icons"></div>
                <div><?php echo ale_get_option('whyus_table_head_5'); ?></div>
            </li>
            <li class="col-6">
                <div class="icon-6 icons"></div>
                <div><?php echo ale_get_option('whyus_table_head_6'); ?></div>
            </li>
        </ul>
        <div class="descr col-1 active">
            <p><?php echo ale_get_option('whyus_table_content_1'); ?></p>
        </div>
        <div class="descr col-2">
            <p><?php echo ale_get_option('whyus_table_content_2'); ?></p>
        </div>
        <div class="descr col-3">
            <p> <?php echo ale_get_option('whyus_table_content_3'); ?></p>
        </div>
        <div class="descr col-4">
            <p><?php echo ale_get_option('whyus_table_content_4'); ?></p>
        </div>
        <div class="descr col-5">
            <p><?php echo ale_get_option('whyus_table_content_5'); ?></p>
        </div>
        <div class="descr col-6">
            <p><?php echo ale_get_option('whyus_table_content_6'); ?> </p>
        </div>
    </section>
<?php endif; ?>

    <section class="portfolio">

        <h2>Фото <span>Наших Работ</span></h2>

         <?php $portfolio_query = new WP_Query(array('post_type'=>'portfolio', 'posts_per_page'=>'6')); ?>
         <?php $p = 0; ?>
         <?php if ($portfolio_query->have_posts()) : while ($portfolio_query->have_posts()) : $portfolio_query->the_post();
        $p++ ?>

        <div class="portfolio-item">
            <a href="<?php the_permalink(); ?>" class="portfolio-img"><?php the_post_thumbnail(array(300, 280)); ?></a>
            <a href=""><?php the_title(); ?></a>
        </div>
        <?php endwhile; else: ?>
            <?php ale_part('notfound')?>
            <?php endif; ?>
        <div class="clear"></div>
         <?php if($p > 1) { echo '<a href="'.get_page_link(103).'" class="all">Посмотреть все портфолио <span>>>></span></a>'; } else { } ?>
        <div class="clear"></div>
    </section>

    <section class="reviews">
    <?php $reviews_query = new WP_Query(array('post_type'=>'reviews', 'posts_per_page'=>'6')); ?>
    <?php $r = 0; ?>
         <?php if ($reviews_query->have_posts()) : while ($reviews_query->have_posts()) : $reviews_query->the_post(); ?>
            <?php $r++;
            $k = $r % 2;
            if($k == 1) { ?>
        <div class="review-left review-item">
            <div class="review-author">
                <?php the_post_thumbnail(array(200, 200)); ?>
            </div>
            <div class="review-text">
                <h3><?php the_title(); ?></h3>
                <p><?php the_content(); ?></p>
                <a href="<?php the_permalink(); ?>">Подробнее: xxxxxxxx</a>
            </div>
            <div class="review-img">
                <a href=""><img src="<?php echo ale_get_meta('wp_image1'); ?>" alt=""></a>
                <a href=""><img src="<?php echo ale_get_meta('wp_image2'); ?>" alt=""></a>
                <a href=""><img src="<?php echo ale_get_meta('wp_image3'); ?>" alt=""></a>
            </div>
            <div class="clear"></div>
        </div>
        <?php } else { ?>
        <div class="review-right review-item">
            <div class="review-author">
                <?php the_post_thumbnail(array(200, 200)); ?>
            </div>
            <div class="review-text">
                <h3><?php the_title(); ?></h3>
                <p><?php the_content(); ?></p>
                <a href="<?php the_permalink(); ?>">Подробнее: xxxxxxxx</a>
            </div>

            <div class="review-img">
                <a href=""><img src="<?php echo ale_get_meta('wp_image1'); ?>" alt=""></a>
                <a href=""><img src="<?php echo ale_get_meta('wp_image2'); ?>" alt=""></a>
                <a href=""><img src="<?php echo ale_get_meta('wp_image3'); ?>" alt=""></a>
            </div>
            <div class="clear"></div>
        </div>
        <?php } ?>
        <?php endwhile; else: ?>
            <?php ale_part('notfound')?>
            <?php endif; ?>
        <div class="clear"></div>
        <?php if($r > 1) { echo '<a href="" class="all">Посмотреть все отзывы <span>>>></span></a>'; } else { } ?>
        <div class="clear"></div>
    </section>


    <section class="blog-news">

        <div class="news blog-news-item">

            <h3><?php $idObj = get_category_by_slug('news'); 
        $id = $idObj->term_id;
        echo get_cat_name($id); ?></h3>
            <?php $post_query = new WP_Query(array('post_type'=>'post', 'posts_per_page'=>'6', 'category_name'=>'news')); ?>
         <?php if ($post_query->have_posts()) : while ($post_query->have_posts()) : $post_query->the_post(); ?>
            <div class="news-item">
                <a href="<?php the_permalink(); ?>" class="news-img"><?php the_post_thumbnail(array(115, 115)); ?></a>
                <div class="news-text">
                    <p><?php the_content(); ?></p>
                    <a href="<?php the_permalink(); ?>">Подробнее >>></a>
                </div>
                <div class="clear"></div>
            </div>
            <?php endwhile; else: ?>
            <?php ale_part('notfound')?>
            <?php endif; ?>
            <a href="" class="all">Все новости <span>>>></span></a>
        </div>

        <div class="blogs blog-news-item">

            <h3><?php $idObj = get_category_by_slug('blogs'); 
        $id = $idObj->term_id;
        echo get_cat_name($id); ?></h3>
                <?php $post_query = new WP_Query(array('post_type'=>'post', 'posts_per_page'=>'6', 'category_name'=>'blogs')); ?>
                <?php if ($post_query->have_posts()) : while ($post_query->have_posts()) : $post_query->the_post(); ?>
            <div class="blogs-item">
                <a href="<?php the_permalink(); ?>" class="blogs-img"><?php the_post_thumbnail(array(115, 115)); ?></a>
                <div class="blogs-text">
                    <p><?php the_content(); ?></p>
                    <a href="<?php the_permalink(); ?>">Подробнее >>></a>
                </div>
                <div class="clear"></div>
            </div>
             <?php endwhile; else: ?>
            <?php ale_part('notfound')?>
            <?php endif; ?>
            <a href="" class="all">Все статьи <span>>>></span></a>
        </div>
        <div class="clear"></div>
    </section>

    <?php if(ale_get_option('footer_text')): ?>
    <section class="ask">
        <div class="ask-text">

            <?php echo ale_get_option('footer_text'); ?>

        </div>
        <a href="#form-2" class="btn-call btn-call-2" data-mfp-src="#form-2">Оставить заявку</a>
    </section>
<?php endif; ?>

<?php get_footer(); ?>