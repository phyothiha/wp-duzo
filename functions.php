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
						'price' => '14',
					],
					[
						't' => 'Spicy Edamame',
						'st' => '',
						'd' => 'Giner, garlic, chili',
						'price' => '18',
					],
					[
						't' => 'Miso Gyoza',
						'st' => '',
						'd' => 'Prawn, Chilean seabass,',
						'price' => '48',
					],
					[
						't' => 'Napa Cabbage Salad',
						'st' => '',
						'd' => 'White cabbage, carrot, cucumber, wafu',
						'price' => '18',
					],
					[
						't' => 'Duzo Dynamite',
						'st' => '',
						'd' => 'Rock shrimp, chili mayonnaise',
						'price' => '48',
					],
					[
						't' => 'Tuna Tataki',
						'st' => '',
						'd' => 'Sliced tuna, herbs, homemade ponzu',
						'price' => '56',
					],
					[
						't' => 'Sweet Corn Salad',
						'st' => '',
						'd' => 'Sweet corn, pomegranate, Asian vinaigrette',
						'price' => '39',
					],
					[
						't' => 'Mix Green Salad',
						'st' => '',
						'd' => 'Mixed leaves, avocado, cherry tomato',
						'price' => '39',
					],
					[
						't' => 'Ebi Tempura',
						'st' => '',
						'd' => 'Prawn, tensuyu daikon sauce',
						'price' => '43',
					],
					[
						't' => 'Dim Sum Selection',
						'st' => '4pcs per basket',
						'd' => 'Duck dumpling, Cristal prawn dumpling, Chicken Siew Mai, Prawn Siew Mai',
						'price' => '36',
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
						'price' => '43',
					],
					[
						't' => 'Crispy Tuna Maki',
						'st' => '',
						'd' => 'Spicy tuna, spicy mayo',
						'price' => '43',
					],
					[
						't' => 'Ebi Maki',
						'st' => '',
						'd' => 'Prawn & tenkasu, avocado, wasabi mayo',
						'price' => '43',
					],
					[
						't' => 'Avocado Maki',
						'st' => '',
						'd' => 'Avocado, cucumber, carrot',
						'price' => '34',
					],
					[
						't' => 'Crispy Kani Maki',
						'st' => '',
						'd' => 'Kani, goma unagi sauce',
						'price' => '43',
					],
					[
						't' => 'California Maki',
						'st' => '',
						'd' => 'Crab stick, avocado, tobiko',
						'price' => '43',
					],
					[
						't' => 'Salmon Nigiri',
						'st' => '',
						'd' => '',
						'price' => '25',
					],
					[
						't' => 'Tuna Nigiri',
						'st' => '',
						'd' => '',
						'price' => '25',
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
						'price' => '25',
					],
					[
						't' => 'Tom Yum Gaung',
						'st' => '',
						'd' => 'Thai flavored creamy seafood soup',
						'price' => '45',
					],
					[
						't' => 'Miso Ramen Bowl',
						'st' => '',
						'd' => 'Grilled Chicken, miso broth, mushroom, soft egg',
						'price' => '54',
					],
					[
						't' => 'Kimchi Jiggae',
						'st' => '',
						'd' => 'Spicy kimchi, chicken, mushroom and tofu',
						'price' => '54',
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
						'price' => '45',
					],
					[
						't' => 'Pad Thai',
						'st' => '',
						'd' => 'Prawns, flat noodles, tomato, beansprout',
						'price' => '45',
					],
					[
						't' => 'Japanese Fried Rice',
						'st' => '',
						'd' => 'Sticky rice, carrot, baby corn',
						'price' => '45',
					],
				],
			],
			[
				'id' => 'robata',
				'title' => 'Robata',
				'subtitle' => '',
				'dishes' => [
					[
						't' => 'Jumbo Tiger Prawn',
						'st' => '',
						'd' => 'Prawn, Spicy yuzu koshu, lemon',
						'price' => '98',
					],
					[
						't' => 'Chilean Seabass',
						'st' => '',
						'd' => 'Seabass, ginger jalapeno dressing, cucumber, carrot',
						'price' => '195',
					],
					[
						't' => 'Whole Seabream',
						'st' => '',
						'd' => 'Boneless fish, fennel, capsicum',
						'price' => '98',
					],
					[
						't' => 'Sesame Beef',
						'st' => '',
						'd' => 'Tenderloin, spicy sesame dressing',
						'price' => '195',
					],
					[
						't' => 'Salmon Teriyaki',
						'st' => '',
						'd' => 'Salmon, kimchi salad',
						'price' => '98',
					],
					[
						't' => 'Beef Skewer',
						'st' => '',
						'd' => 'Beef, Teriyaki sauce',
						'price' => '25',
					],
					[
						't' => 'Yakitori',
						'st' => '',
						'd' => 'Chicken, yakito sauce',
						'price' => '25',
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
						'price' => '18',
					],
					[
						't' => 'Sweet Potato',
						'st' => '',
						'd' => 'Sweet unagi reduction, sesame',
						'price' => '18',
					],
					[
						't' => 'Nasu Miso',
						'st' => '',
						'd' => 'Eggplant, sweetened miso',
						'price' => '18',
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
						'price' => '45',
					],
					[
						't' => 'Chocolate Fondant',
						'st' => '',
						'd' => 'Caramel praline, vanilla ice cream',
						'price' => '45',
					],
					[
						't' => 'Banana Spring roll',
						'st' => '',
						'd' => 'Toffee sauce, coconut ice cream',
						'price' => '36',
					],
					[
						't' => 'Sticky Toffee Pudding',
						'st' => '',
						'd' => 'Date caramel, toffee sauce, vanilla ice cream',
						'price' => '36',
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
						'price' => '16',
					],
					[
						't' => 'Yuzu Iced tea',
						'st' => '',
						'd' => 'Brewed tea, passionfruit, lime',
						'price' => '16',
					],
					[
						't' => 'Milky Matcha',
						'st' => '',
						'd' => 'Matcha tea powder, Milk base, honey syrup',
						'price' => '16',
					],
					[
						't' => 'Yuzu Margrita',
						'st' => '',
						'd' => 'Japanese citrus, honey syrup, salt',
						'price' => '16',
					],
					[
						't' => 'Apple Lady',
						'st' => '',
						'd' => 'Fresh Green Apple Juice, Lime, Mint',
						'price' => '16',
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
						'price' => '15',
					],
					[
						't' => 'Cappuccino',
						'st' => '',
						'd' => '',
						'price' => '15',
					],
					[
						't' => 'Espresso',
						'st' => '',
						'd' => '',
						'price' => '15',
					],
					[
						't' => 'Late',
						'st' => '',
						'd' => '',
						'price' => '15',
					],
				],
			],
			[
				'id' => 'fresh-juice',
				'title' => 'Fresh Juice',
				'subtitle' => '',
				'dishes' => [
					[
						't' => 'Green Apple Juice',
						'st' => '',
						'd' => '',
						'price' => '12',
					],
					[
						't' => 'Orange Juice',
						'st' => '',
						'd' => '',
						'price' => '12',
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
						'price' => 6,
						'd' => 'Al Ain 330ml',
					],
					[
						't' => 'Still Water',
						'st' => '',
						'price' => 12,
						'd' => 'Al Ain 750ml',
					],
					[
						't' => 'Sparkling Water',
						'st' => '',
						'price' => 6,
						'd' => 'Al Ain 330ml',
					],
					[
						't' => 'Sparkling Water',
						'st' => '',
						'price' => 12,
						'd' => 'Al Ain 750ml',
					],
					[
						't' => 'Original Ginger',
						'st' => '',
						'price' => 18,
						'd' => 'Ale Franklin & Sons 200ml',
					],
					[
						't' => 'Original Lemonade',
						'st' => '',
						'price' => 18,
						'd' => 'Franklin & Sons 200ml',
					],
					[
						't' => 'Organic Coconut Water Drop',
						'st' => '',
						'price' => 15,
						'd' => '290ml',
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