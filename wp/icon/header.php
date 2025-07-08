<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package icon
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
    <!-- Google Tag Manager -->
    <script>(function (w, d, s, l, i) {
            w[l] = w[l] || [];
            w[l].push({
                'gtm.start':
                    new Date().getTime(), event: 'gtm.js'
            });
            var f = d.getElementsByTagName(s)[0],
                j = d.createElement(s), dl = l != 'dataLayer' ? '&l=' + l : '';
            j.async = true;
            j.src =
                'https://www.googletagmanager.com/gtm.js?id=' + i + dl;
            f.parentNode.insertBefore(j, f);
        })(window, document, 'script', 'dataLayer', 'GTM-TGFQDTZX');</script>
    <!-- End Google Tag Manager -->
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://fonts.googleapis.com/css?family=Manrope:300,regular,500,600,700&display=swap&_v=20250703002008"
          rel="stylesheet"/>

    <?php wp_head(); ?>
</head>

<body <?php body_class('body text-black font-normal text-m bg-bg'); ?>>

<!-- Google Tag Manager (noscript) -->
<noscript>
    <iframe src="https://www.googletagmanager.com/ns.html?id=GTM-TGFQDTZX"
            height="0" width="0" style="display:none;visibility:hidden"></iframe>
</noscript>
<!-- End Google Tag Manager (noscript) -->
<!-- Google tag (gtag.js) -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-ZTD1SGBST1"></script>
<script>
    window.dataLayer = window.dataLayer || [];

    function gtag() {
        dataLayer.push(arguments);
    }

    gtag('js', new Date());

    gtag('config', 'G-ZTD1SGBST1');
