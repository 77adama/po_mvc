<?php 
// if ($_SESSION["user-connect"]) {
  
// }
?>
  <ul class="nav justify-content-center mt-1 bg-success py-3">
        <li class="nav-item">
            <a class="nav-link h2 text-white" href="#">PO-ODC</a>
        </li>
    </ul>
<div class="card container col-5 bg-secondary mt-5">
    <img class="card-img-top" src="holder.js/100x180/" alt="">
    <div class="card-body">
        <h4 class="card-title text-white">Formulaire de Connexion</h4>
        <p class="card-text">
        <form action="/login" method="POST"> 
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label text-white">Email address</label>
    <input name="login" type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
    <div id="emailHelp" class="form-text text-white">We'll never share your email with anyone else.</div>
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label text-white">Password</label>
    <input name="password" type="password" class="form-control" id="exampleInputPassword1">
  </div>
  <button  class="btn btn-primary ">connecter</button>
</form>
        </p>
    </div>
</div>
