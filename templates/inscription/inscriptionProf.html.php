<section class="vh-100" style="background-color:  #9A616D;">
  <div class="container py-3 h-12 ">
    <div class="row d-flex justify-content-center align-items-center h-50">
      <div class="col col-xl-10">
        <div class="card bg-danger mt-5" style="border-radius: 1rem;">
          <div class="row g-0">
            <div class="col-md-6 col-lg-5 d-none d-md-block ">
              <!-- <img src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-login-form/img1.webp" -->
              <img src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-login-form/draw2.webp"
                alt="login form" class="img-fluid" style="border-radius: 1rem 0 0 1rem;" />
            </div>
            <div class="col-md-6 col-lg-7 d-flex align-items-center ">
              <div class="card-body p-4 p-lg-5 text-black">

                <form action="inscrireProf" method="POST">
                  <?php
                  if (isset($insert) && $insert==1){
                  echo  '<div class="alert alert-succses">Ajouter avec succes</div>';
                  }
                  ?>
    <!-- <div class="alert alert-succses">Ajouter avec succes</div> -->
                  <div class="d-flex align-items-center mb-3 pb-1">
                    <i class="fas fa-cubes fa-2x me-3" style="color: #ff6219;"></i>
                    <span class="h1 fw-bold mb-0">Inscription professeurs</span>
                  </div>

                  <div class="form-outline mb-4">
                  <label class="form-label" for="form2Example17">Nom Complet</label>
                    <input name="nomComplet" type="text" id="form2Example17" class="form-control form-control-lg" />
                  </div>

                  <div class="form-outline mb-4">
                  <label class="form-label" for="form2Example27">grade</label>
                    <input name="grade" type="text" id="form2Example27" class="form-control form-control-lg" />
                  </div>

                  <div class="pt-1 mb-4">
                    <button class="btn btn-dark btn-lg btn-block" type="submit">s'incrire</button>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>




<!-- <div class="card container col-5 bg-secondary mt-5">
    <img class="card-img-top" src="holder.js/100x180/" alt="">
    <div class="card-body">
        <h4 class="card-title">Formulaire d'inscription</h4>
        <p class="card-text"> -->
        <!-- <form action="inscrireProf" method="POST">
     <div class="mb-3">
        <label for="exampleInputPassword1" class="form-label" >Nom Complet</label>
        <input name="nomComplet" type="text" class="form-control" id="exampleInputPassword1">
    </div>
  <div class="mb-3">
  <label for="exampleInputEmail1" class="form-label">grade</label>
    <input name="grade" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
    <div id="emailHelp" class="form-text"></div>
  </div> -->
    <!-- <label for="exampleInputEmail1" class="form-label">login</label>
    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
    <div id="emailHelp" class="form-text"></div>
  </div> -->
  <!-- <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Password</label>
    <input type="password" class="form-control" id="exampleInputPassword1">
  </div> -->
  <!-- <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Confirme Password</label>
    <input type="password" class="form-control" id="exampleInputPassword1">
  </div> -->
  <!-- <button type="submit" class="btn btn-primary">s'incrire</button>
</form>
        </p>
    </div>
</div> -->
