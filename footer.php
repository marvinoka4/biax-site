<?php

/**
 * Footer template for Helium-Biax Theme
 */

if (!defined('ABSPATH')) {
    exit;
}

$uri = get_template_directory_uri();
?>

<!-- ========================= Footer ===========================-->

<footer class="bg-secondary dark:bg-background-8 {=$class} relative overflow-hidden">
    <figure
        data-ns-animate
        data-delay="0.4"
        data-duration="0.8"
        data-direction="left"
        data-offset="400"
        class="pointer-events-none absolute bottom-[-33%] left-[-83%] size-[728px] select-none min-[2559px]:!left-[-16%] md:bottom-[-60%] md:left-[-52%] md:size-[870px] lg:left-[-38%] xl:bottom-[-77%] xl:left-[-30%] 2xl:left-[-22%]">
        <img
            class="size-full object-bottom"
            src="<?php echo $uri; ?>/assets/images/ns-img-494.png"
            alt="Decorative gradient background" />
    </figure>

    <div class="main-container px-5">
        <div class="grid grid-cols-12 justify-between gap-x-0 gap-y-16 pt-16 pb-12 xl:pt-[90px]">
            <div class="col-span-12 xl:col-span-4">
                <div data-ns-animate data-delay="0.3" class="max-w-[306px]">
                    <figure class="mb-6">
                        <img src="<?php echo $uri; ?>/assets/images/shared/dark-logo.svg" alt="<?php bloginfo('name'); ?> Logo" />
                    </figure>
                    <div class="flex items-center gap-3">
                        <a href="mailto:hello@binaryaxis.com" class="footer-social-link">
                            <span class="sr-only">Email</span>
                            <img class="size-6" src="<?php echo $uri; ?>/assets/images/icons/mail-white.svg" alt="Email" />
                        </a>
                        <div class="bg-stroke-1/20 h-6 w-px"></div>
                        <a href="#" class="footer-social-link">
                            <span class="sr-only">LinkedIn</span>
                            <img class="size-6" src="<?php echo $uri; ?>/assets/images/icons/linkedin.svg" alt="LinkedIn" />
                        </a>
                        <div class="bg-stroke-1/20 h-6 w-px"></div>
                        <a href="#" class="footer-social-link">
                            <span class="sr-only">Whatsapp</span>
                            <img class="size-6" src="<?php echo $uri; ?>/assets/images/icons/whatsapp-white.svg" alt="Whatsapp" />
                        </a>
                    </div>
                </div>
            </div>

            <div class="col-span-12 grid grid-cols-12 gap-x-0 gap-y-8 xl:col-span-8">
                <div class="col-span-12 md:col-span-6">
                    <div data-ns-animate data-delay="0.4" class="space-y-8">
                        <p class="sm:text-heading-6 text-tagline-1 text-primary-50 font-normal">Company</p>
                        <?php
                        wp_nav_menu(array(
                            'theme_location' => 'footer-company-menu',
                            'container'      => false,
                            'menu_class'     => 'space-y-3 sm:space-y-5',
                            'fallback_cb'    => false,
                            'walker'         => new Biax_Tailwind_Walker(),
                        ));
                        ?>
                    </div>
                </div>

                <div class="col-span-12 md:col-span-6">
                    <div data-ns-animate data-delay="0.6" class="space-y-8">
                        <p class="sm:text-heading-6 text-tagline-1 text-primary-50 font-normal">Policies</p>
                        <?php
                        wp_nav_menu(array(
                            'theme_location' => 'footer-policies-menu',
                            'container'      => false,
                            'menu_class'     => 'space-y-3 sm:space-y-5',
                            'fallback_cb'    => false,
                            'walker'         => new Biax_Tailwind_Walker(),
                        ));
                        ?>
                    </div>
                </div>
            </div>
        </div>

        <div class="relative pt-[26px] pb-[100px] text-center">
            <div class="footer-divider bg-accent/10 dark:bg-stroke-4/10 absolute top-0 right-0 left-0 mx-auto h-px w-0 origin-center"></div>
            <p data-ns-animate data-delay="0.7" data-offset="10" data-start="top 105%" class="text-tagline-1 text-primary-50 font-normal">
                Copyright &copy; <?php echo date('Y'); ?> - <a href="https://marvinoka4.com/" target="_blank" class="footer-link" style="display: initial;"> BinaryAxis </a>
            </p>
        </div>
    </div>
</footer>

<?php wp_footer(); ?>
</body>

</html>