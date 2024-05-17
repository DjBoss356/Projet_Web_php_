<?php
//on démarre la session php
    session_start();
if(!empty($_POST)){
    // on vérifie que toutes les données sont présentes
    if( isset($_POST["mail"],$_POST["password"])
    && !empty($_POST["mail"])  && !empty($_POST["password"] ))
    {
        //le formulaire est complet

        //$pass=password_hash($_POST["password"],PASSWORD_ARGON2ID);
        if(!filter_var($_POST["mail"],FILTER_VALIDATE_EMAIL)){
            die("L'adresse email est incorrecte");
        }else{
            $mail=$_POST["mail"];
        }

        // on peut les enregistrer
        // on se connecte à la base
        require_once "../User/connexion_bd.php";

        //on écrit la requete
        $sql="SELECT * FROM  users WHERE mail=:mail"; 

        //on prépare la requête 
        $query=$db->prepare($sql);
        

        //on injecte les valeurs
        $query->bindValue(":mail",$mail,PDO::PARAM_STR);
        
        //$query->bindValue(":pass",$pass,PDO::PARAM_STR);
        // on exécute la requête
        $query->execute();
        //die("une erreur est survenu");
        $user=$query->fetch(PDO::FETCH_ASSOC);
        //var_dump($user);
        if(!$user){
            // die("L'utilisateur  n'existe pas !");
            include_once("mauvais_user.html");
        } 
        // ici on peut vérifier son mot de pass 
        //$a=1;
        $passHash=$user["pass"];
    // var_dump(password_verify($_POST["password"],$passHash));
        //var_dump($a,$b);
    if(password_verify($_POST["password"],$passHash)){
            //die("Connexion bonne");
            
            //var_dump($_SESSION);
            $_SESSION["user"]=[
                "mail"=>$user["mail"],
                "nom"=>$user["nom"],
                "prenom"=>$user["prenom"],
                "role"=>$user["role"]
            ];
            if($user["role"]==='administrateur'){
                header("Location: user_admi.php");
            }else{
                header("Location: user.php");
            }
        }else{
            //die("L'utilisateur et/ou le mot de passe n'existe pas !");
            include_once("mauvais_user.html");
        
        }
    // Ici l'utilisateur et mot de passe sont corrects
    //  On peut alors connecter l'utilisateur
    }else{
      
    die("le formulaire n'est pas complet !");
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/index_acc.css">
    <title>Login Page</title>
</head>
<body>
  <div class="image-bg"></div>
  <div class="container">
    <div class="subcontaine-left">   
      <img class= "imageLogin" src="../Sapres_image/2.jpg" alt="login Image">
    </div>
      <div class="subcontaine-right">
          <img class="logo" src="../Sapres_image/logo.jpg" alt="Logo icon">
          <h1 class="textH">Connexion</h1>
          <h3 class="texth">Entrez vos informations et connectez vous 
          <br>à votre espace personnel
          </h3>
          <form method="post">
              <div>
                  <label class="label" for="email">Adresse e-mail</label>
                  <input class="input" type="text" name="mail" id="mail" placeholder="Uname@mail.com">
              </div>

              <div>
                  <label class="label" for="pwd">Mot de passe</label>
                  <input class="input" type="password" name="password" id="password" placeholder="Mot de passe">
              </div>

              <div class="box-btn-submit">
                <input class="btnsubmit" type="submit" placeholder="Connectez-vous"/>
              </div>
              
          </form>
          <a class="linksignup" href="">Mot de passe oublié ?</a>

          <!-- <button class="btnsubmitgoogle" type="submit">
              <svg xmlns="http://www.w3.org/2000/svg" width="32" height="31" viewBox="0 0 32 31" fill="none">
              <path d="M31.1985 12.4643H29.95V12.4H16V18.6H24.7598C23.4818 22.2092 20.0478 24.8 16 24.8C10.8641 24.8 6.7 20.6359 6.7 15.5C6.7 10.3641 10.8641 6.2 16 6.2C18.3707 6.2 20.5275 7.09435 22.1698 8.55522L26.5539 4.17105C23.7856 1.59107 20.0827 0 16 0C7.44012 0 0.5 6.94012 0.5 15.5C0.5 24.0599 7.44012 31 16 31C24.5599 31 31.5 24.0599 31.5 15.5C31.5 14.4607 31.393 13.4462 31.1985 12.4643Z" fill="#FFC107"/>
              <path d="M2.28711 8.28553L7.37963 12.0203C8.75758 8.6087 12.0947 6.2 16 6.2C18.3707 6.2 20.5275 7.09435 22.1697 8.55523L26.5539 4.17105C23.7856 1.59108 20.0827 0 16 0C10.0464 0 4.88336 3.36118 2.28711 8.28553Z" fill="#FF3D00"/>
              <path d="M16 31C20.0037 31 23.6415 29.4678 26.392 26.9762L21.5948 22.9167C19.9863 24.14 18.0208 24.8016 16 24.8C11.9685 24.8 8.54532 22.2293 7.25572 18.6418L2.20117 22.5362C4.76642 27.5559 9.97597 31 16 31Z" fill="#4CAF50"/>
              <path d="M31.1985 12.4643H29.95V12.4H16V18.6H24.7598C24.1485 20.3177 23.0474 21.8187 21.5924 22.9175L21.5947 22.916L26.392 26.9754C26.0525 27.2839 31.5 23.25 31.5 15.5C31.5 14.4607 31.393 13.4463 31.1985 12.4643Z" fill="#1976D2"/>
              </svg>
          Se connecter avec Google</button> -->


          <h1 class="textquestion">Pas encore de compte ? </h1>
          <a class="linklogin" href="signup.php"> Créez le vôtre !</a>
      </div>
  </div>
   
</body>
</html> 