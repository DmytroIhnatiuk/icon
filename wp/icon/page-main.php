<?php /* Template Name: Головна сторінка */
get_header();
?>
<main>
    <section class="bg-promo h-[100vh] py-40 sm:py-[.67rem] text-white flex items-end">
        <div class="container relative">
            <div class="uppercase lg:ml-[2.74rem] mb-16">
                Продаж · Оренда · Підбір · Супровід
            </div>
            <h1 class="h1 font-medium uppercase mb-32 lg:mb-0">
                <span>ICON – <span class="font-light">Преміальна</span> </span>
                <span class="lg:ml-[2.7rem] block">
							<span class="font-light">нерухомість</span> Києва та
							області</span>
            </h1>

            <button data-target="flat"
                    class="lg:absolute relative lg:bottom-0 lg:right-[var(--container-gap)] h-[0.54rem] uppercase px-24 w-full lg:w-full sm:max-w-[3rem] hover:before:bg-transparent bg-khaki before:z-10 before:position-0 btn-gradient before:bg-khaki before:transition-colors before:duration-300 before:ease-linear">
                <span class="z-10 relative">залишити заявку</span>
            </button>
        </div>
    </section>
    <section class="pt-50 pb-100" id="objects">
        <div class="container">
            <div class="tabs-container mb-100 sm:mb-[1.3rem]" data-aos="fade-up">
                <div class="flex gap-24 mb-16 sm:mb-24 uppercase">
                    <div class="px-24 py-12 w-1/2 sm:w-auto cursor-pointer hover:border-black border-b border-transparent border-solid text-center transition-colors duration-300 ease-linear tab-button">
                        оренда
                    </div>
                    <div class="px-24 py-12 w-1/2 sm:w-auto cursor-pointer hover:border-black border-b border-transparent border-solid text-center transition-colors duration-300 ease-linear tab-button">
                        продаж
                    </div>
                </div>
                <div class="relative">
                    <div class="grid gap-16 sm:gap-24 lg:grid-cols-4 grid-cols-2 tab-content bg-bg opacity-0 -z-10 transition-opacity duration-300 ease-linear">
                        <button data-target="flat" data-type="Оренда"
                           class="image relative w-wull h-[2.14rem] sm:h-[4rem] px-8 py-12 sm:p-24 text-white lg:hover:scale-[1.01] transition-transform duration-300 ease-linear flex items-end">
                            <img class="z-0" src="<?= get_img_link('flats.webp'); ?>" alt="квартири"/>
                            <span class="uppercase relative h3 flex justify-between items-center z-20 border-b border-solid w-full pb-8">
                                <span>квартири</span>
                                <svg class="size-20 fill-white">
                                    <use xlink:href="#arrow-icon"></use>
                                </svg>
                            </span>
                        </button>
                        <button data-target="house" data-type="Оренда"
                           class="image relative w-wull h-[2.14rem] sm:h-[4rem] px-8 py-12 sm:p-24 text-white lg:hover:scale-[1.01] transition-transform duration-300 ease-linear flex items-end">
                            <img class="z-0" src="<?= get_img_link('houses.webp'); ?>" alt="Будинки"/>
                            <span class="uppercase relative h3 flex justify-between items-center z-20 border-b border-solid w-full pb-8">
                                <span>Будинки</span>
                                <svg class="size-20 fill-white">
                                    <use xlink:href="#arrow-icon"></use>
                                </svg>
                            </span>
                        </button>
                        <button data-target="comercial" data-type="Оренда"
                           class="image relative w-wull h-[2.14rem] sm:h-[4rem] px-8 py-12 sm:p-24 text-white lg:hover:scale-[1.01] transition-transform duration-300 ease-linear flex items-end">
                            <img class="z-0" src="<?= get_img_link('comercial_items.webp'); ?>" alt="комерція"/>
                            <span class="uppercase relative h3 flex justify-between items-center z-20 border-b border-solid w-full pb-8">
                                <span>комерція</span>
                                <svg class="size-20 fill-white">
                                    <use xlink:href="#arrow-icon"></use>
                                </svg>
                            </span>
                        </button>
                        <button data-target="land" data-type="Оренда"
                           class="image relative w-wull h-[2.14rem] sm:h-[4rem] px-8 py-12 sm:p-24 text-white lg:hover:scale-[1.01] transition-transform duration-300 ease-linear flex items-end">
                            <img class="z-0" src="<?= get_img_link('lands.webp'); ?>" alt="земельні ділянки"/>
                            <span class="uppercase relative h3 flex justify-between items-center z-20 border-b border-solid w-full pb-8">
                                <span>земельні ділянки</span>
                                <svg class="size-20 fill-white">
                                    <use xlink:href="#arrow-icon"></use>
                                </svg>
                            </span>
                        </button>
                    </div>
                    <div class="grid gap-16 sm:gap-24 lg:grid-cols-4 grid-cols-2 tab-content bg-bg absolute opacity-0 top-0 left-0 right-0 -z-10 transition-opacity duration-300 ease-linear">
                        <button data-target="flat" data-type="Продаж"
                           class="image relative w-wull h-[2.14rem] sm:h-[4rem] px-8 py-12 sm:p-24 text-white lg:hover:scale-[1.01] transition-transform duration-300 ease-linear flex items-end">
                            <img class="z-0" src="<?= get_img_link('flats.webp'); ?>" alt="квартири"/>
                            <span class="uppercase relative h3 flex justify-between items-center z-20 border-b border-solid w-full pb-8">
                                <span>квартири</span>
                                <svg class="size-20 fill-white">
                                    <use xlink:href="#arrow-icon"></use>
                                </svg>
                            </span>
                        </button>
                        <button  data-target="house" data-type="Продаж"
                           class="image relative w-wull h-[2.14rem] sm:h-[4rem] px-8 py-12 sm:p-24 text-white lg:hover:scale-[1.01] transition-transform duration-300 ease-linear flex items-end">
                            <img class="z-0" src="<?= get_img_link('houses.webp'); ?>" alt="Будинки"/>
                            <span class="uppercase relative h3 flex justify-between items-center z-20 border-b border-solid w-full pb-8">
                                <span>Будинки</span>
                                <svg class="size-20 fill-white">
                                    <use xlink:href="#arrow-icon"></use>
                                </svg>
                            </span>
                        </button>
                        <button  data-target="comercial" data-type="Продаж"
                           class="image relative w-wull h-[2.14rem] sm:h-[4rem] px-8 py-12 sm:p-24 text-white lg:hover:scale-[1.01] transition-transform duration-300 ease-linear flex items-end">
                            <img class="z-0" src="<?= get_img_link('comercial_items.webp'); ?>" alt="Комерція"/>
                            <span class="uppercase relative h3 flex justify-between items-center z-20 border-b border-solid w-full pb-8">
                                <span>комерція</span>
                                <svg class="size-20 fill-white">
                                    <use xlink:href="#arrow-icon"></use>
                                </svg>
                            </span>
                        </button>
                        <button  data-target="land" data-type="Продаж"
                           class="image relative w-wull h-[2.14rem] sm:h-[4rem] px-8 py-12 sm:p-24 text-white lg:hover:scale-[1.01] transition-transform duration-300 ease-linear flex items-end">
                            <img class="z-0" src="<?= get_img_link('lands.webp'); ?>" alt="Земельні ділянки"/>
                            <span class="uppercase relative h3 flex justify-between items-center z-20 border-b border-solid w-full pb-8">
                                <span>земельні ділянки</span>
                                <svg class="size-20 fill-white">
                                    <use xlink:href="#arrow-icon"></use>
                                </svg>
                            </span>
                        </button>
                    </div>
                </div>
            </div>
            <div class="grid lg:grid-cols-2 gap-y-24 gap-x-24 lg:gap-y-[.62rem] mb-[.8rem] sm:mb-36" data-aos="fade-up"
                 id="about-us">
                <h2 class="h2 uppercase font-semibold">
                    ICON — агенція
                    <span class="font-light">преміальної нерухомості</span> нового
                    покоління
                </h2>
                <div class="row-start-3 row-end-auto lg:row-start-auto">
                    <p class="mb-24">
                        Наша мета — зробити процес купівлі, продажу чи оренди
                        нерухомості комфортним, безпечним і гідним вас. ICON об'єднує
                        команду досвідчених фахівців, які роками працювали у сфері
                        продажу, оренди та інвестиційної нерухомості Києва. Ми
                        працюємо з перевіреними об’єктами та реальними власниками,
                        знаємо, як читати ринок і вчасно діяти
                    </p>
                    <p class="font-semibold">
                        Ми працюємо тільки з тими об’єктами, що справді варті вашої
                        уваги.
                    </p>
                </div>
                <div class="image w-[calc(100%+var(--container-gap))] lg:!w-full h-[1.95rem] sm:h-[3.4rem] -translate-x-[var(--container-gap)]">
                    <img src="<?= get_img_link('Rectangle 10.webp') ?>" alt="building"/>
                </div>
                <div class="grid sm:grid-cols-2 gap-32 sm:gap-x-30 sm:gap-y-50 pt-16 pl-50 sm:pl-0">
                    <div class="h4">
                        <div class="text-gray mb-12">01/</div>
                        <p class="font-semibold">
                            Підбір об’єктів, які відповідають вашим критеріям та бюджету
                        </p>
                    </div>
                    <div class="h4">
                        <div class="text-gray mb-12">02/</div>
                        <p class="font-semibold">
                            Команда з реальним досвідом у високому сегменті
                        </p>
                    </div>
                    <div class="h4">
                        <div class="text-gray mb-12">03/</div>
                        <p class="font-semibold">
                            Повна юридична підтримка і конфіденційність
                        </p>
                    </div>
                    <div class="h4">
                        <div class="text-gray mb-12">04/</div>
                        <p class="font-semibold">
                            Ваш час — цінність. Ми фільтруємо, радимо, діємо.
                        </p>
                    </div>
                </div>
            </div>
            <div class="lg:flex flex-row-reverse justify-between items-end">
                <div  class="flex w-full lg:w-1/2 gap-16 sm:gap-24 mb-40 lg:mb-0">
                    <div class=" w-1/2 lg:w-full lg:max-w-[3.06rem]">
                        <div class="image w-full h-[2.2rem] sm:h-[4.04rem] mb-12">
                            <img src="<?= get_img_link('maksym.webp') ?>" alt="maksym"/>
                        </div>
                        <p>
                            <span class="block font-semibold">Максим Малюченко</span>Співзасновник
                            та стратегічний партнер агенції ICON, співвласник
                            будівельної компанії Status House
                        </p>
                    </div>
                    <div class=" w-1/2 lg:w-full lg:max-w-[3.06rem]">
                        <div class="image w-full h-[2.2rem] sm:h-[4.04rem] mb-12">
                            <img src="<?= get_img_link('Kostiantyn.webp') ?>" alt="Kostiantyn"/>
                        </div>
                        <p>
                            <span class="block font-semibold">Комарніцький Костянтин</span>
                            Співзасновник та СЕО агенції
                        </p>
                    </div>
                </div>
                <div class="lg:pb-100">
                    <p class="h4 font-semibold mb max-w-[5.2rem] mb-36 sm:mb-50">
                        "Для нас преміум — це не про ціну, а про ставлення. Ми не
                        працюємо за шаблоном. Кожен запит — індивідуальна стратегія,
                        кожен клієнт — особиста відповідальність."
                    </p>
                    <button data-target="flat"
                            class="relative text-white h-[0.54rem] uppercase px-24 w-full lg:w-full sm:max-w-[3rem] hover:before:bg-transparent bg-khaki before:z-10 before:position-0 btn-gradient before:bg-khaki before:transition-colors before:duration-300 before:ease-linear">
                        <span class="z-10 relative">залишити заявку</span>
                    </button>
                </div>
            </div>
        </div>
    </section>
    <section class="bg-trust py-40 sm:pt-[.8rem] sm:pb-100 text-white lg:h-[100vh]" id="why-us">
        <div class="container flex flex-col justify-between h-full">
            <h2 class="h2 lg:max-w-[6rem] uppercase font-semibold mb-32" data-aos="fade-up">
                Чому <span class="font-light">нам довіряють</span> клієнти?
            </h2>
            <div class="grid mx-20 sm:mx-0 sm:grid-cols-2 lg:grid-cols-4 gap-24 lg:gap-y-32">
                <div class="bg-white px-12 pt-32 pb-16 text-black" data-aos="fade-up">
                    <h3 class="text-l font-semibold pb-12 border-b border-black border-solid mb-32">
                        Персональний підхід
                    </h3>
                    <p>
                        Ми глибоко вивчаємо ваш запит і знаходимо рішення, яке
                        відповідає саме вам.
                    </p>
                </div>
                <div class="bg-white px-12 pt-32 pb-16 text-black" data-aos="fade-up">
                    <h3 class="text-l font-semibold pb-12 border-b border-black border-solid mb-32">
                        Прозорість і супровід угод
                    </h3>
                    <p>
                        Юристи перевіряють кожен об’єкт. Ви отримуєте спокій, а не
                        сюрпризи після угоди.
                    </p>
                </div>
                <div class="bg-white px-12 pt-32 pb-16 text-black" data-aos="fade-up">
                    <h3 class="text-l font-semibold pb-12 border-b border-black border-solid mb-32">
                        Мережа прямих контактів
                    </h3>
                    <p>Доступ до об’єктів, яких немає у відкритому продажу.</p>
                </div>
                <div class="bg-white px-12 pt-32 pb-16 text-black" data-aos="fade-up">
                    <h3 class="text-l font-semibold pb-12 border-b border-black border-solid mb-32">
                        Конфіденційність
                    </h3>
                    <p>
                        Працюємо делікатно з публічними клієнтами, інвесторами,
                        сім’ями.
                    </p>
                </div>
                <div class="bg-white px-12 pt-32 pb-16 text-black" data-aos="fade-up">
                    <h3 class="text-l font-semibold pb-12 border-b border-black border-solid mb-32">
                        Економимо ваш час
                    </h3>
                    <p>
                        Ви не витрачаєте тижні на пошуки — ми робимо це за вас,
                        точково й ефективно.
                    </p>
                </div>
                <div class="bg-white px-12 pt-32 pb-16 text-black" data-aos="fade-up">
                    <h3 class="text-l font-semibold pb-12 border-b border-black border-solid mb-32">
                        Команда з реальним досвідом
                    </h3>
                    <p>
                        Усі наші фахівці працюють у ринку 5+ років і знають не лише,
                        “де дешевше”, а й “де краще”.
                    </p>
                </div>
            </div>
        </div>
    </section>
    <section class="py-100 sm:py-[1.2rem]" data-aos="fade-up" id="owners">
        <div class="container lg:flex">
            <div class="image w-[calc(100%+var(--container-gap))] -translate-x-[var(--container-gap)] lg:w-[4.88rem] h-[2.88rem] lg:h-[3.9rem] flex-shrink-0 mb-36 lg:mb-0">
                <img src="<?= get_img_link('Rectangle 5.webp') ?>" alt="Image"/>
            </div>
            <div>
                <h2 class="uppercase font-semibold h2 pb-24 sm:pb-40 border-b border-black border-solid mb-24">
                    Продаєте чи здаєте в оренду?
                    <span class="font-light">Ми зробимо це вигідно,</span> швидко та
                    без зайвих турбот
                </h2>

                <div class="flex flex-col sm:flex-row gap-24 mb-32 pl-[.9rem] sm:pl-0">
                    <div class="h4">
                        <div class="text-gray mb-12">01/</div>
                        <p class="font-medium">Точна оцінка вашого об’єкта</p>
                    </div>
                    <div class="h4">
                        <div class="text-gray mb-12">02/</div>
                        <p class="font-medium">
                            Професійна стратегія продажу чи оренди
                        </p>
                    </div>
                    <div class="h4">
                        <div class="text-gray mb-12">03/</div>
                        <p class="font-medium">Юридичний супровід на кожному кроці</p>
                    </div>
                </div>
                <a href="/owners/"
                   class="relative text-white h-[0.54rem] uppercase px-24 w-full lg:w-full sm:max-w-[3rem] hover:before:bg-transparent bg-khaki before:z-10 before:position-0 btn-gradient before:bg-khaki before:transition-colors before:duration-300 before:ease-linear flex-center">
                    <span class="z-10 relative">детальніше</span>
                </a>
            </div>
        </div>
    </section>


  <?php   get_template_part('template-parts/blocks/reviews'); ?>
</main>

<?php
get_footer();
?>
