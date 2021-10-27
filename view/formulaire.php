<?php
include('../include/header.php'); //Le header
?>
<div class="container">
    <form action="../controller/form_envoi.php" method="post">

        <div class="row mt-3">

            <h3>Information de l'Utilisateur du pc</h3>

            <div class="col-3">
                <label class="form-label">Nom Utilisateur</label>
                <input type="text" class="form-control" placeholder="Nom Utilisateur" name="nomUtilisateur">
            </div>

            <div class="col-3">
                <label class="form-label">Prénom Utilisateur</label>
                <input type="text" class="form-control" placeholder="Prénom Utilisateur" name="prenomUtilisateur">
            </div>

            <div class="col-3">
                <label class="form-label">Login Utilisateur</label>
                <input type="text" class="form-control" placeholder="Login User" name="loginUser">
            </div>

            <div class="col-3">
                <label class="form-label">Password Utilisateur</label>
                <input type="password" class="form-control" placeholder="Password User" name="passwordUser">
            </div>

        </div>

        <div class="row mt-3">

            <h3>Info Ordinateur</h3>

            <div class="col-2">
                <label class="form-label">Nom Ordinateur</label>
                <input type="text" class="form-control" placeholder="Nom Ordinateur" name="nomOrdinateur">
            </div>

            <div class="col-2">
                <label class="form-label">Référence</label>
                <input type="text" class="form-control" placeholder="Référence" name="reference">
            </div>

            <div class="col-2">
                <label class="form-label">Type de Matériel</label>
                <input type="text" class="form-control" placeholder="Type Matériel" name="typeMateriel">
            </div>

            <div class="col-2">
                <label class="form-label">Numéro de Serie</label>
                <input type="text" class="form-control" placeholder="Numero de serie" name="numeroSerie">
            </div>

            <div class="col-2">
                <label class="form-label">Systeme Exploitation</label>
                <input type="text" class="form-control" placeholder="Système d'Exploitation" name="systemeExploitation">
            </div>

            <div class="col-2">
                <label class="form-label">Date Achat</label>
                <input type="date" class="form-control" placeholder="Date Achat" name="dateAchat">
            </div>


        </div>

        <div class="row mt-3">

            <h3>Info Service</h3>

            <div class="col-2">
                <label class="form-label">En Service</label>
                <input type="text" class="form-control" placeholder="En Service" name="enService">
            </div>

            <div class="col-2">
                <label class="form-label">Emplacement</label>
                <input type="text" class="form-control" placeholder="Emplacement" name="emplacement">
            </div>

            <div class="col-2">
                <label class="form-label">Nom du Service</label>
                <input type="text" class="form-control" placeholder="Nom du Service" name="nomService">
            </div>

            <div class="col-2">
                <label class="form-label">En Production</label>
                <input type="text" class="form-control" placeholder="En Production" name="enProduction">
            </div>

            <div class="col-2">
                <label class="form-label">Ref Qualité</label>
                <input type="text" class="form-control" placeholder="Ref Qualité" name="refQualite">
            </div>

            <div class="col-2">
                <label class="form-label">Réseau LAN</label>
                <input type="text" class="form-control" placeholder="Réseau LAN" name="reseauLan">
            </div>

        </div>

        <div class="row mt-3">

            <h3>Session Administrateur</h3>

            <div class="col-3">
                <label class="form-label">Licences</label>
                <input type="text" class="form-control" placeholder="Licences" name="licences">
            </div>

            <div class="col-3">
                <label class="form-label">Adresse IP</label>
                <input type="text" class="form-control" placeholder="Adresse IP" name="adresseIp">
            </div>
            <div class="col-3">
                <label class="form-label">Adresse mac</label>
                <input type="text" class="form-control" placeholder="Adresse mac" name="adresseMac">
            </div>

            <div class="col-3">
                <label class="form-label">Login Admin Local</label>
                <input type="text" class="form-control" placeholder="Login Session Admin Local" name="loginAdminLocal">
            </div>

            <div class="col-3">
                <label class="form-label">Password Admin Local</label>
                <input type="password" class="form-control" placeholder="Password Session Admin Local" name="pwdAdminLocal">
            </div>

            <div class="col-3">
                <label class="form-label">Login Admin Domaine</label>
                <input type="text" class="form-control" placeholder="Login Session Admin Domaine" name="loginAdminDomaine">
            </div>

            <div class="col-3">
                <label class="form-label">Password Admin Domaine</label>
                <input type="password" class="form-control" placeholder="Password Session Admin Domaine" name="pwdAdminDomaine">
            </div>

            <div class="col-3">
                <label class="form-label">VPN</label>
                <input type="text" class="form-control" placeholder="VPN" name="vpn">
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