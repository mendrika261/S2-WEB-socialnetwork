<?php



?>

    <link rel="stylesheet" type="text/css" href="css/main-content.css">

    <div class="main-content">
        <div class="main-content-elem">
            <h2>@publication</h2>
            <p> Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
            tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
            quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
            consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
            cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
            proident, sunt in culpa qui officia deserunt mollit anim id est laborum. </p>
            <div class="main-content-elem-image">
                <i class="fa-regular fa-image"></i>
            </div>
            <div class="main-content-elem-interaction bg-green">
                <ul class="interaction-button">
                    <li>
                        <a href="<?php echo getUrl('pub', 'detail').'&id=1' ?>"> <i class="fa-solid fa-comments"></i> 2 Commentaires </a>
                    </li>
                </ul>
                <ul class="comments">
                    <li>
                        <h3>@commentaire</h3>
                        <p> Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                        tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam </p>
                    </li>
                    <li class="add-comment">
                        <form>
                            <textarea placeholder="Votre commentaire ici..."></textarea>
                            <button type="submit"> <i class="fa-solid fa-paper-plane"></i> </button>
                        </form>
                    </li>
                </ul>
            </div>
        </div>
    </div>

<?php
include 'global/right-main.php';