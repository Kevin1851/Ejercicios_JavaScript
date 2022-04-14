<?php
include("index.php");

$nombre = $_POST['name'];
$apellido = $_POST['apellido'];
$nombreUsuario = $_POST['nombre-usuario'];
$password = $_POST['password'];
$confirmPassword = $_POST['confirm-password'];
$fechaNacimiento = $_POST['fecha'];
$genero = $_POST['genero'];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro de Lancelot</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="bootstrap/css/bootstrap.css">
</head>
<body>
    <div class="all">
        <div class="main-content">
            <div class="form">
                <form>
                    <fieldset>
                        <div class="opcion1">
                            <h3>Los datos ingresados fueron</h3>
                        </div>
                        <div class="opcion2">
                            <div class="row">
                                <div class="col">
                                  <input type="text" readonly class="form-control" value="<?php echo $nombre;?>" placeholder="Primer nombre" aria-label="First name">
                                </div>
                                <div class="col">
                                  <input type="text" readonly class="form-control" value="<?php echo $apellido;?>" placeholder="Segundo nombre" aria-label="Last name">
                                </div>
                              </div>
                        </div>
                        <div class="row opcion3">
                            <div class="col">
                                <input type="email" readonly class="form-control" value="<?php echo $nombreUsuario;?>" id="formGroupExampleInput" placeholder="Nombre de usuario">
                            </div>
                        </div>
                        <div class="opcion4">
                            <div class="contrasenia">
                                <div class="row">
                                    <div class="col">
                                      <input type="text" readonly value="<?php echo $password;?>" class="form-control" placeholder="Contraseña" aria-label="First name">
                                    </div>
                                    <div class="col">
                                      <input type="text" readonly class="form-control" value="<?php echo $confirmPassword;?>" placeholder="Confirmar contraseña" aria-label="Last name">
                                    </div>
                                  </div>
                            </div>
                        </div>
                        <div class="opcion5">
                            <h5>Fecha de nacimiento</h5>
                            <div class="row">
                                <div class="col">
                                  <input type="text" readonly class="form-control" value="<?php echo $fechaNacimiento;?>" placeholder="Fecha de nacimiento">
                                </div>
                        </div>
                        <div class="row opcion6">
                            <div class="col">
                              <input type="text" readonly class="form-control" value="<?php echo $genero;?>" id="formGroupExampleInput">
                            </div>
                        </div>
                        <div class="row opcion7">
                            <div class="col">
                                <form action="login.html">
                                    <button type="submit" onclick="this.form.action='pagina_principal_con_user.html'" value="Ya tengo una cuenta" class="btn form-control btn-primary">Registrarme</button>
                                </form>
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
</body>
</html>