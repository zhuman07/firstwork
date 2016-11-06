<?php
/**
 * Get current theme options
 * 
 * @return array
 */
function aletheme_get_options() {
	$comments_style = array(
		'wp'  => 'Alethemes Comments',
		'fb'  => 'Facebook Comments',
		'dq'  => 'DISQUS',
		'lf'  => 'Livefyre',
		'off' => 'Disable All Comments',
	);

    $headerfont = array_merge(ale_get_safe_webfonts(), ale_get_google_webfonts());

    $background_defaults = array(
        'color' => '',
        'image' => '',
        'repeat' => 'repeat',
        'position' => 'top center',
        'attachment'=>'scroll'
    );

	
	$imagepath =  ALETHEME_URL . '/assets/images/';
	
	$options = array();
		
	$options[] = array("name" => "Header and Footer",
						"type" => "heading");

    $options[] = array( "name" => "Логотип",
                        "desc" => "Выберите логотип (Размер логотипа должен быть: 186-68px)",
                        "id" => "ale_sitelogo",
                        "std" => "",
                        "type" => "upload");

    $options[] = array( "name" => "Текст шапки",
                        "desc" => "Введите текст",
                        "id" => "ale_header_text",
                        "std" => "",
                        "type" => "editor");

    $options[] = array( "name" => "Контактные данные",
                        "desc" => "Введите текст для контака (Например: Есть вопросы? звоните!)",
                        "id" => "ale_contact_text",
                        "std" => "Есть вопросы? звоните!",
                        "type" => "text");
    $options[] = array( "name" => "Номер телефона",
                        "desc" => "Введите номер телефона для контака (Например: +7-777-777-77-77)",
                        "id" => "ale_contact_number",
                        "std" => "+7-777-777-77-77",
                        "type" => "text");
    $options[] = array( "name" => "Введите время работы",
                        "desc" => "Введите время работы (Например: С 08.00 до 20.00, без выходных)",
                        "id" => "ale_work_time",
                        "std" => "С 08.00 до 20.00, без выходных",
                        "type" => "text");
    $options[] = array( "name" => "Текст формы в слайдере",
                        "desc" => "Введите текст для формы заказа. Например (Закажите сейчас бесплатный расчет Вашей системы и в течении 24 часов после звонка вы получите полную смету)",
                        "id" => "ale_order_form_text",
                        "std" => "Закажите сейчас бесплатный расчет Вашей системы и в течении 24 часов после звонка вы получите полную смету",
                        "type" => "textarea");

    $options[] = array( "name" => "Текст перед футером",
                        "desc" => "Что бы текст корректно отображалось, оберните его в тег div (Например: div Остались вопросы?/div). А для того чтобы часть текста был красного цвета оберните его в тег span (Например: div Остались span вопросы /span ? /div)",
                        "id" => "ale_footer_text",
                        "std" => "<div>Остались <span>вопросы?</span></div>
        <div>Получить <span>бесплатную</span> консультацию</div>",
                        "type" => "textarea");

    $options[] = array("name" => "Enginer",
                        "type" => "heading");

    $options[] = array( "name" => "Выберите фото",
                        "desc" => "Выберите фото",
                        "id" => "ale_engine_photo",
                        "std" => "",
                        "type" => "upload");
    $options[] = array( "name" => "Фамилия",
                        "desc" => "Введите текст",
                        "id" => "ale_engine_lastname",
                        "std" => "ЧЕРКАШИН",
                        "type" => "text");
    $options[] = array( "name" => "Имя",
                        "desc" => "Введите текст",
                        "id" => "ale_engine_name",
                        "std" => "АЛЕКСАНДР АНАТОЛЬЕВИЧ",
                        "type" => "text");
    $options[] = array( "name" => "Телефон",
                        "desc" => "Введите телефон",
                        "id" => "ale_engine_phone",
                        "std" => "+7 968 888 88 88",
                        "type" => "text");
    $options[] = array( "name" => "E-mail",
                        "desc" => "Введите E-mail",
                        "id" => "ale_engine_email",
                        "std" => "NFO@GK-RESURS.RU",
                        "type" => "text");
    $options[] = array( "name" => "Skype",
                        "desc" => "Введите skype",
                        "id" => "ale_engine_skype",
                        "std" => "CHERKASHIN.A",
                        "type" => "text");

    $options[] = array("name" => "Online wallet",
                        "type" => "heading");

    $options[] = array( "name" => "Visa",
                        "desc" => "Если принимаете visa ажмите на галочку",
                        "id" => "ale_visa",
                        "std" => "",
                        "type" => "checkbox");

    $options[] = array( "name" => "MasterCard",
                        "desc" => "Если принимаете MasterCard нажмите на галочку",
                        "id" => "ale_mastercard",
                        "std" => "",
                        "type" => "checkbox");

    $options[] = array( "name" => "Yandex",
                        "desc" => "Если принимаете Яндекс деньги нажмите на галочку",
                        "id" => "ale_yandex",
                        "std" => "",
                        "type" => "checkbox");

    $options[] = array( "name" => "Наличные",
                        "desc" => "Принимаете наличными?",
                        "id" => "ale_cash",
                        "std" => "",
                        "type" => "checkbox");

    $options[] = array("name" => "Table Why Us",
                        "type" => "heading");

    $options[] = array( "name" => "Текст Загаловок",
                        "desc" => "Введите Загаловок. Если загаловок будет пустой. Блок таблицы не отобразится",
                        "id" => "ale_whyus_header",
                        "std" => "Почему <span>выбирают нас</span>?",
                        "type" => "textarea");

    $options[] = array( "name" => "Загаловок первой колонки",
                        "desc" => "Введите загаловок первой колонки",
                        "id" => "ale_whyus_table_head_1",
                        "std" => "Отличная репутация",
                        "type" => "text");
    $options[] = array( "name" => "Контент первой колонки",
                        "desc" => "Введите текст для первой колонки",
                        "id" => "ale_whyus_table_content_1",
                        "std" => "Отличная репутация",
                        "type" => "editor");

    $options[] = array( "name" => "Загаловок второй колонки",
                        "desc" => "Введите загаловок второй колонки",
                        "id" => "ale_whyus_table_head_2",
                        "std" => "Честная цена",
                        "type" => "text");
    $options[] = array( "name" => "Контент второй колонки",
                        "desc" => "Введите текст для второй колонки",
                        "id" => "ale_whyus_table_content_2",
                        "std" => "Честная цена",
                        "type" => "editor");

    $options[] = array( "name" => "Загаловок третей колонки",
                        "desc" => "Введите загаловок третей колонки",
                        "id" => "ale_whyus_table_head_3",
                        "std" => "Гарантия на монтаж",
                        "type" => "text");
    $options[] = array( "name" => "Контент третей колонки",
                        "desc" => "Введите текст для третей колонки",
                        "id" => "ale_whyus_table_content_3",
                        "std" => "Гарантия на монтаж",
                        "type" => "editor");

    $options[] = array( "name" => "Загаловок четвёртой колонки",
                        "desc" => "Введите загаловок четвёртой колонки",
                        "id" => "ale_whyus_table_head_4",
                        "std" => "Специалисты",
                        "type" => "text");
    $options[] = array( "name" => "Контент четвёртой колонки",
                        "desc" => "Введите текст для четвёртой колонки",
                        "id" => "ale_whyus_table_content_4",
                        "std" => "Специалисты",
                        "type" => "editor");

    $options[] = array( "name" => "Загаловок пятой колонки",
                        "desc" => "Введите загаловок пятой колонки",
                        "id" => "ale_whyus_table_head_5",
                        "std" => "Сервисная поддержка",
                        "type" => "text");
    $options[] = array( "name" => "Контент пятой колонки",
                        "desc" => "Введите текст для пятой колонки",
                        "id" => "ale_whyus_table_content_5",
                        "std" => "Сервисная поддержка",
                        "type" => "editor");

    $options[] = array( "name" => "Загаловок шестой колонки",
                        "desc" => "Введите загаловок шестой колонки",
                        "id" => "ale_whyus_table_head_6",
                        "std" => "Бесплатные услуги",
                        "type" => "text");
    $options[] = array( "name" => "Контент шестой колонки",
                        "desc" => "Введите текст для шестой колонки",
                        "id" => "ale_whyus_table_content_6",
                        "std" => "Бесплатные услуги",
                        "type" => "editor");

    $options[] = array("name" => "Страница благодарности",
                        "type" => "heading");

    $options[] = array( "name" => "Поля для страницы благодарности",
                        "desc" => "Введите текст",
                        "id" => "ale_thanks_page",
                        "std" => "Благодарим вас за заявку!",
                        "type" => "textarea");
	
	return $options;
}

