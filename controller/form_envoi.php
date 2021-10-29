<?php

try {
    $dbh = new PDO('mysql:host=localhost;dbname=test1;charset=utf8', 'root', '');

    $dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $stmt = $dbh->prepare("INSERT INTO information_pc (ID, nom_ordinateur, nom_utilisateur, prenom_utlisateur, ref_qualite, production, emplacement, services, adresse_ip, reference, lan_reseau, type_materiel, en_service, numero_serie, systeme_exploitation, mac_adresse, date_achat, login_admin_local, pwd_admin_local, login_admin_boissy, pwd_admin_boissy,user_login, user_pwd, vpn) VALUES (NULL, '" . $_POST['nomOrdinateur'] . "', '" . $_POST['nomUtilisateur'] . "', '" . $_POST['prenomUtilisateur'] . "', '" . $_POST['refQualite'] . "', '" . $_POST['enProduction'] . "', '" . $_POST['emplacement'] . "', '" . $_POST['nomService'] . "','" . $_POST['adresseIp'] . "','" . $_POST['reference'] . "','" . $_POST['reseauLan'] . "','" . $_POST['typeMateriel'] . "','" . $_POST['enService'] . "','" . $_POST['numeroSerie'] . "','" . $_POST['systemeExploitation'] . "','" . $_POST['adresseMac'] . "','" . $_POST['dateAchat'] . "','" . $_POST['loginAdminLocal'] . "','" . $_POST['pwdAdminLocal'] . "','" . $_POST['loginAdminDomaine'] . "','" . $_POST['pwdAdminDomaine'] . "','" . $_POST['loginUser'] . "','" . $_POST['passwordUser'] . "','" . $_POST['vpn'] . "')");
    $stmt->execute();
} catch (Exception $e) {
    die('Erreur : ' . $e->getMessage());
}
// if ($dbh->query($stmt)) {
//     echo "<p>ordinateur ajouter avec succe;</p>";
// } else {
//     echo "<p>merci de remplir tous les champ</p>";
// }

$dbh = null;
?>
<a class="btn btn-primary" href="../public/index.php" role="button">retour</a>

