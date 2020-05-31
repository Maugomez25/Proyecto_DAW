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

        <main>

            <h3>Bienvenido!</h3>

            <div class="wrapper"> 
                
                <h4>Sitio para agregar autos a la base de datos</h4><br>
    
                <?php 
                    if(isset($result)){
                ?>
                        <h4><?php echo $result?></h4>
                <?php 
                    }
                ?>
                
                <div class="wrapper">
                    <form class="" action="../php/AdminForm.php" method="post">    
                        
                        <table class="column">
                            <tbody>
                                <tr>
                                    <td><label for="imagen">Img. nombre:</label></td>
                                    <td><input type="text" name="imagen" id="imagen" required /></td>
                                </tr>
                                <tr>
                                    <td><label for="marca">Marca:</label></td>
                                    <td>                    
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
                                    </td>
                                </tr>
                                <tr>
                                    <td><label for="modelo">Modelo:</label></td>
                                    <td><input type="text" name="modelo" id="modelo" required/></td>
                                </tr>
                                <tr>
                                    <td><label for="potencia">Potencia (Hp):</label></td>
                                    <td><input type="number" name="potencia" id="potencia" step="0.01" required/></td>
                                </tr>
                                <tr>
                                    <td><label for="torque">Torque (lb ft):</label></td>
                                    <td><input type="number" name="torque" id="torque" step="0.01" required/></td>
                                </tr>
                                <tr>
                                    <td><label for="motor">Motor:</label></td>
                                    <td>
                                        <select type="text" name="motor" id="motor" required>
                                            <option value="4">4 cilindros</option>
                                            <option value="6">6 cilindros</option>
                                            <option value="8">8 cilindros</option>
                                        </select>
                                    </td>
                                </tr>
                                <tr>
                                    <td><label for="cilindrada">Cilindrada:</label></td>
                                    <td><input type="number" name="cilindrada" id="cilindrada" step="0.01" required /></td>
                                </tr>
                                <tr>
                                    <td><label for="peso">Peso:</label></td>
                                    <td><input type="number" name="peso" id="peso" step="0.01" required /></td>
                                </tr>
                                <tr>
                                    <td><label for="pais">País:</label></td>
                                    <td>
                                        <select name="pais" id="pais" required>
                                            <option value="Alemania">Alemania</option>
                                            <option value="Italia">Italia</option>
                                            <option value="Japón">Japón</option>
                                            <option value="UK">UK</option>
                                            <option value="USA">USA</option>
                                        </select>
                                    </td>
                                </tr>
                                <tr>
                                    <td><label for="decada">Década:</label></td>
                                    <td>
                                        <select name="decada" id="decada" required>
                                            <option value="60">60's</option>
                                            <option value="70">70's</option>
                                            <option value="80">80's</option>
                                            <option value="90">90's</option>
                                        </select>
                                    </td>
                                </tr>
                                <tr>
                                    <td><label for="tiempo">0 a 100km/h:</label></td>
                                    <td><input type="number" name="tiempo" id="tiempo" step="0.01" required /></td>
                                </tr>
                            </tbody>
                        </table>  
                        
                        <div class="column">
                            <img src="../Pictures/shelby_cobra.png" alt="shelby cobra">
                        </div>
        
                        <label style="display: block;" for="historia">Historia del modelo:</label>
                        <input style="width: 70%; height: 80px" type="text" name="historia" id="historia" required /><br>
        
                        <div class="botones">
                            <input type="submit" name="save" value="Submit" />
                            <input type="reset" value="Reset">
                        </div>
        
                    </form>
                </div>
            </div>


        </main>

        <footer>
          <h4>Tu Autopedia 2020</h4>
        </footer>


    </body>

</html>