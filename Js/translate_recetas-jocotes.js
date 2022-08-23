// let español, english;
let jocoteEspañol = `
JOCOTES EN MIEL
Si de comidas deliciosas y postres típicos de El Salvador se puede hablar definitivamente se tienen que nombrar los jocotes en miel, plato exquisito propio de la temporada del verano, de hecho los salvadoreños acostumbran a realizar este dulce en temporada de cuaresma (Semana Santa). La combinación de sabores al paladar se hace realmente interesante a la hora de degustar este rico postre. Asíque te invitamos a prepararlo en casa con la receta que te presentaremos.
Ingredientes:
30 jocotes
2 litros de agua
1 dulce de atado (panela) ó 1 lb de azúcar
Canela al gusto
2/3 taza de ceniza
Preparación:
Prepare una mezcla de agua para agregar la ceniza. Posteriormente hervirla. Cuando el agua rompa el hervor agregue los jocotes.
Una vez vea que los jocotes se han agrietado sáquelos del agua y quíteles la cáscara con la mano. Cuando los haya pelado corte en cruz sin quitar la semilla y resérvelos para próximo paso.
En otra olla ponga a hervir a fuego lento el agua con el dulce de atado y la canela. Agregue los jocotes ya pelados y déjelos cocinar durante una hora.
Revise si la miel ya está conservada. Sino déjela hasta conservar. La ceniza permite pelar mejor los jocotes, que éstos no pierdan su textura ni su tamaño.
Recomendación: Seleccionar jocotes de tipo ácido (en Semana Santa). También puede hacerse del tipo dulce de invierno (de junio hasta agosto). No se recomienda hacerlo del de corona (de agosto a septiembre).
Los Tipiquisimos 2022-Derechos reservados
`
let jocoteIngles = `
JOCOTES HONEY
If you can talk about delicious foods and typical desserts from El Salvador, you definitely have to name the jocotes in honey, an exquisite dish typical of the summer season, in fact Salvadorans usually make this sweet during the Lent season (Holy Week). The combination of flavors on the palate becomes really interesting when tasting this rich dessert. So we invite you to prepare it at home with the recipe that we will present to you.
Ingredients:
30 jocotes
2 liters of water
1 tied sweet (panela) or 1 lb of sugar
Cinnamon to taste
2/3 cup ash
Preparation:
Prepare a mixture of water to add the ash. Then boil it. When the water breaks the boil add the jocotes.
Once you see that the jocotes have cracked, take them out of the water and remove the shell by hand. When you have peeled them, cut them crosswise without removing the seed and reserve them for the next step.
In another pot, bring the water to a simmer with the tied candy and the cinnamon. Add the already peeled jocotes and let them cook for an hour.
Check if the honey is already preserved. Otherwise, leave it until you keep it. The ash allows the jocotes to be better peeled, so that they do not lose their texture or their size.
Recommendation: Select acid-type jocotes (at Easter). It can also be made of the sweet winter type (June through August). It is not recommended to do it from the corona (from August to September).
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
jocoteIngles = jocoteIngles.split("\n");
jocoteEspañol = jocoteEspañol.split("\n");

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
        jocoteIngles.forEach((element, i) => {
            if(!element) return
             
            document.querySelector("[data-jocote='"+i+"']").innerHTML = element;
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
        jocoteEspañol.forEach((element, i) => {
            if(!element) return
            document.querySelector("[data-jocote='"+i+"']").innerHTML = element;
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