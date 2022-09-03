// let español, english;
let subirEspañol = `
Quieres subir tus recetas debes realizar los siguientes pasos al pies de la letra como te indican.
Para empezar.
Primero ingresa el nombre de tu recetas de forma presisa como: pupusas de queso con loroco
Despues de eso.
Tendrás que poner una descripción de tus receta que anterior mente avías mencionado.
Una vez ya hecho el punto anterior.
Ingresa los igredientes de tu receta. Cada ingrediente al finalizae tendra que dijitar un "Enter" y al iniciar con un "-" por motivos de separación.
Ahora tienes que.
Poner como lo preparastes para que los demas usuarios puedan seguir la receta al pie de la letra. Por cada paso deberan de dar un espaciado con un enter y por cada instrucción deberan númerarla. 
Ya para terminar.
Solo tienes que poner una imagen de referencia como que te tiene que quedar.
Solicitud de recetas.
Nombre de la receta.
Descripcion.
Igredientes.
Preparacion.
Imagen.
`
let subirIngles = `
If you want to upload your recipes, you must follow the steps below as indicated.
To get started
First enter the name of your recipe in a short form like: pupusas de queso con loroco.
After that
You will have to put a description of your recipe that you mentioned before.
Once you have done the previous point
Enter the ingredients of your recipe. Each ingredient at the end will have to say an "Enter" and at the beginning with a "-" for separation reasons.
Now you have to
Put how you prepared it so that other users can follow the recipe to the letter. For each step you will have to space it with an enter and for each instruction you will have to number it. 
Now to finish
All you have to do is put a reference image of how it should look like.
Request for prescriptions.
Name of the recipe.
Description.
Ingredients.
Preparation.
Image.
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
             
            if (document.querySelector("[data-nav='"+i+"']")) {
                document.querySelector("[data-nav='"+i+"']").innerHTML = element;
            }
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
            if (document.querySelector("[data-nav='"+i+"']")) {
                
                document.querySelector("[data-nav='"+i+"']").innerHTML = element;
            }
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