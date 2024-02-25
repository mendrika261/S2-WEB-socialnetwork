<?php

include 'function/users.php';

$error = "";
if(isset($_POST['login'])) {
    if(isTruePassword($database, $_POST['email'], $_POST['password'])) {
        $info = getUser($database, getID($database, $_POST['email']));
        $_SESSION['userId'] = $info['idMembre'];
        header('Location:index.php');
    } else
        $error = "Mot de passe incorrect";
}

?>

    <link rel="stylesheet" href="css/login.css">

    <div id="login" class="log">
        <h1>Logo</h1>
        <form method="post" id="login">
            <label for="email">Email <i class="fa-solid fa-envelope"></i></label> <br>
            <input type="email" id="email" name="email" required>
            <br>
            <label for="password">Mot de passe <i class="fa-solid fa-key"></i></label> <br>
            <input type="password" id="password" name="password" required>
            <br>

            <label for="remember">Se souvenir de moi</label>
            <input type="checkbox" name="remember" id="remember" value="yes">

            <div class="login-error">
                <?php if(strlen($error) != 0) echo $error ?>
            </div>

            <div class="login-action">
                <div class="login-submit">
                    <input type="submit" name="login" value="Se connecter" class="button">
                </div>
                <div>ou</div>
                <div>
                    <a href="<?php echo getUrl('user', 'sign-in') ?>"> Creer un compte </a>
                </div>
            </div>
        </form>
    </div>

<?php
include 'global/footer.php';
