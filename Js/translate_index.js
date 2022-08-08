// let español, english;
let indexEspañol = `
Recetas Faciles
¡Animate a Cocinar!
la belleza se acaba el hambre no
Casate con alguien que cocine rico
Los abdominales son temporales.
El chocolate es para siempre
La que cocina no esta
pero la que esta no cocina
Lo único que me gusta más que hablar
de comida es comer
Descubre
La Historia
Los Tipiquisimos somos un Sitio Web que pretende ayudar a las personas que quieran aprender sobre la gastronomia Salvadoreña
Nosotros
Lo mejor de la comida
Salvadoreña
Descubre tu talento
en la cocina
Podras subir tus recetas de comida de el salvador y demostrar tus habilidades en la cocina
para que los demas usuarios puedan recrear tus recetas
subir mi receta
Los Tipiquisimos
© Los Tipiquisimos 2022-Derechos reservados
`
let indexIngles = `
Easy Recipes
Get Cooking!
Marry someone who cooks good food
beauty is over hunger is not
Abs are temporary.
Chocolate is forever
The one who cooks is not here
but the one who is not cooking
The only thing I like more than talking about
about food is eating
Discover
The History
The Tipiquisimos is a website that aims to help people who want to learn about Salvadoran want to learn about Salvadoran gastronomy.
We
The best of the food
Salvadoran
Discover your talent
in the kitchen
You will be able to upload your food recipes from el salvador and show your skills in the kitchen
so that other users can recreate your recipes.
upload my recipe
Los Tipiquisimos
Tipiquisimos 2022-Rights Reserved
`
let navEspañol = `
Elegir idioma
España
Ingles
¡Sobre nosotros!
Recetas
Navideñas
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
indexIngles = indexIngles.split("\n");
indexEspañol = indexEspañol.split("\n");

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
        indexIngles.forEach((element, i) => {
            if(!element) return
             
            document.querySelector("[data-index='"+i+"']").innerHTML = element;
        });

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
        indexEspañol.forEach((element, i) => {
            if(!element) return
            document.querySelector("[data-index='"+i+"']").innerHTML = element;
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