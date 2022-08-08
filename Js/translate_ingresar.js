// let español, english;

let ingresarEspañol = `
Registarse
Digite su nombre
Digite su nombre de usuario
Digite su correo
Contraseña
registrarse
Ya tienes cuenta ¿Inicia sesión?
`
let ingresarIngles = `
Register
Enter your name
Enter your user name
Enter your email address
Password
register
Already have an account?
`

ingresarIngles = ingresarIngles.split("\n");
ingresarEspañol = ingresarEspañol.split("\n");

lang = sessionStorage.getItem("lang");
console.log(lang)

if(!lang){
    lang = sessionStorage.setItem("lang", "es");
}





function  traducir(element) {
    console.log(element)
    if(element.id == "idioma-ingles"){   
        
        ingresarIngles.forEach((element, i) => {
            if(!element) return
            // console.log(element)
            document.querySelector("[data-ingresar='"+i+"']").innerHTML = element;
        });
        document.getElementById("translata").placeholder="Name"
        document.getElementById("translate").placeholder="User"
        document.getElementById("translati").placeholder="email"
        document.getElementById("translato").placeholder="Enter your password"

       sessionStorage.setItem("lang", "en");
       lang = sessionStorage.getItem("lang");


    }
    else if(element.id == "idioma-español"){
        ingresarEspañol.forEach((element, i) => {
            if(!element) return
            document.querySelector("[data-ingresar='"+i+"']").innerHTML = element;
        });

  document.getElementById("translata").placeholder="Nombre"
  document.getElementById("translate").placeholder="Usuario"
  document.getElementById("translati").placeholder="correo"
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