import Form from "./Form.js";
import {getElement, getElements} from "../core/index.js";
import {modal} from "./modal.js";
import {removeActive} from "../core/classesEvents.js";


export default function modalsEvents(target) {

    if (!modal) return;
    switch (target.dataset.target) {
        case 'flat':
        case 'house':
        case 'comercial':
        case 'land':
            renderTypeModal(target);
            break;
        case 'calc':
            renderCalcModal();
            const objectInput = getElement('.modal form input[name="object"]');
            getElements('.modal [data-tab]').forEach(item => {
                item.addEventListener('click', () => {
                    removeActive(getElements('.modal [data-tab]'));
                    item.classList.add('active');
                    objectInput.value = item.innerHTML;
                })
            });
            break;
    }
    new Form(`.modal form`).init();


}

function renderCalcModal() {
    getElement('.modal__body .wrapper').innerHTML = `
        <div
            class="bg-bg pl-16 pt-50 sm:pl-50 lg:pt-[.6rem] lg:pl-[.8rem] relative max-h-full overflow-y-scroll"
    >
  
        <div class="grid grid-cols-1 lg:grid-cols-[1fr,4.84rem] gap-40 pt-24">
            <div class="pr-16 sm:pr-50">
                <h2 class="h2 uppercase font-semibold mb-24">
                    Дізнайтесь вартість
                    <span class="font-light">вашої нерухомості</span>
                </h2>
   
                    <div class="flex gap-24 mb-16 sm:mb-24 uppercase">
                        <div data-tab
                                class="px-24 py-12 w-1/2 sm:w-auto active cursor-pointer hover:border-black border-b border-transparent border-solid text-center transition-colors duration-300 ease-linear tab-button lg:w-[2.5rem]"
                        >
                            будинок
                        </div>
                        <div
                        data-tab
                                class="px-24 py-12 w-1/2 sm:w-auto cursor-pointer hover:border-black border-b border-transparent border-solid text-center transition-colors duration-300 ease-linear tab-button lg:w-[2.5rem]"
                        >
                            квартира
                        </div>
                    </div>
                         <form
                                class="form gap-x-10 gap-y-16 self-center grid lg:grid-cols-2 bg-bg  duration-300 ease-linear pb-32 lg:pb-0"
                        >
                        <input type="hidden" class="hidden" value="будинок" name="object">
                            <div class="w-full form-item">
                                <input
                                        type="text"
                                        name="rooms"
                                        placeholder="Кількість кімнат"
                                        class="h-[.54rem] w-full border border-solid bg-transparent p-12 flex items-center"
                                />
                                <div class="form-item__message"></div>
                            </div>
                            <div class="w-full form-item">
                                <input
                                        type="text"
                                        name="area"
                                        placeholder="Загальна площа"
                                        class="h-[.54rem] w-full border border-solid bg-transparent p-12 flex items-center"
                                />
                                <div class="form-item__message"></div>
                            </div>

                            <div class="w-full  form-item lg:col-start-1 lg:col-end-3">
                                <input
                                        type="text"
                                        name="location"
                                        placeholder="Адреса (вулиця та номер будинку)"
                                        class="h-[.54rem] w-full border border-solid bg-transparent p-12 flex items-center"
                                />
                                <div class="form-item__message"></div>
                            </div>

                            <div class="w-full form-item">
                                <input
                                        type="text"
                                        name="name"
                                        placeholder="Ім'я"
                                        class="h-[.54rem] w-full border border-solid bg-transparent p-12 flex items-center"
                                />
                                <div class="form-item__message"></div>
                            </div>
                            <div class="w-full form-item">
                                <input
                                        type="text"
                                        name="phone"
                                        placeholder="Телефон"
                                        class="h-[.54rem] w-full border border-solid bg-transparent p-12 flex items-center"
                                />
                                <div class="form-item__message"></div>
                            </div>
                            <button
                                    type="submit"
                                    class="h-[0.54rem] uppercase px-24 w-full sm:w-auto lg:w-full relative hover:before:bg-transparent bg-khaki before:z-10 before:position-0 btn-gradient before:bg-khaki before:transition-colors before:duration-300 before:ease-linear text-white lg:col-start-1 lg:col-end-3 mt-12"
                            >
                                <span class="z-10 relative">Відправити</span>
                            </button>
                        </form>
            
            </div>

            <div
                    class="w-full image relative hidden lg:block h-[5.53rem]"
            >
                <img
                        class="object-cover object-bottom size-full"
                        src="https://www.iconestate.com.ua/wp-content/themes/icon/assets/img/Rectangle 11.webp"
                        alt="decoration"
                />
            </div>
        </div>
    </div>`;


}

