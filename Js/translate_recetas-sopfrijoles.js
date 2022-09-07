// let español, english;
let sopfrijolesEspañol = `
SOPA DE FRIJOLES
La preparación de la Sopa de Frijoles es muy versátil, puedes gastar poco tiempo y dinero o mucho, todo depende de tus recursos. Toma en cuenta que la sopa tradicional de El Salvador solo requiere de la base fundamental, frijoles rojos, agua y solo un poco de sal, pese a esto si quieres invertir más puede agregarle desde verduras hasta carnes rojas.
Ingredientes:
2 libras de frijoles rojos de seda
2 libras de hueso de cerdo
Tomate
1 cabeza de ajo
Cilantro
Consomé de costilla
1 cebolla pequeña
Sal al gusto
Agua para el caldo
Preparación:
Yo te recomiendo poner los frijoles en agua desde un día antes de hacer la sopa, aunque no es estrictamente necesario.
Lo primero que debes hacer es picar el tomate en pequeños trozos. Luego también el chile, cilantro y la cebolla picada en pequeños trozos y dejarlos todo juntos en un recipiente.
Ponemos los frijoles en agua a cocinar a fuego medio. Encima de los frijoles echamos los huesos de cerdo.
Después le echamos los ingredientes picados que tenemos en el recipiente y lo echamos a la olla junto a los frijoles y los huesos.
Luego le echamos los dientes de ajos ya pelados. y revolvemos para que todo se disperse bien en toda la olla.
Ahora esperamos que los frijoles se ablanden, este proceso puede durar 2 horas o más, así que toca esperar.
Una vez los frijoles estén blandos es momento de echarle el consomé de costilla y sal al gusto, puedes ir echándole sal de a poco e ir revolviendo hasta encontrar el punto deseado.
Unos minutos después de echarle la sal y el consomé la sopa estará lista para consumir, retiramos del fuego y servimos.
© Los Tipiquísimos 2022-Derechos sopfrijoleservados
`
let sopfrijolesIngles = `
BEAN SOUP
The preparation of Bean Soup is very versatile, you can spend little time and money or a lot, it all depends on your resources. Take into account that the traditional soup of El Salvador only requires the fundamental base, red beans, water and just a little salt, despite this if you want to invest more you can add from vegetables to red meats.
Ingredients:
2 pounds of red silk beans
2 pounds of pork bone
Tomato
1 head of garlic
Cilantro
Rib consommé
1 small onion
Salt to taste
Water for the broth
Preparation:
I recommend you put the beans in water from a day before making the soup, although it is not strictly necessary.
The first thing to do is to chop the tomato into small pieces. Then also chop the chili, cilantro and onion into small pieces and put them all together in a bowl.
Put the beans in water to cook over medium heat. On top of the beans we add the pork bones.
Then we add the chopped ingredients that we have in the bowl and we add them to the pot together with the beans and the bones.
Then we add the peeled garlic cloves and stir so that everything is well dispersed throughout the pot.
Now we wait for the beans to soften, this process can take 2 hours or more, so it's time to wait.
Once the beans are soft it is time to add the rib consommé and salt to taste, you can add salt a little at a time and stir until you find the desired point.
A few minutes after adding the salt and consommé the soup will be ready to eat, remove from the heat and serve.
© Los Tipiquísimos 2022-Rights sopfrijoleserved.
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
Inciar sesión
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
sopfrijolesIngles = sopfrijolesIngles.split("\n");
sopfrijolesEspañol = sopfrijolesEspañol.split("\n");

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
        sopfrijolesIngles.forEach((element, i) => {
            if(!element) return
             
            document.querySelector("[data-sopfrijoles='"+i+"']").innerHTML = element;
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
        sopfrijolesEspañol.forEach((element, i) => {
            if(!element) return
            document.querySelector("[data-sopfrijoles='"+i+"']").innerHTML = element;
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