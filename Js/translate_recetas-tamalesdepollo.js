// let español, english;
let tamal_polloEspañol = `
Tamal de pollo
Los tamales de pollo o gallina, son uno de los platos mas populares en El Salvador. Y son una tradición para fin de año o para casi todo tipo de fiesta.
Ingredientes:
3 lb de masa de maíz
1 ½ lb de manteca o aceita
6 tazas de caldo de gallina
Guisado de pollo u otro ingrediente a su gusto
Un recipiente con aceituna, papas picadas, chile
alcaparras
1 hoja de huerta
En una cacerola grande, mezclas la masa con el caldo de gallina ya previamente colado, agregándolo poco a poco de una manera que se vaya haciendo liquida la masa.
Colócala en la sartén y ponla a cocinar. Sin dejar de moverla agrega la manteca o aceite, la dejas freír por más de 30 minutos hasta que se seque o consuma el caldo, quedando una masa muy tierna y con un color verde, de esta manera tendrás ya la masa lista para los tamales.
En el centro de la hoja colocamos una porción de masa, estiramos un poco que no sobrepase la hoja.
Luego colocamos una cucharada de recaudo, un trozo de pollo, papa, chile, aceitunas y la alcaparra, se envuelve de tal manera que estuvieses haciendo una pequeña almohada, amarrar bien con hilo o tiras de hojas.
En una olla grande, colocas dos hojas o capas de hojas en el fondo, luego colocas los tamales ya elaborados. Vierte el agua hasta la mitad de la altura de los tamales, los cubres con dos capas de hojas, colocas su tapa y dejas que hiervan por unos 40 minutos.
Chequea que la hoja parece como sudada, ese es la señal que indica que tus los deliciosos tamales ya están listos.
Listo. Nos disponemos a degustar.
Los Tipiquísimos 2022-Derechos reservados
`
let tamal_polloIngles = `
Chicken tamale
Chicken or chicken tamales are one of the most popular dishes in El Salvador. And they are a tradition for the end of the year or for almost any type of party.
Ingredients:
3 lb corn dough
1 ½ lb butter or oil
6 cups of chicken broth
Chicken stew or other ingredient of your choice
A bowl with olives, chopped potatoes, chili
capers
1 garden leaf
In a large saucepan, mix the dough with the previously strained chicken broth, adding it little by little in a way that the dough becomes liquid.
Put it in the pan and put it to cook. Without stopping to move it, add the butter or oil, let it fry for more than 30 minutes until that the broth dries or consumes, leaving a very tender dough with a green color, in this way you will already have the doughready for tamales.
In the center of the sheet we place a portion of dough, stretch a little that does not exceed the sheet.
Then we put a spoonful of collection, a piece of chicken, potato, chili, olives and the caper, it is wrapped in such a way that you were making a small pillow, tie it well with thread or strips of leaves.
In a large pot, you place two leaves or layers of leaves on the bottom, then place the already made tamales. Pour the water up to half the height of the tamales, cover them with two layers of leaves, put the lid on and let them boil for about 40 minutes.
Check that the leaf looks sweaty, that is the sign that your delicious tamales are ready.
Clever. We are ready to taste.
Los Tipiquísimos 2022-Rights reserved
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
tamal_polloIngles = tamal_polloIngles.split("\n");
tamal_polloEspañol = tamal_polloEspañol.split("\n");

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
        tamal_polloIngles.forEach((element, i) => {
            if(!element) return
             
            document.querySelector("[data-tamal_pollo='"+i+"']").innerHTML = element;
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
        tamal_polloEspañol.forEach((element, i) => {
            if(!element) return
            document.querySelector("[data-tamal_pollo='"+i+"']").innerHTML = element;
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