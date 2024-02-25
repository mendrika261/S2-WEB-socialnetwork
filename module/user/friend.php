   <link rel="stylesheet" type="text/css" href="css/main-content.css">


<style type="text/css">
    .user-list {
        width: 100%;
        text-align: center;
    }
    .user-list-sort {
        margin: 20px 0;
    }
    .user-list-sort select, .user-list-sort input {
        border: none;
        border-radius: 10px;
        height: 30px;
        padding: 5px;
    }
    .user-list-sort select {
        background-color: #86317d;
        color: white;
    }
    .user-list-sort input {
        cursor: pointer;
        color: white;
        background-color: #86317d;
        font-weight: bold;
    }
    .user-list-sort input:hover {
        background-color: grey;
    }
</style>

    <div class="main-content">
        <div class="main-content-elem">
            <h2>Mes amis (53) <i class="fa-solid fa-user-group"></i> </h2>
            <form class="user-list-sort">
                <i class="fa-solid fa-filter"></i>
                <select>
                    <option>Nom d'utilisateur</option>
                    <option>Date d'ajout</option>
                    <option>Amis en commun</option>
                </select>
                <input type="submit" name="" value="Trier">              
            </form>
            <table class="user-list">
                <tr>
                    <th>Utilisateur</th>
                    <th>Amis depuis</th>
                    <th>Amis en commun</th>
                    <th>Action</th>
                </tr>
                <tr>
                    <td>Bao</td>
                    <td>25 Juin 2020</td>
                    <td>54</td>
                    <td> <a href="">Retirer <i class="fa-solid fa-user-xmark"></i> </a> </td>
                </tr>
            </table>
        </div>
    </div>

<?php

include 'global/right-main.php';