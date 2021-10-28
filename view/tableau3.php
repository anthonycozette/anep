<?php

// Connexion à la base de donnée
function dbConnect()  // Connexion à la base de données
{
    try {
        $db = new PDO('mysql:host=localhost;dbname=test1;charset=utf8', 'root', '');
        return $db;
    } catch (Exception $e) {
        die('Erreur : ' . $e->getMessage());
    }
}



// Tri sur colonne
$tri_autorises = array('ID', 'nom_ordinateur', 'nom_utilisateur', 'prenom_utlisateur');


// Le nom de notre table
$tablename = 'information_pc';

// Préparation de la requête
function getbdd($tri_autorises)
{
    $order_by = in_array($_GET['order'], $tri_autorises) ? $_GET['order'] : 'ID';


    // Sens du tri
    $order_dir = isset($_GET['inverse']) ? 'DESC' : 'ASC';

    $db = dbConnect();
    $sqlQuery = "SELECT ID, nom_ordinateur, nom_utilisateur, prenom_utlisateur  FROM information_pc ORDER BY {$order_by} {$order_dir}";
    $req = $db->prepare($sqlQuery);
    $req->execute();

    return $req;
    //     $req = $db->query('SELECT *  FROM information_pc');
    //     return $req;
}
// $sql = "
//     SELECT *
//     FROM {$tablename}
//     ORDER BY {$order_by} {$order_dir}
// ";
// $result = $db->query($sql);

// $sql = "SELECT ID, nom_ordinateur, nom_utilisateur, prenom_utlisateur FROM information_pc ORDER BY {$order_by} {$order_dir}";



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


// Affichage
?>
<style type="text/css">
    a.order_asc,
    a.order_desc:hover {
        padding-right: 15px;
        background: transparent url(s_asc.png) right no-repeat;
    }

    a.order_desc,
    a.order_asc:hover {
        padding-right: 15px;
        background: transparent url(s_desc.png) right no-repeat;
    }
</style>
<?php
function table()
{
    $result = getbdd();
?>
    <table>
        <tr>
            <th><?php echo sort_link('Id', 'ID') ?></th>
            <th><?php echo sort_link('Nom Ordinateur', 'nom_ordinateur') ?></th>
            <th><?php echo sort_link('Nom Utilisateur', 'nom_utilisateur') ?></th>
            <th><?php echo sort_link('Prenom Utilisateur', 'prenom_utlisateur') ?></th>

        </tr>
        <?php while ($row = $result->fetch()) { ?>
            <tr>
                <td><?php echo $row['ID'] ?></td>
                <td><?php echo $row['nom_ordinateur'] ?></td>
                <td><?php echo $row['nom_utilisateur'] ?></td>
                <td><?php echo $row['prenom_utlisateur'] ?></td>
            </tr>
        <?php } ?>
    </table>
<?php
}
