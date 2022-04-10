<?php
//evaluar la seleccion del usuario 
    if(isset($_POST["enviar"])){

        $seleccion = $_POST["seleccion"];
        INCLUDE $seleccion. ".php"; //el punto se usa para concatenar

    }else{
    INCLUDE "es.php";
    }

?>

<div>
    <form action=""  method="POST" > 
        <select name="seleccion" id="">
            <option value="en">English</option>
            <option value="es"> Spanish</option>
        </select>
        <input type="submit" name="enviar" value="cambiar" />
    </form>
    <h2><?php echo TITTLE; ?> </h2>
    <h3><?php echo SUBTITLE  ?></h3>
</div>