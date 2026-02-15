<?php $uri = get_template_directory_uri(); ?>

<aside class="sidebar dark:bg-background-8 scroll-bar fixed top-0 right-0 z-[9999] h-screen w-full translate-x-full rounded-l-3xl bg-white transition-all duration-300 sm:w-1/2 xl:hidden">
    <div class="space-y-4 p-5 sm:p-8 lg:p-9">
        <div class="flex items-center justify-between">
            <a href="<?php echo esc_url(home_url('/')); ?>">
                <span class="sr-only">Home</span>
                <figure class="max-w-[100px]">
                    <img src="<?php echo $uri; ?>/assets/images/shared/logo.svg" alt="Logo" class="block w-full dark:hidden" />
                    <img src="<?php echo $uri; ?>/assets/images/shared/logo-dark.svg" alt="Logo" class="hidden w-full dark:block" />
                </figure>
            </a>
            <button class="nav-hamburger-close bg-background-4 dark:bg-background-9 relative flex size-10 cursor-pointer flex-col items-center justify-center gap-1.5 rounded-full">
                <span class="sr-only">Close Menu</span>
                <span class="bg-stroke-9/60 dark:bg-stroke-1 absolute block h-0.5 w-4 rotate-45"></span>
                <span class="bg-stroke-9/60 dark:bg-stroke-1 absolute block h-0.5 w-4 -rotate-45"></span>
            </button>
        </div>

        <div class="scroll-bar mt-6 h-[85vh] w-full overflow-x-hidden overflow-y-auto pb-10">
            <p class="text-secondary dark:text-accent text-tagline-1 before:bg-stroke-4 dark:before:bg-stroke-6 relative mb-2 block font-normal before:absolute before:top-1/2 before:-right-16 before:h-px before:w-full before:-translate-y-1/2 before:content-['']">
                Menu
            </p>

            <?php
            wp_nav_menu(array(
                'theme_location' => 'mobile-menu', // You can use the same location or a different one
                'container'      => false,
                'menu_class'     => 'space-y-2',
                'fallback_cb'    => false,
                'walker'         => new Biax_Tailwind_Walker(),
            ));
            ?>
        </div>
    </div>
</aside>