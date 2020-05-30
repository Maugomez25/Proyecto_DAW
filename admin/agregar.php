<?php
    $result = null;
    if(isset($_GET["result"])){
        if($_GET["result"]){
            $result = "Auto agregado correctamente";
        }else{
            $result = "Algo salio mal, favor de intentar de nuevo";
        }
    }
?>
<!DOCTYPE html>

<html lang="en" dir="ltr">

    <head>
        <meta charset="utf-8">
          <meta name="viewport" content="width=device-width , user-scalable=no, initial-scale=1, maximum-scale=1, minimum-scale=1">
        <title>Tu Autopedia - Admin</title>

        <link rel="stylesheet" href="../css/admin.css">
    </head>

    <body>

        <?php
            require_once dirname(__FILE__) . "/headerAdmin.php";
        ?>

        <main class="wrapper">

            <h2>Bienvenido!</h2>

            <h4>Sitio para agregar autos a la base de datos</h4>

            <?php 
                if(isset($result)){
            ?>
                    <h5><?php echo $result?></h5>
            <?php 
                }
            ?>

            <form class="" action="../php/AdminForm.php" method="post">    

                <label for="marca">Marca:</label>
                <select name="marca" id="marca" required>
                    <option value="Aston Martin">Aston Martin</option>   
                    <option value="BMW">BMW</option>         
                    <option value="Ferrari">Ferrari</option>
                    <option value="Ford">Ford</option>
                    <option value="Jaguar">Jaguar</option>
                    <option value="Nissan">Nissan</option>
                    <option value="Porsche">Porsche</option>
                    <option value="Subaru">Subaru</option>
                    <option value="Toyota">Toyota</option>
                </select>
                <br>

                <label for="modelo">Modelo:</label>
                <input type="text" name="modelo" id="modelo" required/><br>
   
                <label for="potencia">Potencia (Hp):</label>
                <input type="number" name="potencia" id="potencia" step="0.01" required/><br>

                <label for="torque">Torque (lb ft):</label>
                <input type="number" name="torque" id="torque" step="0.01" required/><br>
                
                <label for="motor">Motor:</label>
                <select type="text" name="motor" id="motor" required>
                    <option value="4">4 cilindros</option>
                    <option value="6">6 cilindros</option>
                    <option value="8">8 cilindros</option>
                </select>
                <br>

                <label for="cilindrada">Cilindrada:</label>
                <input type="number" name="cilindrada" id="cilindrada" step="0.01" required /><br>

                <label for="peso">Peso:</label>
                <input type="number" name="peso" id="peso" step="0.01" required /><br>
                
                <label for="pais">País:</label>
                <select name="pais" id="pais" required>
                    <option value="Alemania">Alemania</option>
                    <option value="Italia">Italia</option>
                    <option value="Japón">Japón</option>
                    <option value="UK">UK</option>
                    <option value="USA">USA</option>
                </select>
                <br>

                <label for="decada">Década:</label>
                <select name="decada" id="decada" required>
                    <option value="60">60's</option>
                    <option value="70">70's</option>
                    <option value="80">80's</option>
                    <option value="90">90's</option>
                </select>
                <br>

                <label for="tiempo">0 a 100km/h:</label>
                <input type="number" name="tiempo" id="tiempo" step="0.01" required /><br>

                <label for="imagen">Img.Auto (nombre):</label>
                <input type="text" name="imagen" id="imagen" required /><br>

                <label for="historia">Historia del modelo:</label>
                <input type="text" name="historia" id="historia" height="40" required /><br>

                <input type="submit" name="save" value="Registrar" />

                <input type="reset" value="Resetear">

            </form>

        </main>

        <footer>
          <h4>Tu Autopedia 2020</h4>
        </footer>


    </body>

</html>