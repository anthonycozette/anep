<table>
    <thead>
        <tr>
            <th>ID</th>
            <th>Ref Qualité</th>
            <th>Production</th>
            <th>Emplacement</th>
            <th>Service</th>
            <th>Adresse IP</th>
            <th>Nom Ordinateur</th>
            <th>Nom Utilisateur</th>
            <th>prenom Utilisateur</th>
            <th>Référence</th>
            <th>LAN Réseau</th>
            <th>Type Materiel</th>
            <th>En service</th>
            <th>Numero de serie</th>
            <th>systeme exploitation</th>
            <th>Mac adresse</th>
            <th>Date Achat</th>
            <th>Login Session Admin Local</th>
            <th>Pwd Session Admin Local</th>
            <th>login Session Admin Boissy</th>
            <th>Pwd Session Admin Boissy</th>
            <th>User Login Session</th>
            <th>User Pwd Session</th>
            <th>VPN</th>
        </tr>
    </thead>
    <?php //On affiche les lignes du tableau une à une à l'aide d'une boucle
    while ($donnees = array($req)) {
    ?>
        <tbody>
            <tr>
                <td><?php echo $donnees['ID']; ?></td>
                <td><?php echo $donnees['ref_qualite']; ?></td>
                <td><?php echo $donnees['production']; ?></td>
                <td><?php echo $donnees['emplacement']; ?></td>
                <td><?php echo $donnees['services']; ?></td>
                <td><?php echo $donnees['adresse_ip']; ?></td>
                <td><?php echo $donnees['nom_ordinateur']; ?></td>
                <td><?php echo $donnees['nom_utilisateur']; ?></td>
                <td><?php echo $donnees['prenom_utlisateur']; ?></td>
                <td><?php echo $donnees['reference']; ?></td>
                <td><?php echo $donnees['lan_reseau']; ?></td>
                <td><?php echo $donnees['type_materiel']; ?></td>
                <td><?php echo $donnees['en_service']; ?></td>
                <td><?php echo $donnees['numero_serie']; ?></td>
                <td><?php echo $donnees['systeme_exploitation']; ?></td>
                <td><?php echo $donnees['mac_adresse']; ?></td>
                <td><?php echo $donnees['date_achat']; ?></td>
                <td><?php echo $donnees['login_admin_local']; ?></td>
                <td><?php echo $donnees['pwd_admin_local']; ?></td>
                <td><?php echo $donnees['login_admin_boissy']; ?></td>
                <td><?php echo $donnees['pwd_admin_boissy']; ?></td>
                <td><?php echo $donnees['user_login']; ?></td>
                <td><?php echo $donnees['user_pwd']; ?></td>
                <td><?php echo $donnees['vpn']; ?></td>
            </tr>
        </tbody>
        
    <?php
        break;
    } //fin de la boucle, le tableau contient toute la BDD
    ?>
</table>