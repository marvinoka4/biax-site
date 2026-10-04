<!-- ========================= Support Section ===========================-->
<section class="pt-[100px] pb-[100px] md:pb-[200px]" id="contact-us">
    <div class="main-container">
        <div class="grid grid-cols-12 gap-y-12 lg:gap-x-10 lg:gap-y-0 xl:gap-x-[100px]">
            <div class="col-span-12 lg:col-span-6">
                <div class="mb-[70px] space-y-5 text-center lg:text-left">
                    <div class="space-y-3">
                        <h2 data-ns-animate data-delay="0.2">Get in touch</h2>
                        <p
                            data-ns-animate
                            data-delay="0.3"
                            class="mx-auto max-w-[550px] text-center lg:mx-0 lg:text-left">
                            Whether you have a specific initiative in mind or want to talk through where technology could make a difference in your organisation, send us a message and we'll get back to you.
                        </p>
                    </div>
                </div>
                <figure
                    data-ns-animate
                    data-delay="0.4"
                    class="w-full overflow-hidden rounded-[20px] lg:max-w-[595px]">
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/ns-img-402.jpg" class="size-full object-cover" alt="support-contact" />
                </figure>
            </div>
            <div class="col-span-12 lg:col-span-6">
                <div data-ns-animate
                    data-delay="0.5"
                    class="dark:bg-background-8 rounded-[20px] bg-white p-6 lg:p-[42px]">
                    <?php if (function_exists('gravity_form')) : ?>
                        <div class="biax-gform">
                            <?php gravity_form(1, false, false, false, null, true); ?>
                        </div>
                    <?php endif; ?>

                </div>
            </div>
        </div>
    </div>
</section>