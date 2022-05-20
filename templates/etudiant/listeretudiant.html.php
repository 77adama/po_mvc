
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
            foreach ($etudiant as $etudiant){ ?>
             <tr>
            <td><?= $i++ ?></td>
            <td class="font-weight-bold"><?= $etudiant->nom_complet ?></td>
            <td><?= $etudiant->password ?></td>
            <td><?= $etudiant->matricule ?></td>
            <td><?= $etudiant->role ?></td>
            <td><?= $etudiant->sexe ?></td>
            <td><?= $etudiant->adresse ?></td>
            <td  class="text-center">
                <button class="btn btn-warning btn-sm">Modifier</button>
                <button class="btn btn-danger btn-sm">Supprimer</button>
            </td>
        </tr>
<?php    }
        ?>
    </table>

</div>