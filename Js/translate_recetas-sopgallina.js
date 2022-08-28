// let español, english;
let sopgallinaEspañol = `
SOPA DE GALLINA
El caldo de pollo es una sopa.​ A menudo se sirve con trozos de carne o con granos de arroz o cebada, pasta, zanahoria, papa amarilla, apio, cebolla blanca, etc.​ Se considera también un remedio casero curativo contra los enfriamientos y los catarros y la rinitis.
Ingredientes:
2 Gallinas indias
2 Cebollas
3 Zanahorias
2 Güisquiles
6 Pipianes
2 Tomates
1 Cabeza de ajo
Media Libra de ejotes
10 Hojas de albahaca de gallina
sal
Un cuarto de onza de pimienta blanca
1 Taza de arroz
Preparación:
Cortar la gallina en porciones (las que necesite) y lavarla en agua fría hasta que quede limpia.
Cocer las porciones en agua con sazonador de pollo junto con las cebollas y el ajo. Cortar las verduras en trozos y agregarlas cuando la carne esté blanda junto con el arroz lavado, es decir, más o menos una hora o hasta que la gallina esté blanda.
Después, para darle olor al caldo con la albahaca de gallina y la hierbabuena, al mismo tiempo sazonarla con sal y pimienta al gusto.
También se suele sacar las piezas grandes de la gallina y se ponen a asar a las brazas para acompañar la sopita.
La gallina asada se sirve aparte con arroz y ensalada, y por supuesto, tortillas recién hechas o tostadas. Una verdadera delicia
© Los Tipiquisimos 2022-Derechos reservados
`
let sopgallinaIngles = `
CHICKEN SOUP
Chicken broth is a soup. It is often served with pieces of meat or with rice or barley grains, pasta, carrot, yellow potato, celery, white onion, etc. It is also considered a curative home remedy against colds and catarrhs and rhinitis.
Ingredients:
2 Indian hens
2 Onions
3 carrots
2 Güisquiles
6 Pipianes
2 tomatoes
1 Head of garlic
Half a pound of green beans
10 Basil leaves of hen basil
salt
One quarter ounce of white pepper
1 cup of rice
Preparation:
Cut the hen into portions (as many as you need) and wash in cold water until clean.
Cook the portions in water with chicken seasoning along with the onions and garlic. Cut the vegetables into pieces and add them when the meat is tender along with the washed rice, that is, about an hour or until the chicken is tender.
Then to scent the broth with the hen basil and mint, at the same time season it with salt and pepper to taste.
Also the big pieces of the hen are usually taken out and put to roast to accompany the soup.
The roasted hen is served on the side with rice and salad, and of course, freshly made or toasted tortillas. A true delight
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
sopgallinaIngles = sopgallinaIngles.split("\n");
sopgallinaEspañol = sopgallinaEspañol.split("\n");

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
        sopgallinaIngles.forEach((element, i) => {
            if(!element) return
             
            document.querySelector("[data-sopgallina='"+i+"']").innerHTML = element;
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
        sopgallinaEspañol.forEach((element, i) => {
            if(!element) return
            document.querySelector("[data-sopgallina='"+i+"']").innerHTML = element;
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