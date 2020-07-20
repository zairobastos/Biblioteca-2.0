<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Estatística Mensal - ZB LIBRARY</title>

    <!--folhas CSS-->
    <link rel="stylesheet" href="../acervo/css/acervo.css">

    <!--Favicon-->
    <link rel="icon" type="image/png" sizes="16x16" href="../imagem/favicon.ico">

    <!--Fontes do Empréstimo-->
    <link href="https://fonts.googleapis.com/css2?family=Nunito&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
</head>
<body onkeyup="fechare(event)">
    <!-- Include do menu -->
    <?php
        include_once "../menus/menu.php";#referente aos menu lateral e vertical
    ?>
    <!--Intruções para o preenchimento de dados do formulário e sub-menu-->

    <?php
        include_once "../menu2/menu2.php";#referente ao sub-menu das páginas
    ?>
        <div class="descricao">
            <figure>
                <img src="image/undraw_personal_goals_edgd.svg" alt="Imagem referente a uma coleção de livros">
            </figure>
            <p>Na aba Mensal, da Estatística é possível visualizar por meio de gráfico o quantitativo
                de livros que a biblioteca emprestrou durante cada mês do ano. Dessa forma é possível,
                fazer uma analíse sucinta do dados e realizar políticas de incentivo a leitura. 
            </p>
        </div>
    </section>
</body>
</html>
<!--Adicionando texto e efeitos no subtitulos-->
<script src="../menu2/js/adicionarclasse.js"></script>