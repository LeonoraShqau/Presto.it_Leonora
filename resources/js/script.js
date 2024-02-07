let navbar = document.querySelector('#navbar');
let menu = document.querySelector('#menu');
let searchJs = document.querySelector('#searchJs');
let searchJs2 = document.querySelector('#searchJs2');
// let btnCategory = document.querySelectorAll('.btnCategory');
let iconColor = document.querySelector('.iconColor');
let iconCircle = document.querySelector('#iconCircle');
let LogoID = document.querySelector('#LogoID');
let rowCategory = document.querySelector('.rowCategory');
let rowSearch2 = document.querySelector('.rowSearch2');


 window.addEventListener('scroll' , ()=>{

     if (window.scrollY>0) {
         searchJs2.style.height='0';
         navbar.classList.add('nav-bg-custom');
         searchJs.style.opacity='1';
         searchJs.style.transform='scale(1)';

        //  btnCategory.forEach(button => {
        //      button.classList.add('blackBorder');
        //  });
        if (iconColor) {
            iconColor.classList.remove('iconAstroColorWhite');
        iconColor.classList.add('iconAstroColorBlack');
        iconCircle.classList.remove('iconAstro');
        iconCircle.classList.add('iconAstro2');
        }
        
        LogoID.src= '/img/Logo2.png';
        // rowCategory.classList.add('d-none');
        rowSearch2.classList.remove('mt-4');



     }else{
         navbar.classList.remove('nav-bg-custom');
         searchJs2.style.height='50px';
         searchJs.style.opacity='0';
         searchJs.style.transform='scale(0.5)';
        
        if (iconColor) {
        iconColor.classList.remove('iconAstroColorBlack');
        iconColor.classList.add('iconAstroColorWhite');
        iconCircle.classList.add('iconAstro');
        iconCircle.classList.remove('iconAstro2');
        }
        // btnCategory.forEach(button => {
        //     button.classList.remove('blackBorder');
        // });
        LogoID.src= '/img/Logo2Black.png';
        // rowCategory.classList.remove('d-none');
        rowSearch2.classList.add('mt-4');


     }
})





