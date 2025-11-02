<?php
echo "<footer class='rodape'>
        <p>&copy; " . date("Y") . " Sistema de Administração de Jogadores CS2. Todos os direitos reservados.</p>
        <p>Desenvolvido por caio vinicius | <a href='?pg=faleconosco'>Fale conosco na aba contato</a></p>
      </footer>";
?>

<style>
    .rodape {
        background-color: #111;
        border-top: 2px solid #FFD700;
        color: #FFD700;
        text-align: center;
        padding: 15px 10px;
        margin-top: 30px;
        font-size: 14px;
        box-shadow: 0 -2px 10px #FFD70033;
    }

    .rodape a {
        color: #FFD700;
        text-decoration: none;
    }

    .rodape a:hover {
        text-decoration: underline;
        color: #fff;
    }
</style>