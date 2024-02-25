<?php

include 'function/users.php';

$error = "";
if(isset($_POST['sign-in'])) {
    if(empty(getUser($database,  getID($database, $_POST['email'])))) {
        if($_POST['password1'] == $_POST['password2']) {
            addUser($database, $_POST['email'], $_POST['password1'], $_POST['name'], $_POST['birthday']);
            header('Location:'.getUrl('user', 'login'));
        } else $error = "Mot de passe saisi different";
    } else $error = "Utilisateur deja existant";
}
?>

    <link rel="stylesheet" href="css/login.css">

    <div id="login" class="sign-in">
        <h1> <i class="fa-solid fa-address-card"></i> Inscription</h1>
        <form method="post">
            <label for="name">Nom <i class="fa fa-solid fa-user"></i> </label> <br>
            <input type="text" id="name" name="name" required>
            <br>
            <label for="email">Email <i class="fa fa-solid fa-envelope"></i> </label> <br>
            <input type="email" id="email" name="email" required>
            <br>
            <label for="password1">Mot de passe <i class="fa fa-solid fa-key"></i> </label> <br>
            <input type="password" id="password1" name="password1" required>
            <br>
            <label for="password2">Confirmer mot de passe <i style="cursor: pointer" title="Pour ne pas faire d'erreur" class="fa fa-solid fa-info-circle"></i> </label> <br>
            <input type="password" id="password2" name="password2" required>
            <br>
            <label for="birthday">Date de naissance <i class="fa fa-solid fa-calendar-alt"></i> </label> <br>
            <input type="date" id="birthday" name="birthday" required>
            <div class="login-error">
                <?php if(strlen($error) != 0) echo $error ?>
            </div>
            <div class="login-action">
                <div>
                    <a href="<?php echo getUrl('user', 'login') ?>"> Se connecter </a>
                </div>
                <div>ou</div>
                <div class="login-submit">
                    <input type="submit" name="sign-in" value="S'inscrire" class="button">
                </div>
            </div>
        </form>

    </div>