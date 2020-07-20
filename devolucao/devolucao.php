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
                <img src="image/undraw_on_the_way_ldaq.svg" alt="Imagem de devolução de livros de forma engraçada kkkk">
            </figure>
            <p>
                Na seção Devolução Pendente é possível verificar quais são os alunos que
                pegaram livros emprestados da biblioteca e advir o seu período de devolução.
                Além de contarmos com um contador de devoluções atrasadas.
            </p>
        </div>
    </section>
</body>
</html>
<!--Javascript utilizado para nomear a página em que o usuário se encontra no site-->
    <script src="../menus/js/titulo.js"></script>
<!--Adicionando texto e efeitos no subtitulos-->
    <script src="../menu2/js/adicionarclasse.js"></script>