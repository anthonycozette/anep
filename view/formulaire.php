<?php
include('../include/header.php'); //Le header
?>
<div class="container">
    <form action="../controller/form_envoi.php" method="post">

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
                <label class="control-label">Login Utilisateur</label>

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
                <label class="control-label">Password Utilisateur</label>

                <div>
                    <input class="form-control" name="passwordUser" type="password" placeholder=Password Utilisateur" value="<?php echo !empty($passwordUser) ? $passwordUser : ''; ?>">
                    <?php if (!empty($passwordUserError)) : ?>
                        <span class="help-inline"><?php echo $passwordUserError; ?></span>
                    <?php endif; ?>
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

            <!-- <div class="col-3">
                <label class="form-label">Licences</label>
                <input type="text" class="form-control" placeholder="Licences" name="licences">
            </div> -->

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

        <div class="col-12 mt-3">
            <button type="submit" class="btn btn-primary">Enregistrer</button>
        </div>


    </form>
    <div class="col-12 mt-3">
        <a class="btn btn-primary" href="../public/index.php" role="button">retour</a>
    </div>
    <?php
    include('../include/footer.php'); //Le footer
    ?>
</div>