/**
 * Add custom scripts to Options Page
 */
function aletheme_options_custom_scripts() {
 ?>

<script type="text/javascript">
jQuery(document).ready(function() {
    jQuery('#ale_commentongallery').click(function() {
        jQuery('#section-ale_gallerycomments_style').fadeToggle(400);
    });
    if (jQuery('#ale_commentongallery:checked').val() !== undefined) {
        jQuery('#section-ale_gallerycomments_style').show();
    }
});
</script>

<?php
}

/**
 * Add Metaboxes
 * @param array $meta_boxes
 * @return array 
 */
function aletheme_metaboxes($meta_boxes) {
	
	$meta_boxes = array();

    $prefix = "ale_";


    $meta_boxes[] = array(
        'id'         => 'home_page_metabox',
        'title'      => 'Home Meta Options',
        'pages'      => array( 'page', ), // Post type
        'context'    => 'normal',
        'priority'   => 'high',
        'show_names' => true, // Show field names on the left
        'show_on'    => array( 'key' => 'page-template', 'value' => array('page-home.php'), ), // Specific post templates to display this metabox

        'fields' => array(
            array(
                'name' => 'First Description',
                'desc' => 'Insert the text',
                'id'   => $prefix . 'descr1',
                'type' => 'textarea',
            ),
            array(
                'name' => 'Second Description',
                'desc' => 'Insert the text',
                'id'   => $prefix . 'descr2',
                'type' => 'text',
            ),
            array(
                'name' => 'File Upload',
                'desc' => 'Insert the text',
                'id'   => $prefix . 'fileupload',
                'type' => 'file',
            ),
            array(
                'name' => 'Text Date',
                'desc' => 'Insert the text',
                'id'   => $prefix . 'datefield',
                'type' => 'wysiwyg',
            ),
        )
    );

    $meta_boxes[] = array(
        'id'         => 'press_page_metabox',
        'title'      => 'Press Page Options',
        'pages'      => array( 'page', ), // Post type
        'context'    => 'normal',
        'priority'   => 'high',
        'show_names' => true, // Show field names on the left
        'show_on'    => array( 'key' => 'page-template', 'value' => array('template-press.php'), ), // Specific post templates to display this metabox
        'fields' => array(
            array(
                'name' => 'Press title #1',
                'desc' => 'Insert the title',
                'id'   => $prefix . 'presstit1',
                'type' => 'text',
            ),
        )
    );


    $meta_boxes[] = array(
        'id'         => 'services_post_metabox',
        'title'      => 'Дополнительные Поля',
        'pages'      => array( 'services', ), // Post type
        'context'    => 'normal',
        'priority'   => 'high',
        'show_names' => true, // Show field names on the left
        'fields' => array(
            array(
                'name' => 'Изображение 1',
                'desc' => 'Выберите Изображение',
                'id'   => $prefix . 'img1',
                'type'    => 'file',
            ),
            array(
                'name' => 'Изображение 2',
                'desc' => 'Выберите Изображение 2',
                'id'   => $prefix . 'img2',
                'type'    => 'file',
            ),
          
            array(
                'name' => 'Изображение 3',
                'desc' => 'Выберите изображение 3',
                'id'   => $prefix . 'img3',
                'type'    => 'file',
            ),
            array(
                'name' => 'Изображение 4',
                'desc' => 'Выберите изображение 4',
                'id'   => $prefix . 'img4',
                'type'    => 'file',
            ),
        )
    );

    $meta_boxes[] = array(
        'id'         => 'portfolio_post_metabox',
        'title'      => 'Дополнительные Поля',
        'pages'      => array( 'portfolio', ), // Post type
        'context'    => 'normal',
        'priority'   => 'high',
        'show_names' => true, // Show field names on the left
        'fields' => array(
            array(
                'name' => 'Fourth member Email',
                'desc' => 'Insert member email...',
                'id'   => $prefix . 'memem4',
                'type'    => 'text',
            ),
            array(
                'name' => 'First member Description',
                'desc' => 'Insert member description...',
                'id'   => $prefix . 'memdesc1',
                'type'    => 'wysiwyg',
            ),
          
            array(
                'name' => 'First member avatar',
                'desc' => 'Insert member avatar...',
                'id'   => $prefix . 'memava1',
                'type'    => 'file',
            ),
        )
    );

    $meta_boxes[] = array(
        'id'         => 'reviews_post_metabox',
        'title'      => 'Дополнительные Поля',
        'pages'      => array( 'reviews', ), // Post type
        'context'    => 'normal',
        'priority'   => 'high',
        'show_names' => true, // Show field names on the left
        'fields' => array(
            array(
                'name' => 'изображение 1',
                'desc' => 'Выберите изображение 1',
                'id'   => $prefix . 'wp_image1',
                'type'    => 'file',
            ),
          
            array(
                'name' => 'изображение 2',
                'desc' => 'Выберите изображение 2',
                'id'   => $prefix . 'wp_image2',
                'type'    => 'file',
            ),
            array(
                'name' => 'изображение 3',
                'desc' => 'Выберите изображение 3',
                'id'   => $prefix . 'wp_image3',
                'type'    => 'file',
            ),
        )
    );

	return $meta_boxes;
}

