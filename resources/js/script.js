
let research = document.querySelector(`#searchButton`);

let form = document.querySelector(`#formCustom`);

let formPadre = document.querySelector(`#padre`);

let isClicked = true;


research.addEventListener('click', ()=>{

    if(isClicked){

        formPadre.classList.remove('margine');
        formPadre.style.width = '20%';
        isClicked = false;

    }else{

        formPadre.style.width = '0%';
        isClicked = true;

    }
})

// FORM CREAZIONE ANNUNCIO

let mybutton = document.getElementById("myBtn");


mybutton.addEventListener('click', ()=>{

    if(isClicked){

            document.body.scrollTop = 0; 
            document.documentElement.scrollTop = 0; 

    }else{

    }


})