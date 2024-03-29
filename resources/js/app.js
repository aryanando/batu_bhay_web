/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

import "./bootstrap";

// import "./kuesioner-gizi.js";
import { createApp } from "vue";

/**
 * Next, we will create a fresh Vue application instance. You may then begin
 * registering components with the application instance so they are ready
 * to use in your application's views. An example is included for you.
 */

const app = createApp({});

import ExampleComponent from "./components/ExampleComponent.vue";
app.component("example-component", ExampleComponent);

/**
 * The following block of code may be used to automatically register your
 * Vue components. It will recursively scan this directory for the Vue
 * components and automatically register them with their "basename".
 *
 * Eg. ./components/ExampleComponent.vue -> <example-component></example-component>
 */

// Object.entries(import.meta.glob('./**/*.vue', { eager: true })).forEach(([path, definition]) => {
//     app.component(path.split('/').pop().replace(/\.\w+$/, ''), definition.default);
// });

import Swiper from "swiper/bundle";

const swiper = new Swiper(".swiper", {
    // Optional parameters
    direction: "horizontal",
    grabCursor: true,
    slidesPerView: 1,
    slidesPerGroup: 1,
    centeredSlides: false,
    loop: true,
    spaceBetween: 10,
    mousewheel: {
        forceToAxis: true,
    },
    breakpoints: {
        767: {
            slidesPerView: 2,
            spaceBetween: 24,
        },
        1699: {
            slidesPerView: 3,
            spaceBetween: 24,
        },
    },
    speed: 700,
    slideActiveClass: "is-active",
    slideDuplicateActiveClass: "is-active",
});

const swiper2 = new Swiper(".swiper2", {
    loop: true,

    pagination: {
        el: ".swiper-pagination",
        clickable: true,
    },
});

window.console.log("hallo");


/**
 * Finally, we will attach the application instance to a HTML element with
 * an "id" attribute of "app". This element is included with the "auth"
 * scaffolding. Otherwise, you will need to add an element yourself.
 */

app.mount("#app");
