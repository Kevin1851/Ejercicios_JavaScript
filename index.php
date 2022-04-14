<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro en Lancelot</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="bootstrap/css/bootstrap.css">
</head>
<body>
    <div class="all">
        <div class="main-content">
            <div class="form">
                <form id="formulario" method="post" action="">
                    <fieldset>
                        <div class="opcion1">
                            <h3>Crear una cuenta</h3>
                        </div>
                        <div class="opcion2">
                            <div class="row">
                                <div class="col">
                                  <input id="name" pattern="/^[A-Za-z- ,◆{3,20}?=.*\d)/
                                  " type="text" class="form-control" name="name" placeholder="Primer nombre" aria-label="First name">
                                </div>
                                <div class="col">
                                  <input id="apellidos" pattern="/^[A-Za-z- ,◆{3,20}?=.*\d)/
                                  " type="text" class="form-control" name="apellido" placeholder="Apellidos" aria-label="Last name">
                                </div>
                            </div>
                        </div>
                        <div class="row opcion3">
                            <div class="col">
                                <input type="email" class="form-control" name="nombre-usuario" id="user-name" placeholder="Nombre de usuario">
                            </div>
                        </div>
                        <div class="opcion4">
                            <div class="contrasenia">
                                <div class="row">
                                    <div class="col">
                                      <input type="password" minlength="8" id="clave" name="password" class="form-control" placeholder="Contraseña" aria-label="First name">
                                    </div>
                                    <div class="col">
                                      <input type="password" minlength="8" id="confirmClave" name="confirm-password" class="form-control" placeholder="Confirmar contraseña" aria-label="Last name">
                                    </div>
                                  </div>
                            </div>
                            <div>
                                <div class="form-check">
                                    <input onclick="mostrarContraseña();" class="form-check-input" type="checkbox" id="gridCheck1">
                                    <label class="form-check-label" for="gridCheck1">
                                      Mostrar contraseña
                                    </label>
                                  </div>
                            </div>
                        </div>
                        <div class="opcion5">
                            <h5>Fecha de nacimiento</h5>
                            <div class="row">
                                <div class="col">
                                  <input type="date" id="fecha" min="1960-12-31" max="2004-12-31" name="fecha" class="form-control" placeholder="Fecha de nacimiento">
                                </div>
                              </div>
                        </div>
                        <div class="row opcion6">
                            <div class="col">
                                <select name="genero" class="form-select" id="genero">
                                  <option value="" selected>Seleccione su género</option>
                                  <option value="Masculino">Masculino</option>
                                  <option value="Femenino">Femenino</option>
                                  <option value="Otro">Otro</option>
                                </select>
                            </div>
                        </div>
                        <div class="row opcion7">
                            <div class="col">
                                <input type="submit" class="btn form-control btn-primary" onclick="return validarFormulario();" value="Verificar">
                            </div>
                            <div class="col">
                                <input type="submit" onclick="this.form.action='login.html'" class="btn form-control btn-primary" value="Ya tengo una cuenta">
                            </div>
                        </div>
                    </fieldset>
                </form>
            </div>
            <div class="logo">
                <div>
                    <h1><span>L</span>ancelot</h1>
                </div>
            </div>
        </div>
    </div>
    <script src="js/index.js"></script>
</body>
</html>