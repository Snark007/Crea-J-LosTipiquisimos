// let español, english;
let pastelitosEspañol = `
PASTELITOS
Los pastelitos salvadoreños, también llamados empanadas salvadoreñas, son un tipo de empanadas rellenas, fritas, suculentas y crujientes que se han convertido en una de las comidas rápidas más populares y simples del país.
Ingredientes:
½ masa de maíz molido
Sal al gusto
Achiote
Consomé de pollo
Carne de res
½ cucharada de sal
Azúcar al gusto
Preparación:
Primero se prepara la masa agregando el consomé de pollo, la condimentamos con achiote para darle el color naranja y amasamos bien hasta tener lista la masa.
Extiende un poco la masa para darle forma de tortilla, y luego se coloca los ingredientes en el centro, en este caso, los más consumidos son: la carne molida.
Elija a su gusto. Al colocar el relleno a la masa, la cubrimos con la otra parte de la masa, hasta darle una forma de media luna.
Preparamos la sartén con abundante aceite y echamos uno a uno los pastelitos que hemos preparado. Se debe estar atento para evitar se quemen.
Basta con dejarlos entre 3 a 5 minutos. Transcurrido ese tiempo, y ver que están doraditos, sacamos para que escurran.
Listo. Nos disponemos a degustar.
© Los Tipiquisimos 2022-Derechos reservados
`
let pastelitosIngles = `
PASTELITOS
Salvadoran pastelitos, also called Salvadoran empanadas, are a type of stuffed, fried, succulent and crunchy empanadas that have become one of the most popular and simple fast foods in the country.
Ingredients:
½ ground corn dough
Salt to taste
Achiote
Chicken broth
Beef
½ tablespoon salt
Sugar to taste
Preparation:
First prepare the dough by adding the chicken consommé, season it with achiote to give it the orange color and knead well until the dough is ready.
Spread the dough a little to give it a tortilla shape, and then place the ingredients in the center, in this case, the most consumed are: ground beef.
Choose to your taste. Once the filling is placed on the dough, we cover it with the other part of the dough, to give it a half-moon shape.
Prepare the frying pan with abundant oil and place one by one the small cakes we have prepared. Be careful not to burn them.
It is enough to leave them between 3 to 5 minutes. Once this time has elapsed, and we see that they are golden brown, we take them out to drain.
That's it. We are ready to taste.
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
pastelitosIngles = pastelitosIngles.split("\n");
pastelitosEspañol = pastelitosEspañol.split("\n");

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
        pastelitosIngles.forEach((element, i) => {
            if(!element) return
             
            document.querySelector("[data-pastelitos='"+i+"']").innerHTML = element;
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
        pastelitosEspañol.forEach((element, i) => {
            if(!element) return
            document.querySelector("[data-pastelitos='"+i+"']").innerHTML = element;
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