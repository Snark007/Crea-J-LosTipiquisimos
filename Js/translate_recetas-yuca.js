// let español, english;
let yucaEspañol = `
YUCA FRITA
En este artículo aprenderás a hacer yuca frita al estilo de una receta salvadoreña. Así que veamos antes un poco acerca de este delicioso alimento que nos cautiva a muchos cuando lo probamos.
Ingredientes:
½ lb de yuca
Sal al gusto
Aceite
Preparación:
Si deseamos freír nuestras porciones de yuca, una vez que ya estén sancochadas, las colocamos en la sartén con suficiente aceite, asegúrese de cortar la yuca en trozos alargados, se pone a freír y damos un tiempo de 3 a 5 minutos.
Por último, servimos nuestro plato caliente junto con chicharrones, curtido o salsa de tomate.
Los ingredientes para acompañar este plato quedan a su gusto.
Listo. Nos disponemos a degustar.
© Los Tipiquisimos 2022-Derechos reservados
`
let yucaIngles = `
FRIED YUCA
In this article you will learn how to make fried yucca in the style of a Salvadoran recipe. So let's first see a little about this delicious food that captivates many of us when we try it.
Ingredients:
½ lb of yucca
Salt to taste
Oil
Preparation:
If we wish to fry our yucca portions, once they are already parboiled, we place them in the pan with enough oil, make sure to cut the yucca into elongated pieces, put it to fry and we give a time of 3 to 5 minutes.
Finally, we serve our hot dish along with chicharrones, curtido or tomato sauce.
The ingredients to accompany this dish are left to your taste.
Ready. We are ready to taste.
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
yucaIngles = yucaIngles.split("\n");
yucaEspañol = yucaEspañol.split("\n");

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
        yucaIngles.forEach((element, i) => {
            if(!element) return
             
            document.querySelector("[data-yuca='"+i+"']").innerHTML = element;
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
        yucaEspañol.forEach((element, i) => {
            if(!element) return
            document.querySelector("[data-yuca='"+i+"']").innerHTML = element;
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