/**
 * Get image sizes for images
 * 
 * @return array
 */
function aletheme_get_images_sizes() {
	return array(

        'gallery' => array(
            array(
                'name'      => 'gallery-thumba',
                'width'     => 430,
                'height'    => 267,
                'crop'      => true,
            ),
            array(
                'name'      => 'gallery-mini',
                'width'     => 100,
                'height'    => 67,
                'crop'      => true,
            ),
            array(
                'name'      => 'gallery-big',
                'width'     => 680,
                'height'    => 9999,
                'crop'      => false,
            ),
        ),
        'post' => array(
            array(
                'name'      => 'post-thumba',
                'width'     => 475,
                'height'    => 295,
                'crop'      => true,
            ),
            array(
                'name'      => 'post-minibox',
                'width'     => 500,
                'height'    => 200,
                'crop'      => true,
            ),
        ),


    );
}

/**
 * Add post types that are used in the theme 
 * 
 * @return array
 */
function aletheme_get_post_types() {
	return array(
        'services' => array(
            'config' => array(
                'public' => true,
                'menu_position' => 20,
                'menu_icon' => 'dashicons-layout',
                'has_archive'   => true,
                'supports'=> array(
                    'title',
                    'editor',
                    'thumbnail',
                ),
                'show_in_nav_menus'=> true,
            ),
            'singular' => 'Услуги',
            'multiple' => 'Услуги',
            'columns'    => array(
                //'first_image',
            )
        ),
        'portfolio' => array(
            'config' => array(
                'public' => true,
                'menu_position' => 20,
                'menu_icon' => 'dashicons-portfolio',
                'has_archive'   => true,
                'supports'=> array(
                    'title',
                    'editor',
                    'thumbnail',
                ),
                'show_in_nav_menus'=> true,
            ),
            'singular' => 'Портфолио',
            'multiple' => 'Портфолио',
            'columns'    => array(
                //'first_image',
            )
        ),
        'reviews' => array(
            'config' => array(
                'public' => true,
                'menu_position' => 20,
                'menu_icon' => 'dashicons-admin-comments',
                'has_archive'   => true,
                'supports'=> array(
                    'title',
                    'editor',
                    'thumbnail',
                ),
                'show_in_nav_menus'=> true,
            ),
            'singular' => 'Отзыв',
            'multiple' => 'Отзывы',
            'columns'    => array(
                //'first_image',
            )
        ),
    );
}

