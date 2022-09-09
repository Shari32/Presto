
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