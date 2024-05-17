<?php
    //on démarre la session php
    session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../CSS/user_admin.css">
    <?php
    require_once("header.php");
    ?>
</head>

<?php
   
?>
    <div  class="image_logo" >
        <img class="logo" src="../Sapres_image/logo.jpg" alt="Logo icon">
    </div>


    <div  class="deco" >
        <a href="déconnexion.php"> Se déconnecter</a>
    </div>
    
    <h1 class="hello-name"> Bonjour <i><?=$_SESSION["user"]["prenom"]?></i>,</h1>

    <div class="profil">
        
        <?php
            include("menu_admi.php");
        ?>
        
    </div>

</html>