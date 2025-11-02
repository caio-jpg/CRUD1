<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Painel CS2</title>
    <link rel="stylesheet" href="style.css">

    <style>
        /* ===== Fundo e estrutura geral ===== */
        html, body {
            background-color: #0e0e0e; /* fundo escuro */
            color: #f0f0f0;           /* texto claro */
            margin: 0;
            padding: 0;
            font-family: 'Rajdhani', sans-serif;
            min-height: 100vh;
        }

        /* ===== Ajustes gerais ===== */
        main, section, div, article {
            background-color: #1a1a1a;
            color: #f0f0f0;
            border-radius: 10px;
            padding: 15px;
        }

        /* ===== Cabeçalho ===== */
        .site-header {
            background: linear-gradient(90deg, #111, #222);
            color: #d4af37; /* dourado */
            text-align: center;
            padding: 20px 0;
            border-bottom: 2px solid #d4af37;
            box-shadow: 0 0 10px rgba(212, 175, 55, 0.5);
        }

        .site-header h1 {
            font-size: 2rem;
            letter-spacing: 2px;
            margin: 0;
        }

        /* ===== Rodapé ===== */
        footer {
            background-color: #111;
            color: #999;
            border-top: 1px solid #2e2e2e;
            text-align: center;
            padding: 15px 0;
        }
    </style>
</head>

<body>
<?php
    echo "<header class='site-header'>";
    echo "<h1>Painel CS2</h1>";
    echo "</header>";
?>