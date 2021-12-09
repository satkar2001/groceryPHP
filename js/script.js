let menu = document.querySelector('#menu-bar');
let navbar = document.querySelector('.navbar');
let header = document.querySelector('.header-2');

menu.addEventListener('click', () =>{
    menu.classList.toggle('fa-times');//cross
    navbar.classList.toggle('active');//shows dropdown navbar
});

window.onscroll = () =>{
    menu.classList.remove('fa-times');
    navbar.classList.remove('active');

    // if(window.scrollY > 150){
    //     header.classList.add('active');
    // }else{
    //     header.classList.remove('active');
    // }

}
