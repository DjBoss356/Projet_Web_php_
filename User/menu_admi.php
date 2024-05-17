<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="../CSS/menu2.css">
    <?php
        //include_once("time-out.php");
    ?>
    <title>Document</title>
</head>
<body>
    <!-- <div class="header">
        <nav class="nava">
            <ul class="menu">
                <li> <a href="profil_admi.php" rel="history" >Mes informations</a></li>
                <li> <a href="update_informations_admi.php">Modifier mes Informations</a></li>
                <li> <a href="../Admi/ajouter_user.php">Ajouter un employé </a></li>
                <li><a href="../Admi/delete_user.php ">Supprimer un utilisateur</a></li>
                <li><a href="../Admi/afficher_user.php">Liste des employés</a></li>
                <li> <a href="../Admi/modif_role.php">Modifier le rôle d'un employé</a></li>
                <li> <a href="../Admi/modif_role.php">Ma fiche de paie</a></li>
            </ul> </nav>
    </div> -->

    <div class="container">
        <a href="profil_admi.php" rel="history" >
            <div class="box-content  info">
                <div >
                    <h1 class="box-text"> Mes informations </h1>
                </div>
            </div>
        </a>

        <a href="update_informations_admi.php">
            <div class="box-content  modifInfo">
                <div >
                    <!-- <img src="../Sapres_image/1.jpg" alt="image info"> -->
                    <h1 class="box-text"> Modifier mes Informations </h1>
                </div>
            </div>
        </a>

        <a href="../Admi/ajouter_user.php">
            <div class="box-content  addUser">
                <div >
                    <h1 class="box-text"> Ajouter un employé </h1>
                </div>
            </div>
        </a>

        ><a href="../Admi/delete_user.php ">
            <div class="box-content  suppUser" >
                <div >
                    <h1 class="box-text"> Supprimer un utilisateur </h1>
                </div>
            </div>
        </a>

        <a href="../Admi/afficher_user.php">
            <div class="box-content  listEmp">
                <div >
                    <h1 class="box-text"> Liste des employés </h1>
                </div>
            </div>
        </a>

        <a href="../Admi/modif_role.php">
            <div class="box-content  modifRol">
                <div >
                    <h1 class="box-text"> Modifier le rôle d'un employé </h1>
                </div>
            </div>
        </a>

        <a href="../User/fiche_de_paie.php">
            <div class="box-content  fichePaie">
                <div >
                    <h1 class="box-text"> Ma fiche de paie</h1>
                </div>
            </div>
        </a>


        
        
    </div>
</body>
</html>