// let español, english;
let pavosalsaEspañol = `
PAVO EN SALSA
En muchos países es tradicional celebrar las navidades, incluyen en sus menús el pavo relleno asado, sobre todo para una reunión importante de amigos o familiares. Vamos a proponer una receta de como lo preparan por tierras salvadoreñas. Las variantes que podemos encontrarnos, sobre todo en los rellenos o de la manera de consumirlo, como en este caso se consumirá frío, pero con una salsa caliente.
Ingredientes:
1 pavo troceado (4 k)
1 cabeza de Ajo
1 pizca de Sal y Pimienta molida
1 pastilla de Caldo de ave
1 chorro de Aceite de oliva
1 cebolla
1 vaso pequeño de Vino blanco
1 trozo de Canela
3 gramos de Clavos de olor
10 granos de Pimienta
1 puñado de Almendras
Agua
3 hojas de Laurel
Preparación:
Empezamos por lavar muy bien los trozos de pavo para salpimentarlos al gusto. Luego, picamos los dientes de ajo en rodajas y los vamos colocando de forma aleatoria dentro de los trozos que tengamos de pavo.
Para terminar de sazonar el pavo, trituramos la pastilla de caldo hasta hacerla polvo y espolvoreamos con esto todos los trozos de carne. Reservar.
Por otro lado, ponemos aceite en una cazuela grande, con medio dedo será suficiente, y freímos las hojas de laurel junto con la cebolla en cascos o trozos grandes. Cuando ya estén listas, retiramos ambos ingredientes y reservamos aparte.
Continuamos la cocción en ese mismo aceite, pero ahora añadimos los trozos de pavo. Cocinamos hasta ver que se doran por todos lados y entonces los pasamos a otra cazuela nueva, que esté fría, junto con el aceite de la cocción.
Añadimos el vino en esta nueva cazuela junto con un poco de agua, la canela, los clavos y la pimienta en grano. Continuamos con la preparación de nuestro pavo en salsa, dejando la llama a fuego lento.
Esperamos hasta que el pavo esté tierno y la salsa la podemos espesar al gusto con un poco de maicena o harina. Recuerda que para usar cualquiera de las dos opciones deberás diluirla aparte antes de integrarla en la preparación.
Cuando el pavo en salsa esté listo y justo antes de servir, machacamos en un mortero el resto de los ajos fritos, los trozos de cebolla, las almendras y la molleja del pavo (previamente frita).
Este plato de pavo en salsa tiene un sabor espectacular y si no te gusta el pavo, puedes seguir el mismo procedimiento con pollo, ¡quedará buenísimo también.
Los Tipiquísimos 2022-Derechos reservados
`
let pavosalsaIngles = `
TURKEY IN SAUCE
In many countries it is traditional to celebrate Christmas, they include roasted stuffed turkey in their menus, especially for an important gathering of friends or family. We are going to propose a recipe of how it is prepared by Salvadoran lands. The variants that we can find, especially in the fillings or the way of consuming it, as in this case it will be consumed cold, but with a hot sauce.
Ingredients:
1 diced turkey (4k)
1 head of Garlic
1 pinch of salt and ground pepper
1 tablet of chicken broth
1 jet of olive oil
1 onion
1 small glass of white wine
1 piece of Cinnamon
3 grams of Cloves
10 peppercorns
1 handful of Almonds
Water
3 bay leaves
Preparation:
We start by washing the turkey pieces very well to season them to taste. Then, we chop the garlic cloves into slices and place them randomly inside the pieces of turkey we have.
To finish seasoning the turkey, grind the bouillon cube until it is powdered and sprinkle all the pieces of meat with this. Reserve.
On the other hand, put oil in a large saucepan, with half a finger will be enough, and fry the bay leaves together with the onion in hulls or large pieces. When they are ready, remove both ingredients and set aside.
We continue cooking in the same oil, but now we add the pieces of turkey. We cook until we see that they brown on all sides and then we pass them to another new pan, which is cold, along with the cooking oil.
Add the wine to this new saucepan along with a little water, the cinnamon, the cloves and the peppercorns. We continue with the preparation of our turkey in sauce, leaving the flame over low heat.
We wait until the turkey is tender and the sauce can be thickened to taste with a little cornstarch or flour. Remember that to use either of the two options you must dilute it separately before integrating it into the preparation.
When the turkey in sauce is ready and just before serving, crush the rest of the fried garlic, the onion pieces, the almonds and the turkey gizzard (previously fried) in a mortar.
This turkey in sauce dish has a spectacular flavor and if you don't like turkey, you can follow the same procedure with chicken, it will be great too!
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
pavosalsaIngles = pavosalsaIngles.split("\n");
pavosalsaEspañol = pavosalsaEspañol.split("\n");

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
        pavosalsaIngles.forEach((element, i) => {
            if(!element) return
             
            document.querySelector("[data-pavosalsa='"+i+"']").innerHTML = element;
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
        pavosalsaEspañol.forEach((element, i) => {
            if(!element) return
            document.querySelector("[data-pavosalsa='"+i+"']").innerHTML = element;
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