
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
            foreach ($user as $user){ ?>
             <tr>
            <td><?= $i++ ?></td>
            <td class="font-weight-bold"><?= $user->nom_complet ?></td>
            <td><?= $user->password ?></td>
            <td><?= $user->matricule ?></td>
            <td><?= $user->role ?></td>
            <td><?= $user->sexe ?></td>
            <td><?= $user->adresse ?></td>
            <td  class="text-center">
                <button class="btn btn-warning btn-sm">Modifier</button>
                <button class="btn btn-danger btn-sm">Supprimer</button>
            </td>
        </tr>
<?php    }
        ?>
    </table>

</div>