// let español, english;
let sopaEspañol = `
Recetas de Sopas
Estas son las recetas de sopas tipicas disponibles.
Sopa de res
Es muy popular y su elaboración ha pasado de generación en generación convirtiéndose en una tradición.
Ver más
Sopa de frijoles
Este plato contiene elementos principales de las comidas salvadoreñas como el frijol rojo.
Ver más
Sopa de gallina
El caldo de pollo es una sopa a menudo se sirve con trozos de carne de pollo.
Ver más
Los Tipiquisimos
© Los Tipiquisimos 2022-Derechos reservados
`
let sopaIngles = `
Soup Recipes
These are the recipes of typical soups available.
Beef soup
It is very popular and its preparation has passed from generation to generation becoming a tradition.
See more
Bean soup
This dish contains main elements of Salvadoran food such as red beans.
See more
Chicken soup
Chicken broth is a soup often served with pieces of chicken meat.
See more
Los Tipiquisimos
Tipiquisimos 2022-Rights Reserved
`
let navEspañol = `
Elegir idioma
España
Ingles
¡Sobre nosotros!
Recetas
santas
Semana santa
pupusas
postres
Tamales
Sopas
Recetas tipicas
Atoles
¿Quieres subir tu receta?
Comunidad
Inciar sesion
`
let navIngles = `
Choose a language
Spanish
English
¡About us!
Recipes
Christmas
Easter
pupusas
desserts
Tamales
Soups
Typical recipes
Atoles
¿Want to upload your recipes?
Community
Log in
`
sopaIngles = sopaIngles.split("\n");
sopaEspañol = sopaEspañol.split("\n");

navIngles = navIngles.split("\n");
navEspañol = navEspañol.split("\n");

lang = sessionStorage.getItem("lang");
console.log(lang)

if(!lang){
    lang = sessionStorage.setItem("lang", "es");
}



function  traducir(element) {
    console.log(element)
    if(element.id == "idioma-ingles"){   
        
        navIngles.forEach((element, i) => {
            if(!element) return
             
            if (document.querySelector("[data-nav='"+i+"']")) {
                document.querySelector("[data-nav='"+i+"']").innerHTML = element;
            }
        });
        sopaIngles.forEach((element, i) => {
            if(!element) return
             
            document.querySelector("[data-sopa='"+i+"']").innerHTML = element;
        });
        document.querySelector("input[type=submit").value = "Send"
       sessionStorage.setItem("lang", "en");
       lang = sessionStorage.getItem("lang");


    }
    else if(element.id == "idioma-español"){
        navEspañol.forEach((element, i) => {
            if(!element) return
            if (document.querySelector("[data-nav='"+i+"']")) {
                
                document.querySelector("[data-nav='"+i+"']").innerHTML = element;
            }
        });
        sopaEspañol.forEach((element, i) => {
            if(!element) return
            document.querySelector("[data-sopa='"+i+"']").innerHTML = element;
        });
        document.querySelector("input[type=submit").value = "Enviar"
       sessionStorage.setItem("lang", "es");
       lang = sessionStorage.getItem("lang");
    }
    console.log(lang)
}

document.querySelector(".wrapper-caja").addEventListener("click", ()=>{
    document.querySelector(".options").classList.toggle("mostrar");
    document.querySelector(".caja__arrow").classList.toggle("changeOrientation");
})