<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Dashboard</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <style>
        .wrapper {
            width: 600px;
            margin: 0 auto;
        }

        table tr td:last-child {
            width: 120px;
        }
    </style>
    <script>
        $(document).ready(function() {
            $('[data-toggle="tooltip"]').tooltip();
        });
    </script>
</head>

<body>

    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="mt-5 mb-3 clearfix">
                    <h2 class="pull-left">Ordinateur</h2>
                    <a href="create.php" class="btn btn-success pull-right"><i class="fa fa-plus"></i> Add New Ordinateur</a>
                </div>
                
                <?php
                // Include config file
                require_once "config.php";

                // Attempt select query execution
                $sql = "SELECT * FROM information_pc";
                if ($result = $pdo->query($sql)) {
                    if ($result->rowCount() > 0) {
                        echo '<table class="table table-bordered table-striped">';
                        echo "<thead>";
                        echo "<tr>";
                        echo "<th>Nom ordinateur</th>";
                        echo "<th>Nom utilisateur</th>";
                        echo "<th>Prénom utilisateur</th>";
                        echo "<th>Emplacement</th>";
                        echo "<th>Production</th>";
                        echo "<th>En service</th>";
                        echo "<th>Type de Materiel</th>";
                        echo "<th>Date achat</th>";
                        echo "<th>service</th>";
                        echo "<th>Adresse ip</th>";
                        echo "<th>Actions</th>";
                        echo "</tr>";
                        echo "</thead>";
                        echo "<tbody>";
                        while ($row = $result->fetch()) {
                            echo '<tr>';
                            echo '<td>' . $row['nom_ordinateur'] . '</td>';
                            echo '<td>' . $row['nom_utilisateur'] . '</td>';
                            echo '<td>' . $row['prenom_utilisateur'] . '</td>';
                            echo '<td>' . $row['emplacement'] . '</td>';
                            echo '<td>' . $row['production'] . '</td>';
                            echo '<td>' . $row['en_service'] . '</td>';
                            echo '<td>' . $row['type_materiel'] . '</td>';
                            echo '<td>' . $row['date_achat'] . '</td>';
                            echo '<td>' . $row['services'] . '</td>';
                            echo '<td>' . $row['adresse_ip'] . '</td>';
                            echo '<td>';
                            echo '<a href="read.php?id=' . $row['ID'] . '" class="mr-3" title="View Record" data-toggle="tooltip"><span class="fa fa-eye"></span></a>';
                            echo '<a href="update.php?id=' . $row['ID'] . '" class="mr-3" title="Update Record" data-toggle="tooltip"><span class="fa fa-pencil"></span></a>';
                            echo '<a href="delete.php?id=' . $row['ID'] . '" title="Delete Record" data-toggle="tooltip"><span class="fa fa-trash"></span></a>';
                            echo "</td>";
                            echo "</tr>";
                        }
                        echo "</tbody>";
                        echo "</table>";
                        // Free result set
                        unset($result);
                    } else {
                        echo '<div class="alert alert-danger"><em>No records were found.</em></div>';
                    }
                } else {
                    echo "Oops! Something went wrong. Please try again later.";
                }

                // Close connection
                unset($pdo);
                ?>
            </div>
        </div>
    </div>

</body>

</html>