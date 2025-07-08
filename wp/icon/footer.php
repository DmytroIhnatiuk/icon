<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package icon
 */

?>
<footer class="pt-40 pb-[1.6rem] sm:py-[.8rem] bg-black text-white">
    <div class="lg:container">
        <?php if (!is_page_template('page-thanks.php')): ?>
            <div
                    class="flex flex-col lg:flex-row lg:gap-40 gap-32 pb-40 relative before:w-wull before:h-1 before:bg-white before:right-[var(--container-gap)] before:left-[var(--container-gap)] lg:before:right-0 lg:before:left-0 before:bottom-0 before:absolute mb-40 sm:mb-[.6rem]"
            >
                <div class="max-w-[7.7rem] px-[var(--container-gap)] lg:p-0">
                    <h2 class="h2 uppercase font-semibold mb-24 sm:mb-36">
                        Маєте питання? залиште свої данні і
                        <span class="font-light">отримайте Безкоштовну консультацію</span>
                        з експертом
                    </h2>
                    <form
                            data-form="footer"
                            class="form flex flex-wrap sm:flex-nowrap justify-between mx-auto gap-x-8 gap-y-24"
                    >
                        <div class="w-full form-item lg:w-[2.5rem]">
                            <label>
                                <input
                                        type="text"
                                        name="name"
                                        id="name"
                                        placeholder="Ім'я"
                                        class="h-[.54rem] w-full border border-solid bg-transparent p-12 flex items-center"
                                />
                            </label>
                            <div class="form-item__message text-red-400"></div>
                        </div>
                        <div class="w-full form-item lg:w-[2.5rem]">
                            <label> <input
                                        type="text"
                                        name="phone"
                                        id="phone"
                                        placeholder="Телефон"
                                        class="h-[.54rem] w-full border border-solid bg-transparent p-12 flex items-center"
                                /></label>

                            <div class="form-item__message"></div>
                        </div>
                        <button
                                type="submit"
                                class="h-[0.54rem] uppercase px-24 w-full sm:w-auto lg:w-full lg:max-w-[2.5rem] relative hover:before:bg-transparent bg-khaki before:z-10 before:position-0 btn-gradient before:bg-khaki before:transition-colors before:duration-300 before:ease-linear"
                        >
                            <span class="z-10 relative">Відправити</span>
                        </button>
                    </form>
                </div>
                <div
                        class="image w-full h-[2rem] sm:h-[3.4rem] lg:h-[2.8rem] ml-[var(--container-gap)] lg:m-0 lg:translate-x-[var(--container-gap)]"
                >
                    <img
                            class="object-cover"
                            src="<?= get_img_link('footer-image.webp'); ?>"
                            alt="footer-image"
                    />
                </div>
            </div>
        <?php endif; ?>

        <div class="grid px-[var(--container-gap)] lg:px-0 lg:grid-cols-2 gap-24">
            <a
                    href="<?= home_url('/'); ?>"
                    class="image w-[1.85rem] h-[.78rem] sm:w-[2.2rem] sm:h-[.94rem] mx-auto lg:mx-0 mb-40"
            >
                <img src="<?= get_img_link('logo.webp'); ?>" alt="logo"/>
            </a>
            <div class="sm:flex justify-between">
                <ul
                        class="flex items-center sm:items-start flex-col gap-16 text-m sm:text-s mb-50 sm:mb-0"
                >
                    <li
                            class="border-b border-transparent border-solid lg:hover:border-white transition-colors !duration-300 ease-linear w-max"
                    >
                        <a href="<?= home_url('/#objects'); ?>">Oб’єкти</a>
                    </li>
                    <li
                            class="border-b border-transparent border-solid lg:hover:border-white transition-colors !duration-300 ease-linear w-max"
                    >
                        <a href="<?= home_url('/#about-us'); ?>">Про нас</a>
                    </li>
                    <li
                            class="border-b border-transparent border-solid lg:hover:border-white transition-colors !duration-300 ease-linear w-max"
                    >
                        <a href="<?= home_url('/#why-us'); ?>">Чому ми</a>
                    </li>
                    <li
                            class="border-b border-transparent border-solid lg:hover:border-white transition-colors !duration-300 ease-linear w-max"
                    >
                        <a href="<?= home_url('/#reviews'); ?>">Про нас говорять клієнти </a>
                    </li>
                    <li
                            class="border-b border-transparent border-solid lg:hover:border-white transition-colors !duration-300 ease-linear w-max"
                    >
                        <a href="/owners/">Власникам </a>
                    </li>
                    <li
                            class="border-b border-transparent border-solid lg:hover:border-white transition-colors !duration-300 ease-linear w-max"
                    >
                        <a href="/contacts/">Контакти</a>
                    </li>
                </ul>
                <div class="min-w-[2.5rem]">
                    <div class="uppercase mb-26 w-max mx-auto sm:mx-0">контакти</div>
                    <a
                            href="<?= get_field('google', 'option'); ?>"
                            target="_blank"
                            class="flex items-center mb-16 border-b border-transparent border-solid lg:hover:border-white transition-colors !duration-300 ease-linear w-max pb-2 mx-auto sm:mx-0"
                    >
                        <svg class="size-24 fill-white mr-8">
                            <use xlink:href="#location-icon"></use>
                        </svg
                        >
                        <span><?= get_field('address', 'option'); ?></span></a
                    >
                    <a
                            href="tel:<?= get_field('phone', 'option'); ?>"
                            class="flex items-center mb-16 border-b border-transparent border-solid lg:hover:border-white transition-colors !duration-300 ease-linear w-max pb-2 mx-auto sm:mx-0"
                    >
                        <svg class="size-24 fill-white mr-8">
                            <use xlink:href="#phone-fill"></use>
                        </svg
                        >
                        <span><?= get_field('phone', 'option'); ?></span></a
                    >
                    <a
                            href="mailto:<?= get_field('email', 'option'); ?>"
                            class="flex items-center border-b border-transparent border-solid lg:hover:border-white transition-colors !duration-300 ease-linear w-max pb-2 mb-32 mx-auto sm:mx-0"
                    >
                        <svg class="size-24 fill-white mr-8">
                            <use xlink:href="#mail-icon"></use>
                        </svg
                        >
                        <span><?= get_field('email', 'option'); ?></span></a
                    >
                    <a
                            class="uppercase py-16 px-24 border border-solid border-white bg-transparent lg:hover:bg-white lg:hover:text-khaki transition-colors duration-300 ease-linear ml-auto lg:ml-0 mr-10 lg:mr-0 w-full flex-center font-semibold mx-auto sm:mx-0"
                            href="tel:<?= get_field('phone', 'option'); ?>"
                    >
                        Зв'язатися з нами
                    </a>
                </div>
            </div>
        </div>
    </div>
