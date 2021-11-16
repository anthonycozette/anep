<?php
// Initialiser la session
session_start();
// Vérifiez si l'utilisateur est connecté, sinon redirigez-le vers la page de connexion
if (!isset($_SESSION["username"])) {
    header("Location: ../registration/login.php");
    exit();
}

require('../database/database.php');
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
                    <label class="control-label"> <strong>Nom Ordinateur:</strong> <?php echo $data['nom_ordinateur']; ?></label>
                </div>

                <div class="control-group">
                    <label class="control-label"><strong>utilisateur:</strong> <?php echo $data['nom_utilisateur']; ?></label>
                </div>

                <div class="control-group">
                    <label class="control-label"><strong>Prénom Utilisateur:</strong> <?php echo $data['prenom_utilisateur']; ?></label>
                </div>

                <div class="control-group">
                    <label class="control-label"><strong>Réf Qualité:</strong> <?php echo $data['ref_qualite']; ?></label>
                </div>

                <div class="control-group">
                    <label class="control-label"><strong>Emplacement:</strong><?php echo $data['emplacement']; ?></label>
                </div>

                <div class="control-group">
                    <label class="control-label"><strong>Nom du Service:</strong> <?php echo $data['services']; ?></label>
                </div>

                <div class="control-group">
                    <label class="control-label"><strong>Adresse IP:</strong> <?php echo $data['adresse_ip']; ?></label>
                </div>

                <div class="control-group">
                    <label class="control-label"><strong>Référence:</strong> <?php echo $data['reference']; ?></label>
                </div>

                <div class="control-group">
                    <label class="control-label"><strong>Réseau LAN:</strong> <?php echo $data['lan_reseau']; ?></label>
                </div>

                <div class="control-group">
                    <label class="control-label"><strong>Type de Matériel:</strong> <?php echo $data['type_materiel']; ?></label>
                </div>

                <div class="control-group">
                    <label class="control-label"><strong>En Service:</strong> <?php echo $data['en_service']; ?></label>
                </div>

                <div class="control-group">
                    <label class="control-label"><strong>Numero de Serie:</strong> <?php echo $data['numero_serie']; ?></label>
                </div>

                <div class="control-group">
                    <label class="control-label"><strong>Systeme Exploitation:</strong> <?php echo $data['systeme_exploitation']; ?></label>
                </div>

                <div class="control-group">
                    <label class="control-label"><strong>Adresse Mac:</strong> <?php echo $data['mac_adresse']; ?></label>
                </div>

                <div class="control-group">
                    <label class="control-label"><strong>Date Achat:</strong> <?php echo $data['date_achat']; ?></label>
                </div>

                <div class="control-group">
                    <label class="control-label"><strong>Login Admin Local:</strong> <?php echo $data['login_admin_local']; ?></label>
                </div>

                <div class="control-group">
                    <label class="control-label"><strong>Login Admin Domaine:</strong> <?php echo $data['login_admin_boissy']; ?></label>
                </div>

                <div class="control-group">
                    <label class="control-label"><strong>Login Utilisateur:</strong> <?php echo $data['user_login']; ?></label>
                </div>

                <div class="control-group">
                    <label class="control-label"><strong>VPN:</strong> <?php echo $data['vpn']; ?></label>
                </div>

                <div class="form-actions mt-3">
                    <a class="btn btn-dark" href="../index.php">Retour </a>
                </div>

            </div>

        </div>

    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

</body>

</html>