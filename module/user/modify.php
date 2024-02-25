<style type="text/css">
    #user-modify input {
        border: none;
        border-radius: 30px;
        padding: 5px 10px;
        font-size: large;
        margin: 15px 0 22px 0;
        box-shadow: 0 0 5px grey;
        width: 50%;
        height: 40px;
    }
</style>

    <link rel="stylesheet" type="text/css" href="css/main-content.css">

    <div class="main-content">
        <div class="main-content-elem" id="user-modify">
            <h2>Mise à jour de vos informations</h2>
            <form>
                <label for="name">Nom <i class="fa fa-solid fa-user"></i> </label> <br>
            <input type="text" id="name" name="name" required>
            <br>
            <label for="email">Email <i class="fa fa-solid fa-envelope"></i> </label> <br>
            <input type="email" id="email" name="email" required>
            <br>
            <input type="submit" name="" value="Mettre à jour">
            </form>

            <h2>Changement de mot de passe</h2>
            <form>
                <label for="password">Mot de passe actuel <i class="fa fa-solid fa-key"></i> </label> <br>
                <input type="password" id="password" name="password" required>
                <br>
                <label for="password1">Nouveau mot de passe <i class="fa fa-solid fa-key"></i> </label> <br>
                <input type="password" id="password1" name="password1" required>
                <br>
                <label for="password2">Confirmer mot de passe <i style="cursor: pointer" title="Pour ne pas faire d'erreur" class="fa fa-solid fa-info-circle"></i> </label> <br>
                <input type="password" id="password2" name="password1" required>
                <br>
                <input type="submit" name="" value="Confirmer">
            </form>
        </div>
    </div>
