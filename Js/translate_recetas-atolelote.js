// let español, english;
let eloteEspañol = `
ATOL DE ELOTE
¡Esta delicia es todo un orgullo para el país! El famoso atol de elote que se prepara de manera artesanal en El Salvador ha marcado la historia local. No cabe duda se trata de una de las bebidas más populares de El Salvado gracias a su historia. También es una de las bebidas más representativas de la gastronomía Salvadoreña. Te contamos sobre este esta delicia a continuación.
Ingredientes:
1 ¾ taza de maíz/elote dulce recién desgranado
¾ taza de agua
½ taza de azúcar blanca
2 tazas de Leche Evaporada
2 rajas de canela
Preparación:
Licuar los granos de maíz/elote con el agua hasta formar una mezcla consistente. Agregar más agua de ser necesario. Pasar la mezcla por un colador fino y reservar el líquido.
Verter la mezcla colada en una cacerola a fuego bajo. Agregar el azúcar, la Leche Evaporada la canela y cocinar por 10 minutos fuego bajo revolviendo constantemente hasta que espese.
Retirar las rajas de canela y servir en jarra.
Servir tibio o refrigerar por 4 horas para disfrutar frio.
© Los Tipiquísimos 2022-Derechos reservados
`
let eloteIngles = `
ELOTE ATOL
This delicacy is a source of pride for the country! The famous atol de elote that is prepared in an artisanal way in El Salvador has marked the local history. It is undoubtedly one of the most popular beverages in El Salvado thanks to its history. It is also one of the most representative beverages of Salvadoran gastronomy. We tell you about this delicacy below.
Ingredients:
1 ¾ cup of freshly shelled sweet corn/elote.
¾ cup water
½ cup white sugar
2 cups of evaporated milk
2 cinnamon sticks
Preparation:
Blend the corn kernels/elote with the water until a consistent mixture is formed. Add more water if necessary. Pass the mixture through a fine strainer and reserve the liquid.
Pour the strained mixture into a saucepan over low heat. Add the sugar, Evaporated Milk and cinnamon and cook for 10 minutes over low heat stirring constantly until it thickens.
Remove the cinnamon sticks and serve in a pitcher.
Serve warm or refrigerate for 4 hours to enjoy chilled.
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
eloteIngles = eloteIngles.split("\n");
eloteEspañol = eloteEspañol.split("\n");

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
        eloteIngles.forEach((element, i) => {
            if(!element) return
             
            document.querySelector("[data-elote='"+i+"']").innerHTML = element;
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
        eloteEspañol.forEach((element, i) => {
            if(!element) return
            document.querySelector("[data-elote='"+i+"']").innerHTML = element;
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