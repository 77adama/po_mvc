
<div class="container mt-5 ml-5">

<table class="table table-bordeless">
        <tr class="bg-info">
            <th>N°</th>
            <th>Nom Complet</th>
            <th>password</th>
            <th>role</th>
            <th>matricule</th>
            <th>sexe</th>
            <th>adresse</th>
            <th class="text-center">Actions</th>
        </tr>
        <?php
        $i=1;
            foreach ($pers as $perso){ ?>
             <tr>
            <td><?= $i++ ?></td>
            <td class="font-weight-bold"><?= $perso->nom_complet ?></td>
            <td><?= $perso->password ?></td>
            <td><?= $perso->matricule ?></td>
            <td><?= $perso->role ?></td>
            <td><?= $perso->sexe ?></td>
            <td><?= $perso->adresse ?></td>
            <td  class="text-center">
                <button class="btn btn-warning btn-sm">Modifier</button>
                <button class="btn btn-danger btn-sm">Supprimer</button>
            </td>
        </tr>
<?php    }
        ?>
    </table>

</div>


























<!-- <div class="card ml-5">
    <img class="card-img-top" src="holder.js/100x180/" alt="">
    <div class="card-body">
        <h4 class="card-title">Liste des Utilisateurs</h4>
        <p class="card-text">

                <table class="table">
                        <thead>
                            <tr>
                            <th scope="col">#</th>
                            <th scope="col">First</th>
                            <th scope="col">Last</th>
                            <th scope="col">Handle</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                            <th scope="row">1</th>
                            <td>Mark</td>
                            <td>Otto</td>
                            <td>@mdo</td>
                            </tr>
                            <tr>
                            <th scope="row">2</th>
                            <td>Jacob</td>
                            <td>Thornton</td>
                            <td>@fat</td>
                            </tr>
                            <tr>
                            <th scope="row">3</th>
                            <td colspan="2">Larry the Bird</td>
                            <td>@twitter</td>
                            </tr>
                        </tbody>
        </table>

        </p>
    </div>
</div> -->

