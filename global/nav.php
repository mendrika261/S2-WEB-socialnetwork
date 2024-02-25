<link rel="stylesheet" href="css/nav.css">

<div class="nav">
    <h1 style="color: white;"></h1>
    <ul>
        <li>
            <a href="?"> <i class="fa-solid fa-home" title="Accueil"></i> </a>
        </li>
    </ul>
    <div>
        <ul class="search">
            <form action="" method="get">
                <input type="search" name="search" placeholder="Rechercher...">
                <button type="submit"> <i class="fa-solid fa-search"></i> </button>
            </form>
        </ul>
        <ul>
            <li>
                <a href=""> <i class="fa-solid fa-bell" title="Notifications"></i> </a>
            </li>
            <li>
                <a href=""> <i class="fa-solid fa-comment-dots" title="Messages"></i> </a>
            </li>
            <li>
                <a href="<?php echo getUrl('user', 'modify') ?>"> <i class="fa-solid fa-user-cog" title="Parametres"></i> </a>
            </li>
            <li>
            <li>
                <a href="<?php echo getUrl('user', 'logout') ?>"><i class="fa-solid fa-sign-out" title="Deconnexion"></i></a>
            </li>
        </ul>
    </div>
</div>

<div class="main">
