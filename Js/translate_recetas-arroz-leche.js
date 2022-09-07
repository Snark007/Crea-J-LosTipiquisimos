// let español, english;
let arrozlecheEspañol = `
ARROZ CON LECHE
El arroz con leche es un postre casero y cremoso elaborado principalmente con arroz y leche, como su nombre indica. Su receta original es disfrutada en prácticamente cualquier lugar del mundo, lo que también ha dado lugar a algunas variedades sobre el postre tradicional. Aunque normalmente se consume de último en el menú y para cerrar la velada, en algunos países europeos se sirve como desayuno, ya que es muy similar a las gachas de arroz.
Ingredientes:
4 tazas de leche
6 tazas de agua
1 taza de azúcar
1/3 taza de arroz de grano largo
4 canela en rama
2 cucharadas de mantequilla
1 pizca de sal
1/8 cucharadita de nuez moscada en polvo
¼ taza de pasas
Preparación:
Preparación previa: Empapa el arroz en una mezcla de 1 taza de leche y 1 de agua y pon el refrigerador por unas horas antes.
Esto te ahorrará tiempo de cocción.
Pon las 4 tazas restantes de agua en un caldero y pon al fuego, agrega la canela y la sal.
Lleva ebullición y después agrega el arroz (con el líquido en que estaba remojado).
Revuelve regularmente para evitar que se adhiera al fondo.
Ajusta el agua cuando sea necesario y cuando el arroz esté muy blando agrega la leche y la mitad del azúcar.
Cuando empiece a hervir agrega las pasas y el azúcar restante.
Cuando tenga una consistencia muy espesa, casi sólida, retira del fuego y vierte inmediatamente en tazones pequeños o copas para helado.
Espolvorea con nuez moscada moscada molida y deja refrescar.
Pon en el refrigerador por 30 minutos antes de servir.
Los Tipiquísimos 2022-Derechos reservados
`
let arrozlecheIngles = `
RICE PUDDING
Rice pudding is a creamy homemade dessert made mainly with rice and milk, as its name suggests. Its original recipe is enjoyed almost everywhere in the world, which has also given rise to some varieties of the traditional dessert. Although it is usually consumed last on the menu and to close the evening, in some European countries it is served as breakfast, as it is very similar to rice porridge.
Ingredients:
4 cups of milk
6 cups of water
1 cup sugar
1/3 cup long grain rice
4 cinnamon sticks
2 tablespoons butter
1 pinch of salt
1/8 teaspoon powdered nutmeg
¼ cup raisins
Preparation:
Advance preparation: soak the rice in a mixture of 1 cup milk and 1 cup water and put in the refrigerator for a few hours beforehand.
This will save you cooking time.
Put the remaining 4 cups of water in a cauldron and heat, add the cinnamon and salt.
Bring to a boil and then add the rice (with the liquid in which it was soaked).
Stir regularly to prevent it from sticking to the bottom.
Adjust the water when necessary and when the rice is very soft add the milk and half of the sugar.
When it starts to boil add the raisins and the remaining sugar.
When it has a very thick, almost solid consistency, remove from the heat and immediately pour into small bowls or ice cream cups.
Sprinkle with ground nutmeg and let cool.
Place in the refrigerator for 30 minutes before serving.
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
arrozlecheIngles = arrozlecheIngles.split("\n");
arrozlecheEspañol = arrozlecheEspañol.split("\n");

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
        arrozlecheIngles.forEach((element, i) => {
            if(!element) return
             
            document.querySelector("[data-arrozleche='"+i+"']").innerHTML = element;
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
        arrozlecheEspañol.forEach((element, i) => {
            if(!element) return
            document.querySelector("[data-arrozleche='"+i+"']").innerHTML = element;
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