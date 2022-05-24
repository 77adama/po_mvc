 <?php 
  //  use App\Core\HtmlProvider;
  //  HtmlProvider::navInfo($title,"info",5,$btn,"success","/addProf");
?> 
<!-- <ul class="nav justify-content-end mt-1">
        <li class="nav-item">
            <a class="nav-link active" href="#">liste des professeur</a>
        </li>
        <li class="nav-item">
            <a class="nav-link disabled" href="#">ajout</a>
        </li>
    </ul> --> 

 <!-- <h4 class="bg-info py-4"><?php //echo $titre ?></h4>  -->
 <h4 class="bg-info py-4 d-flex justify-content-between"> <p>Liste des professeurs</p> <a href="inscrireProf">ajouter prof</a></h4>
<div class="container mt-5 ml-5">
<table class="table table-bordeless">
        <tr class="bg-info">
            <th>N°</th>
            <th>Nom Complet</th>
            <th>Grade</th>
            <th class="text-center">Actions</th>
        </tr>

        <?php
        $i=1;
            foreach ($profs as $prof){ ?>
             <tr>
            <td><?= $i++ ?></td>
            <td class="font-weight-bold"><?= $prof->nom_complet ?></td>
            <td><?= $prof->grade ?></td>
            <td  class="text-center">
                <button class="btn btn-warning btn-sm">Modifier</button>
                <button class="btn btn-danger btn-sm">Supprimer</button>
            </td>
        </tr>
<?php    }
        ?>
    </table>

</div>