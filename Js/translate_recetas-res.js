// let español, english;
let resEspañol = `
SOPA DE RES
Una de las sopas mas populares en El Salvador no solo por su sabor que es exquisita, sino que también por ser una receta fácil de preparar y que ha ido pasando de generación en generación.
Ingredientes:
2 Gallinas indias
media Libra hueso de res de preferencia con carne
1 Libra de costilla de res
1 Tomates grandes
1/2 Chile verde
1/2 Cebolla blanca grande
Agua para el caldo
3 Dientes de ajo
1 Manojo de olor como cilantro, apio, hierbabuena, alcapate
1 Limón
Sal al gusto
Pimienta al gusto
2 yucas grandes
2 güisquiles
Ejotes al gusto
2-3 Elote
1/2 Repollo
Preparación:
En una olla de preferencia grande colocar el agua y dejar hervir con el hueso de res a fuego medio cuando esté hirviendo dejar medio destapado durante 20-25 minutos.
Cuando esté hirviendo agregarles las hierbas aromáticas como el cilantro, apio, perejil junto con el tomate, cebolla y los dientes de ajo, tapamos y dejamos cocinar durante 20 minutos, recuerda verificar cada cierto tiempo el nivel de agua y agregar más si fuese necesario.
Mientras se cocina el hueso, vamos a partir las verduras en porciones pequeñas para facilitar la cocción, estas se irán incorporando conforme al nivel de cocción que necesite más tiempo.
Recuerda que la yuca y el elote son los que toman más tiempo para su cocción, una vez estén suaves se le agrega el resto de verduras.
Revuelve regularmente para evitar que se adhiera al fondo.
Ajusta el agua cuando sea necesario y cuando el arroz esté muy blando agrega la leche y la mitad del azúcar.
Cuando empiece a hervir agrega las pasas y el azúcar restante.
Cuando tenga una consistencia muy espesa, casi sólida, retira del fuego y vierte inmediatamente en tazones pequeños o copas para helado.
Espolvorea con nuez moscada moscada molida y deja refrescar.
Pon en el refrigerador por 30 minutos antes de servir.
© Los Tipiquísimos 2022-Derechos reservados
`
let resIngles = `
BEEF SOUP
One of the most popular soups in El Salvador not only for its exquisite flavor, but also for being an easy to prepare recipe that has been passed from generation to generation.
Ingredients:
2 Indian hens
Half a pound of beef bone, preferably with meat.
1 pound of beef rib
1 large tomato
1/2 green chili
1/2 large white onion
Water for the broth
3 cloves of garlic
1 bunch of spices such as cilantro, celery, mint, capers
1 lemon
Salt to taste
Pepper to taste
2 large yuccas
2 güisquiles
Beans to taste
2-3 corn
1/2 cabbage
Preparation:
In a pot preferably large place the water and let it boil with the beef bone over medium heat when it is boiling leave half uncovered for 20-25 minutes.
When it is boiling add the aromatic herbs such as cilantro, celery, parsley along with the tomato, onion and garlic cloves, cover and let it cook for 20 minutes, remember to check the water level from time to time and add more if necessary.
While the bone is cooking, we are going to divide the vegetables in small portions to facilitate the cooking, these will be incorporated according to the level of cooking that needs more time.
Remember that the yucca and corn take the longest to cook, once they are soft add the rest of the vegetables.
Stir regularly to avoid sticking to the bottom.
Adjust the water when necessary and when the rice is very soft add the milk and half of the sugar.
When it starts to boil add the raisins and the remaining sugar.
When it has a very thick, almost solid consistency, remove from the heat and immediately pour into small bowls or ice cream cups.
Sprinkle with ground nutmeg and let cool.
Place in the refrigerator for 30 minutes before serving.
© Los Tipiquísimos 2022-Rights reserved.
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
resIngles = resIngles.split("\n");
resEspañol = resEspañol.split("\n");

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
        resIngles.forEach((element, i) => {
            if(!element) return
             
            document.querySelector("[data-res='"+i+"']").innerHTML = element;
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
        resEspañol.forEach((element, i) => {
            if(!element) return
            document.querySelector("[data-res='"+i+"']").innerHTML = element;
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