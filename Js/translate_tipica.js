// let español, english;
let tipicaEspañol = `
Recetas de comida
Estas son las recetas de comidas tipicos disponibles.
Yuca frita
La yuquita frita sin lugar a duda es el aperitivo perfecto para acompañar una rica comida.
Ver más
Pastelitos
son un tipo de empanadas rellenas, fritas, suculentas y crujientes.
Ver más
Enchiladas
Las enchiladas salvadoreñas son un plato muy típico de la cocina de El Salvador.
Ver más
Los Tipiquisimos
© Los Tipiquisimos 2022-Derechos reservados
`
let tipicaIngles = `
Food recipes
These are the typical food recipes available.
Fried yucca
Fried yucca is undoubtedly the perfect appetizer to accompany a delicious meal.
See more
Pastelitos
are a type of stuffed, fried, succulent and crunchy empanadas.
See more
Enchiladas
Enchiladas salvadoreñas are a very typical dish of El Salvador's cuisine.
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
tipicas
Semana santa
pupusas
tipicas
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
tipicaIngles = tipicaIngles.split("\n");
tipicaEspañol = tipicaEspañol.split("\n");

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
        tipicaIngles.forEach((element, i) => {
            if(!element) return
             
            document.querySelector("[data-tipica='"+i+"']").innerHTML = element;
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
        tipicaEspañol.forEach((element, i) => {
            if(!element) return
            document.querySelector("[data-tipica='"+i+"']").innerHTML = element;
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