<?php require('database.php');
//on appelle notre fichier de config 
$id = null;
if (!empty($_GET['id'])) {
    $id = $_REQUEST['id'];
}
if (null == $id) {
    header("location:index.php");
} else {
    //on lance la connection et la requete 
    $pdo = Database::connect();
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION) .
        $sql = "SELECT * FROM information_pc where id =?";
    $q = $pdo->prepare($sql);
    $q->execute(array($id));
    $data = $q->fetch(PDO::FETCH_ASSOC);
    Database::disconnect();
}



/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Detail Ordinateur</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link href="../styles/styles.css" rel="stylesheet">
    <img src="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7" data-wp-preserve="%3Cscript%20src%3D%22js%2Fbootstrap.min.js%22%3E%3C%2Fscript%3E" data-mce-resize="false" data-mce-placeholder="1" class="mce-object" width="20" height="20" alt="<script>" title="<script>" />
</head>

<body>

    <div class="container">

        <div class="span10 offset1">

            <div class="row">

                <h3>Detail</h3>

            </div>

            <div class="form-horizontal">

                <div class="control-group">
                    <label class="control-label">Nom Ordinateur: <?php echo $data['nom_ordinateur']; ?></label>

                </div>

                <div class="control-group">
                    <label class="control-label">Nom utilisateur: <?php echo $data['nom_utilisateur']; ?></label>


                </div>

                <div class="control-group">
                    <label class="control-label">Prénom Utilisateur: <?php echo $data['prenom_utilisateur']; ?></label>
                </div>

                <div class="control-group">
                    <label class="control-label">Réf Qualité: <?php echo $data['ref_qualite']; ?></label>
                </div>

                <div class="control-group">
                    <label class="control-label">En Production: <?php echo $data['production']; ?></label>
                </div>

                <div class="control-group">
                    <label class="control-label">Emplacement:<?php echo $data['emplacement']; ?></label>
                </div>

                <div class="control-group">
                    <label class="control-label">Nom du Service: <?php echo $data['services']; ?></label>
                </div>

                <div class="control-group">
                    <label class="control-label">Adresse IP: <?php echo $data['adresse_ip']; ?></label>
                </div>
                <div class="control-group">
                    <label class="control-label">Référence: <?php echo $data['reference']; ?></label>
                </div>
                <div class="control-group">
                    <label class="control-label">Réseau LAN: <?php echo $data['lan_reseau']; ?></label>
                </div>
                <div class="control-group">
                    <label class="control-label">Type de Matériel: <?php echo $data['type_materiel']; ?></label>
                </div>
                <div class="control-group">
                    <label class="control-label">En Service: <?php echo $data['en_service']; ?></label>
                </div>
                
                <div class="control-group">
                    <label class="control-label">Numero de Serie: <?php echo $data['numero_serie']; ?></label>
                </div>
                <div class="control-group">
                    <label class="control-label">Systeme Exploitation: <?php echo $data['systeme_exploitation']; ?></label>
                </div>
                <div class="control-group">
                    <label class="control-label">Adresse Mac: <?php echo $data['mac_adresse']; ?></label>
                </div>
                <div class="control-group">
                    <label class="control-label">Date Achat: <?php echo $data['date_achat']; ?></label>
                </div>
                <div class="control-group">
                    <label class="control-label">Login Admin Local: <?php echo $data['login_admin_local']; ?></label>
                </div>
                <div class="control-group">
                    <label class="control-label">Login Admin Domaine: <?php echo $data['login_admin_boissy']; ?></label>
                </div>
                <div class="control-group">
                    <label class="control-label">Login Utilisateur: <?php echo $data['user_login']; ?></label>
                </div>
                <div class="control-group">
                    <label class="control-label">VPN: <?php echo $data['vpn']; ?></label>
                </div>

                <div class="form-actions mt-3">
                    <a class="btn btn-dark" href="index.php">Retour </a>
                </div>

            </div>

        </div>

    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

</body>

</html>