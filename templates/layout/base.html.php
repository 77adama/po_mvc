<?php
    use App\Model\User;
    use App\core\functions;
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?= $Constantes::WEB_ROOT."css/bootstrap.css" ?>">
    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous"> -->
    <title>Document</title>
</head>
<body class="bg-transparent">

<?php
// $user = User::findAll();
//                 $user->setLogin($login);
//                 $user->setPassword($password);
//     $user= User::findUserByLoginAndPassword($login,$password);
// var_dump(hiddenNave($user));
// $user= User::findUserByLoginAndPassword();

//     if ($user) {
//         $_SESSION["user-connect"] = $user;
       
//     }
?>

<nav class="nav bg-success nav-fill h4 py-3 bg-success justify-content-between" <?= hiddenNave() ?>>
        <!-- <a class="nav-link active text-white "  href="listeprof">Liste des professeurs</a>
        <a class="nav-link text-white" href="listerrp">liste RP</a>
        <a class="nav-link text-white" href="listerac">Liste AC</a>
        <a class="nav-link text-white" href="listeretudiant" >liste des Etudiants</a> 
        <a class="nav-link text-white" href="logout">Deconnecter</a> -->

        <nav class="navbar navbar-expand-lg navbar-light bg-light" >
  <div class="container-fluid">
    <a class="nav-link dropdown-toggle <?=hidden(['ROLE_ETUDIANT'])?>" id="navbarDropdown  " role="button" data-bs-toggle="dropdown" aria-expanded="false" href="#">gerer les RP</a>
           <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item" href="listerrp">lister les RP</a></li>
            <li><a class="dropdown-item" href="inscrirerp">Ajouter RP</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="#">Something else here</a></li>
          </ul>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" id="navbarDropdown  " role="button" data-bs-toggle="dropdown" aria-expanded="false" href="#">gerer les AC</a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item" href="listerac">Lister AC</a></li>
            <li><a class="dropdown-item" href="inscrireac">Ajouter AC</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="#">Something else here</a></li>
          </ul>
        </li>

        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" id="navbarDropdown  " role="button" data-bs-toggle="dropdown" aria-expanded="false" href="#">gerer les Etudiants</a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item" href="listeretudiant">Lister Etudiant</a></li>
            <li><a class="dropdown-item" href="inscrireetudiant">Ajouter Etudiant</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="#">Inscrire Etudiant</a></li>
          </ul>
        </li>

        <li class="nav-item">
          <a class="nav-link" href="listeruser">Liste des Users</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Gérer les Classe
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item" href="add-classe">Ajouter Classe</a></li>
            <li><a class="dropdown-item" href="classes">lister Classes</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="#">Something else here</a></li>
          </ul>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle " id="navbarDropdown  " role="button" data-bs-toggle="dropdown" aria-expanded="false">Gerer Prof</a>
            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                <li><a class="dropdown-item" href="listeprof">Liste des Professeurs</a></li>
                <li><a class="dropdown-item" href="inscrireProf">ajouter Professeurs</a></li>
                <li><hr class="dropdown-divider"></li>
                <li><a class="dropdown-item" href="#">affecterClasse</a></li>
            </ul>
        </li>
      </ul>
    </div>
  </div>
</nav>
<a class="nav-link text-white d-flex justify-content-end h2" href="logout">Deconnecter</a>
    </nav> 


    <!-- <ul class="nav justify-content-end mt-1">
        <li class="nav-item">
            <a class="nav-link active" href="#">Personnes</a>
        </li>
        <li class="nav-item">
            <a class="nav-link disabled" href="#">Deconexion</a>
        </li>

    <!-- <nav class="nav bg-success nav-fill h4 py-3 bg-success">
        <a class="nav-link active text-white bg-warning" aria-current="page" href="listeprof">Liste des professeurs</a>
        <a class="nav-link text-white" href="#">Much longer nav link</a>
        <a class="nav-link text-white" href="#">Link</a>
        <a class="nav-link disabled text-white" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
    </nav> -->
    
<?=$content_for_views?>

<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
</body>
</html>




<!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script> -->