function renderTypeModal(target) {
    const item_type = target.dataset.target;
    let inputs = `
<input   type="hidden"
                            name="item"
                            class="hidden"
                            value="${item_type}"
                            />
          <div class="w-full lg:w-[3.06rem] form-item">
                    <label>
                    <input
                    autocomplete="on"
                            type="text"
                            name="name"
                            id="name-modal"
                            placeholder="Ім'я"
                            class="h-[.54rem] w-full border border-solid bg-transparent p-12 flex items-center"
                    />
</label>
                    <div class="form-item__message"></div>
                </div>
                <div class="w-full lg:w-[3.06rem] form-item">
                    <label>
                    <input
         
                    autocomplete="on"
                            type="text"
                            name="phone"
                            id="phone-modal"
                            placeholder="Телефон"
                            class="h-[.54rem] w-full border border-solid bg-transparent p-12 flex items-center"
                    />
</label>
                    <div class="form-item__message"></div>
                </div>
    `
    if (target.dataset.type) {
        inputs += `<input   type="hidden"
                            name="type"
                            class="hidden"
                            value="${target.dataset.type}"
                            />`
    }
    getElement('.modal__body .wrapper').innerHTML = `
      <div
            class="bg-bg max-w-[8.65rem] px-16 py-50 sm:px-50 lg:py-[.6rem] lg:pl-[.8rem] lg:pr-[.6rem] relative max-h-full overflow-y-scroll"
    >
  
        <h2 class="h2 uppercase font-semibold mb-24 sm:mb-0">
            Залиште заявку, щоб отримати
            <span class="font-light">ексклюзивні пропозиції</span>
        </h2>
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-24">
            <form data-form="${item_type}" class="form flex flex-col gap-y-16 self-center">
          ${inputs}
                <button
                        type="submit"
                        class="h-[0.54rem] uppercase px-24 w-full sm:w-auto lg:w-full lg:max-w-[3.06rem] relative hover:before:bg-transparent bg-khaki before:z-10 before:position-0 btn-gradient before:bg-khaki before:transition-colors before:duration-300 before:ease-linear text-white"
                >
                    <span class="z-10 relative">Відправити</span>
                </button>
            </form>
            <div class="w-[2.3rem] sm:w-[3.3rem] mx-auto sm:ml-auto relative">
                <img
                        class="object-contain relative z-10"
                        src="https://www.iconestate.com.ua/wp-content/themes/icon/assets/img/${item_type}.webp"
                        alt="decoration"
                />
                <img
                        class="w-full absolute -bottom-50 -right-50"
                          src="https://www.iconestate.com.ua/wp-content/themes/icon/assets/img/Ellipse 2.webp"
                       
                     
                        alt="ellipse"
                />
            </div>
        </div>
    </div>
    `
}

function renderAnswerModal(answer) {
    getElement('.modal__content .wrapper').innerHTML = `
           <div class="text-center flex flex-col items-center justify-center px-24 min-h-[4.08rem] max-w-[4.65rem] mx-auto text-white font-medium">
                    <h3 class="mb-24">
                   ${answer ? 'Ваші дані відправлено успішно!' : 'Упс...'}
                       
                    </h3>
                    <div class="text-l">${answer ? "Наші менеджери зв’яжуться з вами найближчим часом" : 'Сталася помилка, спробуйте пізніше'}</div>
                </div>

    `
}

export {renderAnswerModal}



