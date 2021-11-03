<!DOCTYPE HTML>
<html lang="fr">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <script src="dist/js/bootstrap.min.js"></script>
    <link href="https://code.jquery.com/ui/1.12.1/themes/smoothness/jquery-ui.min.css" rel="stylesheet" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link href="../styles/styles.css" rel="stylesheet">

    <title>BIG EYE</title>
</head>

<body>
    <?php
    require('functions.php');

    $SQL_DSN = "mysql:host=localhost;dbname=test1";
    $SQL_USERNAME = "root";
    $SQL_PASSWORD = "";

    $user = new utilisateur();
    $user->Connexion($SQL_DSN, $SQL_USERNAME, $SQL_PASSWORD);
    ?>
    <?php
    // Donnée le nom de la table a afficher
    $nom_table = "information_pc";

    // Requete SQL du filtre et activation du bouton défiltré
    if (!isset($_GET['champ'])) {
        $filtre_sup = "";
        $actif = " disabled";
    } else {
        $filtre_sup = " WHERE " . $_GET['champ'] . " LIKE '" . $_GET['recherche'] . "'";
        $actif = "";
    }

    $sql = 'SELECT * FROM ' . $nom_table . '' . $filtre_sup . '';
    if (!is_null($user) && !is_null($user->getPDO())) {
        $req = $user->getPDO()->query($sql);
    } else {
        echo "Probleme connextion BDD";
    }
    ?>
        <!-- Bouton défiltré -->
        <div class="row">
            <h2>Liste des ordinateurs</h2>
        </div>

        <div class="row" id="bordure">
            <form action="index.php"><button class="btn btn-primary" role="button" <?php echo $actif; ?>>Défiltrer</button></form>
            <div class="table-responsive mt-3">
                <!-- Création du tableau -->
                <table class="table table-hover table-bordered">
                    <thead>
                        <?php
                        // On remplace la variable de classe nom_table 
                        $user->SetNomTable($nom_table);
                        // On génére la tableau
                        $user->generateTab('nom_ordinateur', 'nom_utilisateur', 'prenom_utilisateur', 'emplacement', 'production', 'en_service', 'type_materiel', 'date_achat', 'services', 'adresse_ip');
                        ?>
                    </thead>

                    <tbody>
                        <?php
                        // Affichage du tableau remplacé $row['***']  par les entete du tableau à afficher 
                        while ($row = $req->fetch()) { 
                            //on cree les lignes du tableau avec chaque valeur retournée
                            echo '<tr>';
                            echo '<td>' . $row['nom_ordinateur'] . '</td>';
                            echo '<td>' . $row['nom_utilisateur'] . '</td>';
                            echo '<td>' . $row['prenom_utilisateur'] . '</td>';
                            echo '<td>' . $row['emplacement'] . '</td>';
                            echo '<td>' . $row['production'] . '</td>';
                            echo '<td>' . $row['en_service'] . '</td>';
                            echo '<td>' . $row['type_materiel'] . '</td>';
                            echo '<td>' . $row['date_achat'] . '</td>';
                            echo '<td>' . $row['services'] . '</td>';
                            echo '<td>' . $row['adresse_ip'] . '</td>';
                            echo '<td>';
                            echo '<a class="btn btn-info" href="./crud/detail.php?id=' . $row['ID'] . '">Detail<a>'; // un autre td pour le bouton d'edition
                            echo '</td>';
                            echo '<td>';
                            echo '<a class="btn btn-success" href="./crud/update.php?id=' . $row['ID'] . '">Update</a>'; // un autre td pour le bouton d'update
                            echo '</td>';
                            echo '<td>';
                            echo '<a class="btn btn-danger" href="./crud/delete.php?id=' . $row['ID'] . ' ">Delete</a>'; // un autre td pour le bouton de suppression
                            echo '</td>';
                            echo '</tr>';
                            ?>
                    </tbody>

                <?php }
                        $req->closeCursor();
                ?>
                </table>
            </div>
        </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>

</html>