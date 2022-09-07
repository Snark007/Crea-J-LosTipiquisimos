// let español, english;
let empanadasEspañol = `
EMPANADAS DE PLATANO
Las empanadas de plátano son una delicia que no puede faltar en la cocina Salvadoreña. Cada familia tiene su manera especial de prepararlas y sus recetas se pasan de generación en generación. En esta receta convertimos el plátano maduro en un deliciosos puré que se rellena c on Frijoles Rojos Volteados, como resultado unas empanadas dulces y saladas a la vez, una exquisita comida tradicional.
Ingredientes:
10 plátanos maduros
Media taza de azúcar
2 rajitas de canela
1 cucharadita de vainilla
Media taza de leche
4 cucharadas de maicena
2 cucharaditas de azúcar
Aceite
Preparación:
Corte cada plátano en cuatro partes. Se vierten cinco tazas de agua en un recipiente hondo junto con el azúcar, la vainilla y la canela.
Se deja cocinar a fuego medio por aproximadamente media hora o hasta que los plátanos estén cocidos.
Cuando esto suceda se dejan enfriar. Luego en otro recipiente se va agregar la leche y la maicena poco a poco hasta que esté bien diluida. Se le añade un poco de azúcar.
Siempre verificando para que no quede muy dulce. Se le añade una cucharadita de vainilla y de canela en polvo. Seguidamente se cocina a fuego medio, siempre revolviendo hasta que espese, empiece a hervir y se deja enfriar.
Se pisan los plátanos con un tenedor hasta que quede una masa. Se toma un poco de la mala y se forman pequeñas tortillitas, a estas tortillitas se le van a poner la leche poleada que esta fría y dura, se cierra la tortillita como un sobre, sellando los bordes para que no se le salga el relleno.
Luego se prosigue a freír cada empanada en aceite caliente hasta que las empanadas estén doraditas.
Listas para disfrutar con un poco de azúcar rociada por encima.
Los Tipiquísimos 2022-Derechos reservados
`
let empanadasIngles = `
PLANTAIN EMPANADAS
Plantain empanadas are a delicacy that cannot be missing in Salvadoran cuisine. Each family has its own special way of preparing them and their recipes are passed from generation to generation. In this recipe we turn the ripe plantain into a delicious puree that is stuffed with Volteados Red Beans, resulting in a sweet and savory empanadas at the same time, an exquisite traditional food.
Ingredients:
10 ripe plantains
Half a cup of sugar
2 cinnamon sticks
1 teaspoon vanilla
Half cup of milk
4 tablespoons cornstarch
2 teaspoons sugar
Oil
Preparation:
Cut each banana into four parts. Pour five cups of water in a deep pot together with the sugar, vanilla and cinnamon.
Cook over medium heat for about half an hour or until the plantains are cooked.
When this happens, let them cool down. Then in another container add the milk and the cornstarch little by little until it is well diluted. Add a little sugar.
Always making sure it is not too sweet. Add a teaspoon of vanilla and cinnamon powder. Then it is cooked over medium heat, always stirring until it thickens, begins to boil and is left to cool.
Mash the bananas with a fork until a dough is formed. Take some of the dough and form small tortillas, to these tortillas you will put the milk that is cold and hard, close the tortilla like an envelope, sealing the edges so that the filling does not come out.
Then proceed to fry each empanada in hot oil until the empanadas are golden brown.
Ready to enjoy with a sprinkling of sugar on top.
Los Tipiquísimos 2022-Rights Reserved
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
empanadasIngles = empanadasIngles.split("\n");
empanadasEspañol = empanadasEspañol.split("\n");

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
        empanadasIngles.forEach((element, i) => {
            if(!element) return
             
            document.querySelector("[data-empanadas='"+i+"']").innerHTML = element;
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
        empanadasEspañol.forEach((element, i) => {
            if(!element) return
            document.querySelector("[data-empanadas='"+i+"']").innerHTML = element;
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