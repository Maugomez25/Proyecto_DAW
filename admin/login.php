<?php
    session_start();
    $isValidSession = isset($_SESSION["start_at"]);
    if($isValidSession){
        header("Location: ./agregar.php");
    }
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title>Login Autopedia</title>
        <link rel="icon" href="../Pictures/login.png">
        <link rel="stylesheet" href="../css/login.css">

    </head>
    <body>

        <header>
            <h1>Login</h1>
        </header>

        <main>

            <div class="wrapper">

                <?php
                    if(isset($_GET["error"])){
                        $error = $_GET["error"];
                        switch ($error){
                            case 1:
                                $errorstr = "Error al ingresar. Por favor vuelva a intentar.";
                                break;
                            case 2:
                                $errorstr = "Nombre de usuario no registrado.";
                                break;
                            case 3:
                                $errorstr = "Contraseña Incorrecta.";
                        }
                ?>
                        <div class="error">
                            <h3>                                
                                <?php echo $errorstr ?>
                            </h3>
                        </div>
                <?php
                    }
                ?>

                <form class="" action="../php/control_login.php" method="post">
                <table>
                        <tr>
                        <th colspan="2">Tu Autopedía - Admin</th>
                        </tr>

                        <tr>        
                            <td>
                            <label for="username">Usuario:</label>                        
                            </td>
                            <td>
                            <input type="text" name="username" id="username" required/>
                            </td>
                        </tr>
                        <tr>
                            <td>
                            <label for="passw">Contraseña:</label>                        
                            </td>
                            <td>
                            <input type="password" name="passw" id="passw" required/>
                            </td>
                        </tr>
                </table>
                        <div style="text-align:center">
                            <input type="submit" name="save" value="Entrar" />
                        </div>                                              
                </form>

            </div>

        </main>

        <footer>
            <h5>Tu Autopedia 2020</h5>
        </footer>

    </body>

</html>