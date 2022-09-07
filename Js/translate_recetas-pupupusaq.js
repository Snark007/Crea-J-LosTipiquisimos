// let español, english;
let pupusaqEspañol = `
PUPUSA DE QUESO
Las pupusas son el plato típico de El Salvador y muy popular en Honduras. Esta delicia muestra la versatilidad del maíz como producto básico en la cocina de los países mesoamericanos. Se pueden comparar con las gorditas de maíz mexicanas o las arepas rellenas, pero los rellenos y la cocción son diferentes. La principal diferencia es que las pupusas se rellenan antes de cocerse y las gorditas y arepas se rellenan después de cocidas. Esto da a las pupusas una rica combinación del sabor del maíz con el relleno con el que se cocina, comúnmente queso, frijoles o chicharrones.
Ingredientes:
Medio kilo de harina de maíz o de arroz
Agua tibia
Quesillo
Sal
Aceite
Preparación:
El primer paso a realizar, es la elaboración de la masa, para lo que necesitaremos una taza, donde servirás Medio kilo de harina de maíz o arroz ( o la cantidad que gustes, al final nunca es mucha) y agrega agua tibia. Para unir ambos ingredientes, debes usar tus manos, amasando constantemente para que no queden grumos.
Si al amasar notamos que la masa está algo dura, agregaremos un poco más de agua junto con algo de sal para dar sabor. Finalmente, nuestra masa no debe quedar ni tan aguada ni tan dura, de modo que puedas hacer una pelotita con ella y no se desmorone.
tener un envase con agua y aceite, el cual te ayudará a dar forma a las pupusas, de manera que la masa no se pegue a tus manos. Ahora, con las manos humedecidas, debes tomar una pelotita de masa y con ambas manos la vas aplanando hasta que quede como una tortilla.
Mientras das forma a la masa, debes ir humedeciendo tus manos en el agua. Si se te hace complicado, puedes utilizar tus dedos para hacer en el centro una pequeña hendidura, donde colocarás el relleno. Tomando un poco de quesillo.
Una vez que has colocado el relleno, se procede a envolver, dando forma de esférica. Finalmente, vuelves a aplanar y se coloca la pupusa en un comal o plancha bien caliente. Después de un rato, debes voltear con una espátula, de forma que no se pasen de cocción. Eso sí, cada vez que des vuelta a las pupusas debes mojar la espátula en el agua con aceite, así será más fácil. Con esto, ya estás listo para degustar unas ricas pupusas totalmente salvadoreñas.
© Los Tipiquísimos 2022-Derechos reservados
`
let pupusaqIngles = `
CHEESE PUPUSA
Pupusas are the typical dish of El Salvador and very popular in Honduras. This delicacy shows the versatility of corn as a basic product in the cuisine of Mesoamerican countries. They can be compared to Mexican corn gorditas or stuffed arepas, but the fillings and cooking are different. The main difference is that pupusas are stuffed before cooking and gorditas and arepas are stuffed after cooking. This gives pupusas a rich combination of the flavor of the corn with the filling with which it is cooked, commonly cheese, beans or chicharrones.
Ingredients:
Half a kilo of corn or rice flour.
Warm water
Cheese
Salt
Oil
Preparation:
The first step to do, is the preparation of the dough, for which we will need a cup, where you will serve Half a kilo of corn or rice flour (or the amount you like, in the end it is never much) and add warm water. To unite both ingredients, you must use your hands, kneading constantly so that there are no lumps.
If when kneading we notice that the dough is a little hard, we will add a little more water along with some salt to give flavor. Finally, our dough should be neither too watery nor too hard, so that you can make a little ball with it and it will not fall apart.
Have a container with water and oil, which will help you shape the pupusas, so that the dough does not stick to your hands. Now, with wet hands, take a small ball of dough and with both hands flatten it until it looks like a tortilla.
While you shape the dough, you should wet your hands in the water. If you find it difficult, you can use your fingers to make a small indentation in the center, where you will place the filling. Taking a little bit of quesillo.
Once you have placed the filling, proceed to wrap, giving it a spherical shape. Finally, flatten again and place the pupusa on a hot griddle or griddle. After a while, you should turn them over with a spatula, so that they do not overcook. Of course, every time you turn the pupusas you should dip the spatula in the oiled water, so it will be easier. With this, you are ready to taste some delicious and totally Salvadoran pupusas.
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
pupusaqIngles = pupusaqIngles.split("\n");
pupusaqEspañol = pupusaqEspañol.split("\n");

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
        pupusaqIngles.forEach((element, i) => {
            if(!element) return
             
            document.querySelector("[data-pupusaq='"+i+"']").innerHTML = element;
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
        pupusaqEspañol.forEach((element, i) => {
            if(!element) return
            document.querySelector("[data-pupusaq='"+i+"']").innerHTML = element;
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