// let español, english;
let quesadillaEspañol = `
QUESADILLAS
La quesadilla salvadoreña es un pan dulce, similar a un bizcocho, hecho con harina de arroz y queso duro blanco y cubierto con semillas de sésamo, que es popular en El Salvador. Se suele servir con café como parte del desayuno o como merienda. Se hornea tradicionalmente los domingos por la mañana.
Ingredientes:
¾ taza mantequilla (1 ½ barra de mantequilla) a temperatura ambiente
2 tazas azúcar granulada
4 huevos grandes
¾ taza leche
¼ taza Crema Salvadoreña Tropical
2 tazas harina todo uso
2 cucharaditas levadura en polvo
¼ cucharadita sal
8oz Queso Fresco Salvadoreño Tropical desmenuzado (2 tazas)
1 cucharada semillas de sésamo
Preparación:
Precalentar el horno a 350°F. En un recipiente grande, con un mezclador eléctrico, une mantequilla y azúcar hasta que la mezcla aparezca ligera y cremosa. Añade los huevos, leche, y la crema Centroamericana Tropical; mezclar bien.
En un recipiente pequeño mezcla la harina, levadura en polvo, y sal. Añade esta combinación a la anterior de huevo, hasta que estén bien mezclados. Añade el Queso Fresco Tropical y mezclar bien.
Engrasar dos cacerolas de hornear redondas de 8”. Añade la masa a las cacerolas. Espolvorea cada barra de pan con semillas de sésamo. Hornear por 40 minutos hasta que puedas introducir un palillo al centro del pan y salga limpio.
Luego sirve y disfruta.
Los Tipiquisimos 2022-Derechos reservados
`
let quesadillaIngles = `
QUESADILLAS
The Salvadoran quesadilla is a sweet bread, similar to a sponge cake, made with rice flour and hard white cheese and covered with sesame seeds, which is popular in El Salvador. It is usually served with coffee as part of breakfast or as a snack. It is traditionally baked on Sunday mornings.
Ingredients:
¾ cup butter (1 ½ stick of butter) at room temperature.
2 cups granulated sugar
4 large eggs
¾ cup milk
¼ cup Crema Salvadoreña Tropical Cream
2 cups all-purpose flour
2 teaspoons baking powder
¼ teaspoon salt
8oz crumbled Queso Fresco Salvadoreño Tropical (2 cups)
1 tablespoon sesame seeds
Preparation:
Preheat oven to 350°F. In a large bowl, with an electric mixer, cream together butter and sugar until mixture appears light and creamy. Add eggs, milk, and Central American Tropical cream; mix well.
In a small bowl mix flour, baking powder, and salt. Add this combination to the previous egg combination, until well blended. Add the Queso Fresco Tropical and mix well.
Grease two 8" round baking pans. Add the batter to the pans. Sprinkle each loaf of bread with sesame seeds. Bake for 40 minutes until you can insert a toothpick into the center of the loaf and it comes out clean.
Then serve and enjoy.
Los Tipiquisimos 2022-Rights Reserved
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
quesadillaIngles = quesadillaIngles.split("\n");
quesadillaEspañol = quesadillaEspañol.split("\n");

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
        quesadillaIngles.forEach((element, i) => {
            if(!element) return
             
            document.querySelector("[data-quesadilla='"+i+"']").innerHTML = element;
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
        quesadillaEspañol.forEach((element, i) => {
            if(!element) return
            document.querySelector("[data-quesadilla='"+i+"']").innerHTML = element;
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