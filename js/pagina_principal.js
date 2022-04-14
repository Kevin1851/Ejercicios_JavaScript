document.getElementById("btn_open").addEventListener("click", open_close_menu);

var btn_open = document.getElementById("btn_open");
var menu_responsive = document.getElementById("menu_responsives");

function open_close_menu (){
    menu_responsive.classList.toggle("menu_responsives");
}

document.getElementById("btn_user").addEventListener("click", desplegar_menu);

var btn_user = document.getElementById("btn_user");

function desplegar_menu (){
    menu_responsive.classList.toggle("menu_responsives");
}