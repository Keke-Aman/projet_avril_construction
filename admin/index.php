<?php 
    require 'database.php';

 ?>

<!DOCTYPE html>
<html>
    <head>
        <title>Tool's Keke</title>
        <meta charset="utf-8"/>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>                <link class="icon" rel="shortcut icon" href="../images/couv3.jpg" >
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
        <link href='http://fonts.googleapis.com/css?family=Holtwood+One+SC' rel='stylesheet' type='text/css'>
        <link rel="stylesheet" href="../css/style.css">
    </head>
    
    <body>
        <center><h1 class="text-logo"><span class="glyphicon glyphicon-home"></span> Tool's Keke <span class="glyphicon glyphicon-home"></span></h1></center>

          <div class="container admin">
            <div class="row">
                <h1><strong><center>Liste des Commandes </center></h1>
                <table class="table table-striped table-bordered">
                  <thead>
                    <tr>
                      <th>Nom de l'Outils</th>
                      <th>Catégories</th>
                      <th>Quantité</th>
                      <th>Client</th>
                      <th>Contacts</th>
                    </tr>
                  </thead>
                  <tbody>
                      <?php
                                              $db = Database::connect();

                        $statement2 = $db->query('SELECT commande.id, commande.name, commande.categories, commande.quantite, commande.client, commande.contact, categories.name AS category FROM commande LEFT JOIN categories ON commande.categories = categories.id ORDER BY commande.id ASC');
                        while($commande = $statement2->fetch())
                        {
                            echo '<tr>';
                            echo '<td>'. $commande['name'] . '</td>';
                            echo '<td>'. $commande['categories'] . '</td>';
                            echo '<td>'. $commande['quantite'] . '</td>';
                            echo '<td>'. $commande['client'] . '</td>';                                     
                            echo '<td>'. $commande['contact'] . '</td>';
                            echo '</td>';
                            echo '</tr>';
                        }
                      ?>
                  </tbody>
                </table>
            </div>
        </div>
        <div class="container admin">
            <div class="row">
                <h1><strong><center>Liste des Eléments </center> </strong><a href="insert.php" class="btn btn-success btn-lg"><span class="glyphicon glyphicon-plus"></span> Ajouter </a></h1>
                <table class="table table-striped table-bordered">
                  <thead>
                    <tr>
                      <th>Nom</th>
                      <th>Description</th>
                      <th>Prix</th>
                      <th>Catégorie</th>
                      <th>Actions</th>
                    </tr>
                  </thead>
                  <tbody>
                      <?php
                        $statement = $db->query('SELECT items.id, items.name, items.description, items.price, categories.name AS category FROM items LEFT JOIN categories ON items.category = categories.id ORDER BY items.id DESC');
                        while($items = $statement->fetch()) 
                        {
                            echo '<tr>';
                            echo '<td>'. $items['name'] . '</td>';
                            echo '<td>'. $items['description'] . '</td>';
                            echo '<td>'. number_format($items['price'], 2, '.', '') . '</td>';
                            echo '<td>'. $items['category'] . '</td>';
                            echo '<td width=300>';
                            echo '<a class="btn btn-default" href="view.php?id='.$items['id'].'"><span class="glyphicon glyphicon-eye-open"></span> Voir</a>';
                            echo ' ';
                            echo '<a class="btn btn-primary" href="update.php?id='.$items['id'].'"><span class="glyphicon glyphicon-pencil"></span> Modifier</a>';
                            echo ' ';
                            echo '<a class="btn btn-danger" href="delete.php?id='.$items['id'].'"><span class="glyphicon glyphicon-remove"></span> Supprimer</a>';
                            echo '</td>';
                            echo '</tr>';
                                                  Database::disconnect();

                        }
                      ?>
                  </tbody>
                </table>
            </div>
        </div>

      
    </body>
</html>
