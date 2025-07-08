<?php /* Template Name:  Сторінка контактів */
get_header();
?>
<main>
    <section class="bg-contact h-[100vh] py-40 sm:py-[.67rem] text-white flex items-end">
        <div class="container relative">
            <h1 class="h2 font-medium uppercase mb-24 lg:mb-40">
                Наші <span class="font-light">контакти</span>
            </h1>

            <div class="max-w-[4.5rem] p-24 bg-white" data-aos="fade-up ">
                <a href="<?= get_field('google', 'option'); ?>"
                   target="_blank"
                   class="flex items-center mb-16 border-b border-transparent border-solid lg:hover:border-black transition-colors !duration-300 ease-linear w-max pb-2">
                    <svg class="size-24 fill-black mr-8">
                        <use xlink:href="#location-icon"></use>
                    </svg>
                    <span class="text-black"><?= get_field('address', 'option'); ?></span></a>
                <a href="tel:<?= get_field('phone', 'option'); ?>"
                   class="flex items-center mb-16 border-b border-transparent border-solid lg:hover:border-black transition-colors !duration-300 ease-linear w-max pb-2">
                    <svg class="size-24 fill-black mr-8">
                        <use xlink:href="#phone-fill"></use>
                    </svg>
                    <span class="text-black"><?= get_field('phone', 'option'); ?></span></a>
                <a href="mailto:<?= get_field('email', 'option'); ?>m"
                   class="flex items-center border-b border-transparent border-solid lg:hover:border-black transition-colors !duration-300 ease-linear w-max pb-2 mb-32">
                    <svg class="size-24 fill-black mr-8">
                        <use xlink:href="#mail-icon"></use>
                    </svg>
                    <span class="text-black"><?= get_field('email', 'option'); ?></span></a>
                <button data-target="flat"
                        class="relative text-white py-14 uppercase px-24 hover:before:bg-transparent bg-khaki before:z-10 before:position-0 btn-gradient before:bg-khaki before:transition-colors before:duration-300 before:ease-linear w-full">
							<span class="z-10 relative">залишити заявку
								<span class="hidden sm:inline">на консультацію</span>
							</span>
                </button>
            </div>
        </div>
    </section>
</main>

<?php
get_footer();
?>