</script>
<?php wp_body_open(); ?>
<div class="page-container">
    <?php if (is_front_page() || is_page_template('page-contacts.php') || is_page_template('page-thanks.php')): ?>
        <header class="h-[var(--header-height)] w-full text-white z-50 !fixed transition-transform duration-500 ease-linear">
            <div class="container flex items-center mt-26">
                <a href="<?= home_url('/'); ?>" class="image h-[.43rem] sm:h-[.64rem] w-[1.02rem] sm:w-[1.52rem]">
                    <img class="object-contain" src="<?= get_img_link('logo.webp'); ?>" alt="logo"/>
                </a>
                <div class="menu ml-auto bg-khaki lg:bg-transparent absolute top-0 right-[-3.6rem] lg:static px-16 py-32 sm:py-50 w-[3.6rem] h-[100vh] lg:h-auto lg:w-auto lg:p-0 lg:mr-50 transition-transform duration-300 ease-linear">
                    <a href="<?= home_url('/'); ?>" class="image h-[.43rem] w-[1.02rem] sm:hidden mb-50 block mx-auto">
                        <img class="object-contain" src="<?= get_img_link('logo.webp'); ?>" alt="logo"/>
                    </a>

                    <ul class="flex uppercase lg:lowercase flex-col lg:flex-row items-center gap-32 lg:gap-36 mb-[1.2rem] lg:mb-0">
                        <?php if (is_front_page()): ?>
                            <li class="border-b border-transparent border-solid lg:hover:border-white transition-colors !duration-300 ease-linear">
                                <a class="scroll-to uppercase" href="#objects">об’єкти</a>
                            </li>
                            <li class="border-b border-transparent border-solid lg:hover:border-white transition-colors !duration-300 ease-linear">
                                <a class="scroll-to uppercase" href="#about-us">про нас</a>
                            </li>
                            <li class="border-b border-transparent border-solid lg:hover:border-white transition-colors !duration-300 ease-linear">
                                <a class="scroll-to uppercase" href="#why-us">чому ми</a>
                            </li>
                            <li class="border-b border-transparent border-solid lg:hover:border-white transition-colors !duration-300 ease-linear">
                                <a class="scroll-to uppercase" href="#reviews">про нас говорять клієнти </a>
                            </li>
                            <li class="border-b border-transparent border-solid lg:hover:border-white transition-colors !duration-300 ease-linear">
                                <a href="/owners/" class="uppercase">власникам </a>
                            </li>
                        <?php endif; ?>
                        <li class="border-b border-transparent border-solid lg:hover:border-white transition-colors !duration-300 ease-linear">
                            <a href="/contacts/" class="uppercase">контакти</a>
                        </li>
                    </ul>


                    <button data-target="flat"
                            class="uppercase w-full p-16 border border-solid border-white bg-transparent lg:hover:bg-white lg:hover:text-khaki transition-colors duration-300 ease-linear lg:hidden">
                        залишити заявку
                    </button>
                </div>
                <a class="uppercase sm:py-12 sm:px-24 sm:border border-solid border-white bg-transparent lg:hover:bg-white lg:hover:text-khaki transition-colors duration-300 ease-linear ml-auto lg:ml-0 mr-10 lg:mr-0"
                   href="tel:<?= get_field('phone', 'option'); ?>">
                    <span class="hidden sm:block">Зв’язатись</span>
                    <svg class="size-40 sm:hidden fill-transparent stroke-white">
                        <use xlink:href="#phone-header"></use>
                    </svg>
                </a>
                <button class="burger lg:!hidden"><span></span></button>
            </div>
        </header>
    <?php else: ?>
        <header class="!max-h-[var(--header-height)] w-full z-50 !fixed transition-transform duration-500 ease-linear header-black">
            <div class="container flex items-center mt-26">
                <a href="<?= home_url('/'); ?>" class="h-[.43rem] sm:h-[.64rem] w-[1.05rem] sm:w-[1.55rem]">
                    <img class="object-contain" src="<?= get_img_link('logo-b.webp'); ?>" alt="logo"/>
                </a>
                <div class="menu ml-auto bg-khaki lg:bg-transparent absolute top-0 right-[-3.6rem] lg:static px-16 py-32 sm:py-50 w-[3.6rem] h-[100vh] lg:h-auto lg:w-auto lg:p-0 lg:mr-50 transition-transform duration-300 ease-linear">
                    <a href="<?= home_url('/'); ?>" class="image h-[.43rem] w-[1.02rem] sm:hidden mb-50 block mx-auto">
                        <img class="object-contain" src="<?= get_img_link('logo.webp'); ?>" alt="logo"/>
                    </a>
                    <ul class="flex uppercase lg:lowercase flex-col lg:flex-row items-center gap-32 lg:gap-36 mb-[1.2rem] lg:mb-0 text-white lg:text-black">
                        <?php if (is_front_page()): ?>
                            <li class="border-b border-transparent border-solid lg:hover:border-black transition-colors !duration-300 ease-linear">
                                <a href="#objects" class="scroll-to uppercase">об’єкти</a>
                            </li>
                            <li class="border-b border-transparent border-solid lg:hover:border-black transition-colors !duration-300 ease-linear">
                                <a href="#about-us" class="scroll-to uppercase">про нас</a>
                            </li>
                            <li class="border-b border-transparent border-solid lg:hover:border-black transition-colors !duration-300 ease-linear">
                                <a href="#why-us" class="scroll-to uppercase">чому ми</a>
                            </li>
                            <li class="border-b border-transparent border-solid lg:hover:border-black transition-colors !duration-300 ease-linear">
                                <a href="#reviews" class="scroll-to uppercase">про нас говорять клієнти </a>
                            </li>
                            <li class="border-b border-transparent border-solid lg:hover:border-black transition-colors !duration-300 ease-linear">
                                <a href="#owners" class="scroll-to uppercase">власникам </a>
                            </li>
                        <?php endif; ?>
                        <li class="border-b border-transparent border-solid lg:hover:border-black transition-colors !duration-300 ease-linear">
                            <a href="/contacts/" class="uppercase">контакти</a>
                        </li>
                    </ul>
                    <button data-target="flat"
                            class="uppercase w-full p-16 border border-solid border-white bg-transparent lg:hover:bg-white lg:hover:text-khaki transition-colors duration-300 ease-linear lg:hidden text-white">
                        залишити заявку
                    </button>
                </div>
                <a class="uppercase sm:py-12 sm:px-24 sm:border border-solid border-black bg-transparent lg:hover:bg-khaki lg:hover:border-khaki lg:hover:text-white transition-colors duration-300 ease-linear ml-auto lg:ml-0 mr-10 lg:mr-0"
                   href="tel:<?= get_field('phone', 'option'); ?>">
                    <span class="hidden sm:block">Зв’язатись</span>
                    <svg class="size-40 sm:hidden fill-transparent stroke-black">
                        <use xlink:href="#phone-header"></use>
                    </svg>
                </a>
                <button class="burger lg:!hidden"><span></span></button>
            </div>
        </header>
    <?php endif; ?>


