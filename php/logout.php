<?php
session_start();

//Vacia la sesion
session_unset();
//Destruye la sesion
session_destroy();

header("Location: ../index.html");
?>