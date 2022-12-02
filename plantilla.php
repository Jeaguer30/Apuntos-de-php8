<?php
session_start();
?>





<?php

if(isset($_SESSION["iniciarSesion"]) && $_SESSION["iniciarSesion"]=="ok"){

  include "modulos/header.php";
  include "modulos/aside.php";

      if(isset($_GET["ruta"])){

          if($_GET["ruta"] == "home" ||
          $_GET["ruta"] == "usuarios" ||
          $_GET["ruta"] == "salir"){

          include "modulos/".$_GET["ruta"].".php";

          }else{
              include "modulos/404.php";
          }

      }else{
          include "modulos/home.php";
      }


  include "modulos/footer.php";

}else{

  include "modulos/login.php";
}
 
?>



