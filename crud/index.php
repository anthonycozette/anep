<!DOCTYPE html>
<html>

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <title>Liste Ordinateur</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link href="../styles/styles.css" rel="stylesheet">
    <img src="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7" data-wp-preserve="%3Cscript%20src%3D%22js%2Fbootstrap.js%22%3E%3C%2Fscript%3E" data-mce-resize="false" data-mce-placeholder="1" class="mce-object" width="20" height="20" alt="<script>" title="<script>" />
</head>

<body>

    <div class="container">

        <div class="row">
            <h2>Liste des ordinateurs</h2>
        </div>

        <div class="row">

            <a href="add.php" class="btn btn-success col-2">Ajouter un ordinateur</a>

            <div class="table-responsive mt-3">

                <table class="table table-hover table-bordered">
                    <?php include 'database.php';
                    //on inclut notre fichier de connection 
                    $pdo = Database::connect();

                    // Tri sur colonne
                    $tri_autorises = array('nom_ordinateur', 'nom_utilisateur', 'prenom_utilisateur', 'adresse_ip');
                    $order_by = in_array(isset($_GET['order']), $tri_autorises) ? $_GET['order'] : 'ID';

                    // Sens du tri
                    $order_dir = isset($_GET['inverse']) ? 'DESC' : 'ASC';

                    //on se connecte à la base 
                    $sql = "SELECT * FROM information_pc ORDER BY {$order_by} {$order_dir}";

                    // Notre fonction qui affiche les liens
                    function sort_link($text, $order = false)
                    {
                        global $order_by, $order_dir;

                        if (!$order)
                            $order = $text;

                        $link = '<a href="?order=' . $order;
                        if ($order_by == $order && $order_dir == 'ASC')
                            $link .= '&inverse=true';
                        $link .= '"';
                        if ($order_by == $order && $order_dir == 'ASC')
                            $link .= ' class="order_asc"';
                        elseif ($order_by == $order && $order_dir == 'DESC')
                            $link .= ' class="order_desc"';
                        $link .= '>' . $text . '</a>';

                        return $link;
                    }
                    ?>
                    <thead>

                        <th><?php echo sort_link('Nom ordinateur', 'nom_ordinateur') ?></th>
                        <th><?php echo sort_link('Nom utilisateur', 'nom_utilisateur') ?></th>
                        <th><?php echo sort_link('Prénom utilisateur', 'prenom_utilisateur') ?></th>
                        <th><?php echo sort_link('Emplacement', 'emplacement') ?></th>
                        <th><?php echo sort_link('Production', 'production') ?></th>
                        <th><?php echo sort_link('En service', 'en_service') ?></th>
                        <th><?php echo sort_link('Type de Materiel', 'type_materiel') ?></th>
                        <th><?php echo sort_link('Date achat', 'date_achat') ?></th>
                        <th><?php echo sort_link('service', 'services') ?></th>
                        <th><?php echo sort_link('Adresse ip', 'adresse_ip') ?></th>

                    </thead>

                    <tbody>
                        <?php

                        //on formule notre requete 
                        foreach ($pdo->query($sql) as $row) {

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
                            echo '<a class="btn btn-info" href="detail.php?id=' . $row['ID'] . '">Detail<a>'; // un autre td pour le bouton d'edition
                            echo '</td>';
                            echo '<td>';
                            echo '<a class="btn btn-success" href="update.php?id=' . $row['ID'] . '">Update</a>'; // un autre td pour le bouton d'update
                            echo '</td>';
                            echo '<td>';
                            echo '<a class="btn btn-danger" href="delete.php?id=' . $row['ID'] . ' ">Delete</a>'; // un autre td pour le bouton de suppression
                            echo '</td>';
                            echo '</tr>';
                        }
                        Database::disconnect(); //on se deconnecte de la base
                        ;

                        ?>
                    </tbody>

                </table>

            </div>

        </div>

    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>

</html>