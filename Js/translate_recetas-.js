// let español, english;
let pescadocalzadoEspañol = `
PESCADO CALZADO
El pescado seco es aquel pescado, normalmente bacalao, sin salar que se seca al sol y al aire sobre rejillas de madera en la playa o en casa de secado especiales. El secado es una de las técnicas de preservación de alimentos más antiguas, y el pescado seco se conserva comestible durante varios años.
Ingredientes:
8 pescados secos y saldos
6 huevos
Consomé de camarón
Sal
4 tomates maduros
½ cebolla pequeña
Chile verde
Preparación:
Prepare el pescado seco con días de anticipación. El pescado puede ser cualquiera y si no les gusta quitar espinas al comer pueden usar lonjas de pescado sin espinas
Primero pondremos nuestros pescados secos en agua para que se ablanden y se les caiga el exceso de sal por 10 minutos aproximadamente.
En eso se pone una cacerola a calentar con suficiente aceite En lo que se calienta el aceite, vamos a separar las yemas de las claras y vamos a batir hasta punto turrón o nieve, cuando ya estén en su punto agregamos las yemas y revolvemos bien.
Cuando los pescados secos ya hayan escurrido toda la sal, los secamos con papel absorbente y llenamos cada pescado con el huevo batido y los agregamos al aceite para que se frían por ambos lados. Al finalizar con todos los pescados, los pondremos en un plato en lo que se prepara la salsa.
Licue los tomates, cebolla y chile verde con poquita sal, agregue agua y licuamos; vertemos la salsa en una olla hasta hervir. SE agrega el consomé de camarón o el que haya elegido y probamos de sabor, no dejar muy sazonada la salsa por los pescados.
Cuando la salsa ya haya hervido agregamos los pescados envueltos en huevo hasta hervir por unos 5 minutos y se sirve con arroz blanco y ensalada fresca.
Y ya tienes tu platillo para disfrutar.
Los Tipiquisimos 2022-Derechos reservados
`
let pescadocalzadoIngles = `
SHOE FISH 
Dried fish is unsalted fish, usually cod, that dries in the sun and in the air on wooden racks on the beach or in a special drying house. Drying is one of the oldest food techniques, and dried fish remains edible for several years.
Ingredients:
8 dried fish and balances
6 eggs
Shrimp consomme
Salt
4 ripe tomatoes
½ small onion
green chile
Preparation:
Prepare the dried fish days in advance. The fish can be any and if you don't like to remove bones when eating, you can use fish strips without bones
First we will put our dried fish in water so that they soften and the excess salt falls off for approximately 10 minutes.
In this, a saucepan is heated with enough oil. While the oil is heated, we are going to separate the yolks from the whites and we are going to beat until nougat or snow point, when they are ready, we add the yolks and stir well.
When the dried fish have already drained all the salt, we dry them with absorbent paper and fill each fish with the beaten egg and add them to the oil so that they are fried on both sides. At the end of all the fish, we will put them on a plate in which the sauce is prepared.
Blend the tomatoes, onion and green chili with a little salt, add water and blend; Pour the sauce into a pot until it boils. Add the shrimp consommé or the one you have chosen and taste it, do not leave the sauce too seasoned for the fish.
When the sauce has already boiled, add the fish wrapped in egg until boiling for about 5 minutes and serve with white rice and fresh salad.
And now you have your dish to enjoy.
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
pescadocalzadoIngles = pescadocalzadoIngles.split("\n");
pescadocalzadoEspañol = pescadocalzadoEspañol.split("\n");

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
        pescadocalzadoIngles.forEach((element, i) => {
            if(!element) return
             
            document.querySelector("[data-pescadocalzado='"+i+"']").innerHTML = element;
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
        pescadocalzadoEspañol.forEach((element, i) => {
            if(!element) return
            document.querySelector("[data-pescadocalzado='"+i+"']").innerHTML = element;
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