// let español, english;
let atolesEspañol = `
Recetas de Atoles.
Estas son las recetas de atoles típicos disponibles.
Atol Piñuela.
El sabroso y tradicional Atol de Piñuela, es otra de las ricas variedades de atoles que tenemos.
Ver más
Atol de Elote.
El atol de elote es una deliciosa bebida dulce hecha de maíz.
Ver más
Atol de maíz tostado.
El atol de maíz tostado es muy rico y es uno de los atoles mas deseados por todos los salvadoreños.
Ver más
Los Tipiquisimos
© Los Tipiquisimos 2022-Derechos reservados
`
let atolesIngles = `
Atoles Recipes.
These are the typical atoles recipes available.
Atol Piñuela.
The tasty and traditional Atol de Piñuela, is another of the rich varieties of atoles that we have.
See more
Atol de Elote.
Atol de elote is a delicious sweet drink made from corn.
See more
Roasted corn atol.
The roasted corn atol is very tasty and is one of the most desired atoles by all Salvadorans.
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
atoless
Semana santa
atoless
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
atoless
desserts
Tamales
Soups
Typical recipes
Atoles
¿Want to upload your recipes?
Community
Log in
`
atolesIngles = atolesIngles.split("\n");
atolesEspañol = atolesEspañol.split("\n");

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
        atolesIngles.forEach((element, i) => {
            if(!element) return
             
            document.querySelector("[data-atoles='"+i+"']").innerHTML = element;
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
        atolesEspañol.forEach((element, i) => {
            if(!element) return
            document.querySelector("[data-atoles='"+i+"']").innerHTML = element;
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