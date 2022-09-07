// let español, english;
let piñuelaEspañol = `
ATOL DE PIÑUELA
El sabroso y tradicional Atol de Piñuela, es otra de las ricas variedades de atoles que tenemos en El Salvador. Y ahora, usted lo puede hacer en casa utilizando esta receta. Fuente: Recetas Salvadoreñas
Ingredientes:
1 piñuela
2 dulces de atado
3 tazas de harina de arroz
Canela en rajas a tu gusto
8 granos de pimienta gorda
½ cucharada de sal
Azúcar al gusto
Preparación:
Corta todas las piñitas del gajo, quilates la puntita con un cuchillo y luego las pones a hervir en agua por diez minutos. Retirarás del fuego, déjalas enfriar y luego a cada una le extraes el contenido del cual tienes que separar las semillas. El siguiente paso es volver a introducir el contenido en cada una de las piñitas.
Ahora en una olla con dos tazas de agua derrite el atado con la canela luego integras las piñitas y cocina a fuego lento para que se conserven muy bien. Este proceso lleva 45 minutos aproximadamente.
Mientras tanto, en otro depósito disuelve la harina de arroz con 10 tazas de agua y cuela en una servilleta de tela.
Cuando las piñitas estén bien conservadas agrega la preparación anterior. Continua la cocción e incorpora la pimienta gorda, cuidando de remover para que no se pegue. Verifica el sabor de las piñas y si hace falta agrega una porción más de dulce de panela cuando este se derrita. Cuando hierva, retira del fuego.
Y ya esta listo disfruta de tu sabroso atol
© Los Tipiquísimos 2022-Derechos reservados
`
let piñuelaIngles = `
ATOL DE PIÑUELA
The tasty and traditional Atol de Piñuela, is another of the rich varieties of atoles that we have in El Salvador. And now, you can make it at home using this recipe. Source: Recetas Salvadoreñas
Ingredients:
1 piñuela
2 candies of atado
3 cups of rice flour
Cinnamon sticks to your liking
8 grains of coarse pepper
½ tablespoon salt
Sugar to taste
Preparation:
Cut all the pineapples from the gore, carve off the tip with a knife and then boil them in water for ten minutes. Remove them from the fire, let them cool and then extract the content from each one, from which you have to separate the seeds. The next step is to reintroduce the contents into each of the pineapples.
Now in a pot with two cups of water melt the bundle with the cinnamon and then integrate the pineapples and cook over low heat so that they keep very well. This process takes approximately 45 minutes.
Meanwhile, in another tank, dissolve the rice flour with 10 cups of water and strain through a cloth napkin.
When the piñitas are well preserved, add the previous preparation. Continue cooking and add the coarse pepper, taking care to stir so that it does not stick. Check the flavor of the pineapples and if necessary add a portion more of dulce de panela when it melts. When it boils, remove from heat.
And now you are ready to enjoy your tasty atol.
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
piñuelaIngles = piñuelaIngles.split("\n");
piñuelaEspañol = piñuelaEspañol.split("\n");

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
        piñuelaIngles.forEach((element, i) => {
            if(!element) return
             
            document.querySelector("[data-piñuela='"+i+"']").innerHTML = element;
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
        piñuelaEspañol.forEach((element, i) => {
            if(!element) return
            document.querySelector("[data-piñuela='"+i+"']").innerHTML = element;
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