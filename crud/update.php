<?php
// Initialiser la session
session_start();
// Vérifiez si l'utilisateur est connecté, sinon redirigez-le vers la page de connexion
if (!isset($_SESSION["username"])) {
    header("Location: ../registration/login.php");
    exit();
}

require '../database/database.php';
$id = null;
if (!empty($_GET['id'])) {
    $id = $_REQUEST['id'];
}
if (null == $id) {
    header("Location: index.php");
}
if ($_SERVER["REQUEST_METHOD"] == "POST" && !empty($_POST)) {

    // on initialise nos erreurs
    $nomOrdinateurError = null;
    $nomUtilisateurError = null;
    $prenomUtilisateurError = null;
    $refQualiteError = null;
    // $productionlError = null;
    $emplacementError = null;
    $servicesError = null;
    $adresseIpError = null;
    $referenceError = null;
    $reseauLanError = null;
    $typeMaterielError = null;
    $enServiceError = null;
    $numeroSerieError = null;
    $systemeExploitationError = null;
    $adresseMacError = null;
    $dateAchatError = null;
    $loginAdminLocalError = null;
    $pwdAdminLocalError = null;
    $loginAdminDomaineError = null;
    $pwdAdminDomaineError = null;
    $loginUserError = null;
    $passwordUserError = null;
    $vpnError = null;

    // On assigne nos valeurs 
    $nomOrdinateur = $_POST['nomOrdinateur'];
    $nomUtilisateur = $_POST['nomUtilisateur'];
    $prenomUtilisateur = $_POST['prenomUtilisateur'];
    $refQualite = $_POST['refQualite'];
    // $production = $_POST['enProduction'];
    $emplacement = $_POST['emplacement'];
    $services = $_POST['nomService'];
    $adresseIp = $_POST['adresseIp'];
    $reference = $_POST['reference'];
    $reseauLan = $_POST['reseauLan'];
    $typeMateriel = $_POST['typeMateriel'];
    $enService = $_POST['enService'];
    $numeroSerie = $_POST['numeroSerie'];
    $systemeExploitation = $_POST['systemeExploitation'];
    $adresseMac = $_POST['adresseMac'];
    $dateAchat = $_POST['dateAchat'];
    $loginAdminLocal = $_POST['loginAdminLocal'];
    $pwdAdminLocal = $_POST['pwdAdminLocal'];
    $loginAdminDomaine = $_POST['loginAdminDomaine'];
    $pwdAdminDomaine = $_POST['pwdAdminDomaine'];
    $loginUser = $_POST['loginUser'];
    $passwordUser = $_POST['passwordUser'];
    $vpn = $_POST['vpn'];

    // On verifie que les champs sont remplis 
    $valid = true;
    if (empty($nomOrdinateur)) {
        $nomOrdinateurError = 'nom ordinateur';
        $valid = false;
    }
    if (empty($nomUtilisateur)) {
        $nomUtilisateurError = 'nom utilisateur';
        $valid = false;
    }
    if (empty($prenomUtilisateur)) {
        $prenomUtilisateurError = 'prénom utilisateur';
        $valid = false;
    }
    // if (empty($refQualite)) {
    //     $refQualiteError = 'Reference qualité';
    //     $valid = true;
    // }
    // if (empty($production)) {
    //     $productionError = 'En production';
    //     $valid = false;
    // }
    if (empty($emplacement)) {
        $emplacementError = 'Emplacement';
        $valid = false;
    }
    if (empty($services)) {
        $servicesError = 'Nom du service';
        $valid = false;
    }
    if (empty($adresseIp)) {
        $adresseIpError = 'adresse IP';
        $valid = false;
    }
    if (empty($reference)) {
        $referenceError = 'Reference ordinateur';
        $valid = false;
    }
    if (empty($reseauLan)) {
        $reseauLanError = 'Réseau LAN';
        $valid = false;
    }
    if (empty($typeMateriel)) {
        $typeMaterielError = 'Type de matériel';
        $valid = false;
    }
    if (empty($enService)) {
        $enServiceError = 'En service';
        $valid = false;
    }
    if (empty($numeroSerie)) {
        $numeroSerieError = 'Numero de serie';
        $valid = false;
    }
    // if (empty($systemeExploitation)) {
    //     $systemeExploitationError = 'Systeme exploitation';
    //     $valid = false;
    // }
    if (empty($adresseMac)) {
        $adresseMacError = 'adresse mac';
        $valid = false;
    }
    if (empty($dateAchat)) {
        $dateAchatError = 'date achat';
        $valid = false;
    }
    if (empty($loginAdminLocal)) {
        $loginAdminLocalError = 'Login admin local';
        $valid = false;
    }
    if (empty($pwdAdminLocal)) {
        $pwdAdminLocalError = 'pwd admin local';
        $valid = false;
    }
    if (empty($loginAdminDomaine)) {
        $loginAdminDomaineError = 'login admin domaine';
        $valid = false;
    }
    if (empty($pwdAdminDomaine)) {
        $pwdAdminDomaineError = 'pwd admin domaine';
        $valid = false;
    }
    if (empty($loginUser)) {
        $loginUserError = 'login utilisateur';
        $valid = false;
    }
    if (empty($passwordUser)) {
        $passwordUserError = 'pwd utilisateur';
        $valid = false;
    }
    if (empty($vpn)) {
        $vpnError = 'vpn';
        $valid = false;
    }

    // mise à jour des donnés 
    if ($valid) {
        $pdo = Database::connect();
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $sql = "UPDATE `information_pc` SET `nom_ordinateur`=?,`nom_utilisateur`=?,`prenom_utilisateur`=?,`ref_qualite`=?,`emplacement`=?,`services`=?,`adresse_ip`=?,`reference`=?,`lan_reseau`=?,`type_materiel`=?,`en_service`=?,`numero_serie`=?,`systeme_exploitation`=?,`mac_adresse`=?,`date_achat`=?,`login_admin_local`=?,`pwd_admin_local`=?,`login_admin_boissy`=?,`pwd_admin_boissy`=?,`user_login`=?,`user_pwd`=?,`vpn`=? WHERE `id`=?";
        $q = $pdo->prepare($sql);
        $q->execute(array($nomOrdinateur, $nomUtilisateur, $prenomUtilisateur, $refQualite, $emplacement, $services, $adresseIp, $reference, $reseauLan, $typeMateriel, $enService, $numeroSerie, $systemeExploitation, $adresseMac, $dateAchat, $loginAdminLocal, $pwdAdminLocal, $loginAdminDomaine, $pwdAdminDomaine, $loginUser, $passwordUser, $vpn, $id));
        // $q->execute(array($nomOrdinateur, $nomUtilisateur, $prenomUtilisateur, $refQualite, $production, $emplacement, $services, $adresseIp, $reference, $reseauLan, $typeMateriel, $enService, $numeroSerie, $systemeExploitation, $adresseMac, $dateAchat, $loginAdminLocal, $pwdAdminLocal, $loginAdminDomaine, $pwdAdminDomaine, $loginUser, $passwordUser, $vpn, $id));
        Database::disconnect();
        header("Location: index.php");
    }
} else {

    $pdo = Database::connect();
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $sql = "SELECT * FROM information_pc where ID = ?";
    $q = $pdo->prepare($sql);
    $q->execute(array($id));
    $data = $q->fetch(PDO::FETCH_ASSOC);
    $nomOrdinateur = $data['nom_ordinateur'];
    $nomUtilisateur = $data['nom_utilisateur'];
    $prenomUtilisateur = $data['prenom_utilisateur'];
    $refQualite = $data['ref_qualite'];
    // $production = $data['production'];
    $emplacement = $data['emplacement'];
    $services = $data['services'];
    $adresseIp = $data['adresse_ip'];
    $reference = $data['reference'];
    $reseauLan = $data['lan_reseau'];
    $typeMateriel = $data['type_materiel'];
    $enService = $data['en_service'];
    $numeroSerie = $data['numero_serie'];
    $systemeExploitation = $data['systeme_exploitation'];
    $adresseMac = $data['mac_adresse'];
    $dateAchat = $data['date_achat'];
    $loginAdminLocal = $data['login_admin_local'];
    $pwdAdminLocal = $data['pwd_admin_local'];
    $loginAdminDomaine = $data['login_admin_boissy'];
    $pwdAdminDomaine = $data['pwd_admin_boissy'];
    $loginUser = $data['user_login'];
    $passwordUser = $data['user_pwd'];
    $vpn = $data['vpn'];
    Database::disconnect();
}
?>
<!DOCTYPE html>
<html>

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <title>mise a jour</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link href="../styles/styles.css" rel="stylesheet">
    <img src="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7" data-wp-preserve="%3Cscript%20src%3D%22js%2Fbootstrap.js%22%3E%3C%2Fscript%3E" data-mce-resize="false" data-mce-placeholder="1" class="mce-object" width="20" height="20" alt="<script>" title="<script>" />

