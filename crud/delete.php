<?php
// Initialiser la session
session_start();
// Vérifiez si l'utilisateur est connecté, sinon redirigez-le vers la page de connexion
if (!isset($_SESSION["username"])) {
    header("Location: ../registration/login.php");
    exit();
}

require '../database/database.php';
$id = 0;
if (!empty($_GET['id'])) {
    $id = $_REQUEST['id'];
}
if (!empty($_POST)) {
    $id = $_POST['id'];
    $pdo = Database::connect();
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $sql = "DELETE FROM information_pc  WHERE id = ?";
    $q = $pdo->prepare($sql);
    $q->execute(array($id));
    Database::disconnect();
    header("Location: index.php");
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Supprimer</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link href="../styles/styles.css" rel="stylesheet">
    <img src="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7" data-wp-preserve="%3Cscript%20src%3D%22js%2Fbootstrap.min.js%22%3E%3C%2Fscript%3E" data-mce-resize="false" data-mce-placeholder="1" class="mce-object" width="20" height="20" alt="<script>" title="<script>" />
</head>

<body>

    <div class="container">

        <div class="span10 offset1">

            <div class="row">

                <h2>Supprimer l'Equipement</h2>

            </div>


            <form class="form-horizontal" action="delete.php" method="post">

                <input type="hidden" name="id" value="<?php echo $id; ?>" />

                <h5 class="mt-2">Voulez-vous vraiment supprimer l'Ordinateur ?</h5>

                <div class="form-actions mt-3">
                    <button type="submit" class="btn btn-danger">Yes</button>
                    <a class="btn btn-dark" href="index.php">No</a>
                </div>

            </form>

        </div>

    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

</body>

</html>