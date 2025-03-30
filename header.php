<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package duzo
 */

?>
<!doctype html>
<html <?php language_attributes(); ?> class="scroll-smooth">
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
	
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Literata:opsz,wght@7..72,200..900&family=Poppins:wght@400;500;600&display=swap" rel="stylesheet">
</head>

<body <?php body_class(); ?>
	x-data="{
		isMobileMenuOpen: false,
		handleMobileMenuToggle() {
			this.isMobileMenuOpen = ! this.isMobileMenuOpen;
			document.body.classList.toggle('overflow-hidden');
		}
	}"
>
<?php wp_body_open(); ?>
<div id="page" class="relative site">
	<a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e( 'Skip to content', 'duzo' ); ?></a>

	<header id="masthead" class="fixed top-0 left-0 z-50 hidden w-full py-4 transition-all duration-300 ease-in-out border-b border-b-transparent site-header desktop-header lg:block"
		x-data="{ scrolled: false }"
        x-init="window.addEventListener('scroll', () => { scrolled = window.scrollY > 100 })"
		:class="scrolled && '!border-b-primary comp-bg-dark'"
	>
		<div class="container flex items-center justify-between">
			<div class="w-14 h-14 site-branding">
				<?php the_custom_logo(); ?>
			</div>

			<nav id="site-navigation" class="main-navigation">
				<?php
					wp_nav_menu(
						array(
							'theme_location' => 'menu-1',
							'menu_id'        => 'primary-menu',
							'menu_class' => 'flex items-center md:gap-4 text-neutral-100',
						)
					);
				?>
			</nav>
		</div>
	</header>

	<header class="fixed top-0 left-0 z-50 w-full py-4 transition-all duration-300 ease-in-out border-b border-b-transparent lg:hidden"
		x-data="{ scrolled: false }"
        x-init="window.addEventListener('scroll', () => { scrolled = window.scrollY > 100 })"
		:class="scrolled && '!border-b-primary comp-bg-dark'"
	>
		<div class="container">
			<div class="flex items-center justify-between">
				<div class="w-14 h-14">
					<?php the_custom_logo(); ?>
				</div>
					
				<button 
					@click="handleMobileMenuToggle()"
				>
					<!-- boxicons -->
					<svg class="fill-neutral-100" xmlns="http://www.w3.org/2000/svg" width="36" height="36" viewBox="0 0 24 24"><path d="M4 6h16v2H4zm0 5h16v2H4zm0 5h16v2H4z"></path></svg>
				</button>
			</div>
		</div>
	</header>
	
	<div
		x-cloak
		class="fixed top-0 z-50 w-full h-screen comp-bg-dark"
		x-show="isMobileMenuOpen"
        x-transition:enter="transition-[left] ease-out duration-300"
        x-transition:enter-start="-left-[300px]"
        x-transition:enter-end="left-0"
        x-transition:leave="transition-[left] ease-in duration-300"
        x-transition:leave-start="left-0"
        x-transition:leave-end="-left-[300px]"
	>
		<header class="py-4 mb-4 border-b border-primary">
			<div class="container">
				<div class="flex items-center justify-between">
					<div class="w-14 h-14">
						<?php the_custom_logo(); ?>
					</div>
						
					<button 
						@click="handleMobileMenuToggle()"
					>
						<!-- boxicons -->
						<svg class="fill-neutral-100" xmlns="http://www.w3.org/2000/svg" width="36" height="36" viewBox="0 0 24 24"><path d="m16.192 6.344-4.243 4.242-4.242-4.242-1.414 1.414L10.535 12l-4.242 4.242 1.414 1.414 4.242-4.242 4.243 4.242 1.414-1.414L13.364 12l4.242-4.242z"></path></svg>
					</button>
				</div>
			</div>
		</header>
		
		<div class="container">
			<?php
				wp_nav_menu(
					array(
						'theme_location' => 'menu-1',
						'menu_id'        => 'primary-mobile-menu',
					)
				);
			?>
		</div>
		
		<div class="container mt-12">
			<ul class="space-y-1 text-[12px]">
				<li>
					Monday - Wednesday: 11 AM  - 9 PM
				</li>
				<li>
					Thursday - Saturday: 11 AM  - 10 PM
				</li>
				<li>
					Happy Hour: Everyday 2 PM - 6 PM
				</li>
				<li>
					Downtown Dubai - Dubai - United Arab Emirates
				</li>
			</ul>
		</div>
		
		<div class="container mt-12">
			<div class="mb-4 text-xs">
				<span class="underline underline-offset-8 decoration-2 decoration-primary">Follow us</span> to catch latest updates
			</div>
		
			
			
			<ul class="flex items-center gap-4">
				<li>
					<a href="#">
						<!-- boxicons -->
						<svg class="fill-neutral-100" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path d="M13.397 20.997v-8.196h2.765l.411-3.209h-3.176V7.548c0-.926.258-1.56 1.587-1.56h1.684V3.127A22.336 22.336 0 0 0 14.201 3c-2.444 0-4.122 1.492-4.122 4.231v2.355H7.332v3.209h2.753v8.202h3.312z"></path></svg>
					</a>
				</li>
				
				<li>
					<a href="#">
						<!-- boxicons -->
						<svg class="fill-neutral-100" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path d="M11.999 7.377a4.623 4.623 0 1 0 0 9.248 4.623 4.623 0 0 0 0-9.248zm0 7.627a3.004 3.004 0 1 1 0-6.008 3.004 3.004 0 0 1 0 6.008z"></path><circle cx="16.806" cy="7.207" r="1.078"></circle><path d="M20.533 6.111A4.605 4.605 0 0 0 17.9 3.479a6.606 6.606 0 0 0-2.186-.42c-.963-.042-1.268-.054-3.71-.054s-2.755 0-3.71.054a6.554 6.554 0 0 0-2.184.42 4.6 4.6 0 0 0-2.633 2.632 6.585 6.585 0 0 0-.419 2.186c-.043.962-.056 1.267-.056 3.71 0 2.442 0 2.753.056 3.71.015.748.156 1.486.419 2.187a4.61 4.61 0 0 0 2.634 2.632 6.584 6.584 0 0 0 2.185.45c.963.042 1.268.055 3.71.055s2.755 0 3.71-.055a6.615 6.615 0 0 0 2.186-.419 4.613 4.613 0 0 0 2.633-2.633c.263-.7.404-1.438.419-2.186.043-.962.056-1.267.056-3.71s0-2.753-.056-3.71a6.581 6.581 0 0 0-.421-2.217zm-1.218 9.532a5.043 5.043 0 0 1-.311 1.688 2.987 2.987 0 0 1-1.712 1.711 4.985 4.985 0 0 1-1.67.311c-.95.044-1.218.055-3.654.055-2.438 0-2.687 0-3.655-.055a4.96 4.96 0 0 1-1.669-.311 2.985 2.985 0 0 1-1.719-1.711 5.08 5.08 0 0 1-.311-1.669c-.043-.95-.053-1.218-.053-3.654 0-2.437 0-2.686.053-3.655a5.038 5.038 0 0 1 .311-1.687c.305-.789.93-1.41 1.719-1.712a5.01 5.01 0 0 1 1.669-.311c.951-.043 1.218-.055 3.655-.055s2.687 0 3.654.055a4.96 4.96 0 0 1 1.67.311 2.991 2.991 0 0 1 1.712 1.712 5.08 5.08 0 0 1 .311 1.669c.043.951.054 1.218.054 3.655 0 2.436 0 2.698-.043 3.654h-.011z"></path></svg>
					</a>
				</li>
				
				<li>
					<a href="#">
						<!-- boxicons -->
						<svg class="fill-neutral-100" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path fill-rule="evenodd" clip-rule="evenodd" d="M18.403 5.633A8.919 8.919 0 0 0 12.053 3c-4.948 0-8.976 4.027-8.978 8.977 0 1.582.413 3.126 1.198 4.488L3 21.116l4.759-1.249a8.981 8.981 0 0 0 4.29 1.093h.004c4.947 0 8.975-4.027 8.977-8.977a8.926 8.926 0 0 0-2.627-6.35m-6.35 13.812h-.003a7.446 7.446 0 0 1-3.798-1.041l-.272-.162-2.824.741.753-2.753-.177-.282a7.448 7.448 0 0 1-1.141-3.971c.002-4.114 3.349-7.461 7.465-7.461a7.413 7.413 0 0 1 5.275 2.188 7.42 7.42 0 0 1 2.183 5.279c-.002 4.114-3.349 7.462-7.461 7.462m4.093-5.589c-.225-.113-1.327-.655-1.533-.73-.205-.075-.354-.112-.504.112s-.58.729-.711.879-.262.168-.486.056-.947-.349-1.804-1.113c-.667-.595-1.117-1.329-1.248-1.554s-.014-.346.099-.458c.101-.1.224-.262.336-.393.112-.131.149-.224.224-.374s.038-.281-.019-.393c-.056-.113-.505-1.217-.692-1.666-.181-.435-.366-.377-.504-.383a9.65 9.65 0 0 0-.429-.008.826.826 0 0 0-.599.28c-.206.225-.785.767-.785 1.871s.804 2.171.916 2.321c.112.15 1.582 2.415 3.832 3.387.536.231.954.369 1.279.473.537.171 1.026.146 1.413.089.431-.064 1.327-.542 1.514-1.066.187-.524.187-.973.131-1.067-.056-.094-.207-.151-.43-.263"></path></svg>
					</a>
				</li>
			</ul>
		</div>
	</div>