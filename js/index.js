this.form.action='destino.php'

function validarFormulario(){

    var todoCorrecto = document.getElementById("formulario").action='destino.php'

    let inputNombre = document.getElementById("name").value.trim();
        if(inputNombre == ""){
            document.getElementById("name").focus();
            alert("Ingrese su nombre");
            return false;
        }
        
    let inputApellidos = document.getElementById("apellidos").value.trim();
        if(inputApellidos == ""){
            document.getElementById("apellidos").focus();
            alert("Ingrese sus apellidos");
            return false;
        }


    let inputUser = document.getElementById("user-name").value.trim();
        if(inputUser == ""){
            document.getElementById("user-name").focus();
            alert("Ingrese su correo electrónico");
            return false;
        }
    var expresion = /^[a-z][\w.-]+@\w[\w.-]+\.[\w.-]*[a-z][a-z]$/i;
    var email = document.getElementById("user-name").value;
    if (!expresion.test(email)){
        document.getElementById("user-name").value("")
        return false;
    }

    let inputClave = document.getElementById("clave").value.trim();
        if(inputClave == ""){
            document.getElementById("clave").focus();
            alert("Ingrese su contraseña");
            return false;
        }
    let inputConfirmClave = document.getElementById("confirmClave").value.trim();
        if(inputConfirmClave == ""){
            document.getElementById("confirmClave").focus();
            alert("Confirme su contraseña");
            return false;
        }

        if (inputConfirmClave !== inputClave){
            alert("Las contraseñas no coinciden");
            return false;
        }

    let inputFecha = document.getElementById("fecha").value;
        if(inputFecha == ""){
            document.getElementById("fecha").focus();
            alert("La fecha de nacimiento no puede estar vacía");
            return false;
        }

    let inputGenero = document.getElementById("genero");
        if(inputGenero.value==0 || inputGenero.value == ""){
            document.getElementById("genero").focus();
            alert("Seleccione su género");
            return false;
        }
        
        return todoCorrecto;
}


function mostrarContraseña(){
    var clave = document.getElementById("clave")
    var confirmClave = document.getElementById("confirmClave")

    if (clave.type=="password" && confirmClave.type=="password"){
        clave.type = "text";
        confirmClave.type = "text"
        
    }else if (clave.type=="text" && confirmClave.type=="text"){
        clave.type = "password";
        confirmClave.type = "password"
    }
}