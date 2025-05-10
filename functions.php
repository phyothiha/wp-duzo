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

function duzo_seo_tags() {
    
	if (is_page()) {
		global $post;
        $slug = $post->post_name;
		
		switch ($slug) {
			case 'home':
				echo '<meta name="title" content="Duzo | Best Asian Fusion Restaurant in Dubai & Al Zahia" />';
				echo '<meta name="description" content="Duzo offers healthy, authentic Asian fusion dishes in Al Zahia, Dubai. Dine in with us for different Asian cuisines like Japanese, Korean, Thai and more." />';
				break;
			case 'menu':
				echo '<meta name="title" content="Our Menu | Healthy Asian Food & Drinks" />';				
				echo '<meta name="description" content="Check out Duzo\'s menu featuring noodles, sushi, healthy Asian meals and variety of drinks in Dubai." />';				
				break;
			case 'about':
				echo '<meta name="title" content="About Duzo | Fine Dining Asian Restaurant in Dubai" />';				
				echo '<meta name="description" content="Learn about Duzo\'s passion for Asian cuisine. We blend tradition with modern flavors in the heart of Dubai." />';				
				break;
			case 'contact':
				echo '<meta name="title" content="Contact Duzo | Dine-In Asian Restaurant in Al Zahia, Dubai" />';				
				echo '<meta name="description" content="Find Duzo Restaurant\'s location, contact details, and dine-in hours in Dubai. Visit us in Al Zahia today." />';				
				break;
		}
	}
    
}
add_action( 'wp_head', 'duzo_seo_tags' );

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
						'd' => 'steamed with sea salt',
						'price' => '14',
					],
					[
						't' => 'Spicy Edamame',
						'st' => '',
						'd' => 'giner, garlic, chili',
						'price' => '18',
					],
					[
						't' => 'Miso Gyoza',
						'st' => '',
						'd' => 'prawn, sweet miso',
						'price' => '45',
					],
					[
						't' => 'Goma Spinach Salad',
						'st' => '',
						'd' => 'baby spinach, cherry tomato, homemade sesame sauce',
						'price' => '36',
					],
					[
						't' => 'Duzo Dynamite',
						'st' => '',
						'd' => 'rock shrimp, chili mayonnaise',
						'price' => '52',
					],
					[
						't' => 'Tuna Tataki',
						'st' => '',
						'd' => 'seared tuna, herbs, homemade ponzu',
						'price' => '54',
					],
					[
						't' => 'Crab and Baby Gem Salad',
						'st' => '',
						'd' => 'kani crab, goma dressing, baby gems lettuce, cherry tomato',
						'price' => '45',
					],
					[
						't' => 'Salmon Tartare',
						'st' => '',
						'd' => 'salmon, wasabi mayo, black tobiko',
						'price' => '36',
					],
					[
						't' => 'Ebi Tempura',
						'st' => '',
						'd' => 'prawn, tensuyu daikon sauce',
						'price' => '45',
					],
					[
						't' => 'Dim Sum Selection',
						'st' => 'CHEF SELECTIONS',
						'd' => '4pcs per basket',
						'price' => '36',
					],
					[
						't' => 'Sweet Potatoes Fries',
						'st' => '',
						'd' => 'crispy sweet potatoes, spicy mayonnaise',
						'price' => '18',
					],
					[
						't' => 'Wagyu Beef Cake',
						'st' => '',
						'd' => 'minced wagyu, sautéed onion, teriyaki mayonnaise',
						'price' => '36',
					],
				],
			],
			[
				'id' => 'maki-and-sushi',
				'title' => 'Sushi & Maki',
				'subtitle' => '6pcs / 2pcs',
				'dishes' => [
					[
						't' => 'Tori Kimchi Maki',
						'st' => '',
						'd' => 'marinated chicken maki with homemade kimchi, kimchi sauce',
						'price' => '45',
					],
					[
						't' => 'Crispy Tuna Maki',
						'st' => '',
						'd' => 'spicy tuna, spicy mayo, japanese sweet sauce',
						'price' => '45',
					],
					[
						't' => 'Ebi Maki',
						'st' => '',
						'd' => 'prawn & tenkasu, avocado, spicy mayo',
						'price' => '45',
					],
					[
						't' => 'Crispy Kani Maki',
						'st' => '',
						'd' => 'kani crab, goma, spicy mayo,japanese sweet sauce',
						'price' => '45',
					],
					[
						't' => 'California Maki',
						'st' => '',
						'd' => 'crab stick, avocado, cucumber, tobiko',
						'price' => '45',
					],
					[
						't' => 'California Hand Roll',
						'st' => '',
						'd' => 'crab hand roll, avocado, cucumber, tobiko',
						'price' => '45',
					],
					[
						't' => 'Hot and Crispy Ebi Maki',
						'st' => '',
						'd' => 'crunchy prawn tempura, chipotle mayo',
						'price' => '45',
					],
					[
						't' => 'Crunchy Mushroom Maki',
						'st' => '',
						'd' => 'sautéed shimeji mushroom, japanese mayo',
						'price' => '36',
					],
					[
						't' => 'Avocado Maki',
						'st' => '',
						'd' => '',
						'price' => '36',
					],
					[
						't' => 'Salmon Avocado Maki',
						'st' => '',
						'd' => '',
						'price' => '45',
					],
					[
						't' => 'Kappa Maki',
						'st' => '',
						'd' => '',
						'price' => '36',
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
				'id' => 'ramen-special',
				'title' => 'Ramen Special',
				'subtitle' => '',
				'dishes' => [
					[
						't' => 'Miso Ramen Bowl',
						'st' => '',
						'd' => 'grilled chicken, miso broth, mushroom, soft egg',
						'price' => '54',
					],
					[
						't' => 'Soyu Ramen',
						'st' => '',
						'd' => 'yakitori, soyu broth, white onion, soft egg',
						'price' => '54',
					],
					[
						't' => 'Kimchi Ramen',
						'st' => '',
						'd' => 'spicy kimchi, chicken, mushroom, tofu',
						'price' => '54',
					],
					[
						't' => 'Ramen Stir-fried',
						'st' => '',
						'd' => 'mushroom, bak choi, crunchy tenkasu',
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
						't' => 'Pad Thai',
						'st' => '',
						'd' => 'prawns, flat noodles, tomato, beansprout',
						'price' => '54',
					],
					[
						't' => 'Japanese Fried Rice',
						'st' => '',
						'd' => 'sticky rice, carrot, baby corn, furikake',
						'price' => '54',
					],
					[
						't' => 'Tom Yum Gaung',
						'st' => '',
						'd' => 'thai flavored creamy soup with prawns',
						'price' => '54',
					],
					[
						't' => 'Wagyu Bibimbap',
						'st' => '',
						'd' => 'wagyu beef, egg, mushroom, carrot, beansprout, bak choi',
						'price' => '54',
					],
				],
			],
			[
				'id' => 'robata',
				'title' => 'Robata Grill',
				'subtitle' => '',
				'dishes' => [
					[
						't' => 'Beef Skewer',
						'st' => '',
						'd' => 'beef, teriyaki sauce',
						'price' => '25',
					],
					
					[
						't' => 'Yakitori',
						'st' => '',
						'd' => 'chicken, yakito sauce',
						'price' => '25',
					],
					[
						't' => 'Jumbo Tiger Prawn',
						'st' => '',
						'd' => 'prawn, spicy yuzu, lemon',
						'price' => '98',
					],
					[
						't' => 'Whole Seabream',
						'st' => '',
						'd' => 'boneless fish, fennel salad',
						'price' => '98',
					],
					[
						't' => 'Salmon Teriyaki',
						'st' => '',
						'd' => 'salmon, kimchi salad',
						'price' => '98',
					],
					[
						't' => 'Sesame Beef Tenderloin',
						'st' => '',
						'd' => 'australian tenderloin, spicy sesame dressing',
						'price' => '195',
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
						'd' => 'mushrooms, wafu sesame',
						'price' => '18',
					],
					[
						't' => 'Sweet Potato',
						'st' => '',
						'd' => 'japanese sweet sauce , sesame',
						'price' => '18',
					],
					[
						't' => 'Nasu Miso',
						'st' => '',
						'd' => 'eggplant, sweetened miso',
						'price' => '18',
					],
					[
						't' => 'Asparagus',
						'st' => '',
						'd' => 'jumbo asparagus, furikake',
						'price' => '27',
					],
					[
						't' => 'Japanese Steam Rice',
						'st' => '',
						'd' => '',
						'price' => '10',
					],
				],
			],
			[
				'id' => 'dessert',
				'title' => 'Dessert',
				'subtitle' => '',
				'dishes' => [
					[
						't' => 'Duzo Cheesecake',
						'st' => '',
						'd' => 'mixed nuts crumble, berry compote',
						'price' => '45',
					],
					[
						't' => 'Chocolate Fondant',
						'st' => '',
						'd' => 'caramel praline, vanilla ice cream',
						'price' => '45',
					],
					[
						't' => 'Banana Spring roll',
						'st' => '',
						'd' => 'toffee sauce, vanilla ice cream',
						'price' => '45',
					],
					[
						't' => 'Coco Mogo',
						'st' => '',
						'd' => 'mamenori sweet maki, avocado, mango, coconut puree',
						'price' => '45',
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
						'd' => 'fresh passionfruit, mint & lemon, fresh orange, Fresh green apple,',
						'price' => '18',
					],
					[
						't' => 'Milky Matcha',
						'st' => '',
						'd' => 'matcha powder, milk base, honey syrup',
						'price' => '18',
					],
					[
						't' => 'Yuzu Margrita',
						'st' => '',
						'd' => 'japanese citrus, sugar cane syrup, salt',
						'price' => '18',
					],
					[
						't' => 'Apple Lady',
						'st' => '',
						'd' => 'fresh green apple juice, lime, mint',
						'price' => '18',
					],
					[
						't' => 'Duzo Yuzo',
						'st' => '',
						'd' => 'fresh passionfruit, yuzu marmalade, yuzu pulps',
						'price' => '18',
					],
				],
			],
			[
				'id' => 'coffee',
				'title' => 'Coffee',
				'subtitle' => '',
				'dishes' => [
					[
						't' => 'Espresso',
						'st' => '',
						'd' => '',
						'price' => '15',
					],
					[
						't' => 'Flat White',
						'st' => '',
						'd' => '',
						'price' => '18',
					],
					[
						't' => 'Cappuccino',
						'st' => '',
						'd' => '',
						'price' => '18',
					],
					[
						't' => 'Late',
						'st' => '',
						'd' => '',
						'price' => '18',
					],
					[
						't' => 'Spanish Latte',
						'st' => '',
						'd' => '',
						'price' => '20',
					],
					[
						't' => 'Matcha Latte',
						'st' => '',
						'd' => '',
						'price' => '20',
					],
					[
						't' => 'Royal Latte on Ice',
						'st' => '',
						'd' => '',
						'price' => '20',
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
						'price' => '16',
					],
					[
						't' => 'Orange Juice',
						'st' => '',
						'd' => '',
						'price' => '16',
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
						'd' => '(Al Ain 330ml)',
					],
					[
						't' => 'Still Water',
						'st' => '',
						'price' => 12,
						'd' => '(Al Ain 750ml)',
					],
					[
						't' => 'Sparkling Water',
						'st' => '',
						'price' => 6,
						'd' => '(Al Ain 330ml)',
					],
					[
						't' => 'Sparkling Water',
						'st' => '',
						'price' => 12,
						'd' => '(Al Ain 750ml)',
					],
					[
						't' => 'Original Coconut Water',
						'st' => '',
						'price' => 15,
						'd' => '(290ml)',
					],
					[
						't' => 'Red Bull',
						'st' => '',
						'price' => 23,
						'd' => '(250ml)',
					],
					[
						't' => 'Soft Drinks',
						'st' => '',
						'price' => 12,
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
				'title' => 'FRESH INGREDIENTS',
				'description' => 'We use only the freshest, high-quality ingredients to bring authentic Asian flavors to your plate. Each dish is made to order, just the way it should be.',
				'icon' => 'content-icon-home-2-512x512.png',
			],
			[
				'title' => 'FLAVORFUL & HEALTHY',
				'description' => 'At Duzo, flavor meets balance. Many of our dishes are cooked with minimal oil, steamed, or stir-fried—offering delicious options that feel good and taste even better.',
				'icon' => 'content-icon-home-1-512x512.png',
			],
			[
				'title' => 'MEDITERRANEAN TASTE',
				'description' => 'Enjoy a refreshing twist on tradition with our Mediterranean-inspired options. Light, wholesome, and full of natural flavors—perfect for those seeking vegan, keto, paleo, dairy-free, or gluten-free dishes, all with an Asian flair.',
				'icon' => 'content-icon-home-3-512x512.png',
			],
			[
				'title' => 'CLEAN & COMFORTING',
				'description' => 'Our kitchen follows the highest hygiene standards, and our team is committed to warm, attentive service. Duzo isn’t just a place to eat—it’s a place to feel at home.',
				'icon' => 'content-icon-home-4-512x512.png',
			],
		];
	}
}