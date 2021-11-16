<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" href="../styles/style.css" />
</head>

<body>
    <?php
    require('config.php');
    if (isset($_REQUEST['username'], $_REQUEST['password'], $_REQUEST['role'], $_REQUEST['active'])) {
        // récupérer le nom d'utilisateur et supprimer les antislashes ajoutés par le formulaire
        $username = stripslashes($_REQUEST['username']);
        $username = mysqli_real_escape_string($conn, $username);;
        // récupérer le mot de passe et supprimer les antislashes ajoutés par le formulaire
        $password = stripslashes($_REQUEST['password']);
        $password = mysqli_real_escape_string($conn, $password);
        $role = stripslashes($_REQUEST['role']);
        $role = mysqli_real_escape_string($conn, $role);
        $active = stripslashes($_REQUEST['active']);
        $active = mysqli_real_escape_string($conn, $active);
        //requéte SQL + mot de passe crypté
        $query = "INSERT into `users` (username, password, role, active)
              VALUES ('$username', '" . hash('sha256', $password) . "','$role','$active')";
        // Exécuter la requête sur la base de données
        $res = mysqli_query($conn, $query);
        if ($res) {
            echo "<div class='sucess'>
             <h3>Vous êtes inscrit avec succès.</h3>
             <p>Cliquez ici pour vous <a href='login.php'>connecter</a></p>
       </div>";
        }
    } else {
    ?>
        <form class="box" action="" method="post">

            <h1 class="box-title">S'inscrire</h1>
            <input type="text" class="box-input" name="username" placeholder="Nom d'utilisateur" required />
            <input type="password" class="box-input" name="password" placeholder="Mot de passe" required />
            <!-- <input type="text" class="box-input" name="role" placeholder="Role" required /> -->
            <select class="box-select" name="role" required>
                <option value="ADMIN">Admin</option>
                <option value="OPERATEUR">User</option>
            </select>
            <select class="box-select" name="active" required>
                <option value="1">oui</option>
                <option value="0">non</option>
            </select>
            <input type="submit" name="submit" value="S'inscrire" class="box-button" />
            <p class="box-register">Déjà inscrit? <a href="login.php">Connectez-vous ici</a></p>
        </form>
    <?php } ?>
</body>

</html>