/**
 * Add taxonomies that are used in theme
 * 
 * @return array
 */
function aletheme_get_taxonomies() {
	return array(

        'services-category'    => array(
            'for'        => array('services'),
            'config'    => array(
                'sort'        => true,
                'args'        => array('orderby' => 'term_order'),
                'hierarchical' => true,
            ),
            'singular'    => 'Категория Услуг',
            'multiple'    => 'Категории Услуг',
        ),

        'portfolio-category'    => array(
            'for'        => array('portfolio'),
            'config'    => array(
                'sort'        => true,
                'args'        => array('orderby' => 'term_order'),
                'hierarchical' => true,
            ),
            'singular'    => 'Категории Портфолио',
            'multiple'    => 'Категории Портфолио',
        ),
    );
}

/**
 * Add post formats that are used in theme
 * 
 * @return array
 */
function aletheme_get_post_formats() {
	return array();
}

/**
 * Get sidebars list
 * 
 * @return array
 */
function aletheme_get_sidebars() {
	$sidebars = array();
	return $sidebars;
}

/**
 * Predefine custom sliders
 * @return array
 */
function aletheme_get_sliders() {
	return array(
		'sneak-peek' => array(
			'title'		=> 'Sneak Peek',
		),
	);
}

/**
 * Post types where metaboxes should show
 * 
 * @return array
 */
function aletheme_get_post_types_with_gallery() {
	return array('gallery');
}

/**
 * Add custom fields for media attachments
 * @return array
 */
function aletheme_media_custom_fields() {
	return array();
}