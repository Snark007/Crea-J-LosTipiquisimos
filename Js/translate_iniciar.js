// let español, english;

let inicioEspañol = `
Elegir idioma
España
Ingles
Inicio de sesión
Usuario
Ingrese su usuario
Contraseña
Ingrese su contraseña
iniciar sesion 
No tienes cuenta ¿Registrarse?
`
let inicioIngles = `
Choose a language
Spanish
English
Login
User
Enter your user
Password
Enter your password
Sign in 
You don't have an account Sign up?
`

inicioIngles = inicioIngles.split("\n");
inicioEspañol = inicioEspañol.split("\n");

lang = sessionStorage.getItem("lang");
console.log(lang)

if(!lang){
    lang = sessionStorage.setItem("lang", "es");
}





function  traducir(element) {
    console.log(element)
    if(element.id == "idioma-ingles"){   
        
        inicioIngles.forEach((element, i) => {
            if(!element) return
            // console.log(element)
            document.querySelector("[data-inicio='"+i+"']").innerHTML = element;
        });
        document.getElementById("translate").placeholder="Enter your user"
        document.getElementById("translato").placeholder="Enter your password"

       sessionStorage.setItem("lang", "en");
       lang = sessionStorage.getItem("lang");


    }
    else if(element.id == "idioma-español"){
        inicioEspañol.forEach((element, i) => {
            if(!element) return
            document.querySelector("[data-inicio='"+i+"']").innerHTML = element;
        });

  document.getElementById("translate").placeholder="Ingrese su usuario"
  document.getElementById("translato").placeholder="Ingrese su contraseña"

       sessionStorage.setItem("lang", "es");
       lang = sessionStorage.getItem("lang");
    }
    console.log(lang)
}

document.querySelector(".wrapper-caja").addEventListener("click", ()=>{
    document.querySelector(".options").classList.toggle("mostrar");
    document.querySelector(".caja__arrow").classList.toggle("changeOrientation");
})