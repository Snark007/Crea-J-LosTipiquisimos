// let español, english;
let enchiladaEspañol = `
ENCHILADAS
Las enchiladas salvadoreñas son un plato muy típico de la cocina de El Salvador. Algunos pensarán en las enchiladas mexicanas, que son tortillas rellenas bañadas en salsa. Pero las enchiladas salvadoreñas se parecen más a una tostada. Tradicionalmente, la tortilla se hace con masa de maíz mezclada con achiote, lo que les da el característico color naranja, pero no son picantes ni se usan chiles en la preparación. En esta receta, usamos tortillas de maíz regulares.
Ingredientes:
2 tazas de harina de maíz, para la masa.
1 cucharada de achiote, para la masa.
suficiente de sal, para la masa.
2 1/2 tazas de consomé de pollo, para la masa.
1/2 tazas de agua, para la masa.
2 cucharadas de mantequilla, para el pollo.
1 cucharada de ajo, finamente picado, para el pollo.
1 1/2 tazas de jitomate, en cubos pequeños, para el pollo.
1 1/2 tazas de pimiento verde, en cubos pequeños, para el pollo.
1 taza de cebolla morada, finamente picada, para el pollo.
2 tazas de pollo, cocido y desmenuzado.
2 cucharadas de salsa inglesa, para el pollo.
1 cucharada de sazonador de pollo, para el pollo.
suficiente de aceite, para freír las enchiladas.
2 tazas de frijoles refritos.
2 tazas de lechuga romana, en tiras delgadas.
2 jitomates, en rebanadas.
1 pepino, pelado y en rebanadas.
2 tazas de huevo, cocido y en rebanadas.
1 taza de queso fresco, rallado.
suficiente de salsa roja.
Preparación:
Para la masa: Mezcla la harina, el achiote, la sal y el consomé en un bowl, después vierte el agua poco a poco hasta obtener una masa homogénea, sin grumos y fácil de manejar. Si llegas a sentir que la masa para enchiladas está muy seca, agrega un poco más de caldo de pollo. Reserva.
Para el relleno: Agrega la mantequilla en un sartén, cuando esté derretida añade la cebolla, el ajo, el jitomate y el pimiento. Cocina por 5 minutos. Agrega el pollo, el curry, la salsa inglesa y el sazonador. Mezcla y cocina por 10 minutos. Reserva.
En una olla calienta el aceite a fuego medio. Con ayuda de tus manos forma una bolita de masa y aplasta, formando una tortillita no tan delgada, un poco gruesa y de 5 cm de diámetro. Agrega al aceite y fríe por 8 minutos o hasta que estén doradas. Coloca en un plato extendido con papel absorbente y reserva.
Para el montaje de las enchiladas salvadoreñas: Coloca una enchilada en un plato extendido y cubre con frijoles, posteriormente el pollo, lechuga, jitomate rebanado, pepino, huevo cocido y el queso fresco rallado. Acompaña con agua de sabor y salsa roja.
© Los Tipiquísimos 2022-Derechos reservados
`
let enchiladaIngles = `
ENCHILADAS
Salvadoran enchiladas are a very typical dish of El Salvador's cuisine. Some may think of Mexican enchiladas, which are stuffed tortillas dipped in sauce. But Salvadoran enchiladas are more like a tostada. Traditionally, the tortilla is made with corn masa mixed with achiote, which gives them the characteristic orange color, but they are not spicy and no chiles are used in the preparation. In this recipe, we use regular corn tortillas.
Ingredients:
2 cups corn flour, for the dough.
1 tablespoon of achiote, for the dough.
Enough salt for the dough.
2 1/2 cups of chicken bouillon, for the dough.
1/2 cups of water, for the dough.
2 tablespoons butter, for the chicken.
1 tablespoon garlic, finely chopped, for the chicken.
1 1/2 cups tomato, small cubes, for the chicken.
1 1/2 cups green bell bell pepper, finely diced, for the chicken.
1 cup red onion, finely chopped, for the chicken.
2 cups chicken, cooked and shredded.
2 tablespoons Worcestershire sauce, for the chicken.
1 tablespoon chicken seasoning, for the chicken.
Enough oil to fry the enchiladas.
2 cups of refried beans.
2 cups of romaine lettuce, in thin strips.
2 tomatoes, sliced.
1 cucumber, peeled and sliced.
2 cups of egg, cooked and sliced.
1 cup fresh cheese, grated.
enough red sauce.
Preparation:
For the dough: Mix the flour, achiote, salt and consommé in a bowl, then pour the water little by little until you get a homogeneous dough, without lumps and easy to handle. If you feel that the enchilada dough is too dry, add a little more chicken broth. Set aside.
For the filling: Add the butter in a frying pan, when it is melted add the onion, garlic, tomato and bell pepper. Cook for 5 minutes. Add the chicken, curry, Worcestershire sauce and seasoning. Mix and cook for 10 minutes. Set aside.
Heat the oil in a saucepan over medium heat. With the help of your hands form a ball of dough and flatten, forming a small tortilla not so thin, a little thick and 5 cm in diameter. Add to the oil and fry for 8 minutes or until golden brown. Place on a plate spread with paper towels and set aside.
To assemble the enchiladas salvadoreñas: Place an enchilada on a plate and cover with beans, then the chicken, lettuce, sliced tomato, cucumber, boiled egg and grated fresh cheese. Serve with flavored water and red sauce.
Los Tipiquísimos 2022-Rights reserved
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
enchiladaIngles = enchiladaIngles.split("\n");
enchiladaEspañol = enchiladaEspañol.split("\n");

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
        enchiladaIngles.forEach((element, i) => {
            if(!element) return
             
            document.querySelector("[data-enchilada='"+i+"']").innerHTML = element;
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
        enchiladaEspañol.forEach((element, i) => {
            if(!element) return
            document.querySelector("[data-enchilada='"+i+"']").innerHTML = element;
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