// let español, english;
let santaEspañol = `
Recetas de Semana Santa
Estas son las recetas de semana Santa tipicas disponibles.
Torrejas en miel
Las torrejas salvadoreñas son un platillo típico que no puede faltar en Semana Santa
Ver más
Tortas de pescado
Este platillo muy característico de la época de Semana Santa en el país
Ver más
Jocotes en miel
Los jocotes en miel son unas de las comidas dulces más deliciosas de Semana Santa
Ver más
Los Tipiquísimos
© Los Tipiquísimos 2022-Derechos reservados
`
let santaIngles = `
Easter Recipes
These are the typical Easter recipes available.
Torrejas in honey
Salvadoran torrejas are a typical dish that can not be missed at Easter.
See more
Fish cakes
This dish is very characteristic of the Holy Week season in the country.
See more
Jocotes in honey
Jocotes in honey are one of the most delicious sweet dishes of Easter.
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
santas
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
santaIngles = santaIngles.split("\n");
santaEspañol = santaEspañol.split("\n");

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
        santaIngles.forEach((element, i) => {
            if(!element) return 
            document.querySelector("[data-santa='"+i+"']").innerHTML = element;
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
        santaEspañol.forEach((element, i) => {
            if(!element) return
            document.querySelector("[data-santa='"+i+"']").innerHTML = element;
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