// let español, english;
let tamal1Español = `
TAMAL DE PIQUE
Los tamales de frijol es muy típica en mi pueblo, ademas de tener un rico sabor, son muy económicos y la podemos acompañarlos con un rico taza de cafe. Como ingrediente principal ocuparemos frijol y nixtamal, El nixtamal consiste en la adición de una solución de cal a una porción de maíz.
Ingredientes:
2 libras de maíz
3 tazas de frijoles molidos y fritos
1/2 Libra de manteca
Sazonador de pollo y sal al gusto
Hojas de huerta para cubrirlos
Preparación:
Lo primero es cocer el maíz un día antes y molerlo en molino de nixtamal para obtener la masa, aunque también se puede hacer con harina de maíz.
A la masa de maíz le agregamos un poco de agua, de manera que no quede ni muy dura ni muy aguada, también se le agrega sal al gusto, el sazonador de pollo y la manteca (si lo desea puede usar manteca de cerdo), luego debe cocinar esta masa.
El siguiente paso es preparar las hojas de huerta, que son indispensables para darles un mejor sabor a los tamales, sin embargo, necesitamos que estas hojas estén firmes y para ello debemos ponerlas en el sol hasta que se encuentren un poco tostadas, se recomienda lavar las hojas antes de ponerlas al sol, ya que podrían contener polvo.
Ahora comienza la preparación de los tamales pisques y para ello se corta un pedazo de hoja de unos 25 centímetros, se agregan dos cucharadas soperas de masa y en el centro se agrega una cucharada de frijoles, luego debe envolver estos ingredientes en la hoja, de manera que no se salga la masa y que quede bien firme, si lo desea puede usar papel plástico para cubrir la hoja del tamal.
El último paso consiste en colocar los tamales en una olla al fuego, agregándole agua a la olla y dejándolos al fuego por un tiempo de una hora y media hasta que se encuentren bien cocidos.
Los Tipiquisimos 2022-Derechos reservados
`
let tamal1Ingles = `
PIQUE TAMAL
Bean tamales are very typical in my town, besides having a rich flavor, they are very economical and we can accompany them with a rich cup of coffee. As main ingredient we will use beans and nixtamal, The nixtamal is the addition of a lime solution to a portion of corn.
Ingredients:
2 pounds of corn
3 cups of ground and fried beans
1/2 pound of lard
Chicken seasoning and salt to taste.
Garden leaves to cover them
Preparation:
The first thing is to cook the corn a day before and grind it in a nixtamal mill to obtain the dough, although it can also be made with corn flour.
To the corn dough we add a little water, so that it is neither too hard nor too watery, also add salt to taste, chicken seasoning and lard (if you want you can use lard), then you must cook this dough.
The next step is to prepare the garden leaves, which are indispensable to give a better flavor to the tamales, however, we need these leaves to be firm and for this we must put them in the sun until they are a little toasted, it is recommended to wash the leaves before putting them in the sun, as they may contain dust.
Now begins the preparation of the tamales pisques and to do this cut a piece of leaf of about 25 centimeters, add two tablespoons of dough and in the center add a spoonful of beans, then you must wrap these ingredients in the leaf, so that the dough does not come out and is very firm, if you want you can use plastic wrap to cover the tamale leaf.
The last step consists of placing the tamales in a pot on the fire, adding water to the pot and leaving them on the fire for an hour and a half until they are well cooked.
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
tamal1Ingles = tamal1Ingles.split("\n");
tamal1Español = tamal1Español.split("\n");

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
        tamal1Ingles.forEach((element, i) => {
            if(!element) return
             
            document.querySelector("[data-tamal1='"+i+"']").innerHTML = element;
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
        tamal1Español.forEach((element, i) => {
            if(!element) return
            document.querySelector("[data-tamal1='"+i+"']").innerHTML = element;
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