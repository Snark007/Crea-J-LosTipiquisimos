// let español, english;
let torrejasEspañol = `
TORREJAS EN MIEL
Otro postre Salvadoreño que no falta en Semana Santa o en las festividades de Fin de Año son las torrejas en miel. Aunque también se hacen en leche, este postre se puede elaborar con pan o también están las torrejas de pinol. En esta oportunidad la receta es torrejas de pan en miel, la receta es fácil de hacer sólo debes seguir cada uno de los pasos para lograrlo y consentir a tu familia. tamales de pollo o gallina, son uno de los platos mas populares en El Salvador. Y son una tradición para fin de año o para casi todo tipo de fiesta.
Ingredientes:
3 huevos
3 cucharaditas de fécula de maíz Maizena
1/2 taza de aceite
6 rebanadas de pan de caja
1/2 taza de leche descremada
miel de abeja al gusto
Preparación:
En un recipiente batir las claras de los huevos muy bien. Una vez estén espumosas agregar la fécula de maíz y las yemas una por una. Continuar batiendo por 3 minutos más.
En una sartén, poner a calentar el aceite.
Mientras tanto, pasar los panes por la leche en un tazón, luego por la mezcla de huevos y finalmente freír muy bien por ambos lados, hasta que queden dorados y crujientes.
Servir las torrejas ya fritas bañándolas con la miel de abeja al gusto.
© Los Tipiquisimos 2022-Derechos reservados
`
let torrejasIngles = `
TORREJAS IN HONEY
Another Salvadoran dessert that is a must during Easter or New Year's Eve festivities is torrejas in honey. Although they are also made in milk, this dessert can be made with bread or there are also the torrejas de pinol. This time the recipe is torrejas de pan en miel, the recipe is easy to make just follow each of the steps to make it and pamper your family. Chicken tamales are one of the most popular dishes in El Salvador. And they are a tradition for New Year's Eve or for almost any kind of party.
Ingredients:
3 eggs
3 teaspoons cornstarch (Maizena)
1/2 cup of oil
6 slices of box bread
1/2 cup skim milk
honey to taste
Preparation:
In a bowl beat the egg whites very well. Once they are foamy add the cornstarch and the yolks one by one. Continue beating for 3 more minutes.
In a frying pan, heat the oil.
Meanwhile, dip the breads in the milk in a bowl, then in the egg mixture and finally fry very well on both sides, until golden brown and crispy.
Serve the fried torrejas with honey to taste.
Los Tipiquisimos 2022-Rights reserved
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
torrejasIngles = torrejasIngles.split("\n");
torrejasEspañol = torrejasEspañol.split("\n");

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
        torrejasIngles.forEach((element, i) => {
            if(!element) return
             
            document.querySelector("[data-torrejas='"+i+"']").innerHTML = element;
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
        torrejasEspañol.forEach((element, i) => {
            if(!element) return
            document.querySelector("[data-torrejas='"+i+"']").innerHTML = element;
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