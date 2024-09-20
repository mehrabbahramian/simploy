//-------------------------------- dropdown navbar --------------------------------
const navbarMenus = document.querySelectorAll(".nav_menu_item");
const navbarItems = document.querySelectorAll(".smp__header__items li");
navbarItems.forEach((el, navindex) => {
    el.addEventListener("click", (el) => {
        let parentNodeElement = el.target;
        while (parentNodeElement) {
            parentNodeElement = parentNodeElement.parentNode;
            if (parentNodeElement.classList.contains("nav_item_parent")) {
                break;
            }
        }
        close_all_arrow_nav();
        const arrowSvg = el.target.parentNode.querySelector("svg");
        const colorNavItem = el.target.parentNode.querySelector("a");
        const activeMenu = document.querySelector(".nav_menu_item.active_nav_menu");
        navbarMenus.forEach((menu, indexMenu) => {
            menu.classList.remove("active_nav_menu");
            navbarMenus[indexMenu].style.maxHeight = 0;
            arrowSvg.style.transform = "rotate(0deg)";
            arrowSvg.classList.remove("active");
            parentNodeElement.querySelector("a").removeAttribute("style");
            parentNodeElement.querySelector("svg").removeAttribute("style");
        });
        if (activeMenu != navbarMenus[navindex]) {
            navbarMenus[navindex].classList.add('active_nav_menu');
            navbarMenus[navindex].style.maxHeight = "max-content";
            arrowSvg.style.transform = "rotate(174deg)";
            arrowSvg.classList.add("active");
            parentNodeElement.querySelector("a").style.color = "#0A6433";
            parentNodeElement.querySelector("svg").style.color = "#0A6433";
        }
    })
});
window.addEventListener('click', function (e) {
    const isClickedOnNavbar = e.target.closest('.smp__header__items') !== null;
    const isClickedOnMenu = e.target.closest('.nav_menu_item') !== null;
    if (!isClickedOnNavbar && !isClickedOnMenu) {
        navbarMenus.forEach(menu => {
            menu.classList.remove("active_nav_menu");
            menu.style.maxHeight = 0;
            close_all_arrow_nav()
        });
    }
});
function close_all_arrow_nav() {

    const arrowsSvg = document.querySelectorAll(".smp__header__items li a svg");
    const colorItemsNav = document.querySelectorAll(".smp__header__items li a");
    arrowsSvg.forEach((svg) => {
        if (svg.classList.contains("active")) {
            svg.style.transform = "rotate(0deg)";
            svg.classList.remove("active");
            svg.removeAttribute("style");
        }
    })
    colorItemsNav.forEach((item) => {
        item.removeAttribute("style")
    })
}


// ------------------------------ hero form arrow ------------------------------
const dropdownHero = document.querySelector(".ns_dropdown_input");
if (dropdownHero) {

    dropdownHero.addEventListener("click", (el) => {
        console.log(el.target.parentNode.querySelector("svg"));
        const imgArrow = el.target.parentNode.querySelector("svg");
        if (!imgArrow.classList.contains("active")) {
            imgArrow.style.transform = "rotate(175deg)";
            imgArrow.classList.add("active");
        } else {
            imgArrow.style.transform = "rotate(0deg)";
            imgArrow.classList.remove("active");
        }
    })
}


// ----------------------------- Mobile-navToggle -----------------------------
let navToggle = document.getElementById('hamburger');

navToggle.addEventListener('click', () => {
    let navList = document.getElementById('nav-list');
    navList.classList.toggle('show');
    navToggle.classList.toggle('toggle')
});
const subMenus = document.querySelectorAll(".mobile_menu")
navbarItems.forEach((menu_item) => {
    menu_item.addEventListener("click", () => {
        const sub_menu = menu_item.querySelector(".mobile_menu");
        const heightSubMenu = sub_menu.scrollHeight;
        if (!sub_menu.classList.contains("active_sub_menu")) {
            sub_menu.classList.add("active_sub_menu");
            sub_menu.style.maxHeight = `${heightSubMenu}px`
        } else {
            sub_menu.classList.remove("active_sub_menu");
            sub_menu.style.maxHeight = `0px`
        }

    })
})


// ------------------------------ calculate employees ------------------------------
let smp_employees_count_input = document.getElementById('smp__employees__count');

let smp_employees_number = document.getElementById('smp__employees__number');
let smp__calculate__price = document.getElementById('smp__calculate__price');

function calcEmployeesPrice() {
    let range_value = smp_employees_count_input.value;
    smp_employees_number.innerHTML = range_value;

    let calculate_price = range_value * 1775;
    let calculated_to_string = calculate_price.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ",");
    smp__calculate__price.innerHTML = '$' + calculated_to_string;
}


//-------------------------------- faq --------------------------------
const allItemsDropdown = document.querySelectorAll(".faq_item");
allItemsDropdown.forEach((el, index) => {
    el.addEventListener("click", () => {
        open(el);
    })
})

