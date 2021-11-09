<?php
// Include config file
require_once "config.php";

//on initialise nos messages d'erreurs; 
$nomOrdinateurError = $nomUtilisateurError = $prenomUtilisateurError = $refQualiteError = $productionError = $emplacementError = $servicesError = $adresseIpError = $referenceError = $reseauLanError = $typeMaterielError = $enServiceError = $numeroSerieError = $systemeExploitationError = $adresseMacError = $dateAchatError = $loginAdminLocalError = $pwdAdminLocalError = $loginAdminDomaineError = $pwdAdminDomaineError = $loginUserError = $passwordUserError = $vpnError = "";

// on recupère nos valeurs 
$nomOrdinateur = htmlentities(trim($_POST['nomOrdinateur']));
$nomUtilisateur = htmlentities(trim($_POST['nomUtilisateur']));
$prenomUtilisateur = htmlentities(trim($_POST['prenomUtilisateur']));
$refQualite = htmlentities(trim($_POST['refQualite']));
$production = htmlentities(trim($_POST['enProduction']));
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

// Processing form data when form is submitted
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
if (empty($refQualite)) {
    $refQualiteError = 'Reference qualité';
    $valid = true;
}
if (empty($production)) {
    $productionError = 'En production';
    $valid = false;
}
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
if (empty($systemeExploitation)) {
    $systemeExploitationError = 'Systeme exploitation';
    $valid = false;
}
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

    // Check input errors before inserting in database
    if (empty($name_err) && empty($address_err) && empty($salary_err)) {
        // Prepare an insert statement
        $sql = "INSERT INTO `information_pc` (`nom_ordinateur`, `nom_utilisateur`, `prenom_utilisateur`, `ref_qualite`, `production`, `emplacement`, `services`, `adresse_ip`, `reference`, `lan_reseau`, `type_materiel`, `en_service`, `numero_serie`, `systeme_exploitation`, `mac_adresse`, `date_achat`, `login_admin_local`, `pwd_admin_local`, `login_admin_boissy`, `pwd_admin_boissy`, `user_login`, `user_pwd`, `vpn`) VALUES (:nomOrdinateur, :nomUtilisateur, :prenomUtilisateur, :refQualite, :enProduction, :emplacement, :nomService, :adresseIp, :reference, :reseauLan, :typeMateriel, :enService, :numeroSerie, :systemeExploitation, :adresseMac, :dateAchat, :loginAdminLocal, :pwdAdminLocal, :loginAdminDomaine, :pwdAdminDomaine, :loginUser, :passwordUser, :vpn)";

        if ($stmt = $pdo->prepare($sql)) {
            // Bind variables to the prepared statement as parameters
            $query->bindValue(':nomOrdinateur', $param_nomOrdinateur);
            $query->bindValue(':nomUtilisateur', $param_nomUtilisateur);
            $query->bindValue(':prenomUtilisateur', $param_prenomUtilisateur);
            $query->bindValue(':refQualite', $param_refQualite);
            $query->bindValue(':enProduction', $param_enProduction);
            $query->bindValue(':emplacement', $param_emplacement);
            $query->bindValue(':nomService', $param_nomService);
            $query->bindValue(':adresseIp', $param_adresseIp);
            $query->bindValue(':reference', $param_reference);
            $query->bindValue(':reseauLan', $param_reseauLan);
            $query->bindValue(':typeMateriel', $param_typeMateriel);
            $query->bindValue(':enService', $param_enService);
            $query->bindValue(':numeroSerie', $param_numeroSerie);
            $query->bindValue(':systemeExploitation', $param_systemeExploitation);
            $query->bindValue(':adresseMac', $param_adresseMac);
            $query->bindValue(':dateAchat', $param_dateAchat);
            $query->bindValue(':loginAdminLocal', $param_loginAdminLocal);
            $query->bindValue(':pwdAdminLocal', $param_pwdAdminLocal);
            $query->bindValue(':loginAdminDomaine', $param_loginAdminDomaine);
            $query->bindValue(':pwdAdminDomaine', $param_pwdAdminDomaine);
            $query->bindValue(':loginUser', $param_loginUser);
            $query->bindValue(':passwordUser', $param_passwordUser);
            $query->bindValue(':vpn', $param_vpn);

            // Set parameters
            $param_nomOrdinateur = $nomOrdinateur;
            $param_nomUtilisateur = $nomUtilisateur;
            $param_prenomUtilisateur = $prenomUtilisateur;
            $param_refQualite = $refQualite;
            $param_enProduction = $enProduction;
            $param_emplacement = $emplacement;
            $param_nomService = $nomService;
            $param_adresseIp = $adresseIp;
            $param_reference = $reference;
            $param_reseauLan = $reseauLan;
            $param_typeMateriel = $typeMateriel;
            $param_enService = $enService;
            $param_numeroSerie = $numeroSerie;
            $param_systemeExploitation = $systemeExploitation;
            $param_adresseMac = $adresseMac;
            $param_dateAchat = $dateAchat;
            $param_loginAdminLocal = $loginAdminLocal;
            $param_pwdAdminLocal = $pwdAdminLocal;
            $param_loginAdminDomaine = $loginAdminDomaine;
            $param_pwdAdminDomaine = $pwdAdminDomaine;
            $param_loginUser = $loginUser;
            $param_passwordUser = $passwordUser;
            $param_vpn = $vpn;

            // Attempt to execute the prepared statement
            if ($stmt->execute()) {
                // Records created successfully. Redirect to landing page
                header("location: index.php");
                exit();
            } else {
                echo "Oops! Something went wrong. Please try again later.";
            }
        }

        // Close statement
        unset($stmt);
    }

    // Close connection
    unset($pdo);

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Create Record</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        .wrapper {
            width: 600px;
            margin: 0 auto;
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h2 class="mt-5">Create Record</h2>
                <p>Please fill this form and submit to add employee record to the database.</p>
                <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
                    <!-- <div class="form-group">
                            <label>Name</label>
                            <input type="text" name="name" class="form-control <?php echo (!empty($name_err)) ? 'is-invalid' : ''; ?>" value="<?php echo $name; ?>">
                            <span class="invalid-feedback"><?php echo $name_err; ?></span>
                        </div>
                        <div class="form-group">
                            <label>Address</label>
                            <textarea name="address" class="form-control <?php echo (!empty($address_err)) ? 'is-invalid' : ''; ?>"><?php echo $address; ?></textarea>
                            <span class="invalid-feedback"><?php echo $address_err; ?></span>
                        </div>
                        <div class="form-group">
                            <label>Salary</label>
                            <input type="text" name="salary" class="form-control <?php echo (!empty($salary_err)) ? 'is-invalid' : ''; ?>" value="<?php echo $salary; ?>">
                            <span class="invalid-feedback"><?php echo $salary_err; ?></span>
                        </div>
                        <input type="submit" class="btn btn-primary" value="Submit">
                        <a href="index.php" class="btn btn-secondary ml-2">Cancel</a> -->

                    <h3>Information de l'Utilisateur du pc</h3>

                    <div class="row mt-3">

                        <div class="col-3">
                            <div class="form-group">
                                <label class="form-label">Nom Utilisateur</label>

                                <div>
                                    <input class="form-control <?php echo (!empty($nomUtilisateurError)) ? 'is-invalid' : ''; ?>" type="text" name="nomUtilisateur" placeholder="Nom Utilisateur" value="<?php echo $nomUtilisateur ?>">
                                    <span class="invalid-feedback"><?php echo $nomUtilisateurError; ?></span>
                                </div>

                            </div>
                        </div>

                        <div class="col-3">
                            <div class="form-group">
                                <label class="form-label">Prénom Utilisateur</label>

                                <div>
                                    <input class="form-control <?php echo (!empty($prenomUtilisateurError)) ? 'is-invalid' : ''; ?>" type="text" name="prenomUtilisateur" placeholder="Prénom Utilisateur" value="<?php echo $prenomUtilisateur ?>">
                                    <span class="invalid-feedback"><?php echo $prenomUtilisateurError; ?></span>
                                </div>

                            </div>
                        </div>

                        <div class="col-3">
                            <div class="form-group">
                                <label class="control-label">Login Utilisateur</label>
                                <div>
                                    <input class="form-control <?php echo (!empty($loginUserError)) ? 'is-invalid' : ''; ?>" name="loginUser" type="text" placeholder="Login Utilisateur" value="<?php echo $loginUser ?>">
                                    <span class="invalid-feedback"><?php echo $loginUserError; ?></span>
                                </div>
                            </div>
                        </div>

                        <div class="col-3">
                            <div class="form-group">
                                <label class="control-label">Password Utilisateur</label>

                                <div>
                                    <input class="form-control <?php echo (!empty($passwordUserError)) ? 'is-invalid' : ''; ?>" name="passwordUser" type="password" placeholder="Password Utilisateur" value="<?php echo $passwordUser ?>">
                                    <span class="invalid-feedback"><?php echo $passwordUserError; ?></span>
                                </div>

                            </div>
                        </div>

                    </div>

                    <div class="row mt-3">

                        <h3>Info Ordinateur</h3>

                        <div class="col-2">
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

                        <div class="col-2">
                            <div class="form-group  <?php echo !empty($referenceError) ? 'error' : ''; ?>">
                                <label class="control-label">Référence</label>

                                <div>
                                    <input class="form-control" name="reference" type="text" placeholder="Référence" value="<?php echo !empty($reference) ? $reference : ''; ?>">
                                    <?php if (!empty($referenceError)) : ?>
                                        <span class="help-inline"><?php echo $referenceError; ?></span>
                                    <?php endif; ?>
                                </div>

                            </div>
                        </div>

                        <div class="col-2">
                            <div class="form-group  <?php echo !empty($typeMaterielError) ? 'error' : ''; ?>">
                                <label class="control-label">Type de Matériel</label>

                                <div>
                                    <input class="form-control" name="typeMateriel" type="text" placeholder="Type de Matériel" value="<?php echo !empty($typeMateriel) ? $typeMateriel : ''; ?>">
                                    <?php if (!empty($typeMaterielError)) : ?>
                                        <span class="help-inline"><?php echo $typeMaterielError; ?></span>
                                    <?php endif; ?>
                                </div>

                            </div>
                        </div>

                        <div class="col-2">
                            <div class="form-group  <?php echo !empty($numeroSerieError) ? 'error' : ''; ?>">
                                <label class="control-label">Numéro de Serie</label>

                                <div>
                                    <input class="form-control" name="numeroSerie" type="text" placeholder="Numéro de Serie" value="<?php echo !empty($numeroSerie) ? $numeroSerie : ''; ?>">
                                    <?php if (!empty($numeroSerieError)) : ?>
                                        <span class="help-inline"><?php echo $numeroSerieError; ?></span>
                                    <?php endif; ?>
                                </div>

                            </div>
                        </div>

                        <div class="col-2">
                            <div class="form-group  <?php echo !empty($systemeExploitationError) ? 'error' : ''; ?>">
                                <label class="control-label">Systeme Exploitation</label>

                                <div>
                                    <input class="form-control" name="systemeExploitation" type="text" placeholder="Systeme Exploitation" value="<?php echo !empty($systemeExploitation) ? $systemeExploitation : ''; ?>">
                                    <?php if (!empty($systemeExploitationError)) : ?>
                                        <span class="help-inline"><?php echo $systemeExploitationError; ?></span>
                                    <?php endif; ?>
                                </div>

                            </div>
                        </div>

                        <div class="col-2">
                            <div class="form-group  <?php echo !empty($dateAchatError) ? 'error' : ''; ?>">
                                <label class="control-label">Date Achat</label>

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

                        <div class="col-2">
                            <div class="form-group  <?php echo !empty($enServiceError) ? 'error' : ''; ?>">
                                <label class="control-label">En Service</label>

                                <div>
                                    <input class="form-control" name="enService" type="text" placeholder="En Service" value="<?php echo !empty($enService) ? $enService : ''; ?>">
                                    <?php if (!empty($enServiceError)) : ?>
                                        <span class="help-inline"><?php echo $enServiceError; ?></span>
                                    <?php endif; ?>
                                </div>

                            </div>
                        </div>

                        <div class="col-2">
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

                        <div class="col-2">
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

                        <div class="col-2">
                            <div class="form-group <?php echo !empty($productionlError) ? 'error' : ''; ?>">
                                <label class="form-label">En Production</label>

                                <div>
                                    <input class="form-control" name="enProduction" type="text" placeholder="En Production" value="<?php echo !empty($production) ? $production : ''; ?>">
                                    <?php if (!empty($productionlError)) : ?>
                                        <span class="help-inline"><?php echo $productionlError; ?></span>
                                    <?php endif; ?>
                                </div>

                            </div>
                        </div>

                        <div class="col-2">
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

                        <div class="col-2">
                            <div class="form-group  <?php echo !empty($reseauLanError) ? 'error' : ''; ?>">
                                <label class="control-label">Réseau LAN</label>

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
                                <label class="control-label">Adresse IP</label>

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
                                <label class="control-label">Adresse mac</label>

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
                                <label class="control-label">Login Admin Local</label>

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
                                <label class="control-label">Password Admin Local</label>

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
                                <label class="control-label">Login Admin Domaine</label>

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
                                <label class="control-label">Password Admin Domaine</label>

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
                                <label class="control-label">VPN</label>

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
        </div>
    </div>
</body>

</html>