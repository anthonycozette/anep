<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" href="../styles/style.css" />
</head>

<body>
    <?php
    require('config.php');
    session_start();

    if (isset($_POST['username'])) {
        $username = stripslashes($_REQUEST['username']);
        $username = mysqli_real_escape_string($conn, $username);
        $password = stripslashes($_REQUEST['password']);
        $password = mysqli_real_escape_string($conn, $password);
        $query = "SELECT * FROM `users` WHERE username='$username' and password='" . hash('sha256', $password) . "'";
        $result = mysqli_query($conn, $query) or die(mysqli_connect_error());
        if (mysqli_num_rows($result) == 1) {
            //Authentification OK, obtenir les infos
            $data = mysqli_fetch_object($result);

            //Compte actif ou pas?
            if ($data->active == 1) {
                //Variables de session
                $_SESSION['username'] = $username;
                $_SESSION['active'] = $data->active;
                $_SESSION['role'] = $data->role;

                //Test des droits
                switch ($data->role) {
                    case 'ADMIN':
                        header("location:" . "../crud/index.php");
                        exit;
                        break;

                    case 'OPERATEUR':
                        header("location:" . "../index.php");
                        exit;
                        break;
                }
            } else {
                //Le compte est inactif
                $msg = "Login ou mot de passe incorrect";

                //Redirection
                header("location:" . "login.php?msg=$msg");
                exit;
            }
        } else {
            //Aucun utilisateur
            $msg = "Login ou mot de passe incorrect";

            //Redirection
            header("location:" . "login.php?msg=$msg");
            exit;
        }
    }
    ?>

    <form class="box" action="" method="post" name="login">

        <h1 class="box-title">Connexion</h1>
        <input type="text" class="box-input" name="username" placeholder="Nom d'utilisateur">
        <input type="password" class="box-input" name="password" placeholder="Mot de passe">
        <input type="submit" value="Connexion " name="submit" class="box-button">
        <p class="box-register">Vous êtes nouveau ici? <a href="register.php">S'inscrire</a></p>
        <?php if (!empty($message)) { ?>
            <p class="errorMessage"><?php echo $message; ?></p>
        <?php } ?>
    </form>
</body>

</html>