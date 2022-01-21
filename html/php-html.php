<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="utf-8">
    <title>PHP & HTML</title>
  </head>
  <body>
    <h1>Liste des élèves</h1>
    <!-- Instructions : Afficher la liste des élèves qui sont présents dans le tableau $students -->
    <?php
        //students
        $students = ['Hulk', 'Iron Man', 'Wonder Woman', 'Black Widow', 'Malicia'];
     ?>
     <ul>
       <?php
          foreach ($students as $student) {?>
              <li><?= $student ?></li><?php
          }
       ?>
     </ul>
     <hr>
     <h1>Date du jour</h1>
     <form>

       <!-- Instructions : Créer la liste de jour (en chiffres), de mois (en chiffres) et d'année en PHP. -->
       <label for="day">Day</label>
       <select  name="day" id="day"><?php
           for ($i = 0; $i <= 31; $i++) {?>
           <option value="<?= $i ?>"><?= $i ?></option><?php
           } ?>
       </select>
       <label for="month">Month</label>
       <select  name="month" id="month"><?php
           for ($i = 0; $i <= 12; $i++) {?>
               <option value="<?= $i ?>"><?= $i ?></option><?php
           } ?>
       </select>
       <label for="year">Year</label>
       <select  name="year" id="year"><?php
           for ($i = 1950; $i <= 2022; $i++) {?>
               <option value="<?= $i ?>"><?= $i ?></option><?php
           } ?>
       </select>
     </form>
     <hr>
     <!-- TODO Instruction : Afficher ce bloc que si dans l'URL il y'a une variable sexe et que ça valeur vaut "fille" -->
    <?php
        foreach ($_GET as $param => $value) {
            if ($value === "fille") {?>
                <p>Je suis une fille</p><?php
            }
            elseif ($value === "garçon") {?>
                <p>Je suis un garçon</p><?php
            }
            else {?>
                <p>Je suis indéfini</p><?php
            }
        }
    ?>


  </body>
</html>
