<?php
    use App\Core\function;
?>
 
 <nav class="nav bg-success nav-fill h4 py-3 bg-success justify-content-between">
        <!-- <a class="nav-link active text-white "  href="listeprof">Liste des professeurs</a>
        <a class="nav-link text-white" href="listerrp">liste RP</a>
        <a class="nav-link text-white" href="listerac">Liste AC</a>
        <a class="nav-link text-white" href="listeretudiant" >liste des Etudiants</a>
        <a class="nav-link text-white" href="logout">Deconnecter</a> -->

        <nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid">
    <a class="nav-link dropdown-toggle " id="navbarDropdown  " role="button" data-bs-toggle="dropdown" aria-expanded="false" href="#">gerer les RP</a>
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
            Gérer les inscriptions
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item" href="#">Action</a></li>
            <li><a class="dropdown-item" href="#">Another action</a></li>
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


    <p class="container bg-success mt-5 text-center text-white-50"><small class="h1">Welcome in ODC !!!</small></p>
         <div class="d-flex justify-content-between container">
            <div class="col-md-6 col-lg-5 d-none d-md-block">
              <img src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-login-form/draw2.webp"
                alt="login form" class="img-fluid" style="border-radius: 1rem 0 0 1rem;" />
            </div>
            <div class=" col-md-1 col-lg-4 d-none d-md-block ">
                <img class="h-25" src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-login-form/img1.webp"
                 alt="login form" class="img-fluid" style="border-radius: 1rem 0 0 1rem;" />
           </div>
         </div>