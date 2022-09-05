var eye = document.getElementById('eye');
var translato = document.getElementById('translato');
let ania = document.getElementById('ania');
eye.addEventListener("click", function(){
    if (ania.checked){
        let value = translato.value;
        translato.type = "password";
        translato.value = value;
    }
    else{
        let value = translato.value;
        translato.type = "text";
        translato.value = value;
    }
})