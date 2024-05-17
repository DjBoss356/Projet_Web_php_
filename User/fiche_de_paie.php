<?php
    //on démarre la session php
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../CSS/fichePaie.css">
    
    <?php
    //require_once("header.php");
    ?>
    <title>Document</title>
</head>
<body>
    <div class="container">
    <h1 >Votre Fiche de paie </h1>
    <h3>Nom: <i><?=$_SESSION["user"]["nom"]?></i></h3>
    <h3>Prenom: <i><?=$_SESSION["user"]["prenom"]?></i></h3>
    <h3>Rôle: <i><?=$_SESSION["user"]["role"]?></i></h3>
    <h3>Contrat: <i>     CDI</i></h3>
        <table border="1" cellpadding="5" cellspacing="10">
            <tr>
                <td>
                    Rubriques
                </td>
                <td>
                    Base
                </td>
                <td>
                    Taux Salarial
                </td>
                <td>
                    Cot.Salarial
                </td>
                <td>
                Taux Patronal
                </td>
                <td>
                Cot. Patronals
                </td>


            </tr>
            <tr>
                <th>
                    SALAIRE DE BASE 
                </th>
                <td>
                    3 000 EUR
                </td>
                <td>

                </td>
                <td>
                    
                </td>
                <td>
                    
                </td>
                <td>
                    
                </td>

            </tr>
            <tr>
                <th>
                    SALAIRE BRUT
                </th>
                <td>
                    3 000 EUR
                </td>
                <td>

                </td>
                <td>
                    
                </td>
                <td>
                    
                </td>
                <td>
                    
                </td>

            </tr>
            <tr>
                <th>
                    SANTE
                </th>
                <td>
                3 000 EUR
                </td>
                <td>

                </td>
                <td>
                    
                </td>
                <td>
                    
                </td>
                <td>
                    
                </td>

            </tr>
            <tr>
                <th>
                Sécurité sociale
                </th>
                <td>
                3 000 EUR
                </td>
                <td>

                </td>
                <td>
                    
                </td>
                <td>
                    7,00
                </td>
                <td>
                    154,00 EUR
                </td>

            </tr>
            <tr>
                <th>
                    ACCIDENTS DU TRAVAIL MALADIES PROFESSIONNELLES
                </th>
                <td>
                3 000 EUR
                </td>
                <td>

                </td>
                <td>
                    
                </td>
                <td>
                    2,22
                </td>
                <td>
                    48,84 EUR
                </td>

            </tr>
            <tr>
                <th>
                    RETRAITE
                </th>
                <td>
                
                </td>
                <td>

                </td>
                <td>
                    
                </td>
                <td>
                    
                </td>
                <td>
                    
                </td>

            </tr>
            <tr>
                <th>
                    Assurance de Vieillesse déplafonnée
                </th>
                <td>
                3 000 EUR
                </td>
                <td>
                    0,40
                </td>
                <td>
                    8,80
                </td>
                <td>
                    1,90
                </td>
                <td>
                    41,80 EUR
                </td>

            </tr>
            <tr>
                <th>
                Assurance de Vieillesse plafonnée
                </th>
                <td>
                3 000 EUR
                </td>
                <td>
                    6,90
                </td>
                <td>
                    151,00 EUR
                </td>
                <td>
                    8,55
                </td>
                <td>
                    188,10 EUR
                </td>

            </tr>

        </table>
    </div>
</body>
</html>