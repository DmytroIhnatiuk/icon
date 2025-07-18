import IMask from "imask";


import {translateFields, lang} from "./base.js";

import {getElement} from "../core/index.js";

let validRegex =
    /^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/;
let maskOptions = {
    mask: "+38 (000) 000 - 0000",
    lazy: false,
};

class Form {
    constructor(form) {
        this.form = getElement(form);
        this.inputs = this.form.querySelectorAll("input");
        this.submit = this.form.querySelector("button[type='submit']");
        this.path = `${path}/assets/services/mailAndTelegram.php`;
        // this.path = `${path}/services/mailAndTelegram.php`;
        this.telInput = this.form.querySelector("[name='phone']") || null;
        this.mask = this.telInput && new IMask(this.telInput, maskOptions);
        this.formData = {};
    }


    checkInputs() {
        this.inputs.forEach((input) => {
            if (input.type === "text" && input.name !== "phone") {
                this.checkTextInput(input);
            }
            if (input.name === "phone") {
                this.checkPhoneInput(input);
            }
            if (input.name === "email") {
                this.checkEmailInput(input);
            }
        });
        if (getElement('textarea', this.form)) {
            this.checkTextarea(getElement('textarea', this.form));
        }
    }


    checkEmailInput(input) {
        let {email} = translateFields;
        let templateEmail = email[lang];
        let isValid = false;
        input.addEventListener("blur", () => {
            if (input.value.match(validRegex)) {
                this.valid(input);
                isValid = true;
            } else {
                this.invalid(input);
            }
            getElement('.form-item__message', input.closest('.form-item')).innerHTML = isValid ? "" : templateEmail;
        });
        input.addEventListener("input", () => {
            this.valid(input);
            getElement('.form-item__message', input.closest('.form-item')).innerHTML = "";
        });
    }


    checkPhoneInput(input) {
        let {phone: templateMessage} = translateFields;
        let template = templateMessage[lang];

        let isValid = false;
        this.mask.updateValue()

        input.addEventListener("blur", () => {
            if (input.value.indexOf("_") === -1) {
                this.valid(input);
                isValid = true;
            } else {
                this.invalid(input);
            }
            getElement('.form-item__message', input.closest('.form-item')).innerText = isValid ? "" : template;
        });
        input.addEventListener("input", () => {
            if (input.value.indexOf("_") === -1) {
                this.valid(input);
                isValid = true;
            }
            getElement('.form-item__message', input.closest('.form-item')).innerText = "";
        });
    }

    resetForm(btn) {
        this.inputs.forEach(input => {
            this.formData[input.name] = '';
        })
        const {send} = translateFields;
        btn.dataset.form = '';
        btn.classList.remove("disabled");
        btn.innerHTML = `<span class="txt-upper">${send[lang]}</span>`;
        this.form.reset();
        this.inputs.forEach((input) => {
            input.closest('.form-item').classList.remove('valid');
            input.value = '';
            if (input.name == 'phone') {
                new IMask(this.telInput, maskOptions);
                this.mask.updateValue();
            }
        });
    }

    valid(input) {
        input.closest('.form-item').classList.add("valid");
        input.closest('.form-item').classList.remove("invalid");
        if (this.submit.classList.contains('disabled')) this.submit.classList.remove('disabled')
    }

    invalid(input) {
        input.closest('.form-item').classList.add("invalid");
        input.closest('.form-item').classList.remove("valid");
        if (!this.submit.classList.contains('disabled')) this.submit.classList.add('disabled')

    }

    validateEmptyField() {
        let {field} = translateFields;
        let validator = {};
        this.inputs.forEach((input) => {
            if (input.type === 'hidden') return;
            validator[input.name] = null;
            const updateStatus = (valid) => {
                const messageElement = getElement('.form-item__message', input.closest('.form-item'));

                if (valid) {
                    this.valid(input);
                    messageElement.innerText = "";
                } else {
                    this.invalid(input);
                    messageElement.innerHTML = `${field[lang]}`;
                }

                validator[input.name] = valid;
            }
            if (input.type === "text" && input.name !== "phone") {
                updateStatus(!!input.value.trim());
            }

            if (input.name === "phone") {
                updateStatus(input.value.indexOf("_") === -1);
            }
        });
        console.log(validator)
        return Object.values(validator).every(value => value);


    }

