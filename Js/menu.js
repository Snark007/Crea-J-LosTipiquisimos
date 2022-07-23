let part1 = document.querySelector(".nav-hide");
let part2 = document.querySelector(".btn-translate-hide");
let part3 = document.querySelector(".hide-login");


let menu = document.querySelector(".menu-hamburguer");

menu.addEventListener("click", ()=>{
    part1.classList.toggle("show")
    part2.classList.toggle("show")
    part3.classList.toggle("show")
})