</footer>

</div>
<div data-fullscreen
     class="modal flex items-center justify-center hide flex-center modal-container  position-0 z-50 container py-32">
    <div class="modal__body relative">
        <div class="wrapper">

        </div>
        <button class=" modal__close absolute top-32 right-16 sm:right-32">
            <svg
                    class="size-32 fill-transparent stroke-black lg:hover:scale-[1.1] transition-transform "
            >
                <use xlink:href="#close-icon"></use>
            </svg>
        </button>
    </div>
</div>
<svg width="0" height="0" class="none">
    <symbol xmlns="http://www.w3.org/2000/svg" id="phone-header" viewBox="0 0 40 40">
        <path d="M10.6796 9.09815L12.0707 7.70711C12.4612 7.31658 13.0944 7.31658 13.4849 7.70711L17.8484 12.0707C18.239 12.4612 18.239 13.0944 17.8484 13.4849L16.0592 15.2741C15.8248 15.5086 15.7667 15.8667 15.9149 16.1632C17.629 19.5913 20.4087 22.371 23.8368 24.0851C24.1333 24.2333 24.4914 24.1752 24.7259 23.9408L26.5151 22.1516C26.9056 21.761 27.5388 21.761 27.9293 22.1516L32.2929 26.5151C32.6834 26.9056 32.6834 27.5388 32.2929 27.9293L30.9018 29.3204C28.7905 31.4317 25.4479 31.6693 23.0592 29.8777L18.2952 26.3048C16.5517 24.9971 15.0029 23.4483 13.6952 21.7048L10.1223 16.9408C8.33072 14.5521 8.56827 11.2095 10.6796 9.09815Z"/>
    </symbol>
    <symbol xmlns="http://www.w3.org/2000/svg" id="location-icon" viewBox="0 0 24 25">
        <path d="M11.9997 2.65967C14.2162 2.65967 16.3418 3.53451 17.9091 5.09173C19.4764 6.64895 20.3569 8.761 20.3569 10.9632C20.3569 14.472 17.8754 18.2959 12.9769 22.4758C12.7045 22.7083 12.3572 22.836 11.9981 22.8357C11.639 22.8354 11.292 22.7071 11.02 22.4741L10.696 22.1948C6.01429 18.1239 3.64258 14.3937 3.64258 10.9632C3.64258 8.761 4.52306 6.64895 6.09033 5.09173C7.6576 3.53451 9.78327 2.65967 11.9997 2.65967ZM11.9997 7.76956C11.1472 7.76956 10.3297 8.10603 9.72688 8.70497C9.12408 9.3039 8.78543 10.1162 8.78543 10.9632C8.78543 11.8103 9.12408 12.6226 9.72688 13.2215C10.3297 13.8204 11.1472 14.1569 11.9997 14.1569C12.8522 14.1569 13.6698 13.8204 14.2726 13.2215C14.8754 12.6226 15.214 11.8103 15.214 10.9632C15.214 10.1162 14.8754 9.3039 14.2726 8.70497C13.6698 8.10603 12.8522 7.76956 11.9997 7.76956Z"/>
    </symbol>
    <symbol xmlns="http://www.w3.org/2000/svg" id="phone-fill" viewBox="0 0 24 25">
        <path d="M6.67962 3.83307L7.29289 3.2198C7.68342 2.82928 8.31658 2.82928 8.70711 3.2198L11.2929 5.80559C11.6834 6.19611 11.6834 6.82928 11.2929 7.2198L9.50048 9.01221C9.2016 9.3111 9.1275 9.7677 9.31653 10.1458C10.4093 12.3313 12.1814 14.1034 14.3669 15.1962C14.745 15.3852 15.2016 15.3111 15.5005 15.0122L17.2929 13.2198C17.6834 12.8293 18.3166 12.8293 18.7071 13.2198L21.2929 15.8056C21.6834 16.1961 21.6834 16.8293 21.2929 17.2198L20.6796 17.8331C18.5683 19.9444 15.2257 20.182 12.837 18.3904L11.6286 17.4841C9.88504 16.1765 8.33622 14.6277 7.02857 12.8841L6.12226 11.6757C4.33072 9.28699 4.56827 5.94443 6.67962 3.83307Z"/>
    </symbol>
    <symbol xmlns="http://www.w3.org/2000/svg" id="mail-icon" viewBox="0 0 24 25">
        <path d="M3.01271 9.40527L11.0332 13.833C11.6348 14.1651 12.3653 14.1651 12.9668 13.833L20.9863 9.40527C21.0001 9.94939 21 10.5682 21 11.2754V13.1855C21 16.014 20.9998 17.4289 20.1211 18.3076C19.2424 19.1859 17.8281 19.1855 15 19.1855H9.00002C6.17197 19.1855 4.75763 19.1859 3.87892 18.3076C3.00024 17.4289 3.00002 16.014 3.00002 13.1855V11.2754C3.00002 10.5682 2.99898 9.94938 3.01271 9.40527ZM15 5.27539C17.8284 5.27539 19.2424 5.2757 20.1211 6.1543C20.4237 6.45688 20.6199 6.82358 20.75 7.28906C20.6705 7.30967 20.5919 7.33935 20.5166 7.38086L12 12.082L3.48342 7.38086L3.39162 7.33594C3.34496 7.31602 3.297 7.30145 3.24904 7.28906C3.37911 6.82346 3.57628 6.45694 3.87892 6.1543C4.75761 5.2757 6.17168 5.27539 9.00002 5.27539H15Z"/>
    </symbol>
    <symbol xmlns="http://www.w3.org/2000/svg" id="arrow-icon" viewBox="0 0 20 21">
        <g clip-path="url(#clip0_2049_167)">
            <path d="M15.2964 4.48339L6.0819 4.4171C5.68415 4.4171 5.37479 4.72646 5.37479 5.1242C5.37479 5.52195 5.68415 5.83131 6.0819 5.83131L13.5728 5.8976L4.18155 15.2889C3.91638 15.554 3.91638 15.996 4.18155 16.2611C4.44671 16.5263 4.91075 16.5484 5.17592 16.2832L14.6114 6.84778L14.6777 14.4271C14.6777 14.8248 14.987 15.1342 15.3848 15.1342C15.5615 15.1342 15.7383 15.0458 15.8709 14.9132C16.0035 14.7806 16.0919 14.6039 16.0698 14.405L16.0035 5.1905C16.0035 4.79275 15.6941 4.48339 15.2964 4.48339Z"/>
        </g>
    </symbol>
    <symbol xmlns="http://www.w3.org/2000/svg" id="star-icon" viewBox="0 0 20 19">
        <path d="M9.52441 1.08203C9.67409 0.621375 10.3259 0.621378 10.4756 1.08203L11.9941 5.75488C12.195 6.37292 12.7711 6.79199 13.4209 6.79199H18.335C18.8193 6.79199 19.0207 7.41158 18.6289 7.69629L14.6533 10.585C14.1276 10.9669 13.9077 11.6437 14.1084 12.2617L15.627 16.9355C15.7766 17.3961 15.2493 17.7795 14.8574 17.4951L10.8818 14.6064C10.3561 14.2245 9.6439 14.2245 9.11816 14.6064L5.14258 17.4951C4.75074 17.7795 4.2234 17.3961 4.37305 16.9355L5.8916 12.2617C6.09235 11.6437 5.87238 10.9669 5.34668 10.585L1.37109 7.69629C0.979264 7.41158 1.18069 6.79199 1.66504 6.79199H6.5791C7.22894 6.79199 7.80505 6.37292 8.00586 5.75488L9.52441 1.08203Z"/>
    </symbol>
    <symbol xmlns="http://www.w3.org/2000/svg" id="shevron-icon" viewBox="0 0 40 40">
        <path d="M25 10L15 20L25 30" stroke-width="2"/>
    </symbol>
    <symbol xmlns="http://www.w3.org/2000/svg" id="close-icon" viewBox="0 0 32 32">
        <path d="M24 8L8 24" stroke-width="2" stroke-linecap="square" stroke-linejoin="round"/>
        <path d="M8 8L24 24" stroke-width="2" stroke-linecap="square" stroke-linejoin="round"/>
    </symbol>
</svg>
<?= get_template_part('template-parts/blocks/modal'); ?>
<?php wp_footer(); ?>

</body>
</html>
