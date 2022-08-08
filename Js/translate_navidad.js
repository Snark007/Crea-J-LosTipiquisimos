// let español, english;
let navideñaEspañol = `
Recetas Navideñas
Estas son las recetas de comidas tipicos Navideñas disponibles.
Tamales de Pollo
Este delicioso platillo se prepara con masa, recaudo, pollo, papas, aceitunas y sal al gusto.
Ver más
Pan con Pollo
Muy ricos aperitivos de El Salvador que podemos degustar de forma tradicional en las fiestas decembrinas.
Ver más
Pavo en salsa
Sabroso pavo al estilo de El Salvador para disfrutar en las fiestas decembrinas.
Ver más
Los Tipiquisimos
© Los Tipiquisimos 2022-Derechos reservados
`
let navideñaIngles = `
Christmas Recipes
These are the recipes of typical Christmas meals available.
Chicken Tamales
This delicious dish is prepared with dough, recaudo, chicken, potatoes, olives and salt to taste.
See more
Bread with Chicken
Very tasty appetizers from El Salvador that we can enjoy in a traditional way during the Christmas holidays.
See more
Turkey in sauce
Tasty turkey in El Salvador style to enjoy during the Christmas holidays.
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
navideñaIngles = navideñaIngles.split("\n");
navideñaEspañol = navideñaEspañol.split("\n");

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
        navideñaIngles.forEach((element, i) => {
            if(!element) return
             
            document.querySelector("[data-navideña='"+i+"']").innerHTML = element;
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
        navideñaEspañol.forEach((element, i) => {
            if(!element) return
            document.querySelector("[data-navideña='"+i+"']").innerHTML = element;
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