
<div class="container mt-5 ml-5">

<table class="table table-bordeless">
        <tr class="bg-info">
            <th>N°</th>
            <th>Nom Complet</th>
            <th>password</th>
            <th class="text-center">role</th>
            <th class="text-center">parametre</th>
        </tr>
        <?php
        $i=1;
            foreach ($rp as $rp){ ?>
             <tr>
            <td><?= $i++ ?></td>
            <td class="font-weight-bold"><?= $rp->nom_complet ?></td>
            <td><?= $rp->password ?></td>
            <td><?= $rp->role ?></td>
            <td  class="text-center">
                <button class="btn btn-warning btn-sm">Modifier</button>
                <button class="btn btn-danger btn-sm">Supprimer</button>
            </td>
        </tr>
<?php    }
        ?>
    </table>

</div>