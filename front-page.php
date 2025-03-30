<?php

get_header();

$menus = static_dataset_menus();

$healthy_facts = static_dataset_healthy_facts();

?>


    <!-- unsplash -->
    <div style="background-image: url(<?php echo get_template_directory_uri() . '/images/hero-banner-home-1920x1280.jpg'; ?>)"; class="relative w-full h-[400px] lg:h-[700px] -z-20 bg-center bg-cover bg-no-repeat before:absolute before:top-0 before:left-0 before:bg-neutral-800/60 before:w-full before:h-full before:-z-10">
        <div class="absolute left-0 w-full overflow-hidden rotate-180 -bottom-[0.05rem] lg:-bottom-1">
            <svg class="fill-neutral-800" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1000 100" preserveAspectRatio="none"><path d="M0,6V0h1000v100L0,6z"></path></svg>	
        </div>
    </div>
    
    <main id="primary" class="site-main bg-neutral-800">
        <section class="mb-12 xl:-mt-16">
            <div class="grid grid-cols-12">
                <div class="col-span-12 lg:col-span-6">
                    <div class="px-6 py-8 text-center md:px-24 lg:px-12 xl:px-28">                    
                        <div>
                            <h2 class="text-4xl leading-snug uppercase md:text-5xl md:leading-snug lg:text-6xl lg:leading-snug comp-text-white comp-heading-font">
                                Welcome
                            </h2>
                        </div>
                        
                        <div>
                            <h2 class="text-4xl leading-snug uppercase md:text-5xl md:leading-snug lg:text-6xl lg:leading-snug comp-text-white comp-heading-font ">
                                To
                            </h2>
                        </div>
                        
                        <div>
                            <h2 class="text-4xl leading-snug uppercase md:text-5xl md:leading-snug lg:text-6xl lg:leading-snug comp-text-white comp-heading-font text-primary">
                                Duzo
                            </h2>
                        </div>
                        
                        <div class="my-12 mt-8 lg:mt-12 lg:my-14">
                            <p class="leading-7 comp-text-white">
                                Welcome to Duzo Restaurant, where gastronomy meets artistry and every meal is a symphony of flavors. Nestled in the heart of Dubai, our restaurant is a sanctuary for food enthusiasts and culinary adventurers alike.
                                <br><br>
                                At Duzo Restaurant, we believe in crafting exceptional dining experiences that tantalize the taste buds and ignite the senses. Our chefs, true culinary maestros, meticulously curate each dish, blending traditional techniques with innovative twists to present a menu that celebrates the essence of fine dining.
                            </p>
                        </div>
                        
                        <div>
                            <a href="<?php echo get_permalink(get_page_by_path('menu')->ID) ?>" class="py-2 text-lg font-medium border-t border-b comp-text-white lg:text-xl comp-heading-font border-t-primary border-b-primary">
                                Discover the Menu 
                            </a>
                        </div>
                    </div>
                </div>
                
                <div class="col-span-12 lg:col-span-6 xl:-mt-12">
                    <!-- unsplash -->
                    <div style="background-image: url(<?php echo get_template_directory_uri() . '/images/content-image-home-1-1920x2880.jpg'; ?>)"; class="w-full h-[350px] md:h-[450px] lg:h-full bg-center bg-no-repeat bg-cover"></div>
                </div>
            </div>
        </section>
        
        <section class="container py-8">
            <div class="grid grid-cols-12 gap-4 md:gap-8 lg:gap-12">
                
                <?php foreach ($healthy_facts as $fact) : ?>
                    
                    <div class="col-span-12 space-y-4 md:col-span-4">  
                        <div class="w-12 mx-auto md:w-16">
                            <img src="<?php echo get_template_directory_uri() . '/images/' . $fact['icon']; ?>)">
                        </div>
                        
                        <div>
                            <h4 class="text-center uppercase comp-heading-h4 comp-heading-font comp-text-white">
                                <?php echo $fact['title']; ?>
                            </h4>
                        </div>
                        
                        <div>
                            <p class="text-xs text-center">
                                <?php echo $fact['description']; ?>
                            </p>
                        </div>
                    </div>
                    
                <?php endforeach; ?>
            </div>
        </section>
        
        <section class="container py-8">
            <div class="mb-4 md:mb-8 md:w-10/12 lg:w-8/12">
                <h2 class="comp-heading-h2 comp-heading-font comp-text-white">
                    All dishes are beautifully prepared using the freshest ingredients using classic techniques
                </h2>
            </div>

            <div class="grid grid-cols-12 gap-4 md:gap-8 lg:gap-12">
                <div class="col-span-12 lg:col-span-6">
                    <div class="mb-4 md:mb-8 md:pr-16 lg:pr-8 lg:mb-16 md:ml-auto md:w-10/12 lg:w-full">
                        <p class="xl:leading-7 xl:text-base">
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Alias exercitationem aut ab, ullam est quos nesciunt dolor delectus natus, ipsum quibusdam aspernatur asperiores fugiat fuga autem eius quae corporis officia.
                        </p>
                    </div>

                    <div class="md:w-[384px] xl:w-[512px]">
                        <!-- unsplash -->
                        <img src="<?php echo get_template_directory_uri() . '/images/content-image-home-2-1920x2880.jpg'; ?>" />
                    </div>
                </div>
                
                <div class="col-span-12 lg:col-span-6">
                    <div class="mb-4 md:mb-8 lg:mb-16 md:w-[384px] xl:w-[512px] md:ml-auto">
                        <!-- unsplash -->
                        <img src="<?php echo get_template_directory_uri() . '/images/content-image-home-3-1920x2560.jpg'; ?>" />
                    </div>

                    <div class="md:pl-16 lg:pl-8 md:ml-auto md:w-10/12 lg:w-full">
                        <p class="xl:leading-7 xl:text-base">
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Alias exercitationem aut ab, ullam est quos nesciunt dolor delectus natus, ipsum quibusdam aspernatur asperiores fugiat fuga autem eius quae corporis officia.
                        </p>
                    </div>
                </div>
            </div>
        </section>
            
        <section class="container py-8 space-y-4 md:space-y-8">    
            <div class="grid grid-cols-12 gap-4 md:items-center md:gap-8 lg:gap-12">
                <div class="col-span-12 md:col-span-6">
                    <div class="mb-4">
                        <h2 class="comp-heading-h2 comp-heading-font comp-text-white">
                            Our <span class="text-primary">Delicious Menu</span>
                        </h2>
                    </div>

                    <div class="mb-8">
                        <p class="lg:text-base">
                            A variety of naturally healthy paleo, vegan, keto, dairy-free and gluten-free dishes, with many dishes cooked in broth or water instead of oil.					
                        </p>
                    </div>

                    <div>
                        <a href="<?php echo get_permalink(get_page_by_path('menu')->ID) ?>" class="button button-fill">
                            More Delicious Dishes
                        </a>
                    </div>
                </div>
            
                <div class="col-span-12 md:col-span-6">
                    <div class="lg:h-[350px] lg:mx-auto">
                        <!-- unsplash -->
                        <img src="<?php echo get_template_directory_uri() . '/images/content-image-home-4-1920x1158.jpg'; ?>" />
                    </div>
                </div>
            </div>	
            
            <div class="grid grid-cols-12 gap-4 md:gap-8 lg:gap-12">
                
                <?php 
                    $minimum_menus_quantity = 5;
                
                    if ( count( $menus ) >= $minimum_menus_quantity ) {
                        $menu_keys = array_rand($menus, $minimum_menus_quantity);
                        $menus = array_map(fn ($key) => $menus[$key], $menu_keys);
                    }
                
                    foreach ($menus as $menu) : 
                        
                        $minimum_dishes_quantity = 4;
                        $dishes = $menu['dishes'];
                        
                        if ( count( $dishes ) >= $minimum_dishes_quantity ) {
                            shuffle($dishes);
                            
                            $dishes_count = count($dishes);
                            $random_dish_keys = rand(1, $dishes_count - 2);							
                            $dishes = array_slice($dishes, 0, $minimum_dishes_quantity);                            
                        }
                ?>
                
                <div class="col-span-12 lg:col-span-6">
                    <div class="p-4 border border-neutral-100 md:p-8">
                        <div class="mb-4 md:mb-8">
                            <h3 class="uppercase comp-heading-h3 comp-heading-font comp-text-white">
                                <?php echo $menu['title']; ?>
                            </h3>
                            
                            <?php if ( $menu['subtitle'] ) : ?>
                                <span class="mt-2 relative comp-heading-h4 font-semibold comp-text-black z-10 inline-block before:block before:-inset-0.5 before:-skew-y-3 before:absolute before:w-full before:bg-tertiary before:h-full before:-z-10">
                                    (<?php echo $menu['subtitle']; ?>)
                                </span>
                            <?php endif ?>
                        </div>

                        <ul class="mb-8 space-y-4">
                            
                            <?php foreach ($dishes as $index => $dish) : ?>
                                
                                <li class="space-y-1.5">
                                    <div>
                                        <h4 class="font-semibold comp-heading-h4 text-primary">
                                            <?php echo $dish['t']; ?>
                                        </h4>
                                        
                                        <?php if ( $dish['st'] ) : ?>
                                        <span class="relative z-10 inline-block text-xs before:block before:-inset-0.5 before:-skew-y-3 before:absolute before:w-full before:bg-tertiary before:h-full before:-z-10 comp-text-black">
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
                        
                        <div>
                            <a href="<?php echo (get_permalink(get_page_by_path('menu')->ID) . '#' . $menu['id']) ?>" class="button button-fill">
                                More <?php echo $menu['title']; ?>
                            </a>
                        </div>
                    </div>
                </div>
                <?php endforeach; ?>
            </div>
        </section>
    </main>

<?php

get_footer();
