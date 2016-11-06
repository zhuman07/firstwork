<footer>
        
        <div class="footer-block">

            <div class="logo">
                <?php if(ale_get_option('sitelogo')): ?>
                <a href="<?php echo get_home_url(); ?>"><img src="<?php echo ale_get_option('sitelogo'); ?>" /></a>
                <?php else: ?>
                <a href="<?php echo get_home_url(); ?>"><img src="<?php echo get_template_directory_uri(); ?>/img/logo.png" /></a>
            <?php endif; ?>
            </div>

            <div class="footer-menu">
                    <nav>
                    <?php
                    if ( has_nav_menu( 'footer_left_menu' ) ) {
                        wp_nav_menu(array(
                            'theme_location'=> 'footer_left_menu',
                            'menu'          => 'Footer Left Menu',
                            'menu_class'    => 'footermenu cf',
                            'walker'        => new Aletheme_Nav_Walker(),
                            'container'     => '',
                        ));
                    }
                    ?>
                   </nav>
            </div>

            <div class="footer-menu">
                    <nav>
                    <?php
                    if ( has_nav_menu( 'footer_right_menu' ) ) {
                        wp_nav_menu(array(
                            'theme_location'=> 'footer_right_menu',
                            'menu'          => 'Footer right Menu',
                            'menu_class'    => 'footermenu cf',
                            'walker'        => new Aletheme_Nav_Walker(),
                            'container'     => '',
                        ));
                    }
                    ?>
                   </nav>
            </div>
            
            <?php if(is_home()): ?>
            <div class="call-back">
                <p><?php echo ale_get_option('contact_text'); ?></p>
                <span class="orange-number"><?php echo ale_get_option('contact_number'); ?></span>
                <p><?php echo ale_get_option('work_time'); ?></p>
                <a href="#popup-form" class="btn-call btn-call-1">Заказать звонок</a>
            </div>
        <?php endif; ?>
            
            <?php if(is_page_template('template-portfolio.php')): ?>
            <div class="payment">
                <h4>Принимаем к оплате</h4>
                <?php if(ale_get_option('visa')): ?>
                <div class="pay-item"><img src="<?php echo get_template_directory_uri(); ?>/img/visa.jpg" alt=""></div>
            <?php endif; ?>
            <?php if(ale_get_option('mastercard')): ?>
                <div class="pay-item"><img src="<?php echo get_template_directory_uri(); ?>/img/mastercard.jpg" alt=""></div>
            <?php endif; ?>
             <?php if(ale_get_option('yandex')): ?>
                <div class="pay-item"><img src="<?php echo get_template_directory_uri(); ?>/img/yandex.jpg" alt=""></div>
            <?php endif; ?>
             <?php if(ale_get_option('cash')): ?>
                <div class="pay-item"><img src="<?php echo get_template_directory_uri(); ?>/img/cash.jpg" alt=""></div>
            <?php endif; ?>
            </div>
        <?php endif; ?>
        </div>
        <div class="clear"></div>
    </footer>

    <div class="hidden">
            
            
                <form action="" id="popup-form" class="white-popup-block mfp-hide zoom-anim-dialog">

                    <div class="note"></div>

                    <div>
                        <label for="name">Имя:</label>
                        <input type="text" name="name" id="name" placeholder="Введите Ваше Имя" required />
                    </div>
                    <div>
                        <label for="popup-phone">Телефон:</label>
                        <input type="text" name="phone" id="popup-phone" placeholder="Введите Ваш номер телефона" required />
                    </div>
                    <button class="btn-call" type="submit" >Заказать звонок</button>
                </form>
           
            
    
                <form action="" id="form-2" class="white-popup-block mfp-hide zoom-anim-dialog">
                <div class="note2"></div>
                <div>
                    <label for="name">Имя:</label>
                    <input type="text" name="name" id="name" placeholder="Введите Ваше Имя" required />
                </div>
                <div>
                    <label for="popup-phone">E-mail:</label>
                    <input type="email" name="email" id="email" placeholder="Введите Ваш E-mail" required />
                </div>
                <div>
                    <label for="message">Сообщение:</label>
                    <textarea name="message" id="message" cols="41" rows="8" placeholder="Введите сообщение" required></textarea>
                </div>
                <button class="btn-call" type="submit" >Отправить</button>
            </form>
            
    </div>

    <!--[if lt IE 9]>
    <script src="libs/html5shiv/es5-shim.min.js"></script>
    <script src="libs/html5shiv/html5shiv.min.js"></script>
    <script src="libs/html5shiv/html5shiv-printshiv.min.js"></script>
    <script src="libs/respond/respond.min.js"></script>
    <![endif]-->

    <!-- Yandex.Metrika counter --><!-- /Yandex.Metrika counter -->
    <!-- Google Analytics counter --><!-- /Google Analytics counter -->


    <?php wp_footer(); ?>
</body>
</html>