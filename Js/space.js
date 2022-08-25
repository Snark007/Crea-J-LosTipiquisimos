function addNewLine(){
    text = getElementById("levi").value;
    text = text.replace(/  /g, "[sp][sp]");
    text = text.replace(/\n/g, "[nl]");
    document.getElementById("levi").value = text;

}