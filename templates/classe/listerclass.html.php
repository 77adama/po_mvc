
<div class="container mt-5 ml-5">

<table class="table table-bordeless">
        <tr class="bg-info">
            <th>N°</th>
            <th>Libelle</th>
            <th>Fliere</th>
            <th>Niveau</th>
            <th class="text-center">Actions</th>
        </tr>

        <?php
        $i=1;
            foreach ($classe as $classe){ ?>
             <tr>
            <td><?= $i++ ?></td>
            <td class="font-weight-bold"><?= $classe->libelle ?></td>
            <td><?= $classe->fliere ?></td>
            <td><?= $classe->niveau ?></td>
            <td  class="text-center">
                <button class="btn btn-warning btn-sm">Modifier</button>
                <button class="btn btn-danger btn-sm">Supprimer</button>
            </td>
        </tr>
<?php    }
        ?>
    </table>

</div>
  