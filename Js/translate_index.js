// let español, english;
let indexEspañol = `
Recetas Faciles
¡Animate a Cocinar!
`
let indexIngles = `
Easy Recipes
Get Cooking!
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
             
            document.querySelector("[data-nav='"+i+"']").innerHTML = element;
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
            document.querySelector("[data-nav='"+i+"']").innerHTML = element;
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