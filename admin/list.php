<?php
    $action = null;
    $str = null;
    if(isset($_GET["action"])){
        $action = $_GET["action"];
        if(!strcmp($action,"delete")){
            $str = "Click para borrar";
        }elseif(!strcmp($action,"modify")){
            $str = "Click para modificar";
        }
    }else{
        header("Location: ./agregar.php");
    }

?>

<!DOCTYPE html>

<html lang="en" dir="ltr">

    <head>
        <meta charset="utf-8">
          <meta name="viewport" content="width=device-width , user-scalable=no, initial-scale=1, maximum-scale=1, minimum-scale=1">
        <title>Tu Autopedia - Lista</title>

        <link rel="stylesheet" href="../css/admin.css">
        <link rel="stylesheet" href="../css/Adminlist.css">

        <script type="text/javascript" src="../js/lista.js"></script>

    </head>

    <body onload="spawnList();">

        <?php
            require_once dirname(__FILE__) . "/headerAdmin.php";
        ?>

        <main>

            <h3>Base de datos</h3>

            <section>
                <table class="borders">
                    <thead>
                        <th>Imagen</th>
                        <th>Modelo</th>
                        <th>Marca</th>
                        <th>País</th>
                        <th>Motor</th>
                        <th>Década</th>
                        <th><?php echo $str?></th>
                    </thead>
                    <tbody id="lista">

                    </tbody>
                </table>
            </section>
            

        </main>

        <footer>
          <h4>Tu Autopedia 2020</h4>
        </footer>


    </body>

</html>