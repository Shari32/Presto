
let research = document.querySelector(`#searchButton`);

let form = document.querySelector(`#formCustom`);

let formPadre = document.querySelector(`#padre`);

let isClicked = true;

let dropDown = document.querySelector ('#customDropDown');



let sm = window.matchMedia("(max-width:520px)");
let ddSM = document.querySelector('#customDropDownSM');
let ddLG = document.querySelector('#customDropDownLG');



function dropDown(sm) {
    if (sm.matches) {
        ddLG.classList.remove('d-none');
        ddSM.classList.add('d-none');


    } else {
        ddSM.classList.remove('d-none');
        ddLG.classList.add('d-none');
    }
}



research.addEventListener('click', ()=>{

    if(isClicked){

        formPadre.classList.remove('margine');
        formPadre.style.width = '20%';
        isClicked = false;

    }else{

        formPadre.style.width = '0%';
        isClicked = true;

    }
});



dropDown.classList.remove(`dropdown-menu-end`);



// FORM CREAZIONE ANNUNCIO

let mybutton = document.getElementById("myBtn");


mybutton.addEventListener('click', ()=>{

    if(isClicked){

            document.body.scrollTop = 0; 
            document.documentElement.scrollTop = 0; 

    }else{

    }


})