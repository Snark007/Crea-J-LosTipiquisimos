// let español, english;
let pupusaEspañol = `
Recetas de Pupusas.
Estas son las recetas de pupusas disponibles.
Pupusas de frijol con queso.
La pupusa de frijol con queso es una de las variedades de pupusa más populares en El Salvador.
Ver más
Pupusas revueltas
Este sabroso plato salvadoreño se sirve a menudo con una ensalada de repollo tradicional llamada curtido.
Ver más
Pupusas de queso
Las pupusas son la comida típica salvadoreña por excelencia.
Ver más
Los Tipiquísimos
© Los Tipiquísimos 2022-Derechos reservados
`
let pupusaIngles = `
Pupusas Recipes.
These are the pupusas recipes available.
Bean pupusas with cheese.
Bean pupusa with cheese is one of the most popular varieties of pupusa in El Salvador.
See more
Scrambled pupusas
This tasty Salvadoran dish is often served with a traditional cabbage salad called curtido.
See more
Cheese Pupusas
Pupusas are the typical Salvadoran food par excellence.
See more
Los Tipiquísimos
Tipiquísimos 2022-Rights Reserved
`
let navEspañol = `
Elegir idioma
España
Ingles
¡Sobre nosotros!
Recetas
pupusas
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
pupusaIngles = pupusaIngles.split("\n");
pupusaEspañol = pupusaEspañol.split("\n");

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
        pupusaIngles.forEach((element, i) => {
            if(!element) return
             
            document.querySelector("[data-pupusa='"+i+"']").innerHTML = element;
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
        pupusaEspañol.forEach((element, i) => {
            if(!element) return
            document.querySelector("[data-pupusa='"+i+"']").innerHTML = element;
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