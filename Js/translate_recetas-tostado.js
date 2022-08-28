// let español, english;
let tostadoEspañol = `
ATOL DE MAÍZ TOSTADO
El Atol de Maíz Tostado es una receta tradicional y folklórica de el salvador, que involucra la preparación de un manjar o bebida con la cual se alimentaban a los recién nacidos en épocas pre-colombinas, ya que cuenta con una gran carga de nutrientes y proteínas suficientes que contribuyen a la alimentación de manera específica.
Ingredientes:
2 tazas de maíz
2 vasos de leche
Canela en raja
8 granos de pimienta gorda
½ cucharadita de sal
Azúcar al gusto
Preparación:
Tuesta el maíz con una parte de la canela en un comal, plancha o cacerola. Después lo llevas al molino.
Disuelve la harina de maíz en 10 tazas de agua y cuela en una manta de colar.
Luego lo pones al fuego en una olla, agrega el resto de la canela, la pimienta, sal y azúcar revuelve y deja que hierva, revuelve constantemente.
Cuando el atol este hirviendo agrega los dos vasos de leche. Espera que suelte hervor y retira del fuego.
Cuando este colando el maíz, procura no echar demasiada agua, ya que podría quedar muy líquido.
© Los Tipiquisimos 2022-Derechos reservados
`
let tostadoIngles = `
ROASTED CORN ATOL
The Atol de Maíz Tostado is a traditional and folkloric recipe of El Salvador, which involves the preparation of a delicacy or drink with which newborns were fed in pre-Columbian times, as it has a high load of nutrients and sufficient proteins that contribute to food in a specific way.
Ingredients:
2 cups of corn
2 glasses of milk
Cinnamon in slits
8 grains of coarse pepper
½ teaspoon salt
Sugar to taste
Preparation:
Toast the corn with a part of the cinnamon in a comal, griddle or pan. Then take it to the grinder.
Dissolve the corn flour in 10 cups of water and strain it through a strainer.
Then you put it to the fire in a pot, add the rest of the cinnamon, pepper, salt and sugar, stir and let it boil, stirring constantly.
When the atol is boiling add the two glasses of milk. Wait for it to boil and remove from heat.
When the corn is straining, try not to add too much water, because it could be too liquid.
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
tostadoIngles = tostadoIngles.split("\n");
tostadoEspañol = tostadoEspañol.split("\n");

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
        tostadoIngles.forEach((element, i) => {
            if(!element) return
             
            document.querySelector("[data-tostado='"+i+"']").innerHTML = element;
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
        tostadoEspañol.forEach((element, i) => {
            if(!element) return
            document.querySelector("[data-tostado='"+i+"']").innerHTML = element;
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