function open(el) {
    const bodyDropdown = el.querySelector(".faq_answer");
    const arrow = el.querySelector(".faq_arrow img");
    const heightDropdown = bodyDropdown.scrollHeight;
    if (!bodyDropdown.classList.contains("active")) {
        bodyDropdown.classList.add("active");
        bodyDropdown.style.height = `${heightDropdown}px`;
        arrow.style.transform = "rotate(178deg)"
    } else {
        bodyDropdown.classList.remove("active");
        bodyDropdown.style.height = "0px";
        arrow.style.transform = "rotate(0deg)"
    }
}

//-------------------------------- form value --------------------------------
let smp_first_name_input = document.getElementById("smp-form-first-name");
let smp_last_name_input = document.getElementById("smp-form-last-name");

let smp_phone_input = document.getElementById("smp-form-phone");
let smp_email_input = document.getElementById("smp-form-email");
let smp_job_input = document.getElementById("smp-form-job");
let smp_company_input = document.getElementById("smp-form-company");
let smp_city_input = document.getElementById("smp-form-city");
let smp_ees_input = document.getElementById("smp-form-ees");
let smp_aws_input = document.getElementById("smp-form-aws");
let smp_about_input = document.getElementById("smp-form-about");

let contactForm = document.getElementById("contact-form");

let smp__submit = document.getElementById("smp-form-submit");

if(contactForm != null){
    contactForm.onsubmit = function (e) {
        e.preventDefault();
        window.location.href = "https://simploydev.wpenginepowered.com/thank-you-page/"
    } 
}

function getsmpFormValue() {
    let first_name = smp_first_name_input.value;
    let last_name = smp_last_name_input.value;
    let phone = smp_phone_input.value;
    let email = smp_email_input.value;
    let job = smp_job_input.value;
    let company = smp_company_input.value;
    let city = smp_city_input.value;
    let ees = smp_ees_input.value;
    let aws = smp_aws_input.value;
    let about = smp_about_input.value;

    let url = window.location.href;

    if (first_name.length == 0)
        throw new Error("Please enter your first name.");
    else if (last_name.length == 0)
        throw new Error("Please enter your last name.");
    else if (phone.length == 0)
        throw new Error("Please enter your phone.");
    else if (!isValidPhone(phone))
        throw new Error("Please enter a valid phone number.");
    else if (email.length == 0)
        throw new Error("Please enter your email.");
    else if (!isValidEmail(email))
        throw new Error("Please enter a valid email address.");
    else if (job.length == 0)
        throw new Error("Please enter your address.");
    else if (company.length == 0)
        throw new Error("Please enter your company.");
    else if (city.length == 0)
        throw new Error("Please enter your city.");
    else if (ees.length == 0)
        throw new Error("Please enter a employees.");
    else if (aws.length == 0)
        throw new Error("Please enter valid annual.");


    return {
        first_name, last_name, phone, email, job, company, city, ees, aws, about, url
    }
}

// --------------------------sticky navbar--------------------------
window.addEventListener('scroll', function() {
    let introBar = document.querySelector('.smp__header__first');
    if(window.scrollY > 50){
        introBar.classList.add('hide');
    }else if(window.scrollY == 0){
        introBar.classList.remove('hide');
    }
})

//-------------------------- header popup--------------------------
let popupContainer = document.getElementById("popupContainer");
let heroSubmits = document.querySelectorAll(".heroBannerSubmit");
let close = document.getElementById("closePopup");
let popupForm = document.getElementById('hero-banner-popup-form');

heroSubmits.forEach((heroSubmit)=>{
    heroSubmit.addEventListener('click', (e) => {
        e.preventDefault();
        popupContainer.classList.add('show');
    });
})


close.addEventListener('click', (e) => {
    popupContainer.classList.remove('show');
});

popupForm.onsubmit = function (e) {
    e.preventDefault();
    window.location.href = "https://simploydev.wpenginepowered.com/thank-you-page/"
}

//-------------------------------- dropdown header --------------------------------
let items = document.querySelectorAll(".ns_dropdown_items li");
let dropdownHeader = document.querySelector(".ns_dropdown_items");
let dropdownInput = document.querySelector(".ns_dropdown_input");
let input = document.querySelector(".ns_dropdown_input input");
if (dropdownHeader) {
    dropdownInput.addEventListener("click", () => {
        if (!dropdownHeader.classList.contains("ns_active_dropdown")) {

            const height_dropdown_header = dropdownHeader.scrollHeight;
            dropdownHeader.style.height = `${height_dropdown_header}px`;
            dropdownHeader.style.opacity="1";
            dropdownHeader.classList.add("ns_active_dropdown");
        } else {
            dropdownHeader.style.height = "0px";

            dropdownHeader.classList.remove("ns_active_dropdown");
        }
    });
    if(input.value !== 'What are you interested in?'){
        input.style.color = '#000'
    }else{
        input.style.color = '#929292'
    };
}

items.forEach((el, index) => {
    el.addEventListener("click", () => {
        input.value = el.innerHTML;
        dropdownHeader.style.height = "0px";
        dropdownHeader.classList.remove("ns_active_dropdown");
    })
});