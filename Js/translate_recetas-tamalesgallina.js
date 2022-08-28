// let español, english;
let tamalEspañol = `
TAMAL DE GALLINA
Los tamales de pollo o gallina, son uno de los platos mas populares en El Salvador. Y son una tradición para fin de año o para casi todo tipo de fiesta.
Ingredientes:
3 Lbs. de maíz
2 Litros de agua o hasta cubrir el maíz
1 gallina o 1 pollo
2 cebollas medianas
3 tomates
2 chiles dulces
5 dientes de ajo
1 zanahoria
1 Lb. de papas, sal y pimienta al gusto
Preparación:
Para la masa:
En una olla grande se cuece el maíz durante más o menos 45 Minutos con el fuego medio (con una cucharada de cal) o hasta que esté blando, luego se lleva al molino, o se muele en casa en un molinillo casero o en la licuadora (no lo recomiendo mucho) hasta hacer una masa fina. Pero no le ponga mucha agua porque luego le vamos a agregar sopa de gallina. Si utiliza Maseca, simplemente diluya la harina con un poquito de agua y parte de la sopa del pollo o gallina, hasta lograr la consistencia deseada.
Armado de los tamales:
Antes de usar las hojas de plátano, hay que lavarlas, secarlas al sol para que se ablanden y desvenar. Cortar en rectángulos y poner dos trozos de hojas de plátanos, uno sobre otro, pero el de arriba en diagonal con respecto al de abajo, sobre ellos colocar una cucharada de masa, unos trozos de gallina, un poco de papa cocida, algunas alcaparras, unas aceitunas; salsear y tapar con otra cucharada de masa. Doblar la hoja donde apoya el relleno más cercano a Usted hacia arriba, sujeté los bordes laterales para que no se escurra el relleno y doblar nuevamente. Realice el mismo procedimiento con la otra hoja y envolver con papel. Cocción de los tamales: Para cocer los tamales, rellene el fondo de una olla profunda con bolas de papel o compre una olla especial para tamales las cuales ya traen un fondo especial, encima colocar los tamales y cubrir de agua, los tamales estarán cuando las hojas de plátano se cuezan, el tiempo aproximado es de 40 Minutos.
© Los Tipiquisimos 2022-Derechos reservados
`
let tamalIngles = `
CHICKEN TAMALES
Chicken tamales are one of the most popular dishes in El Salvador. And they are a tradition for the end of the year or for almost any kind of party.
Ingredients:
3 Lbs. of corn
2 Liters of water or until the corn is covered.
1 hen or 1 chicken
2 medium onions
3 tomatoes
2 sweet chiles
5 cloves of garlic
1 carrot
1 Lb. of potatoes, salt and pepper to taste
Preparation:
For the dough:
In a large pot cook the corn for about 45 minutes with medium heat (with a tablespoon of lime) or until it is soft, then take it to the mill, or grind it at home in a homemade grinder or in the blender (I do not recommend it much) to make a fine dough. But don't put too much water in it because we are going to add chicken soup later. If you use Maseca, simply dilute the flour with a little water and part of the chicken soup, until you reach the desired consistency.
Assembling the tamales:
Before using the plantain leaves, wash them, dry them in the sun to soften them and devein them. Cut into rectangles and place two pieces of banana leaves, one on top of the other, but the top one diagonally with respect to the bottom one, place on them a spoonful of dough, some pieces of chicken, some cooked potato, some capers, some olives; season and cover with another spoonful of dough. Fold the sheet where the filling rests closest to you upwards, hold the lateral edges so that the filling does not drip out and fold again. Do the same procedure with the other sheet and wrap with paper. Cooking the tamales: To cook the tamales, fill the bottom of a deep pot with paper balls or buy a special pot for tamales which already have a special bottom, place the tamales on top and cover with water, the tamales will be ready when the banana leaves are cooked, the approximate time is 40 minutes.
Los Tipiquisimos 2022-Rights reserved.
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