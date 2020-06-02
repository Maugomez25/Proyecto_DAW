<?php
    require_once dirname(__FILE__,2) . "/php/Utils.php";
    if(!isset($_GET["id"])){
        header("Location: ./list.php?action=modify");
    }
    else{
        $data = readJSON();
        $carro = $data[$_GET["id"]];
        $url = explode("/",$carro["url"]) ;
        $pic = $url[2];
    }
?>
<!DOCTYPE html>

<html lang="en" dir="ltr">

    <head>
        <meta charset="utf-8">
          <meta name="viewport" content="width=device-width , user-scalable=no, initial-scale=1, maximum-scale=1, minimum-scale=1">
        <title>Tu Autopedia - Modificar</title>

        <link rel="stylesheet" href="../css/admin.css">
    </head>

    <body>

        <?php
            require_once dirname(__FILE__) . "/headerAdmin.php";
        ?>

        <main>

            <h3>Bienvenido!</h3>

            <div class="wrapper"> 
                
                <h4>Modifica los datos del auto seleccionado y da click en submit</h4><br>
                
                <div class="wrapper">
                    <form class="" action="../php/AdminModifyForm.php?id=<?php echo $_GET["id"]?>" method="post">    
                        
                        <table class="column">
                            <tbody>
                                <tr>
                                    <td><label for="imagen">Img. nombre:</label></td>
                                    <td><input type="text" name="imagen" id="imagen" value=<?php echo $pic?> required /></td>
                                </tr>
                                <tr>
                                    <td><label for="marca">Marca:</label></td>
                                    <td>                    
                                        <select name="marca" id="marca" required>
                                            <option <?php if (!strcmp($carro["marca"],"Aston Martin")) echo 'selected' ; ?> value="Aston Martin">Aston Martin</option>   
                                            <option <?php if (!strcmp($carro["marca"],"BMW")) echo 'selected' ; ?> value="BMW">BMW</option>         
                                            <option <?php if (!strcmp($carro["marca"],"Ferrari")) echo 'selected' ; ?> value="Ferrari">Ferrari</option>
                                            <option <?php if (!strcmp($carro["marca"],"Ford")) echo 'selected' ; ?> value="Ford">Ford</option>
                                            <option <?php if (!strcmp($carro["marca"],"Jaguar")) echo 'selected' ; ?> value="Jaguar">Jaguar</option>
                                            <option <?php if (!strcmp($carro["marca"],"Nissan")) echo 'selected' ; ?> value="Nissan">Nissan</option>
                                            <option <?php if (!strcmp($carro["marca"],"Porsche")) echo 'selected' ; ?> value="Porsche">Porsche</option>
                                            <option <?php if (!strcmp($carro["marca"],"Subaru")) echo 'selected' ; ?> value="Subaru">Subaru</option>
                                            <option <?php if (!strcmp($carro["marca"],"Toyota")) echo 'selected' ; ?> value="Toyota">Toyota</option>
                                        </select>
                                    </td>
                                </tr>
                                <tr>
                                    <td><label for="modelo">Modelo:</label></td>
                                    <td><input type="text" name="modelo" id="modelo" value=<?php echo $carro["modelo"]?> required/></td>
                                </tr>
                                <tr>
                                    <td><label for="potencia">Potencia (Hp):</label></td>
                                    <td><input type="number" name="potencia" id="potencia" step="0.01" value=<?php echo $carro["potencia"]?> required/></td>
                                </tr>
                                <tr>
                                    <td><label for="torque">Torque (lb ft):</label></td>
                                    <td><input type="number" name="torque" id="torque" step="0.01" value=<?php echo $carro["torque"]?> required/></td>
                                </tr>
                                <tr>
                                    <td><label for="motor">Motor:</label></td>
                                    <td>
                                        <select type="text" name="motor" id="motor" required>
                                            <option <?php if (!strcmp($carro["motor"],"4")) echo 'selected' ; ?> value="4">4 cilindros</option>
                                            <option <?php if (!strcmp($carro["motor"],"6")) echo 'selected' ; ?> value="6">6 cilindros</option>
                                            <option <?php if (!strcmp($carro["motor"],"8")) echo 'selected' ; ?> value="8">8 cilindros</option>
                                        </select>
                                    </td>
                                </tr>
                                <tr>
                                    <td><label for="cilindrada">Cilindrada:</label></td>
                                    <td><input type="number" name="cilindrada" id="cilindrada" step="0.01" value=<?php echo $carro["cilindrada"]?> required /></td>
                                </tr>
                                <tr>
                                    <td><label for="peso">Peso:</label></td>
                                    <td><input type="number" name="peso" id="peso" step="0.01" value=<?php echo $carro["peso"]?> required /></td>
                                </tr>
                                <tr>
                                    <td><label for="pais">País:</label></td>
                                    <td>
                                        <select name="pais" id="pais" required>
                                            <option <?php if (!strcmp($carro["pais"],"Alemania")) echo 'selected' ; ?> value="Alemania">Alemania</option>
                                            <option <?php if (!strcmp($carro["pais"],"Italia")) echo 'selected' ; ?> value="Italia">Italia</option>
                                            <option <?php if (!strcmp($carro["pais"],"Japón")) echo 'selected' ; ?> value="Japón">Japón</option>
                                            <option <?php if (!strcmp($carro["pais"],"UK")) echo 'selected' ; ?> value="UK">UK</option>
                                            <option <?php if (!strcmp($carro["pais"],"USA")) echo 'selected' ; ?> value="USA">USA</option>
                                        </select>
                                    </td>
                                </tr>
                                <tr>
                                    <td><label for="decada">Década:</label></td>
                                    <td>
                                        <select name="decada" id="decada" required>
                                            <option <?php if (!strcmp($carro["decada"],"60")) echo 'selected' ; ?> value="60">60's</option>
                                            <option <?php if (!strcmp($carro["decada"],"70")) echo 'selected' ; ?> value="70">70's</option>
                                            <option <?php if (!strcmp($carro["decada"],"80")) echo 'selected' ; ?> value="80">80's</option>
                                            <option <?php if (!strcmp($carro["decada"],"90")) echo 'selected' ; ?> value="90">90's</option>
                                        </select>
                                    </td>
                                </tr>
                                <tr>
                                    <td><label for="tiempo">0 a 100km/h:</label></td>
                                    <td><input type="number" name="tiempo" id="tiempo" step="0.01" value=<?php echo $carro["tiempo"]?> required /></td>
                                </tr>
                            </tbody>
                        </table>  
                        
                        <div class="column">
                            <img src=<?php echo "." . $carro["url"]?> alt=<?php echo $carro["modelo"]?>>
                        </div>
        
                        <label style="display: block;" for="historia">Historia del modelo:</label>
                        <textarea rows="10" cols="80" name="historia" id="historia" required><?php echo $carro["historia"]?></textarea> 
                        <div class="botones">
                            <input type="submit" name="save" value="Modificar"/>
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