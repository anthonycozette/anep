<?php

// Initialiser la session
session_start();
// Vérifiez si l'utilisateur est connecté, sinon redirigez-le vers la page de connexion
if (!isset($_SESSION["username"])) {
    header("Location: ../registration/login.php");
    exit();
}

require '../database/database.php';
if ($_SERVER["REQUEST_METHOD"] == "POST" && !empty($_POST)) {

    //on initialise nos messages d'erreurs; 
    $nomOrdinateurError = '';
    $nomUtilisateurError = '';
    $prenomUtilisateurError = '';
    $refQualiteError = '';
    $productionlError = '';
    $emplacementError = '';
    $servicesError = '';
    $adresseIpError = '';
    $referenceError = '';
    $reseauLanError = '';
    $typeMaterielError = '';
    $enServiceError = '';
    $numeroSerieError = '';
    $systemeExploitationError = '';
    $adresseMacError = '';
    $dateAchatError = '';
    $loginAdminLocalError = '';
    $pwdAdminLocalError = '';
    $loginAdminDomaineError = '';
    $pwdAdminDomaineError = '';
    $loginUserError = '';
    $passwordUserError = '';
    $vpnError = '';

    // on recupère nos valeurs 
    $nomOrdinateur = htmlentities(trim($_POST['nomOrdinateur']));
    $nomUtilisateur = htmlentities(trim($_POST['nomUtilisateur']));
    $prenomUtilisateur = htmlentities(trim($_POST['prenomUtilisateur']));
    $refQualite = htmlentities(trim($_POST['refQualite']));
    // $production = htmlentities(trim($_POST['enProduction']));
    $emplacement = htmlentities(trim($_POST['emplacement']));
    $services = htmlentities(trim($_POST['nomService']));
    $adresseIp = htmlentities(trim($_POST['adresseIp']));
    $reference = htmlentities(trim($_POST['reference']));
    $reseauLan = htmlentities(trim($_POST['reseauLan']));
    $typeMateriel = htmlentities(trim($_POST['typeMateriel']));
    $enService = htmlentities(trim($_POST['enService']));
    $numeroSerie = htmlentities(trim($_POST['numeroSerie']));
    $systemeExploitation = htmlentities(trim($_POST['systemeExploitation']));
    $adresseMac = htmlentities(trim($_POST['adresseMac']));
    $dateAchat = htmlentities(trim($_POST['dateAchat']));
    $loginAdminLocal = htmlentities(trim($_POST['loginAdminLocal']));
    $pwdAdminLocal = htmlentities(trim($_POST['pwdAdminLocal']));
    $loginAdminDomaine = htmlentities(trim($_POST['loginAdminDomaine']));
    $pwdAdminDomaine = htmlentities(trim($_POST['pwdAdminDomaine']));
    $loginUser = htmlentities(trim($_POST['loginUser']));
    $passwordUser = htmlentities(trim($_POST['passwordUser']));
    $vpn = htmlentities(trim($_POST['vpn']));

    // on vérifie nos champs 
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
    if (!isset($emplacement)) {
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
        $nomOrdinateurError = 'login admin domaine';
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

    // si les données sont présentes et bonnes, on se connecte à la base 
    if ($valid) {
        $pdo = Database::connect();
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $sql = "INSERT INTO information_pc (ID, nom_ordinateur, nom_utilisateur, prenom_utilisateur, ref_qualite, emplacement, services, adresse_ip, reference, lan_reseau, type_materiel, en_service, numero_serie, systeme_exploitation, mac_adresse, date_achat, login_admin_local, pwd_admin_local, login_admin_boissy, pwd_admin_boissy,user_login, user_pwd, vpn) VALUES (NULL, '" . $_POST['nomOrdinateur'] . "', '" . $_POST['nomUtilisateur'] . "', '" . $_POST['prenomUtilisateur'] . "', '" . $_POST['refQualite'] . "', '" . $_POST['emplacement'] . "', '" . $_POST['nomService'] . "','" . $_POST['adresseIp'] . "','" . $_POST['reference'] . "','" . $_POST['reseauLan'] . "','" . $_POST['typeMateriel'] . "','" . $_POST['enService'] . "','" . $_POST['numeroSerie'] . "','" . $_POST['systemeExploitation'] . "','" . $_POST['adresseMac'] . "','" . $_POST['dateAchat'] . "','" . $_POST['loginAdminLocal'] . "','" . $_POST['pwdAdminLocal'] . "','" . $_POST['loginAdminDomaine'] . "','" . $_POST['pwdAdminDomaine'] . "','" . $_POST['loginUser'] . "','" . $_POST['passwordUser'] . "','" . $_POST['vpn'] . "')";
        $q = $pdo->prepare($sql);
        $q->execute(array($nomOrdinateur, $nomUtilisateur, $prenomUtilisateur, $refQualite, $emplacement, $services, $adresseIp, $reference, $reseauLan, $typeMateriel, $enService, $numeroSerie, $systemeExploitation, $adresseMac, $dateAchat, $loginAdminLocal, $pwdAdminLocal, $loginAdminDomaine, $pwdAdminDomaine, $loginUser, $passwordUser, $vpn));
        Database::disconnect();
        header("Location: index.php");
    }
}
?>
<!DOCTYPE html>
<html>

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <title>Nouveau Ordinateur</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link href="../styles/styles.css" rel="stylesheet">
    <img src="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7" data-wp-preserve="%3Cscript%20src%3D%22js%2Fbootstrap.js%22%3E%3C%2Fscript%3E" data-mce-resize="false" data-mce-placeholder="1" class="mce-object" width="20" height="20" alt="<script>" title="<script>" />

</head>

<body>




    <div class="container">

        <div class="row">

            <h3>Ajouter un Ordinateur</h3>

        </div>

        <form method="post" action="add.php">

            <div class="row mt-3">

                <h3>Information de l'Utilisateur du pc</h3>

                <div class="col-3">
                    <div class="form-group<?php echo !empty($nomUtilisateurError) ? 'error' : ''; ?>">
                        <label class="form-label">Nom Utilisateur</label>
                        <div>
                            <input class="form-control" type="text" name="nomUtilisateur" placeholder="Nom Utilisateur" value="<?php echo !empty($nomUtilisateur) ? $nomUtilisateur : ''; ?>">
                            <?php if (!empty($nomUtilisateurError)) : ?>
                                <span class="help-inline"><?php echo $nomUtilisateurError; ?></span>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>

                <div class="col-3">
                    <div class="form-group<?php echo !empty($prenomUtilisateurError) ? 'error' : ''; ?>">
                        <label class="form-label">Prénom Utilisateur</label>

                        <div>
                            <input class="form-control" type="text" name="prenomUtilisateur" placeholder="Prénom Utilisateur" value="<?php echo !empty($prenomUtilisateur) ? $prenomUtilisateur : ''; ?>">
                            <?php if (!empty($prenomUtilisateurError)) : ?>
                                <span class="help-inline"><?php echo $prenomUtilisateurError; ?></span>
                            <?php endif; ?>
                        </div>

                    </div>
                </div>

                <div class="col-3">
                    <div class="form-group  <?php echo !empty($loginUserError) ? 'error' : ''; ?>">
                        <label class="form-label">Login Utilisateur</label>

                        <div>
                            <input class="form-control" name="loginUser" type="text" placeholder="Login Utilisateur" value="<?php echo !empty($loginUser) ? $loginUser : ''; ?>">
                            <?php if (!empty($loginUserError)) : ?>
                                <span class="help-inline"><?php echo $loginUserError; ?></span>
                            <?php endif; ?>
                        </div>

                    </div>
                </div>

                <div class="col-3">
                    <div class="form-group  <?php echo !empty($passwordUserError) ? 'error' : ''; ?>">
                        <label class="form-label">Password Utilisateur</label>

                        <div>
                            <input class="form-control" name="passwordUser" type="password" placeholder="Password Utilisateur" value="<?php echo !empty($passwordUser) ? $passwordUser : ''; ?>">
                            <?php if (!empty($passwordUserError)) : ?>
                                <span class="help-inline"><?php echo $passwordUserError; ?></span>
                            <?php endif; ?>
                        </div>

                    </div>
                </div>

            </div>

            <div class="row mt-3">

                <h3>Info Ordinateur</h3>

                <div class="col-3">
                    <div class="form-group <?php echo !empty($nomOrdinateurError) ? 'error' : ''; ?>">
                        <label class="form-label">Nom Ordinateur</label>

                        <div>
                            <input class="form-control" name="nomOrdinateur" type="text" placeholder="Nom Ordinateur" value="<?php echo !empty($nomOrdinateur) ? $nomOrdinateur : ''; ?>">
                            <?php if (!empty($nomOrdinateurError)) : ?>
                                <span class="help-inline"><?php echo $nomOrdinateurError; ?></span>
                            <?php endif; ?>
                        </div>

                    </div>
                </div>

                <div class="col-3">
                    <div class="form-group  <?php echo !empty($referenceError) ? 'error' : ''; ?>">
                        <label class="form-label">Référence</label>

                        <div>
                            <input class="form-control" name="reference" type="text" placeholder="Référence" value="<?php echo !empty($reference) ? $reference : ''; ?>">
                            <?php if (!empty($referenceError)) : ?>
                                <span class="help-inline"><?php echo $referenceError; ?></span>
                            <?php endif; ?>
                        </div>

                    </div>
                </div>

                <div class="col-3">
                    <div class="form-group  <?php echo !empty($typeMaterielError) ? 'error' : ''; ?>">
                        <label class="form-label">Type de Matériel</label>

                        <div>
                            <input class="form-control" name="typeMateriel" type="text" placeholder="Type de Matériel" value="<?php echo !empty($typeMateriel) ? $typeMateriel : ''; ?>">
                            <?php if (!empty($typeMaterielError)) : ?>
                                <span class="help-inline"><?php echo $typeMaterielError; ?></span>
                            <?php endif; ?>
                        </div>

                    </div>
                </div>

                <div class="col-3">
                    <div class="form-group  <?php echo !empty($numeroSerieError) ? 'error' : ''; ?>">
                        <label class="form-label">Numéro de Serie</label>

                        <div>
                            <input class="form-control" name="numeroSerie" type="text" placeholder="Numéro de Serie" value="<?php echo !empty($numeroSerie) ? $numeroSerie : ''; ?>">
                            <?php if (!empty($numeroSerieError)) : ?>
                                <span class="help-inline"><?php echo $numeroSerieError; ?></span>
                            <?php endif; ?>
                        </div>

                    </div>
                </div>

                <div class="col-3">
                    <div class="form-group  <?php echo !empty($systemeExploitationError) ? 'error' : ''; ?>">
                        <label class="form-label">Systeme Exploitation</label>

                        <div>
                            <input class="form-control" name="systemeExploitation" type="text" placeholder="Systeme Exploitation" value="<?php echo !empty($systemeExploitation) ? $systemeExploitation : ''; ?>">
                            <?php if (!empty($systemeExploitationError)) : ?>
                                <span class="help-inline"><?php echo $systemeExploitationError; ?></span>
                            <?php endif; ?>
                        </div>

                    </div>
                </div>

                <div class="col-3">
                    <div class="form-group  <?php echo !empty($dateAchatError) ? 'error' : ''; ?>">
                        <label class="form-label">Date Achat</label>

                        <div>
                            <input class="form-control" name="dateAchat" type="date" placeholder="Date Achat" value="<?php echo !empty($dateAchat) ? $dateAchat : ''; ?>">
                            <?php if (!empty($dateAchatError)) : ?>
                                <span class="help-inline"><?php echo $dateAchatError; ?></span>
                            <?php endif; ?>
                        </div>

                    </div>
                </div>


            </div>

            <div class="row mt-3">

                <h3>Info Service</h3>

                <div class="col-3">
                    <div class="form-group  <?php echo !empty($enServiceError) ? 'error' : ''; ?>">
                        <label class="form-label">En Service</label>

                        <div>
                            <input class="form-control" name="enService" type="text" placeholder="En Service" value="<?php echo !empty($enService) ? $enService : ''; ?>">
                            <?php if (!empty($enServiceError)) : ?>
                                <span class="help-inline"><?php echo $enServiceError; ?></span>
                            <?php endif; ?>
                        </div>

                    </div>
                </div>

                <div class="col-3">
                    <div class="form-group <?php echo !empty($emplacementError) ? 'error' : ''; ?>">
                        <label class="form-label">Emplacement</label>

                        <div>
                            <input class="form-control" name="emplacement" type="text" placeholder="Emplacement" value="<?php echo !empty($emplacement) ? $emplacement : ''; ?>">
                            <?php if (!empty($emplacementError)) : ?>
                                <span class="help-inline"><?php echo $emplacementError; ?></span>
                            <?php endif; ?>
                        </div>

                    </div>
                </div>

                <div class="col-3">
                    <div class="form-group <?php echo !empty($servicesError) ? 'error' : ''; ?>">
                        <label class="form-label">Nom du Service</label>

                        <div>
                            <input class="form-control" name="nomService" type="text" placeholder="Nom du Service" value="<?php echo !empty($services) ? $services : ''; ?>">
                            <?php if (!empty($servicesError)) : ?>
                                <span class="help-inline"><?php echo $servicesError; ?></span>
                            <?php endif; ?>
                        </div>

                    </div>
                </div>

                <div class="col-3">
                    <div class="form-group <?php echo !empty($refQualiteError) ? 'error' : ''; ?>">
                        <label class="form-label">Ref Qualité</label>

                        <div>
                            <input class="form-control" name="refQualite" type="text" placeholder="Ref Qualité" value="<?php echo !empty($refQualite) ? $refQualite : ''; ?>">
                            <?php if (!empty($refQualiteError)) : ?>
                                <span class="help-inline"><?php echo $refQualiteError; ?></span>
                            <?php endif; ?>
                        </div>

                    </div>
                </div>

                <div class="col-3">
                    <div class="form-group  <?php echo !empty($reseauLanError) ? 'error' : ''; ?>">
                        <label class="form-label">Réseau LAN</label>

                        <div>
                            <input class="form-control" name="reseauLan" type="text" placeholder="Réseau LAN" value="<?php echo !empty($reseauLan) ? $reseauLan : ''; ?>">
                            <?php if (!empty($reseauLanError)) : ?>
                                <span class="help-inline"><?php echo $reseauLanError; ?></span>
                            <?php endif; ?>
                        </div>

                    </div>
                </div>

            </div>

            <div class="row mt-3">

                <h3>Session Administrateur</h3>

                <div class="col-3">
                    <div class="form-group  <?php echo !empty($adresseIpError) ? 'error' : ''; ?>">
                        <label class="form-label">Adresse IP</label>

                        <div>
                            <input class="form-control" name="adresseIp" type="text" placeholder="Adresse IP" value="<?php echo !empty($adresseIp) ? $adresseIp : ''; ?>">
                            <?php if (!empty($adresseIpError)) : ?>
                                <span class="help-inline"><?php echo $adresseIpError; ?></span>
                            <?php endif; ?>
                        </div>

                    </div>
                </div>
                <div class="col-3">
                    <div class="form-group  <?php echo !empty($adresseMacError) ? 'error' : ''; ?>">
                        <label class="form-label">Adresse mac</label>

                        <div>
                            <input class="form-control" name="adresseMac" type="text" placeholder="Adresse mac" value="<?php echo !empty($adresseMac) ? $adresseMac : ''; ?>">
                            <?php if (!empty($adresseMacError)) : ?>
                                <span class="help-inline"><?php echo $adresseMacError; ?></span>
                            <?php endif; ?>
                        </div>

                    </div>
                </div>

                <div class="col-3">
                    <div class="form-group  <?php echo !empty($loginAdminLocalError) ? 'error' : ''; ?>">
                        <label class="form-label">Login Admin Local</label>

                        <div>
                            <input class="form-control" name="loginAdminLocal" type="text" placeholder="Login Admin Local" value="<?php echo !empty($loginAdminLocal) ? $loginAdminLocal : ''; ?>">
                            <?php if (!empty($loginAdminLocalError)) : ?>
                                <span class="help-inline"><?php echo $loginAdminLocalError; ?></span>
                            <?php endif; ?>
                        </div>

                    </div>
                </div>

                <div class="col-3">
                    <div class="form-group  <?php echo !empty($pwdAdminLocalError) ? 'error' : ''; ?>">
                        <label class="form-label">Password Admin Local</label>

                        <div>
                            <input class="form-control" name="pwdAdminLocal" type="password" placeholder="Password Admin Local" value="<?php echo !empty($pwdAdminLocal) ? $pwdAdminLocal : ''; ?>">
                            <?php if (!empty($pwdAdminLocalError)) : ?>
                                <span class="help-inline"><?php echo $pwdAdminLocalError; ?></span>
                            <?php endif; ?>
                        </div>

                    </div>
                </div>

                <div class="col-3">
                    <div class="form-group  <?php echo !empty($loginAdminDomaineError) ? 'error' : ''; ?>">
                        <label class="form-label">Login Admin Domaine</label>

                        <div>
                            <input class="form-control" name="loginAdminDomaine" type="text" placeholder="Login Admin Domaine" value="<?php echo !empty($loginAdminDomaine) ? $loginAdminDomaine : ''; ?>">
                            <?php if (!empty($loginAdminDomaineError)) : ?>
                                <span class="help-inline"><?php echo $loginAdminDomaineError; ?></span>
                            <?php endif; ?>
                        </div>

                    </div>
                </div>

                <div class="col-3">
                    <div class="form-group  <?php echo !empty($pwdAdminDomaineError) ? 'error' : ''; ?>">
                        <label class="form-label">Password Admin Domaine</label>

                        <div>
                            <input class="form-control" name="pwdAdminDomaine" type="password" placeholder="Password Admin Domaine" value="<?php echo !empty($pwdAdminDomaine) ? $pwdAdminDomaine : ''; ?>">
                            <?php if (!empty($pwdAdminDomaineError)) : ?>
                                <span class="help-inline"><?php echo $pwdAdminDomaineError; ?></span>
                            <?php endif; ?>
                        </div>

                    </div>
                </div>

                <div class="col-3">
                    <div class="form-group  <?php echo !empty($vpnError) ? 'error' : ''; ?>">
                        <label class="form-label">VPN</label>

                        <div>
                            <input class="form-control" name="vpn" type="text" placeholder="VPN" value="<?php echo !empty($vpn) ? $vpn : ''; ?>">
                            <?php if (!empty($vpnError)) : ?>
                                <span class="help-inline"><?php echo $vpnError; ?></span>
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