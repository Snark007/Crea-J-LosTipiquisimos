// let español, english;
let tamalEspañol = `
PUPUSA FRIJOL QUESO
Las pupusas son un platillo tradicional de El Salvador, existen de diferentes rellenos, en este caso te dejamos la receta de pupusas con frijos y queso, sin embgardo puedes hacerla solo de queso o frijoles, con chicharrones, etc. Es importante que tengas a tu disposición 1 plancha para poder realizarlas y que queden bien doraditas.
Ingredientes:
Medio kilo de harina de maíz o de arroz
Agua tibia
Quesillo
Sal
Aceite
Chicharron molido
Frijoles molidos fritos
Preparación:
El primer paso a realizar, es la elaboración de la masa, para lo que necesitaremos una taza, donde servirás Medio kilo de harina de maíz o arroz ( o la cantidad que gustes, al final nunca es mucha) y agrega agua tibia. Para unir ambos ingredientes, debes usar tus manos, amasando constantemente para que no queden grumos.
Si al amasar notamos que la masa está algo dura, agregaremos un poco más de agua junto con algo de sal para dar sabor. Finalmente, nuestra masa no debe quedar ni tan aguada ni tan dura, de modo que puedas hacer una pelotita con ella y no se desmorone.
Debes tener un envase con agua y aceite, el cual te ayudará a dar forma a las pupusas, de manera que la masa no se pegue a tus manos. Ahora, con las manos humedecidas, debes tomar una pelotita de masa y con ambas manos la vas aplanando hasta que quede como una tortilla.
Mientras das forma a la masa, debes ir humedeciendo tus manos en el agua. Si se te hace complicado, puedes utilizar tus dedos para hacer en el centro una pequeña hendidura, donde colocarás el relleno. Tomando un poco de chicharrón y frijoles revueltos previamente con el quesillo.
Una vez que has colocado el relleno, se procede a envolver, dando forma de esférica. Finalmente, vuelves a aplanar y se coloca la pupusa en un comal o plancha bien caliente. Después de un rato, debes voltear con una espátula, de forma que no se pasen de cocción. Eso sí, cada vez que des vuelta a las pupusas debes mojar la espátula en el agua con aceite, así será más fácil. Con esto, ya estás listo para degustar unas ricas pupusas totalmente salvadoreñas.
Los Tipiquisimos 2022-Derechos reservados
`
let tamalIngles = `
PUPUSA FRIJOL QUESO
Pupusas are a traditional dish from El Salvador, there are different fillings, in this case we leave you the recipe for pupusas with beans and cheese, however you can make it only with cheese or beans, with pork rinds, etc. It is important that you have at your disposal 1 iron to be able to make them and that they are well browned.
Ingredients:
Half a kilo of corn or rice flour
Warm water
quesillo
Salt
Oil
ground pork rinds
fried ground beans
Preparation:
The first step to carry out is the preparation of the dough, for which we will need a cup, where you will serve half a kilo of corn or rice flour (or the amount you like, in the end it is never too much) and add warm water. To unite both ingredients, you must use your hands, constantly kneading so that there are no lumps.
If when kneading we notice that the dough is somewhat hard, we will add a little more water along with some salt to give flavor. Finally, our dough should not be so watery or so hard, so that you can make a ball with it and it does not fall apart.
You must have a container with water and oil, which will help you shape the pupusas, so that the dough does not stick to your hands. Now, with moistened hands, you must take a small ball of dough and with both hands you flatten it until it is like a tortilla.
While you shape the dough, you must moisten your hands in the water. If you find it difficult, you can use your fingers to make a small indentation in the center, where you will place the filling. Taking a little pork rind and beans previously mixed with the quesillo.
Once you have placed the filling, proceed to wrap it, giving it a spherical shape. Finally, flatten again and place the pupusa on a very hot griddle or griddle. After a while, you must turn with a spatula, so that they do not overcook. Of course, every time you turn the pupusas you must dip the spatula in the water with oil, that way it will be easier. With this, you are ready to taste some delicious totally Salvadoran pupusas.
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
tamalIngles = tamalIngles.split("\n");
tamalEspañol = tamalEspañol.split("\n");

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
        tamalIngles.forEach((element, i) => {
            if(!element) return
             
            document.querySelector("[data-tamal='"+i+"']").innerHTML = element;
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
        tamalEspañol.forEach((element, i) => {
            if(!element) return
            document.querySelector("[data-tamal='"+i+"']").innerHTML = element;
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