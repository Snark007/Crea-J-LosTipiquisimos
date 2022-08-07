// let español, english;
let subirEspañol = `
Quieres subir tus recetas debes realizar los siguientes pasos al pies de la letra como te indican.
Para empezar
Primero ingresa el nombre de tu recetas de forma presisa como: pupusas de queso con loroco
Despues de eso
Tendrás que poner una descripción de tus receta que anterior mente avías mencionado
Una vez ya hecho el punto anterior
tienes que ingresar los igredientes de tu receta
Ahora tienes que
Poner como lo preparastes para que los demas usuarios puedan segir la receta al pie de la letra
Ya para terminar
Solo tienes que poner poner una imagen de referencia como que te tiene que quedar
Solicitud de recetas
Nombre de la receta
Descripcion
Igredientes
Preparacion
Imagen
`
let subirIngles = `
If you want to upload your recipes, you must follow the steps below as indicated.
To get started
First enter the name of your recipe in a short form like: pupusas de queso con loroco
After that
You will have to put a description of your recipe that you mentioned before.
Once you have done the previous point
you have to enter the ingredients of your recipe
Now you have to
Put how you prepared it so that other users can follow the recipe to the letter.
Now to finish
All you have to do is put a reference image of how it should look like.
Request for prescriptions
Name of the recipe
Description
Ingredients
Preparation
Image
`
let navEspañol = `
Elegir idioma
España
Ingles
¡Sobre subir!
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
subirIngles = subirIngles.split("\n");
subirEspañol = subirEspañol.split("\n");

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
        subirIngles.forEach((element, i) => {
            if(!element) return
             
            document.querySelector("[data-subir='"+i+"']").innerHTML = element;
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
        subirEspañol.forEach((element, i) => {
            if(!element) return
            document.querySelector("[data-subir='"+i+"']").innerHTML = element;
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