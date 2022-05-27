<div class="card container col-5 bg-secondary mt-5 bg-success">
    <img class="card-img-top" src="holder.js/100x180/" alt="">
    <div class="card-body">
        <h4 class="card-title">Formulaire d'ajout des classe</h4>
        <p class="card-text">
        <form action="add-classe" method="POST">
     <div class="mb-3">
        <label for="exampleInputPassword1" class="form-label" >libelle</label>
        <input name="libelle" type="text" class="form-control" id="exampleInputPassword1">
    </div>
  <div class="mb-3">
  <label for="exampleInputEmail1" class="form-label">fliere</label>
    <input placeholder="flierte" name="fliere" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
    <div id="emailHelp" class="form-text"></div>
  </div>
    <!-- <label for="exampleInputEmail1" class="form-label">login</label>
    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
    <div id="emailHelp" class="form-text"></div>
  </div> -->
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">niveau</label>
    <input name="niveau" type="text" class="form-control" id="exampleInputPassword1">
  </div>
  <!-- <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Confirme Password</label>
    <input type="password" class="form-control" id="exampleInputPassword1">
  </div> -->
  <button type="submit" class="btn btn-primary">ajouter</button>
</form>
        </p>
    </div>
</div>