</head>

<body>

    <div class="container">

        <div class="row">

            <h3>Mettre a jour l'Equipement</h3>

        </div>

        <form method="post" action="update.php?id=<?php echo $id; ?>">

            <div class="row mt-3">

                <div class="col-3">
                    <div class="form-group<?php echo !empty($nomUtilisateurError) ? 'error' : ''; ?>">
                        <label class="form-label">
                            <h5>Nom Utilisateur</h5>
                        </label>
                        <div>
                            <input class="form-control" type="text" name="nomUtilisateur" placeholder="Nom Utilisateur" value="<?php echo !empty($nomUtilisateur) ? $nomUtilisateur : ''; ?>">
                            <?php if (!empty($nomUtilisateurError)) : ?>
                                <span class="help-inline text-danger"><?php echo $nomUtilisateurError; ?></span>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>

                <div class="col-3">
                    <div class="form-group<?php echo !empty($prenomUtilisateurError) ? 'error' : ''; ?>">
                        <label class="form-label">
                            <h5>Prénom Utilisateur</h5>
                        </label>

                        <div>
                            <input class="form-control" type="text" name="prenomUtilisateur" placeholder="Prénom Utilisateur" value="<?php echo !empty($prenomUtilisateur) ? $prenomUtilisateur : ''; ?>">
                            <?php if (!empty($prenomUtilisateurError)) : ?>
                                <span class="help-inline text-danger"><?php echo $prenomUtilisateurError; ?></span>
                            <?php endif; ?>
                        </div>

                    </div>
                </div>

                <div class="col-3">
                    <div class="form-group  <?php echo !empty($loginUserError) ? 'error' : ''; ?>">
                        <label class="form-label">
                            <h5>Login Utilisateur</h5>
                        </label>

                        <div>
                            <input class="form-control" name="loginUser" type="text" placeholder="Login Utilisateur" value="<?php echo !empty($loginUser) ? $loginUser : ''; ?>">
                            <?php if (!empty($loginUserError)) : ?>
                                <span class="help-inline text-danger"><?php echo $loginUserError; ?></span>
                            <?php endif; ?>
                        </div>

                    </div>
                </div>

                <div class="col-3">
                    <div class="form-group  <?php echo !empty($passwordUserError) ? 'error' : ''; ?>">
                        <label class="form-label">
                            <h5>Password Utilisateur</h5>
                        </label>

                        <div>
                            <input class="form-control" name="passwordUser" type="password" placeholder="Password Utilisateur" value="<?php echo !empty($passwordUser) ? $passwordUser : ''; ?>">
                            <?php if (!empty($passwordUserError)) : ?>
                                <span class="help-inline text-danger"><?php echo $passwordUserError; ?></span>
                            <?php endif; ?>
                        </div>

                    </div>
                </div>

            </div>

            <div class="row mt-3">

                <h3>Info Ordinateur</h3>

                <div class="col-3">
                    <div class="form-group <?php echo !empty($nomOrdinateurError) ? 'error' : ''; ?>">
                        <label class="form-label">
                            <h5>Nom Ordinateur</h5>
                        </label>

                        <div>
                            <input class="form-control" name="nomOrdinateur" type="text" placeholder="Nom Ordinateur" value="<?php echo !empty($nomOrdinateur) ? $nomOrdinateur : ''; ?>">
                            <?php if (!empty($nomOrdinateurError)) : ?>
                                <span class="help-inline text-danger"><?php echo $nomOrdinateurError; ?></span>
                            <?php endif; ?>
                        </div>

                    </div>
                </div>

                <div class="col-3">
                    <div class="form-group  <?php echo !empty($referenceError) ? 'error' : ''; ?>">
                        <label class="form-label">
                            <h5>Référence</h5>
                        </label>

                        <div>
                            <input class="form-control" name="reference" type="text" placeholder="Référence" value="<?php echo !empty($reference) ? $reference : ''; ?>">
                            <?php if (!empty($referenceError)) : ?>
                                <span class="help-inline text-danger"><?php echo $referenceError; ?></span>
                            <?php endif; ?>
                        </div>

                    </div>
                </div>

                <div class="col-3">
                    <div class="form-group  <?php echo !empty($typeMaterielError) ? 'error' : ''; ?>">
                        <label class="form-label">
                            <h5>Type de Matériel</h5>
                        </label>

                        <div>
                            <input class="form-control" name="typeMateriel" type="text" placeholder="Type de Matériel" value="<?php echo !empty($typeMateriel) ? $typeMateriel : ''; ?>">
                            <?php if (!empty($typeMaterielError)) : ?>
                                <span class="help-inline text-danger"><?php echo $typeMaterielError; ?></span>
                            <?php endif; ?>
                        </div>

                    </div>
                </div>

                <div class="col-3">
                    <div class="form-group  <?php echo !empty($numeroSerieError) ? 'error' : ''; ?>">
                        <label class="form-label">
                            <h5>Numéro de Serie</h5>
                        </label>

                        <div>
                            <input class="form-control" name="numeroSerie" type="text" placeholder="Numéro de Serie" value="<?php echo !empty($numeroSerie) ? $numeroSerie : ''; ?>">
                            <?php if (!empty($numeroSerieError)) : ?>
                                <span class="help-inline text-danger"><?php echo $numeroSerieError; ?></span>
                            <?php endif; ?>
                        </div>

                    </div>
                </div>

                <div class="col-3">
                    <div class="form-group  <?php echo !empty($systemeExploitationError) ? 'error' : ''; ?>">
                        <label class="form-label">
                            <h5>Systeme Exploitation</h5>
                        </label>

                        <div>
                            <input class="form-control" name="systemeExploitation" type="text" placeholder="Systeme Exploitation" value="<?php echo !empty($systemeExploitation) ? $systemeExploitation : ''; ?>">
                            <?php if (!empty($systemeExploitationError)) : ?>
                                <span class="help-inline text-danger"><?php echo $systemeExploitationError; ?></span>
                            <?php endif; ?>
                        </div>

                    </div>
                </div>

                <div class="col-3">
                    <div class="form-group  <?php echo !empty($dateAchatError) ? 'error' : ''; ?>">
                        <label class="form-label">
                            <h5>Date Achat</h5>
                        </label>

                        <div>
                            <input class="form-control" name="dateAchat" type="date" placeholder="Date Achat" value="<?php echo !empty($dateAchat) ? $dateAchat : ''; ?>">
                            <?php if (!empty($dateAchatError)) : ?>
                                <span class="help-inline text-danger"><?php echo $dateAchatError; ?></span>
                            <?php endif; ?>
                        </div>

                    </div>
                </div>


            </div>

            <div class="row mt-3">

                <h3>Info Service</h3>

                <div class="col-3">
                    <div class="form-group  <?php echo !empty($enServiceError) ? 'error' : ''; ?>">
                        <label class="form-label">
                            <h5>En Service</h5>
                        </label>

                        <div>
                            <!-- <input class="form-control" name="enService" type="text" placeholder="En Service" value="<?php echo !empty($enService) ? $enService : ''; ?>"> -->
                            <select class="form-select" name="enService">
                                <option value="oui" <?= $enService == 'oui' ? ' selected="selected"' : ''; ?>>oui</option>
                                <option value="oui" <?= $enService == 'non' ? ' selected="selected"' : ''; ?>>non</option>
                            </select>
                            <?php if (!empty($enServiceError)) : ?>
                                <span class="help-inline text-danger"><?php echo $enServiceError; ?></span>
                            <?php endif; ?>
                        </div>

                    </div>
                </div>

                <div class="col-3">
                    <div class="form-group  <?php echo !empty($emplacementError) ? 'error' : ''; ?>">
                        <label class="form-label">
                            <h5>Emplacement</h5>
                        </label>

                        <div>
                            <input class="form-control" name="emplacement" type="text" placeholder="Emplacement" value="<?php echo !empty($emplacement) ? $emplacement : ''; ?>">
                            <?php if (!empty($emplacementError)) : ?>
                                <span class="help-inline text-danger"><?php echo $emplacementError; ?></span>
                            <?php endif; ?>
                        </div>

                    </div>
                </div>

                <div class="col-3">
                    <div class="form-group <?php echo !empty($servicesError) ? 'error' : ''; ?>">
                        <label class="form-label">
                            <h5>Nom du Service</h5>
                        </label>

                        <div>
                            <input class="form-control" name="nomService" type="text" placeholder="Nom du Service" value="<?php echo !empty($services) ? $services : ''; ?>">
                            <?php if (!empty($servicesError)) : ?>
                                <span class="help-inline text-danger"><?php echo $servicesError; ?></span>
                            <?php endif; ?>
                        </div>

                    </div>
                </div>

                <div class="col-3">
                    <div class="form-group <?php echo !empty($refQualiteError) ? 'error' : ''; ?>">
                        <label class="form-label">
                            <h5>Ref Qualité</h5>
                        </label>

                        <div>
                            <input class="form-control" name="refQualite" type="text" placeholder="Ref Qualité" value="<?php echo !empty($refQualite) ? $refQualite : ''; ?>">
                            <?php if (!empty($refQualiteError)) : ?>
                                <span class="help-inline text-danger"><?php echo $refQualiteError; ?></span>
                            <?php endif; ?>
                        </div>

                    </div>
                </div>

                <div class="col-3">
                    <div class="form-group  <?php echo !empty($reseauLanError) ? 'error' : ''; ?>">
                        <label class="form-label">
                            <h5>Réseau LAN</h5>
                        </label>

                        <div>
                            <input class="form-control" name="reseauLan" type="text" placeholder="Réseau LAN" value="<?php echo !empty($reseauLan) ? $reseauLan : ''; ?>">
                            <?php if (!empty($reseauLanError)) : ?>
                                <span class="help-inline text-danger"><?php echo $reseauLanError; ?></span>
                            <?php endif; ?>
                        </div>

                    </div>
                </div>

            </div>

            <div class="row mt-3">

                <h3>Session Administrateur</h3>

                <div class="col-3">
                    <div class="form-group  <?php echo !empty($adresseIpError) ? 'error' : ''; ?>">
                        <label class="form-label">
                            <h5>Adresse IP</h5>
                        </label>

                        <div>
                            <input class="form-control" name="adresseIp" type="text" placeholder="Adresse IP" value="<?php echo !empty($adresseIp) ? $adresseIp : ''; ?>">
                            <?php if (!empty($adresseIpError)) : ?>
                                <span class="help-inline text-danger"><?php echo $adresseIpError; ?></span>
                            <?php endif; ?>
                        </div>

                    </div>
                </div>
                <div class="col-3">
                    <div class="form-group  <?php echo !empty($adresseMacError) ? 'error' : ''; ?>">
                        <label class="form-label">
                            <h5>Adresse mac</h5>
                        </label>

                        <div>
                            <input class="form-control" name="adresseMac" type="text" placeholder="Adresse mac" value="<?php echo !empty($adresseMac) ? $adresseMac : ''; ?>">
                            <?php if (!empty($adresseMacError)) : ?>
                                <span class="help-inline text-danger"><?php echo $adresseMacError; ?></span>
                            <?php endif; ?>
                        </div>

                    </div>
                </div>

                <div class="col-3">
                    <div class="form-group  <?php echo !empty($loginAdminLocalError) ? 'error' : ''; ?>">
                        <label class="form-label">
                            <h5>Login Admin Local</h5>
                        </label>

                        <div>
                            <input class="form-control" name="loginAdminLocal" type="text" placeholder="Login Admin Local" value="<?php echo !empty($loginAdminLocal) ? $loginAdminLocal : ''; ?>">
                            <?php if (!empty($loginAdminLocalError)) : ?>
                                <span class="help-inline text-danger"><?php echo $loginAdminLocalError; ?></span>
                            <?php endif; ?>
                        </div>

                    </div>
                </div>

                <div class="col-3">
                    <div class="form-group  <?php echo !empty($pwdAdminLocalError) ? 'error' : ''; ?>">
                        <label class="form-label">
                            <h5>Password Admin Local</h5>
                        </label>

                        <div>
                            <input class="form-control" name="pwdAdminLocal" type="password" placeholder="Password Admin Local" value="<?php echo !empty($pwdAdminLocal) ? $pwdAdminLocal : ''; ?>">
                            <?php if (!empty($pwdAdminLocalError)) : ?>
                                <span class="help-inline text-danger"><?php echo $pwdAdminLocalError; ?></span>
                            <?php endif; ?>
                        </div>

                    </div>
                </div>

                <div class="col-3">
                    <div class="form-group  <?php echo !empty($loginAdminDomaineError) ? 'error' : ''; ?>">
                        <label class="form-label">
                            <h5>Login Admin Domaine</h5>
                        </label>

                        <div>
                            <input class="form-control" name="loginAdminDomaine" type="text" placeholder="Login Admin Domaine" value="<?php echo !empty($loginAdminDomaine) ? $loginAdminDomaine : ''; ?>">
                            <?php if (!empty($loginAdminDomaineError)) : ?>
                                <span class="help-inline text-danger"><?php echo $loginAdminDomaineError; ?></span>
                            <?php endif; ?>
                        </div>

                    </div>
                </div>

                <div class="col-3">
                    <div class="form-group  <?php echo !empty($pwdAdminDomaineError) ? 'error' : ''; ?>">
                        <label class="form-label">
                            <h5>Password Admin Domaine</h5>
                        </label>

                        <div>
                            <input class="form-control" name="pwdAdminDomaine" type="password" placeholder="Password Admin Domaine" value="<?php echo !empty($pwdAdminDomaine) ? $pwdAdminDomaine : ''; ?>">
                            <?php if (!empty($pwdAdminDomaineError)) : ?>
                                <span class="help-inline text-danger"><?php echo $pwdAdminDomaineError; ?></span>
                            <?php endif; ?>
                        </div>

                    </div>
                </div>

                <div class="col-3">
                    <div class="form-group  <?php echo !empty($vpnError) ? 'error' : ''; ?>">
                        <label class="form-label">
                            <h5>VPN</h5>
                        </label>

                        <div>
                            <!-- <input class="form-control" name="vpn" type="text" placeholder="VPN" value="<?php echo !empty($vpn) ? $vpn : ''; ?>"> -->
                            <select class="form-select" name="vpn">

                                <option value="oui" <?= $vpn == 'oui' ? ' selected="selected"' : ''; ?>>oui</option>
                                <option value="non" <?= $vpn == 'non' ? ' selected="selected"' : ''; ?>>non</option>
                            </select>
                            <?php if (!empty($vpnError)) : ?>
                                <span class="help-inline text-danger"><?php echo $vpnError; ?></span>
                            <?php endif; ?>
                        </div>

                    </div>
                </div>

            </div>
            <div class="form-actions mt-3">
                <input type="submit" class="btn btn-success" name="submit" value="Envoyer">
                <a class="btn btn-dark" href="index.php">Retour</a>
            </div>

        </form>

    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>

</html>