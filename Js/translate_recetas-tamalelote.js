// let español, english;
let tamaleloteEspañol = `
TAMAL DE ELOTE
Acá te explicamos paso a paso la preparación de los tradicionales tamales de elotes, que tanto gustan. El exquisito sabor del maíz es lo que caracteriza este plato.
Ingredientes:
Elotes de preferencia frescos y que no estén tiernos
¼ taza de leche entera
¼ taza de manteca tienes que derretirlas
hojas de tusa de elote
Azúcar al gusto
Sal al gusto
Preparación:
Como primer paso vamos a desgranar nuestros elotes para luego molerlos de preferencia en un molino industrial para que sea más fácil también puedes hacerlo en un molino casero o licuadora, tiene que quedar una masa fina.
Cuando tenemos nuestra masa fina le incorporamos la leche, el azúcar y unos granitos de sal, revolvemos bien todos los ingredientes y dejamos por último la manteca hasta que se incorporen bien todos los ingredientes.
En este paso puedes agregar los chicharrones para darle un toque delicioso.
Con las hojas de tusa vamos agregar dos o tres cucharadas de la masa y los enrollamos, con las puntas vamos a doblar para que queden cerrados.
En una olla grande vamos agregar en el fondo una cama de tamales para luego colocar los demás en forma vertical, agregamos suficiente agua pero que no cubra por completo los tamales y cocinamos durante unos 30 minutos.
Tapamos con las hojas para que conserve aún más el sabor, listo transcurrido el tiempo verificamos que la hoja esté de color amarilla este nos indicará que están en su punto, servimos y disfrutamos con un toque de crema.
© Los Tipiquisimos 2022-Derechos reservados
`
let tamaleloteIngles = `
CORN TAMALES
Here we explain step by step the preparation of the traditional corn tamales, which are so popular. The exquisite flavor of corn is what characterizes this dish.
Ingredients:
Corn, preferably fresh and not tender.
¼ cup of whole milk
¼ cup of lard you have to melt them
corn husks
Sugar to taste
Salt to taste
Preparation:
As a first step we are going to shell our corn to then grind them preferably in an industrial mill to make it easier you can also do it in a home grinder or blender, it has to be a fine dough.
When we have our fine dough we add the milk, sugar and a few grains of salt, stir well all the ingredients and finally add the butter until all the ingredients are well incorporated.
In this step you can add the cracklings to give it a delicious touch.
With the tusa leaves add two or three spoonfuls of the dough and roll them up, with the ends we are going to fold them so that they are closed.
In a large pot we are going to add a bed of tamales at the bottom and then place the rest vertically, add enough water but do not cover the tamales completely and cook for about 30 minutes.
Cover with the leaves to preserve even more flavor, ready after the time has elapsed check that the leaf is yellow this will indicate that they are ready, serve and enjoy with a touch of cream.
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
tamaleloteIngles = tamaleloteIngles.split("\n");
tamaleloteEspañol = tamaleloteEspañol.split("\n");

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
        tamaleloteIngles.forEach((element, i) => {
            if(!element) return
             
            document.querySelector("[data-tamalelote='"+i+"']").innerHTML = element;
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
        tamaleloteEspañol.forEach((element, i) => {
            if(!element) return
            document.querySelector("[data-tamalelote='"+i+"']").innerHTML = element;
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