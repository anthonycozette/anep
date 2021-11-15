<?php
// Initialiser la session
session_start();
// Vérifiez si l'utilisateur est connecté, sinon redirigez-le vers la page de connexion
if (!isset($_SESSION["username"])) {
    header("Location: ../registration/login.php");
    exit();
}
?>
<!DOCTYPE html>
<html>

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <title>Liste Ordinateur</title>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/r/dt/jq-2.1.4,jszip-2.5.0,pdfmake-0.1.18,dt-1.10.9,af-2.0.0,b-1.0.3,b-colvis-1.0.3,b-html5-1.0.3,b-print-1.0.3,se-1.0.1/datatables.min.css" />
    <script type="text/javascript" src="https://cdn.datatables.net/r/dt/jq-2.1.4,jszip-2.5.0,pdfmake-0.1.18,dt-1.10.9,af-2.0.0,b-1.0.3,b-colvis-1.0.3,b-html5-1.0.3,b-print-1.0.3,se-1.0.1/datatables.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link href="../styles/styles.css" rel="stylesheet">
    <link href="../styles/style.css" rel="stylesheet">
</head>

<body>
    <div class="sucess">
        <h1>Bienvenue <?php echo $_SESSION['username']; ?>!</h1>
        <h2>Liste des Equipements</h2>
        <a class="btn btn-primary" href="../registration/logout.php">Déconnexion</a>
    </div>
    <div class="container">

        <div class="row">

        </div>

        <div class="row" id="bordure">

            <a href="add.php" class="btn btn-success col-2">Ajouter un Equipement</a>

            <div class="table-responsive mt-3">

                <table class="table table-striped table-bordered" id="customer_data">

                    <thead>

                        <th>Nom ordinateur</th>
                        <th>Nom utilisateur</th>
                        <th>Prénom utilisateur</th>
                        <th>Emplacement</th>
                        <th>Referance Qualite</th>
                        <th>En service</th>
                        <th>Type de Materiel</th>
                        <th>service</th>
                        <th>Adresse ip</th>
                        <th>Detail</th>
                        <th>Update</th>
                        <th>Delete</th>

                    </thead>

                </table>

            </div>

        </div>

    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script type="text/javascript" language="javascript">
        $(document).ready(function() {

            $('#customer_data').DataTable({
                "processing": true,
                "serverSide": true,
                "ajax": {
                    url: "fetch.php",
                    type: "POST"
                },
                dom: 'lBfrtip',
                buttons: [
                    'excel', 'csv',
                ],
                "lengthMenu": [
                    [25, 50, -1],
                    [25, 50, "All"]
                ]
            });

        });
    </script>
</body>

</html>