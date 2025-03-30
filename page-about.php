<?php 
/**
 * Template Name: About Template 
 */

get_header();

?>

    <!-- unsplash -->
    <div style="background-image: url(<?php echo get_template_directory_uri() . '/images/hero-banner-about-1920x1127.jpg'; ?>)"; class="relative w-full h-[400px] lg:h-[600px] -z-20 bg-center bg-cover bg-no-repeat before:absolute before:top-0 before:left-0 before:bg-neutral-800/60 before:w-full before:h-full before:-z-10">
        <div class="absolute left-0 w-full overflow-hidden rotate-180 -bottom-[0.05rem] lg:-bottom-1">
            <svg class="fill-white" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1000 100" preserveAspectRatio="none"><path d="M0,6V0h1000v100L0,6z"></path></svg>	
        </div>

        <div class="container relative z-10 flex items-center justify-center w-full h-full">
            <h1 class="text-center uppercase text-neutral-100 comp-heading-hero comp-heading-font">
                About
            </h1>
        </div>
    </div>
    
    <section class="xl:-mt-16">
        <div class="grid grid-cols-12">
            <div class="col-span-12 lg:col-span-6">
                <div class="px-6 py-8 text-center md:px-24 lg:px-12 xl:px-28">                    
                    <div>
                        <h2 class="text-4xl leading-snug uppercase md:text-5xl md:leading-snug lg:text-6xl lg:leading-snug comp-text-dark comp-heading-font">
                            Where
                        </h2>
                    </div>
                    
                    <div>
                        <h2 class="text-4xl leading-snug uppercase md:text-5xl md:leading-snug lg:text-6xl lg:leading-snug comp-text-dark comp-heading-font text-primary">
                            Taste
                        </h2>
                    </div>
                    
                    <div>
                        <h2 class="text-4xl leading-snug uppercase md:text-5xl md:leading-snug lg:text-6xl lg:leading-snug comp-text-dark comp-heading-font">
                            Knows
                        </h2>
                    </div>
                    
                    <div class="my-12 mt-8 lg:mt-12 lg:my-14">
                        <p class="leading-7 text-black">
                            Welcome to Duzo Restaurant, where gastronomy meets artistry and every meal is a symphony of flavors. Nestled in the heart of Dubai, our restaurant is a sanctuary for food enthusiasts and culinary adventurers alike.
                            <br><br>
                            At Duzo Restaurant, we believe in crafting exceptional dining experiences that tantalize the taste buds and ignite the senses. Our chefs, true culinary maestros, meticulously curate each dish, blending traditional techniques with innovative twists to present a menu that celebrates the essence of fine dining.
                        </p>
                    </div>
                    
                    <div>
                        <a href="<?php echo get_permalink(get_page_by_path('menu')->ID) ?>" class="py-2 text-lg font-medium text-black border-t border-b lg:text-xl comp-heading-font border-t-primary border-b-primary">
                            Discover the Menu 
                        </a>
                    </div>
                </div>
            </div>
            
            <div class="col-span-12 lg:col-span-6 xl:-mt-12">
                <!-- unsplash -->
                <div style="background-image: url(<?php echo get_template_directory_uri() . '/images/content-image-about-1-1920x2880.jpg'; ?>)"; class="w-full h-[350px] md:h-[450px] lg:h-full bg-center bg-no-repeat bg-cover"></div>
            </div>
        </div>
    </section>

<?php

get_footer();