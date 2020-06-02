<?php
    require_once dirname(__FILE__) . "/Utils.php";

    if(isset($_GET["id"])){
        if(deleteIndex($_GET["id"])){
            header("Location: ../admin/list.php?action=delete");
        }else{
            header("Location: ../admin/list.php?action=delete&error=1");
        }
    }

?>