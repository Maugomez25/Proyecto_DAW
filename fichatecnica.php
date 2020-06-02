<?php
require_once dirname(__FILE__) . "/php/Utils.php";

$cars = readJSON();

$carNameMatch = false;

foreach($cars as $car){
    if(strcmp($_GET["modelo"],$car["modelo"]) == 0){
        $carNameMatch = true;
        $modelo = $car;
        break;
    }
}

if(!$carNameMatch){
    header("Location: ./index.html");
}

?>

<!DOCTYPE html>

<html lang="en" dir="ltr">

    <head>
        <meta charset="utf-8">
        <title>Tu Autopedia</title>

        <link rel="stylesheet" href="./css/coches.css">
        <script type="text/javascript" src="./js/Utils.js"></script>
        <script type="text/javascript" src="./js/busqueda.js"></script>

    </head>

    <body onload="listaBusqueda()">

        <header>
            <h1>Tu Autopedia</h1>
        </header>

        <nav>
          <ul>
              <li><a href="./index.html" target="_self">Inicio</a></li
              ><li><a href="./decadas.html" target="_self">Décadas</a></li
              ><li><a href="./marcas.html" target="_self">Marcas</a></li
              ><li><a href="./paises.html" target="_self">Países</a></li
              ><li><a href="./cilindrada.html" target="_self">Motor</a></li
              ><li><a href="./admin/login.php" target="_self">Admin</a></li
              ><li><div class="dropdown">
                <button onclick="myFunction()" class="dropbtn">Buscar</button>   
                <div id="myDropdown" class="dropdown-content">           
                    <input type="text" placeholder="Buscar.." id="myInput" onkeyup="filterFunction()">
                </div>
              </div></li>
          </ul>
        </nav>


        <main>
            <div class="left">                
                <h3><?php echo $modelo["modelo"] ?></h3>
                <img src=<?php echo $modelo["url"] ?> alt=<?php echo $modelo["modelo"] ?>>
            </div>
            <div class="right">   
                <h4>Ficha Técnica</h4>             
                <table>
                    <tr>
                        <th>Potencia</th>
                        <td><?php echo $modelo["potencia"] ?> hp</td>
                    </tr>
                    <tr>
                        <th>Torque</th>
                        <td><?php echo $modelo["torque"] ?> rpm</td>
                    </tr>
                    <tr>
                        <th>Motor</th>
                        <td><?php echo $modelo["motor"] ?> en línea</td>
                    </tr>
                    <tr>
                        <th>Cilindrada</th>
                        <td><?php echo $modelo["cilindrada"] ?> cm^3</td>
                    </tr>
                    <tr>
                        <th>Peso</th>
                        <td><?php echo $modelo["peso"] ?> Kg</td>
                    </tr>
                    <tr>
                        <th>0 a 100 Km/h</th>
                        <td><?php echo $modelo["tiempo"] ?> s</td>
                    </tr>
                </table>
            </div>

            <article>
                <p>
                <?php echo $modelo["historia"] ?>            
                </p>               
            </article>
        </main>

        <footer>
            <h4>Tu Autopedia 2020</h4>
        </footer>

    </body>

</html>