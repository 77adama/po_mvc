<section class="vh-100 bg-info">
  <div class="container py-5 h-100">
    <div class="row d-flex align-items-center justify-content-center h-100">
      <div class="col-md-8 col-lg-7 col-xl-6">
        <img src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-login-form/draw2.svg"
          class="img-fluid" alt="Phone image">
      </div>
      <div class="col-md-7 col-lg-5 col-xl-5 offset-xl-1 ">
      <h4 class="card-title mb-5 h2 text-white">Formulaire d'inscription des AC</h4>
        <form action="inscrireac" method="POST">
                    <!-- nomComplet input -->
           <div class="form-outline mb-4">
          <label class="form-label" for="form1Example13">Nom Complet</label>
            <input name="nomComplet" type="text" id="form1Example13" class="form-control form-control-lg" />
          </div>
          <!-- Email input -->
          <div class="form-outline mb-4">
          <label class="form-label" for="form1Example13">login</label>
            <input name="login" type="email" id="form1Example13" class="form-control form-control-lg" />
          </div>
          <!-- Password input -->
          <div class="form-outline mb-4">
          <label class="form-label" for="form1Example23">Password</label>
            <input name="password" type="password" id="form1Example23" class="form-control form-control-lg" />
          </div>
          <!-- Submit button -->
          <button type="submit" class="btn btn-primary btn-lg btn-block">Ajouter</button>

        </form>
      </div>
    </div>
  </div>
</section>


<!-- 
<div class="card container col-5 bg-secondary">
    <img class="card-img-top" src="holder.js/100x180/" alt="">
    <div class="card-body">
        <h4 class="card-title">Formulaire d'inscription</h4>
        <p class="card-text">
        <form action="inscrireac" method="POST">
     <div class="mb-3">
        <label for="exampleInputPassword1" class="form-label" >Nom Complet</label>
        <input name="nomComplet" type="text" class="form-control" id="exampleInputPassword1">
    </div>
  <div class="mb-3">
  <label for="exampleInputEmail1" class="form-label">login</label>
    <input name="login" type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
    <div id="emailHelp" class="form-text"></div>
  </div> -->
    <!-- <label for="exampleInputEmail1" class="form-label">login</label>
    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
    <div id="emailHelp" class="form-text"></div>
  </div> -->
<!-- 
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Password</label>
    <input name="password" type="password" class="form-control" id="exampleInputPassword1">
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
