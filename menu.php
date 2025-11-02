<?php
echo "<h3>Menu do site</h3>";
?>
<nav>
    <ul class="menu">
        <li><a href="index.php">Home</a></li>
        <li><a href="?pg=quemsomos">Quem Somos</a></li>
        <li><a href="admin/clientes-cadastro-form.php">Clientes</a></li>
        <li><a href="?pg=faleconosco">Contato</a></li>
         <li><a href="admin/jogadores-cadastro-form.php">Jogadores</a></li>
    </ul>
</nav>

<style>
    h3 {
        color: #FFD700;
        text-shadow: 1px 1px 2px #000;
        margin-bottom: 10px;
    }

    nav {
        background-color: #111;
        border: 1px solid #FFD700;
        border-radius: 5px;
        padding: 10px 0;
        width: fit-content;
    }

    .menu {
        list-style: none;
        margin: 0;
        padding: 0;
        display: flex;
        gap: 20px;
    }

    .menu li {
        display: inline;
    }

    .menu a {
        color: #FFD700;
        text-decoration: none;
        padding: 5px 10px;
        border-radius: 4px;
        transition: background-color 0.3s, color 0.3s;
    }

    .menu a:hover {
        background-color: #FFD700;
        color: #111;
    }
</style>