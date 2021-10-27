<?php
include('../include/header.php'); //Le header
?>

<div class="container">
    <h1>Mon super blog !</h1>
    <p>Derniers billets du blog :</p>


    <?php
    require('../model/bdd.php');

    $req = getbdd();

    require('../view/view.php'); ?>
    <a class="btn btn-primary mt-3" href="../view/formulaire.php" role="button">Nouveau ordinateur</a>
</div>

<?php
include('../include/footer.php'); //Le header