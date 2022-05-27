<!-- Section: Design Block -->
<section class="text-center text-lg-start mt-5 ml-5">
  <style>
    .cascading-right {
      margin-right: -50px;
    }

    @media (max-width: 991.98px) {
      .cascading-right {
        margin-right: 0;
      }
    }
  </style>

  <!-- Jumbotron -->
  <div class="container py-4">
    <div class="row g-0 align-items-center">
      <div class="col-lg-6 mb-5 mb-lg-0">
        <div class="card cascading-right" style="
            background: hsla(0, 0%, 100%, 0.55);
            backdrop-filter: blur(30px);
            ">
          <div class="card-body p-5 shadow-5 text-center bg-success">
            <h2 class="fw-bold mb-5 text-white">Formulaire d'inscription des RP</h2>
            <form action="inscrirerp" method="POST">
              <!-- 2 column grid layout with text inputs for the first and last names -->
              <div class="row">
              <div class="form-outline mb-4">
                <input name="nomComplet" type="text" id="form3Example3" class="form-control" />
                <label class="form-label h3 text-white" for="form3Example3">Nom Complet</label>
              </div>
                <div class="col-md-6 mb-4">
                  <div class="form-outline">
                    <input name="login" type="email" id="form3Example1" class="form-control" />
                    <label class="form-label h3 text-white" for="form3Example1">login</label>
                  </div>
                </div>
                <div class="col-md-6 mb-4">
                  <div class="form-outline">
                    <input name="password" type="password" id="form3Example2" class="form-control" />
                    <label class="form-label h3 text-white" for="form3Example2">password</label>
                  </div>
                </div>
              </div>

              <!-- Email input -->
              <!-- Submit button -->
              <button type="submit" class="btn btn-primary btn-block mb-4 w-10">
                Ajouter
              </button>
            </form>
          </div>
        </div>
      </div>

      <div class="col-lg-6 mb-5 mb-lg-0">
        <img src="https://mdbootstrap.com/img/new/ecommerce/vertical/004.jpg" class="w-50 rounded-4 shadow-4"
          alt="" />
      </div>
    </div>
  </div>
  <!-- Jumbotron -->
</section>
<!-- Section: Design Block -->



<!-- <div class="card container col-5 bg-secondary mt-5 bg-success">
    <img class="card-img-top" src="holder.js/100x180/" alt="">
    <div class="card-body">
        <h4 class="card-title">Formulaire d'inscription des RP</h4>
        <p class="card-text">
        <form action="inscrirerp" method="POST">
     <div class="mb-3">
        <label for="exampleInputPassword1" class="form-label text-white" >Nom Complet</label>
        <input placeholder="Nom Complet" name="nomComplet" type="text" class="form-control" id="exampleInputPassword1">
    </div>
  <div class="mb-3">
  <label for="exampleInputEmail1" class="form-label text-white">login</label>
    <input placeholder="login" name="login" type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
    <div id="emailHelp" class="form-text"></div>
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label text-white">Password</label>
    <input placeholder="password" name="password" type="password" class="form-control" id="exampleInputPassword1">
  </div>
  <button type="submit" class="btn btn-primary">s'incrire</button>
</form>
        </p>
    </div>
</div> -->
