<?php

// Validation du formulaire
if (isset($_POST['login']) &&  isset($_POST['password'])) {
    //  ($users as $user) {
        if (
            $user['login'] === $_POST['login'] &&
            $user['password'] === $_POST['password']
        ) {
            $loggedUser = [
                'login' => $user['login'],
            ];
        } else {
            $errorMessage = sprintf(
                'Les informations envoyées ne permettent pas de vous identifier : (%s/%s)',
                $_POST['login'],
                $_POST['password']
            );
        }
    //}
}
?>

<!--
   Si utilisateur/trice est non identifié(e), on affiche le formulaire
-->
<?php if (!isset($loggedUser)) : ?>
    <form action="index.php" method="post">
        <!-- si message d'erreur on l'affiche -->
        <?php if (isset($errorMessage)) : ?>
            <div class="alert alert-danger" role="alert">
                <?php echo $errorMessage; ?>
            </div>
        <?php endif; ?>
        <div class="mb-3">
            <label for="login" class="form-label">Login</label>
            <input type="login" class="form-control" id="login" name="login" aria-describedby="login-help" placeholder="Login">
            <div id="login-help" class="form-text">Login utilisé lors de la création de compte.</div>
        </div>
        <div class="mb-3">
            <label for="password" class="form-label">Mot de passe</label>
            <input type="password" class="form-control" id="password" name="password">
        </div>
        <button type="submit" class="btn btn-primary">Envoyer</button>
    </form>
    <!-- 
    Si utilisateur/trice bien connectée on affiche un message de succès
-->
<?php else : ?>
    <div class="alert alert-success" role="alert">
        Bonjour <?php echo $loggedUser['login']; ?> et bienvenue sur le site !
    </div>
<?php endif; ?>