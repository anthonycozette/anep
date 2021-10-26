<form action="../controller/form_envoi.php" method="post">
    <div class="container">
        <div class="row mb-3">

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

        <div class="row mb-3">

            <h3>Info Ordinateur</h3>

            <div class="col-2">
                <label class="form-label">Nom Ordinateur</label>
                <input type="text" class="form-control" placeholder="Nom Ordinateur" name="">
            </div>

            <div class="col-2">
                <label class="form-label">Référence</label>
                <input type="text" class="form-control" placeholder="Référence" name="">
            </div>

            <div class="col-2">
                <label class="form-label">Type de Matériel</label>
                <input type="text" class="form-control" placeholder="Type Matériel" name="">
            </div>

            <div class="col-2">
                <label class="form-label">Numéro de Serie</label>
                <input type="text" class="form-control" placeholder="Numero de serie" name="">
            </div>

            <div class="col-2">
                <label class="form-label">Systeme Exploitation</label>
                <input type="text" class="form-control" placeholder="Système d'Exploitation" name="">
            </div>

            <div class="col-2">
                <label class="form-label">Date Achat</label>
                <input type="text" class="form-control" placeholder="Date Achat" name="">
            </div>


        </div>

        <div class="row mb-3">

            <h3>Info Service</h3>

            <div class="col-2">
                <label class="form-label">En Service</label>
                <input type="text" class="form-control" placeholder="En Service" name="">
            </div>

            <div class="col-2">
                <label class="form-label">Emplacement</label>
                <input type="text" class="form-control" placeholder="Emplacement" name="">
            </div>

            <div class="col-2">
                <label class="form-label">Nom du Service</label>
                <input type="text" class="form-control" placeholder="Nom du Service" name="">
            </div>

            <div class="col-2">
                <label class="form-label">En Production</label>
                <input type="text" class="form-control" placeholder="En Production" name="">
            </div>

            <div class="col-2">
                <label class="form-label">Ref Qualité</label>
                <input type="text" class="form-control" placeholder="Ref Qualité" name="">
            </div>

            <div class="col-2">
                <label class="form-label">Réseau LAN</label>
                <input type="text" class="form-control" placeholder="Réseau LAN" name="">
            </div>

        </div>

        <div class="row mb-3">

            <h3>Session Administrateur</h3>

            <div class="col-3">
                <label class="form-label">Licences</label>
                <input type="text" class="form-control" placeholder="Licences" name="">
            </div>

            <div class="col-3">
                <label class="form-label">Adresse IP</label>
                <input type="text" class="form-control" placeholder="Adresse IP" name="">
            </div>

            <div class="col-3">
                <label class="form-label">Login Admin Local</label>
                <input type="text" class="form-control" placeholder="Login Session Admin Local" name="">
            </div>

            <div class="col-3">
                <label class="form-label">Password Admin Local</label>
                <input type="text" class="form-control" placeholder="Password Session Admin Local" name="">
            </div>

            <div class="col-3">
                <label class="form-label">Login Admin Domaine</label>
                <input type="text" class="form-control" placeholder="Login Session Admin Domaine" name="">
            </div>

            <div class="col-3">
                <label class="form-label">Password Admin Domaine</label>
                <input type="text" class="form-control" placeholder="Password Session Admin Domaine" name="">
            </div>

            <div class="col-3">
                <label class="form-label">VPN</label>
                <input type="text" class="form-control" placeholder="VPN" name="VPN">
            </div>

        </div>

        <div class="col-12">
            <button type="submit" class="btn btn-primary">Enregistrer</button>
        </div>
    </div>
</form>