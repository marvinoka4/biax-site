<?php
$uri = get_template_directory_uri();
?>

<header>
    <div
        class="header-one lp:!max-w-[1290px] border-stroke-6 dark:bg-background-9 fixed top-5 left-1/2 z-50 mx-auto flex w-full max-w-[350px] -translate-x-1/2 items-center justify-between rounded-full bg-white px-2.5 py-2.5 opacity-0 min-[425px]:max-w-[375px] min-[500px]:max-w-[450px] sm:max-w-[540px] md:max-w-[720px] lg:max-w-[960px] xl:max-w-[1140px] xl:py-0 dark:border"
        data-ns-animate
        data-direction="up"
        data-offset="100">
        <div>
            <a href="<?php echo esc_url(home_url('/')); ?>">
                <span class="sr-only">Home</span>
                <figure class="hidden lg:block lg:max-w-[175px]" style="margin: 0;">
                    <img src="<?php echo $uri; ?>/assets/images/shared/main-logo.svg" alt="BinaryAxis" class="dark:invert w-full h-auto" />
                </figure>
                <figure class="block max-w-[100px] lg:hidden" style="margin: 0;">
                    <img src="<?php echo $uri; ?>/assets/images/shared/logo.svg" alt="BinaryAxis" class="block w-full dark:hidden" />
                    <img src="<?php echo $uri; ?>/assets/images/shared/logo-dark.svg" alt="BinaryAxis" class="hidden w-full dark:block" />
                </figure>
            </a>
        </div>

        <nav class="hidden items-center xl:flex">
            <?php
            wp_nav_menu(array(
                'theme_location' => 'primary-menu',
                'container'      => false,
                'menu_class'     => 'flex items-center',
                'fallback_cb'    => false,
                'walker'         => new Biax_Tailwind_Walker(),
            ));
            ?>
        </nav>

        <div class="hidden items-center justify-center xl:flex">
            <a href="/#contact-us" class="btn btn-md btn-secondary hover:btn-white dark:hover:btn-white-dark dark:btn-accent">
                <span>Get in Touch</span>
            </a>
        </div>

        <div class="block xl:hidden">
            <button class="nav-hamburger bg-background-4 dark:bg-background-6 flex size-12 cursor-pointer flex-col items-center justify-center gap-[5px] rounded-full">
                <span class="sr-only">Menu</span>
                <span class="bg-stroke-9 dark:bg-stroke-1 block h-0.5 w-6"></span>
                <span class="bg-stroke-9 dark:bg-stroke-1 block h-0.5 w-6"></span>
                <span class="bg-stroke-9 dark:bg-stroke-1 block h-0.5 w-6"></span>
            </button>
        </div>
    </div>

    <aside class="sidebar dark:bg-background-8 scroll-bar fixed top-0 right-0 z-[9999] h-screen w-full translate-x-full rounded-l-3xl bg-white transition-all duration-300 sm:w-1/2 xl:hidden">
        <div class="space-y-4 p-5 sm:p-8 lg:p-9">
            <div class="flex items-center justify-between">
                <a href="<?php echo esc_url(home_url('/')); ?>">
                    <span class="sr-only">Home</span>
                    <figure class="max-w-[100px]">
                        <img src="<?php echo $uri; ?>/assets/images/shared/logo.svg" alt="BinaryAxis" class="block w-full dark:hidden" />
                        <img src="<?php echo $uri; ?>/assets/images/shared/logo-dark.svg" alt="BinaryAxis" class="hidden w-full dark:block" />
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
                    'theme_location' => 'mobile-menu',
                    'container'      => false,
                    'menu_class'     => 'space-y-2',
                    'fallback_cb'    => false,
                    'walker'         => new Biax_Tailwind_Walker(),
                ));
                ?>
            </div>
        </div>
    </aside>
</header>