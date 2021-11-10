<?php

//fetch.php

include('../database/database.php');
$connect = Database::connect();
// $column = array('CustomerName', 'Gender', 'Address', 'City', 'PostalCode', 'Country');
$column = array('nom_ordinateur', 'nom_utilisateur', 'prenom_utilisateur', 'emplacement', 'production', 'en_service', 'type_materiel', 'services', 'adresse_ip');


$query = "SELECT * FROM information_pc ";

if (isset($_POST['search']['value'])) {
    $query .= '
 WHERE nom_ordinateur LIKE "%' . $_POST['search']['value'] . '%" 
 OR nom_utilisateur LIKE "%' . $_POST['search']['value'] . '%" 
 OR prenom_utilisateur LIKE "%' . $_POST['search']['value'] . '%" 
 OR emplacement LIKE "%' . $_POST['search']['value'] . '%" 
 OR ref_qualite LIKE "%' . $_POST['search']['value'] . '%" 
 OR en_service LIKE "%' . $_POST['search']['value'] . '%" 
 OR type_materiel LIKE "%' . $_POST['search']['value'] . '%" 
 OR services LIKE "%' . $_POST['search']['value'] . '%" 
 OR adresse_ip LIKE "%' . $_POST['search']['value'] . '%" 
 ';
}

if (isset($_POST['order'])) {
    $query .= 'ORDER BY ' . $column[$_POST['order']['0']['column']] . ' ' . $_POST['order']['0']['dir'] . ' ';
} else {
    $query .= 'ORDER BY ID ASC ';
}

$query1 = '';

if ($_POST['length'] != -1) {
    $query1 = 'LIMIT ' . $_POST['start'] . ', ' . $_POST['length'];
}

$statement = $connect->prepare($query);

$statement->execute();

$number_filter_row = $statement->rowCount();

$statement = $connect->prepare($query . $query1);

$statement->execute();

$result = $statement->fetchAll();

$data = array();

foreach ($result as $row) {
    $sub_array = array();
    $sub_array[] = $row['nom_ordinateur'];
    $sub_array[] = $row['nom_utilisateur'];
    $sub_array[] = $row['prenom_utilisateur'];
    $sub_array[] = $row['emplacement'];
    $sub_array[] = $row['ref_qualite'];
    $sub_array[] = $row['en_service'];
    $sub_array[] = $row['type_materiel'];
    $sub_array[] = $row['services'];
    $sub_array[] = $row['adresse_ip'];
    $sub_array[] = '<a class="btn btn-info" href="detail.php?id=' . $row['ID'] . '">Detail<a>';
    $sub_array[] = '<a class="btn btn-success" href="update.php?id=' . $row['ID'] . '">Update</a>';
    $sub_array[] = '<a class="btn btn-danger" href="delete.php?id=' . $row['ID'] . ' ">Delete</a>';
    $data[] = $sub_array;
}

function count_all_data($connect)
{
    $query = "SELECT * FROM information_pc";
    $statement = $connect->prepare($query);
    $statement->execute();
    return $statement->rowCount();
}

$output = array(
    'draw'    => intval($_POST['draw']),
    'recordsTotal'  => count_all_data($connect),
    'recordsFiltered' => $number_filter_row,
    'data'    => $data
);

echo json_encode($output);
Database::disconnect();
