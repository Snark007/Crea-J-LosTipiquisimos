// let español, english;
let nosotrosEspañol = `
SOBRE NOSOTROS
Nosotros somos Los Tipiquisimos un sitio web, nuestra principal meta es brindar recetas sobre la gastronomía Salvadoreña para que todas las diferentes culturas y países sepan apreciar los sabores de nuestras tierras salvadoreñas.
MISIÓN
Dar a conocer la comida salvadoreña brindando recetas de buena calidad y excelentes pasos, para llegar a recrearlas con el fin de que las personas puedan lograr hacer todo tipo de comida típica salvadoreña.
VISIÓN
Ser el mejor website que brinde recetas de comidas tipicas salvadoreñas logrando ser mundialmente conocido y logrando que las personas conozcan la gran variedad de platillos que se encuentran en nuestro país.
Los Tipiquisimos
© Los Tipiquisimos 2022-Derechos reservados
`
let nosotrosIngles = `
ABOUT US
We are Los Tipiquisimos a web site, our main goal is to provide recipes about Salvadoran gastronomy Salvadorian gastronomy so that all different cultures and countries can appreciate the flavors of our Salvadorian lands. the flavors of our Salvadoran lands.
MISSION
To make Salvadoran food known by providing good quality recipes and excellent steps, in order to recreate them so that people can make all kinds of typical Salvadoran food.
VIEW
To be the best website that offers recipes of typical Salvadoran food, achieving to be known worldwide and making people know the great variety of dishes found in our country.
Tipiquisimos
Tipiquisimos 2022-Rights Reserved
`
let navEspañol = `
Elegir idioma
España
Ingles
¡Sobre nosotros!
Recetas
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
¿Want to upload your recipes?
Community
Log in
`
nosotrosIngles = nosotrosIngles.split("\n");
nosotrosEspañol = nosotrosEspañol.split("\n");

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
        nosotrosIngles.forEach((element, i) => {
            if(!element) return
             
            document.querySelector("[data-nosotros='"+i+"']").innerHTML = element;
        });

       sessionStorage.setItem("lang", "en");
       lang = sessionStorage.getItem("lang");


    }
    else if(element.id == "idioma-español"){
        navEspañol.forEach((element, i) => {
            if(!element) return
            document.querySelector("[data-nav='"+i+"']").innerHTML = element;
        });
        nosotrosEspañol.forEach((element, i) => {
            if(!element) return
            document.querySelector("[data-nosotros='"+i+"']").innerHTML = element;
        });

       sessionStorage.setItem("lang", "es");
       lang = sessionStorage.getItem("lang");
    }
    console.log(lang)
}

document.querySelector(".wrapper-caja").addEventListener("click", ()=>{
    document.querySelector(".options").classList.toggle("mostrar");
    document.querySelector(".caja__arrow").classList.toggle("changeOrientation");
})