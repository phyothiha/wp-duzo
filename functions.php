<?php
/**
 * duzo functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package duzo
 */

if ( ! defined( '_S_VERSION' ) ) {
	// Replace the version number of the theme on each release.
	define( '_S_VERSION', '1.0.0' );
}

/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function duzo_setup() {
	/*
		* Make theme available for translation.
		* Translations can be filed in the /languages/ directory.
		* If you're building a theme based on duzo, use a find and replace
		* to change 'duzo' to the name of your theme in all the template files.
		*/
	load_theme_textdomain( 'duzo', get_template_directory() . '/languages' );

	// Add default posts and comments RSS feed links to head.
	add_theme_support( 'automatic-feed-links' );

	/*
		* Let WordPress manage the document title.
		* By adding theme support, we declare that this theme does not use a
		* hard-coded <title> tag in the document head, and expect WordPress to
		* provide it for us.
		*/
	add_theme_support( 'title-tag' );

	/*
		* Enable support for Post Thumbnails on posts and pages.
		*
		* @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
		*/
	add_theme_support( 'post-thumbnails' );

	// This theme uses wp_nav_menu() in one location.
	register_nav_menus(
		array(
			'menu-1' => esc_html__( 'Primary', 'duzo' ),
		)
	);

	/*
		* Switch default core markup for search form, comment form, and comments
		* to output valid HTML5.
		*/
	add_theme_support(
		'html5',
		array(
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
			'style',
			'script',
		)
	);

	// Set up the WordPress core custom background feature.
	add_theme_support(
		'custom-background',
		apply_filters(
			'duzo_custom_background_args',
			array(
				'default-color' => 'ffffff',
				'default-image' => '',
			)
		)
	);

	// Add theme support for selective refresh for widgets.
	add_theme_support( 'customize-selective-refresh-widgets' );

	/**
	 * Add support for core custom logo.
	 *
	 * @link https://codex.wordpress.org/Theme_Logo
	 */
	add_theme_support(
		'custom-logo',
		array(
			'height'      => 250,
			'width'       => 250,
			'flex-width'  => true,
			'flex-height' => true,
		)
	);
}
add_action( 'after_setup_theme', 'duzo_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function duzo_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'duzo_content_width', 640 );
}
add_action( 'after_setup_theme', 'duzo_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function duzo_widgets_init() {
	register_sidebar(
		array(
			'name'          => esc_html__( 'Sidebar', 'duzo' ),
			'id'            => 'sidebar-1',
			'description'   => esc_html__( 'Add widgets here.', 'duzo' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
}
// add_action( 'widgets_init', 'duzo_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function duzo_scripts() {
	wp_enqueue_style( 'duzo-style', get_stylesheet_uri(), array(), _S_VERSION );

	wp_enqueue_script( 'duzo-navigation', get_template_directory_uri() . '/js/navigation.js', array(), _S_VERSION, true );
	// wp_enqueue_script( 'duzo-alpinejs', get_template_directory_uri() . '/js/alpinejs-3.14.8.js', array(), _S_VERSION );

	wp_register_script('duzo-alpinejs-defer', get_template_directory_uri() . '/js/alpinejs-3.14.8.js', array(), _S_VERSION, array( 'strategy' => 'defer' ));
    wp_enqueue_script('duzo-alpinejs-defer');

	
	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'duzo_scripts' );

/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Functions which enhance the theme by hooking into WordPress.
 */
require get_template_directory() . '/inc/template-functions.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
if ( defined( 'JETPACK__VERSION' ) ) {
	require get_template_directory() . '/inc/jetpack.php';
}

if (! function_exists( 'static_dataset_menus' )) {
	function static_dataset_menus() {
		return [
			[
				'id' => 'small-bites',
				'title' => 'Small Bites',
				'subtitle' => '',
				'dishes' => [
					[
						't' => 'Edamame',
						'st' => '',
						'd' => 'Steamed with sea salt',
					],
					[
						't' => 'Spicy Edamame',
						'st' => '',
						'd' => 'Giner, garlic, chili',
					],
					[
						't' => 'Miso Gyoza',
						'st' => '',
						'd' => 'Prawn, Chilean seabass,',
					],
					[
						't' => 'Napa Cabbage Salad',
						'st' => '',
						'd' => 'White cabbage, carrot, cucumber, wafu',
					],
					[
						't' => 'Duzo Dynamite',
						'st' => '',
						'd' => 'Rock shrimp, chili mayonnaise',
					],
					[
						't' => 'Tuna Tataki',
						'st' => '',
						'd' => 'Sliced tuna, herbs, homemade ponzu',
					],
					[
						't' => 'Sweet Corn Salad',
						'st' => '',
						'd' => 'Sweet corn, pomegranate, Asian vinaigrette',
					],
					[
						't' => 'Mix Green Salad',
						'st' => '',
						'd' => 'Mixed leaves, avocado, cherry tomato',
					],
					[
						't' => 'Ebi Tempura',
						'st' => '',
						'd' => 'Prawn, tensuyu daikon sauce',
					],
					[
						't' => 'Dim Sum Selection',
						'st' => '4pcs per basket',
						'd' => 'Duck dumpling, Cristal prawn dumpling, Chicken Siew Mai, Prawn Siew Mai',
					],
				],
			],
			[
				'id' => 'maki-and-sushi',
				'title' => 'Maki & Sushi',
				'subtitle' => '6pcs / 2pcs',
				'dishes' => [
					[
						't' => 'Tori Kimchi Maki',
						'st' => '',
						'd' => 'Marinated chicken maki with homemade kimchi, spicy mayo',
					],
					[
						't' => 'Crispy Tuna Maki',
						'st' => '',
						'd' => 'Spicy tuna, spicy mayo',
					],
					[
						't' => 'Ebi Maki',
						'st' => '',
						'd' => 'Prawn & tenkasu, avocado, wasabi mayo',
					],
					[
						't' => 'Avocado Maki',
						'st' => '',
						'd' => 'Avocado, cucumber, carrot',
					],
					[
						't' => 'Crispy Kani Maki',
						'st' => '',
						'd' => 'Kani, goma unagi sauce',
					],
					[
						't' => 'California Maki',
						'st' => '',
						'd' => 'Crab stick, avocado, tobiko',
					],
					[
						't' => 'Beef Maki',
						'st' => '',
						'd' => 'Teriyaki beef, cumber, avocado',
					],
					[
						't' => 'Salmon Nigiri',
						'st' => '',
						'd' => '',
					],
					[
						't' => 'Tuna Nigiri',
						'st' => '',
						'd' => '',
					],
					[
						't' => 'Hamachi Nigiri',
						'st' => '',
						'd' => '',
					],  
				],
			],
			[
				'id' => 'soup-and-noodle',
				'title' => 'Soup & Noodle',
				'subtitle' => '',
				'dishes' => [
					[
						't' => 'Butternut pumpkin Soup',
						'st' => '',
						'd' => 'Creamy sweet pumpkin, crispy bread',
					],
					[
						't' => 'Tom Yum Gaung',
						'st' => '',
						'd' => 'Thai flavored creamy seafood soup',
					],
					[
						't' => 'Miso Ramen Bowl',
						'st' => '',
						'd' => 'Grilled Chicken, miso broth, mushroom, soft egg',
					],
					[
						't' => 'Kimchi Jiggae',
						'st' => '',
						'd' => 'Spicy kimchi, chicken, mushroom and tofu',
					],
				],
			],
			[
				'id' => 'wok-special',
				'title' => 'Wok Special',
				'subtitle' => '',
				'dishes' => [
					[
						't' => 'Ramen Noodle',
						'st' => '',
						'd' => 'Mushroom, bak choi, crunchy tenkasu',
					],
					[
						't' => 'Pad Thai',
						'st' => '',
						'd' => 'Prawns, flat noodles, tomato, beansprout',
					],
					[
						't' => 'Japanese Fried Rice',
						'st' => '',
						'd' => 'Sticky rice, carrot, baby corn',
					],
				],
			],
			[
				'id' => 'robata-and-oven-bake',
				'title' => 'Robata & Oven Bake',
				'subtitle' => '',
				'dishes' => [
					[
						't' => 'Jumbo Tiger Prawn',
						'st' => '',
						'd' => 'Prawn, Spicy yuzu koshu, lemon',
					],
					[
						't' => 'Chilean Seabass',
						'st' => '',
						'd' => 'Seabass, ginger jalapeno dressing, cucumber, carrot',
					],
					[
						't' => 'Whole Seabream',
						'st' => '',
						'd' => 'Boneless fish, fennel, capsicum',
					],
					[
						't' => 'Sesame Beef',
						'st' => '',
						'd' => 'Tenderloin, spicy sesame dressing',
					],
					[
						't' => 'Salmon Teriyaki',
						'st' => '',
						'd' => 'Salmon, kimchi salad',
					],
					[
						't' => 'Beef Skewer',
						'st' => '',
						'd' => 'Beef, Teriyaki sauce',
					],
					[
						't' => 'Yakitori',
						'st' => '',
						'd' => 'Chicken, yakito sauce',
					],
				],
			],
			[
				'id' => 'side-and-extra',
				'title' => 'Side & Extra',
				'subtitle' => '',
				'dishes' => [
					[
						't' => 'Button Mushroom',
						'st' => '',
						'd' => 'Mushrooms, wafu sesame',
					],
					[
						't' => 'Sweet Potato',
						'st' => '',
						'd' => 'Sweet unagi reduction, sesame',
					],
					[
						't' => 'Nasu Miso',
						'st' => '',
						'd' => 'Eggplant, sweetened miso',
					],
				],
			],
			[
				'id' => 'dessert',
				'title' => 'Dessert',
				'subtitle' => '',
				'dishes' => [
					[
						't' => 'Cheesecake',
						'st' => '',
						'd' => 'Mixed nuts, berry compote',
					],
					[
						't' => 'Chocolate Fondant',
						'st' => '',
						'd' => 'Caramel praline, vanilla ice cream',
					],
					[
						't' => 'Banana Spring roll',
						'st' => '',
						'd' => 'Toffee sauce, coconut ice cream',
					],
					[
						't' => 'Sticky Toffee Pudding',
						'st' => '',
						'd' => 'Date caramel, toffee sauce, vanilla ice cream',
					],
				],
			],
			[
				'id' => 'duzo-drinks',
				'title' => 'Duzo Drinks',
				'subtitle' => '',
				'dishes' => [
					[
						't' => 'Duzo Passion',
						'st' => '',
						'd' => 'Passionfruit, mint, orange, lime',
					],
					[
						't' => 'Virgin Espresso Martini',
						'st' => '',
						'd' => 'Double shot espresso, cream, orange syrup',
					],
					[
						't' => 'Duzo Colada',
						'st' => '',
						'd' => 'Pineapple, coconut cream, Orange, Lime',
					],
					[
						't' => 'Duzo Iced tea',
						'st' => '',
						'd' => 'Brewed tea, passionfruit, lime',
					],
					[
						't' => 'Matcha Iced Tea',
						'st' => '',
						'd' => 'Matcha tea powder, cream base, honey syrup',
					],
				],
			],
			[
				'id' => 'coffee',
				'title' => 'Coffee',
				'subtitle' => '',
				'dishes' => [
					[
						't' => 'Flat White',
						'st' => '',
						'd' => '',
					],
					[
						't' => 'Cappuccino',
						'st' => '',
						'd' => '',
					],
					[
						't' => 'Espresso',
						'st' => '',
						'd' => '',
					],
					[
						't' => 'Late',
						'st' => '',
						'd' => '',
					],
				],
			],
			[
				'id' => 'other-drinks',
				'title' => 'Other Drinks',
				'subtitle' => '',
				'dishes' => [
					[
						't' => 'Still Water',
						'st' => '',
						'd' => '',
					],
					[
						't' => 'Sparkling Water',
						'st' => '',
						'd' => '',
					],
				],
			],
		];
	}
}

if (! function_exists( 'static_dataset_healthy_facts' )) {
	function static_dataset_healthy_facts() {
		return [
			[
				'title' => 'Fresh Ingredients',
				'description' => 'Authentic, fresh, naturally healthy, and affordable',
				'icon' => 'content-icon-home-2-512x512.png',
			],
			[
				'title' => 'Healthy Meals',
				'description' => 'Many dishes cooked in broth or water instead of oil.',
				'icon' => 'content-icon-home-1-512x512.png',
			],
			[
				'title' => 'Mediterranean Taste',
				'description' => 'Variety of naturally healthy paleo, vegan, keto, dairy-free and gluten-free dishes',
				'icon' => 'content-icon-home-3-512x512.png',
			],
		];
	}
}