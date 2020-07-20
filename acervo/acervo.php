<!--Inclusão de dados-->
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Livros - ZB LIBRARY</title>

    <link rel="stylesheet" href="css/acervo.css"><!--Folha CSS do Acervo-->

    <!--Favicon-->
    <link rel="icon" type="image/png" sizes="16x16" href="../imagem/favicon.ico">

    <!--Fontes do Livro-->
    <link href="https://fonts.googleapis.com/css2?family=Nunito&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
</head>
<?php
    include_once "../menus/menu.php";#referente aos menu lateral e vertical
?>
<body onkeyup="fechare(event)">
    <!--Intruções para o preenchimento de dados do formulário-->

        <?php
            include_once "../menu2/menu2.php";#referente ao sub-menu das páginas
        ?>
        <div class="descricao">
            <figure>
                <img src="imagem/undraw_bookshelves_xekd.svg" alt="Imagem referente a uma coleção de livros">
            </figure>
            <p>O acervo bibliográfico é constituído por uma série de obras, 
                livros e documentos que ficam armazenados no ZB LIBRARY. Na aba Acervo, basta você clicar na seção
                 que deseja, para ver os livros que se encontram na determinada seção.</p>
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