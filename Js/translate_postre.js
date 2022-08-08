// let español, english;
let postreEspañol = `
Recetas de Postres
Estas son las recetas de postres tipicos disponibles.
Arroz con leche
El arroz con leche es un postre típico hecho cociendo lentamente arroz con leche y azúcar.
Ver más
Quesadilla
La quesadilla es un platillo mexicano que consiste en una tortilla de maíz, o también de trigo
Ver más
Empanadas de plátano
Es un dulce económico y fácil de hacer ideal para hacer una merienda rápida. No puedes dejar de probarlo.
Ver más
Los Tipiquisimos
© Los Tipiquisimos 2022-Derechos reservados
`
let postreIngles = `
Dessert Recipes
These are the typical dessert recipes available.
Rice pudding
Rice pudding is a typical dessert made by slowly cooking rice with milk and sugar.
See more
Quesadilla
The quesadilla is a Mexican dish that consists of a corn tortilla, or wheat tortilla.
See more
Plantain Empanadas
It is an economical and easy-to-make sweet ideal for a quick snack. You can't miss it.
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
postres
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
postreIngles = postreIngles.split("\n");
postreEspañol = postreEspañol.split("\n");

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
             
            document.querySelector("[data-nav='"+i+"']").innerHTML = element;
        });
        postreIngles.forEach((element, i) => {
            if(!element) return
             
            document.querySelector("[data-postre='"+i+"']").innerHTML = element;
        });
        document.querySelector("input[type=submit").value = "Send"
       sessionStorage.setItem("lang", "en");
       lang = sessionStorage.getItem("lang");


    }
    else if(element.id == "idioma-español"){
        navEspañol.forEach((element, i) => {
            if(!element) return
            document.querySelector("[data-nav='"+i+"']").innerHTML = element;
        });
        postreEspañol.forEach((element, i) => {
            if(!element) return
            document.querySelector("[data-postre='"+i+"']").innerHTML = element;
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