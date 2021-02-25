/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

window.Vue = require('vue');

/**
 * The following block of code may be used to automatically register your
 * Vue components. It will recursively scan this directory for the Vue
 * components and automatically register them with their "basename".
 *
 * Eg. ./components/ExampleComponent.vue -> <example-component></example-component>
 */

// const files = require.context('./', true, /\.vue$/i)
// files.keys().map(key => Vue.component(key.split('/').pop().split('.')[0], files(key).default))

Vue.component('example-component', require('./components/ExampleComponent.vue').default);

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

const app = new Vue({
    el: '#app',
});


const { set } = require("lodash");






/*  html
<div class="contenedor1">
    <div class="slider-contenedor1">
        <section class="contenido1-slider">
            <div>
                <h3>Lorem ipsum dolor sit amet consectetur adipisicing elit. Adipisci nam provident soluta laboriosam vitae
                    eius eaque facere ipsa suscipit minus? Officiis laborum id impedit ipsum quo molestias deserunt, ex ab.</h3>
            </div>
                <img src="\theme\images\premio1.1.jpg.png" alt="imagenes del carrusel">
        </section>
        <section class="contenido1-slider">
            <div>
                <h3>Lorem ipsum dolor sit amet consectetur adipisicing elit. Adipisci nam provident soluta laboriosam vitae
                    eius eaque facere ipsa suscipit minus? Officiis laborum id impedit ipsum quo molestias deserunt, ex ab.</h3>
            </div>
                <img src="\theme\images\premio2.1.png" alt="imagenes del carrusel">
        </section>
        <section class="contenido1-slider">
            <div>
                <h3>Lorem ipsum dolor sit amet consectetur adipisicing elit. Adipisci nam provident soluta laboriosam vitae
                    eius eaque facere ipsa suscipit minus? Officiis laborum id impedit ipsum quo molestias deserunt, ex ab.</h3>
            </div>
                <img src="\theme\images\premio3.1.jpg.png" alt="imagenes del carrusel">
        </section>
        <section class="contenido1-slider">
            <div>
                <h3>Lorem ipsum dolor sit amet consectetur adipisicing elit. Adipisci nam provident soluta laboriosam vitae
                    eius eaque facere ipsa suscipit minus? Officiis laborum id impedit ipsum quo molestias deserunt, ex ab.</h3>
            </div>
                <img src="\theme\images\premio4.1.png" alt="imagenes del carrusel">
        </section>
    </div>
</div>
 */









/*js
let slider = document.querySelector(".slider-contenedor")
let sliderIndividual = document.querySelectorAll(".contenido-slider")
let contador = 1;
let width = sliderIndividual[0].clientWidth;
let intervalo = 3000;

window.addEventListener("resize", function(){
    width = sliderIndividual[0].clientWidth;
})

setInterval(function(){
slides();
},intervalo);


function slides(){
    slider.style.transform = "traslate("+(-width*contador)+"px)";
    slider.style.transition = "transform .8s";
    contador++;
    if(contador == sliderIndividual.length){
setTimeout(function(){
    slider.style.transform = "traslate(0px)";
    slider.style.transition = "transform 0s";
    contador=1;
},1500)
    }
}*/








 /*css

 .contenedor1{
    width: 100%;
    overflow: hidden;
}
.slider-contenedor1{
    width: 100%;
    display: flex;
}
.contenido1-slider{
    width: 1000%;
    height: 600px;
    display: flex;
    justify-content: space-around;
    align-items: center;
    flex: shrink 0;
}
.contenido1-slider:nth-child(1){
    background: #4eacba;
    color: rgb(255, 255, 255);
}
.contenido1-slider:nth-child(2){
    background: #004664;
    color: rgb(255, 255, 255);
}
.contenido1-slider:nth-child(3){
    background: #4eacba;
    color: rgb(255, 255, 255);
}
.contenido1-slider:nth-child(4){
    background: #004664;
    color: rgb(255, 255, 255);
}
.contenido1-slider > img{
width: 400px;
}
.contenido1-slider > div{
    width: 40%;
}
.contenido1-slider h3{
    font-weight: 400;
    text-align: justify;
    line-height: 30px; */
