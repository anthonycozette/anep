<?php
include('../database/database.php');
$pdo = Database::connect();
$select = $pdo->prepare('SELECT * FROM information_pc');
$select->setFetchMode(PDO::FETCH_ASSOC);
$select->execute();

$newEquipement = $select->fetchAll();

$excel = "";
$excel .=  "Nom Ordinateur\tNom Utilisateur\tPrenom Utilisateur\tRef Qualite\tEmplacement\tServices\tAdresse Ip\tReference\tReseau LAN\tType Materiel\tEn Service\tNumero de Serie\tSysteme Exploitation\tAdresse Mac\tDate Achat\tLogin Admin Local\tLogin Admin Domaine\tLogin Utilisateur\tVPN\n";

foreach ($newEquipement as $row) {
    $excel .= "$row[nom_ordinateur]\t$row[nom_utilisateur]\t$row[prenom_utilisateur]\t$row[ref_qualite]\t$row[emplacement]\t$row[services]\t$row[adresse_ip]\t$row[reference]\t$row[lan_reseau]\t$row[type_materiel]\t$row[en_service]\t$row[numero_serie]\t$row[systeme_exploitation]\t$row[mac_adresse]\t$row[date_achat]\t$row[login_admin_local]\t$row[login_admin_boissy]\t$row[user_login]\t$row[vpn]\n";
}

header("Content-type: application/vnd.ms-excel");
header("Content-disposition: attachment; filename=liste-equipement.xls");

print $excel;
exit;
Database::disconnect();
