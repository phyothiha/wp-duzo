<?php 
/**
 * Template Name: About Template 
 */

get_header();

?>

    <!-- unsplash -->
    <div style="background-image: url(<?php echo get_template_directory_uri() . '/images/hero-banner-contact-1920x1279.jpg'; ?>)"; class="relative w-full h-[400px] lg:h-[600px] -z-20 bg-center bg-cover bg-no-repeat before:absolute before:top-0 before:left-0 before:bg-neutral-800/60 before:w-full before:h-full before:-z-10">
        <div class="absolute left-0 w-full overflow-hidden rotate-180 -bottom-[0.05rem] lg:-bottom-1">
            <svg class="fill-white" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1000 100" preserveAspectRatio="none"><path d="M0,6V0h1000v100L0,6z"></path></svg>	
        </div>

        <div class="container relative z-10 flex items-center justify-center w-full h-full">
            <h1 class="text-center uppercase text-neutral-100 comp-heading-hero comp-heading-font">
                Contact
            </h1>
        </div>
    </div>
    
    <section class="xl:-mt-16">
        <div class="grid grid-cols-12">
            <div class="col-span-12 lg:col-span-6">
                <div class="px-6 py-8 text-center md:px-24 lg:px-12 xl:px-28">                    
                    <div>
                        <h2 class="text-4xl leading-snug uppercase md:text-5xl md:leading-snug lg:text-6xl lg:leading-snug comp-text-dark comp-heading-font">
                            Visit Duzo in <span class="text-primary">Al Zahia, Dubai</span>
                        </h2>
                    </div>
                    
                    <div class="my-12 mt-8 lg:mt-12 lg:my-14">
                        <p class="leading-7 text-black xl:leading-7 xl:text-base">
                            Looking for the best Asian restaurant near you? Duzo is located in the heart of Al Zahia, Dubai. Contact us for reservations or visit us today for a warm dining experience.
                            <br />
                            <br />
                            Open daily for lunch and dinner.
                            <br class="hidden xl:block" />
                            <br class="hidden xl:block" />
                            <br class="hidden xl:block" />
                            <br class="hidden xl:block" />
                        </p>
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