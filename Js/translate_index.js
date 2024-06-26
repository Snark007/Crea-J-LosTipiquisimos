// let español, english;
let indexEspañol = `
Recetas Faciles
¡Anímate a Cocinar!
La cocina es una parte esencial de
una dieta equilibrada.
Una receta no tiene alma, es el cocinero quien debe
darle alma a la receta.
Receta mañanera; una taza de optimismo, dos cucharadas de 
dulzura y dos kilos de energía positiva.
Lo único que me gusta más que hablar
de comida es comer.
Descubre
la historia
Los Tipiquisimos es Sitio Web que pretende ayudar a las personas que quieran aprender sobre la gastronomia salvadoreña.
Nosotros
Lo mejor de la comida
Salvadoreña
Descubre tu talento
en la cocina
Podras subir tus recetas de comida de el salvador y demostrar tus habilidades en la cocina
para que los demas usuarios puedan recrear tus recetas
subir mi receta
Los Tipiquísimos
© Los Tipiquísimos 2022-Derechos reservados
`
let indexIngles = `
Easy recipes
Cheer up to cook!
The kitchen is an essential part of
a balanced diet.
A recipe does not have a soul, it is the cook who must
give soul to the recipe.
morning recipe; a cup of optimism, two tablespoons of
sweetness and two kilos of positive energy.
The only thing I like more than talking
of food is eating.
Discover
the history
Los Tipiquisimos is a website that aims to help people who want to learn about Salvadoran cuisine.
Us
best of food
Salvadoran
discover your talent
in the kitchen
You can upload your food recipes from El Salvador and demonstrate your skills in the kitchen
so that other users can recreate your recipes
upload my recipe
Los Tipiquísimos
Tipiquísimos 2022-Rights Reserved
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