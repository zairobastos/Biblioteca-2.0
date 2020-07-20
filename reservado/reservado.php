<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Empréstimo - ZB LIBRARY</title>
    
    <link rel="stylesheet" href="../acervo/css/acervo.css"><!--Folha CSS do Empréstimo-->

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
    <!--Intruções para o preenchimento de dados do formulário-->

        <?php
            include_once "../menu2/menu2.php";#referente ao sub-menu das páginas
        ?>
        <div class="descricao">
            <figure>
                <img src="image/undraw_researching_22gp.svg" alt="Imagem de devolução de livros de forma engraçada kkkk">
            </figure>
            <p>
                Na seção Reservados é listado os alunos que solicitaram um empréstimo de um livro, mas não havia exemplares disponíveis. Assim que se tiver favorável ao empréstimo do livro, o sistema lhe notificará.
            </p>
        </div>
    </section>
</body>
</html>
<!--Javascript utilizado para nomear a página em que o usuário se encontra no site-->
    <script src="../menus/js/titulo.js"></script>
<!--Adicionando texto e efeitos no subtitulos-->
    <script src="../menu2/js/adicionarclasse.js"></script>
<!--Script Data e Hora Atual -->
    <script src="../menus/js/horasData.js"></script>
<!--Desenvolvido por @zairo.vbastos-->