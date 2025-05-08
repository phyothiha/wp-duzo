<?php 
/**
 * Template Name: Menu Template 
 */

get_header();

$menus = static_dataset_menus();

?>

    <!-- unsplash -->
    <!-- <div style="background-image: url('https://cdn-ilbadjn.nitrocdn.com/pdWbTPTFYdEkdAZOXGfMdLexqObVDkjD/assets/images/optimized/rev-4036da8/vietnamesefoodies.com/wp-content/uploads/2022/10/menu-back.jpg')"; class="relative w-full h-[400px] lg:h-[600px] -z-20 bg-center bg-cover bg-no-repeat before:absolute before:top-0 before:left-0 before:bg-neutral-800/60 before:w-full before:h-full before:-z-10">
        <div class="container relative z-10 flex items-center justify-center w-full h-full">
            <h1 class="text-center uppercase text-neutral-100 comp-heading-hero comp-heading-font">
                Menu
            </h1>
        </div>
    </div> -->
    
    <div style="background-image: url(<?php echo get_template_directory_uri() . '/images/hero-banner-contact-1920x1279.jpg'; ?>)"; class="relative w-full h-[400px] lg:h-[600px] -z-20 bg-center bg-cover bg-no-repeat before:absolute before:top-0 before:left-0 before:bg-neutral-800/60 before:w-full before:h-full before:-z-10">
        <div class="absolute left-0 w-full overflow-hidden rotate-180 -bottom-[0.05rem] lg:-bottom-1">
            <svg class="fill-white" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1000 100" preserveAspectRatio="none"><path d="M0,6V0h1000v100L0,6z"></path></svg>	
        </div>

        <div class="container relative z-10 flex items-center justify-center w-full h-full">
            <h1 class="text-center uppercase text-neutral-100 comp-heading-hero comp-heading-font">
                Menu
            </h1>
        </div>
    </div>
    
    <section class="xl:-mt-16">
        <div class="grid grid-cols-12">
            <div class="col-span-12 lg:col-span-6">
                <div class="px-6 py-8 text-center md:px-24 lg:px-12 xl:px-28">                    
                    <div>
                        <h2 class="text-4xl leading-snug uppercase md:text-5xl md:leading-snug lg:text-6xl lg:leading-snug comp-text-dark comp-heading-font">
                            Explore Our <span class="text-primary">Flavorful Asian Fusion Menu</span>
                        </h2>
                    </div>
                    
                    <div class="my-12 mt-8 lg:mt-12 lg:my-14">
                        <p class="leading-7 text-black xl:leading-7 xl:text-base">
                            Discover our chef-curated menu with a twist of innovation and tradition. From Appetizers and Main Courses to Desserts and Drinks, our dishes are made from fresh, high-quality ingredients. Perfect for foodies seeking healthy Asian food in Dubai.
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
    
    <section class="pb-8 comp-text-dark">
        <div class="sticky z-20 py-4 mb-8 bg-neutral-100 top-20" 
            x-data="{ 
                selectedMenu: '',
                scrollToSection(e) { 
                    let section = e.target.value;                    
                
                    document.getElementById(section)?.scrollIntoView({ behavior: 'smooth' });
                    this.selectedMenu = section;
                }
            }"
        >
            <div class="container">
                <label for="menu" class="block mb-2 text-sm lg:text-base">
                    Selected Menu: <span class="font-medium" x-text="selectedMenu"></span>
                </label>
                <select id="menu" class="w-full p-2 border rounded-none focus:outline-none" x-on:change="scrollToSection">
                    <option value="" selected>Choose Menu</option>
                    <?php foreach ($menus as $menu) : ?>
                    <option value="<?php echo $menu['id']; ?>"><?php echo $menu['title']; ?></option>
                    <?php endforeach ?>
                </select>
            </div>
        </div>    
    
        <div class="container">
            <div class="grid grid-cols-12 gap-y-12 lg:gap-x-12">
                <?php foreach ($menus as $menu) : ?>
                <div class="col-span-12 lg:col-span-6 snap-y">
                    <div class="mb-4 lg:mb-8 scroll-mt-48 lg:scroll-mt-56 snap-start" id="<?php echo $menu['id']; ?>">
                        <h3 class="uppercase comp-heading-h3 comp-heading-font text-primary">
                            <?php echo $menu['title']; ?>
                        </h3>
                        
                        <?php if ( $menu['subtitle'] ) : ?>
                            <span class="mt-2 relative comp-heading-h4 font-semibold z-10 inline-block before:block before:-inset-0.5 before:-skew-y-3 before:absolute before:w-full before:bg-tertiary before:h-full before:-z-10">
                                (<?php echo $menu['subtitle']; ?>)
                            </span>
                        <?php endif ?>
                    </div>
                    
                    <ul class="space-y-4 lg:space-y-8">
                        
                        <?php foreach ($menu['dishes'] as $dish) : ?>
                            <li class="space-y-1.5">
                                <div>
                                    <div class="flex flex-col justify-between gap-y-1 md:gap-y-0 md:items-center md:flex-row comp-heading-h4">
                                        <h4 class="font-semibold">
                                            <?php echo $dish['t']; ?>
                                        </h4>
                                        
                                        <span class="font-bold text-primary">
                                            <?php echo $dish['price']; ?> AED
                                        </span>
                                    </div>
                                    
                                    <?php if ( $dish['st'] ) : ?>
                                    <span class="relative z-10 inline-block text-xs before:block before:-inset-0.5 before:-skew-y-3 before:absolute before:w-full before:bg-tertiary before:h-full before:-z-10">
                                        (<?php echo $dish['st']; ?>)
                                    </span>
                                    <?php endif ?>
                                </div>
                                
                                <p>
                                    <?php echo $dish['d']; ?>
                                </p>
                            </li>
                        <?php endforeach ?>
                        
                    </ul>
                </div>
                <?php endforeach ?>
            </div>
        </div>
    </section>

<?php

get_footer();