    async sendToSheet(data) {
        try {
            const sheetsData = new FormData();
            for (let key in data) {
                sheetsData.append(`${key}`, `${data[key]}`);
            }
            const result = await fetch(
                "https://script.google.com/macros/s/AKfycbwFLvu7MShp9xsydD7exK7pLzre6plmHZWocCt94Xzsy_6KCvGWnk37WJqPBgQEzX1E/exec",
                {
                    method: "POST",
                    body: sheetsData,
                }
            );
            console.log(result)
        } catch (e) {
            console.log(e);
        }


    }


    async postData(url, data, btn) {
        console.log(data)
        try {
            const response = await fetch(url, {
                method: "POST",
                body: JSON.stringify(data),
                headers: {
                    "Content-Type": "application/json",
                },
            });

            if (response.status !== 200) throw new Error('error');
            location.href = "/thank-you";


        } catch (error) {
            this.resetForm(btn);
            // renderAnswerModal(false);
            // modal.openModal();
            console.error("Ошибка:", error);
        }

    }

    getUtmParameter(url, object) {
        if (url) {
            let urlValues;
            urlValues = url.substr(1).split("&");

            const values = urlValues.map((value) => value.split("="));
            values.forEach((item) => {
                const regex = /utm_/i;
                let name = item[0].replace(regex, "");
                object[`${name}`] = item[1]
            });
            return true;
        }
        return false;
    };

    checkTextInput(input) {
        //
        let name = input.name === 'name' ? translateFields[input.name][lang] : translateFields['placeholder'][lang];
        let isValid = false;
        // input.addEventListener("keypress", function (e) {
        //     if (!e.key.match(/^[a-zA-Zа-яА-ЯЇїІіЄєҐґЁёЭэЪъ\s]/)) {
        //         e.preventDefault();
        //     }
        // });
        input.addEventListener("blur", () => {
            if (input.value.length >= 2) {
                this.valid(input);
                isValid = true;
            } else {
                this.invalid(input);
            }
            input.closest('.form-item').querySelector('.form-item__message').innerText = isValid ? "" : name;
        });
        input.addEventListener('input', () => {
            this.valid(input);
            input.closest('.form-item').querySelector('.form-item__message').innerText = "";
        });
    }

    checkTextarea(input) {
        let name = translateFields[input.name][lang];
        let isValid = false;
        input.addEventListener("keypress", function (e) {
            if (!e.key.match(/^[a-zA-Zа-яА-ЯЇїІіЄєҐґЁёЭэЪъ\s]/)) {
                e.preventDefault();
            }
        });
        input.addEventListener("blur", () => {
            if (input.value.length >= 5) {
                this.valid(input);
                isValid = true;
            } else {
                this.invalid(input);
            }
            input.closest('.form-item').querySelector('.form-item__message').innerText = isValid ? "" : name;
        });
        input.addEventListener('input', () => {
            this.valid(input);
            input.closest('.form-item').querySelector('.form-item__message').innerText = "";
        });
    }


    init() {


        this.checkInputs();
        this.form.addEventListener("submit", (e) => {
            e.preventDefault();
            if (this.validateEmptyField()) {
                e.submitter.classList.add("disabled");
                e.submitter.innerHTML = `<svg class="w-24 h-24 mx-auto fill-white">
                    <use xlink:href="#preloader-spinner"></use>
                </svg>`;
                this.inputs.forEach(input => {
                    this.formData[input.name] = input.value;
                })
                this.postData(this.path, this.formData, e.submitter);
            }
        });
    }
}

export default Form;


function valid(input) {
    const submitBtn = input.closest('form').querySelector('input[type="submit"]');
    input.closest('.form-item').classList.add("valid");
    input.closest('.form-item').classList.remove("invalid");
    if (submitBtn.classList.contains('disabled')) submitBtn.classList.remove('disabled')
}

function invalid(input) {
    const submitBtn = input.closest('form').querySelector('input[type="submit"]');
    input.closest('.form-item').classList.add("invalid");
    input.closest('.form-item').classList.remove("valid");
    if (!submitBtn.classList.contains('disabled')) submitBtn.classList.add('disabled')
}

export {valid, invalid, maskOptions};