// let español, english;
let panpolloEspañol = `
PANES CON POLLO
Muy ricos aperitivos de El Salvador que podemos degustar de forma tradicional en fiestas patrióticas o en las fiestas decembrinas. La alternativa ideal para conocer la gastronomía de la tierra centroamericana, que envuelve con su deliciosa salsa de pollo, sazón salvadoreña
Ingredientes:
panes (tipo francés)
pechuga de pollo de preferencia
Tomates
Pepino
Lechuga romana
Repollo
Mayonesa
Zanahorias
Cebolla
Hojitas de laurel
Margarina
Vinagre
Preparación:
Limpia el pollo y córtalo en partes, condiméntalo a tu gusto y déjalo uno minutos para que se adhiera el sabor, cóselo a fuego lento, guarda su consomé, una vez seco separa el consomé del pollo y sofríe el pollo hasta que dore, junta el consomé en la licuadora con los tomates, la cebolla, el ajo y salpimienta.
Júntalo con el pollo y sofríe hasta que la salsa quede completamente cocida
Luego corta la zanahoria, el pepino y puedes agregar coliflor para crear escabeche, agrega la margarina y el vinagre luego remoja con mayonesa
Lo último es cortar el pan agrega mayonesa en ambos lados, incluye la salsa de pollo, y rellénalo con el pollo y el resto de ingredientes a tu gusto
Los Tipiquisimos 2022-Derechos reservados
`
let panpolloIngles = `
BREADS WITH CHICKEN
Very tasty appetizers from El Salvador that we can taste in a traditional way in patriotic celebrations or in the Christmas holidays. The ideal alternative to get to know the gastronomy of the Central American land, which wraps with its delicious chicken sauce, Salvadoran seasoning.
Ingredients:
bread (French type)
chicken breast of preference
Tomatoes
Cucumber
Romaine lettuce
Cabbage
Mayonnaise
Carrots
Onion
Bay leaves
Margarine
Vinegar
Preparation:
Clean the chicken and cut it in parts, season it to your taste and leave it for a few minutes to let the flavor adhere, cook it over low heat, save the broth, once dry, separate the broth from the chicken and sauté the chicken until golden brown, put the broth in the blender with the tomatoes, onion, garlic and salt and pepper.
Add it to the chicken and sauté until the sauce is completely cooked.
Then chop the carrot, cucumber and you can add cauliflower to create a marinade, add the margarine and vinegar then soak with mayonnaise.
The last thing is to cut the bread, add mayonnaise on both sides, include the chicken sauce, and fill it with the chicken and the rest of the ingredients to your liking.
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
panpolloIngles = panpolloIngles.split("\n");
panpolloEspañol = panpolloEspañol.split("\n");

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
        panpolloIngles.forEach((element, i) => {
            if(!element) return
             
            document.querySelector("[data-panpollo='"+i+"']").innerHTML = element;
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
        panpolloEspañol.forEach((element, i) => {
            if(!element) return
            document.querySelector("[data-panpollo='"+i+"']").innerHTML = element;
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