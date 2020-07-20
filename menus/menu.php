<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--Favicon-->
    <link rel="icon" type="image/png" sizes="16x16" href="../imagem/favicon.ico">

    <!--CSS-->
    <link rel="stylesheet" href="../anotacoes/css/anotar.css"><!--Folha CSS do anotações-->
    <link rel="stylesheet" href="../menus/css/menu.css"><!--Folha CSS do menu-->
    
    <!--FONTES-->
    <link rel="stylesheet" href="../fontawesome-free-5.13.1-web/fontawesome-free-5.13.1-web/css/all.css">
</head>
<body onload="hora()" onkeyup="fechare(event)">
    <!--Menus-->
    <header>
        <!--Menu Horizontal-->
        <nav class="horizontal" onblur="fecha()">
            <div class="logo">
                <!--Imagem-->
                <img src="../imagem/2ff5587c-0f52-4f7f-929e-759555ab3f0d_200x200 (2).png">
                <!--Texto da Logo do ZB LIBRARY-->
                <div class="marca">
                    <p>Sistema</p>
                    <h3>ZB LIBRARY</h3>
                </div>
            </div>
            <!--Campo de pesquisa-->
            <form autocomplete="off" class="pesquisa">
                <input type="search" name="livro" id="livro" autocomplete="off" placeholder="Quem procura acha rs">
                <button type="submit"><i class="fas fa-search"></i></button>
            </form>
            <!--Div foto do usuário-->
            <div class="foto">
                <div class="descricao">
                    <h4>Zairo Bastos</h4>
                    <p>Desenvolvedor</p>
                </div>
                <img src="../imagem/undraw_male_avatar_323b.svg" id="abre" onclick="abre()">
            </div>
        </nav>
        <!--Menu Vertical-->
        <nav class="vertical">
            <a href="../home/home.php"><div class="a1">
                <i class="fas fa-home"></i>
                <label for="" class="menu">Home</label>
            </div></a>            
            <a href="../livro/livro.php" onclick="f1()"><div class="a1">
                <i class="fas fa-book"></i>
                <label for="" class="menu">Livros</label>
            </div></a>
            <a href="../emprestimo/emprestimo.php"><div class="a1">
                <i class="fas fa-calendar-alt"></i>
                <label for="" class="menu">Empréstimo</label>
            </div></a>
            <a href="../estatistica/estatistica.php"><div class="a1">
                <i class="fas fa-chart-pie"></i>
                <label for="" class="menu">Estatística</label>
            </div></a>
            <a href="#"><div class="a1">
                <i class="fas fa-user-clock"></i>
                <label for="" class="menu">Agendamento</label>
            </div></a>
            <a href="#"><div class="a1">
                <i class="fas fa-clipboard-list"></i>
                <label for="" class="menu">Atividades</label>
            </div></a>
            <a href="http://localhost/BIBLIOTECA2.0/alunos/alunos.php">
                <div class="a1">
                    <i class="fas fa-user-plus"></i>
                    <label for="" class="menu">Usuários</label>
                </div>
            </a>
            <p class="data"></p>
            <p class="hora"></p>
        </nav>
        <div id="info">
            <div class="fechar">
                <i class="fas fa-times" id="fecharrr" onclick="fecha()"></i>
            </div>
            <p>Olá. O que desejas?</p>
            <hr>
            <a href=""><i class="fas fa-user-cog"></i> Configurações</a>
            <a href=""><i class="fas fa-question-circle"></i> Ajuda</a>
            <hr class="hr">
            <a href="" class="sair"><i class="fas fa-power-off"></i> Sair</a>
        </div>
    </header>
    <form id="anotar">
        <p onclick="fecharAnotar()"><i class="fas fa-times"></i></p>
        <h3>SUAS ANOTAÇÕES</h3>
        <div id="bloco">
            <button type="submit" title="Salvar Anotação"><i class="fas fa-save"></i></button>
            <p>
                <textarea name="anote" id="anote" placeholder="Insira aqui a sua anotação"></textarea>
            </p>
        </div>
    </form>
    <section>
        <div class="localizacao">
            <h4> <span class="maior">S</span>ISTEMA <span class="maior">B</span>IBLIOTECÁRIO - <span class="menor"></span></h4>
            <a onclick="anotar()" id="abrir">Anotar <i class="fas fa-sticky-note"></i></a>
        </div>
        <hr class="hr">
</body>
</html>
<!--Script Data e Hora Atual -->
    <script src="../menus/js/horasData.js"></script>
<!--Script da janela Modal do Usuário -->
    <script src="../menus/js/modal.js"></script>
<!--Parte das Anotações -->
    <script src="../anotacoes/js/anotar.js"></script>
<!--Javascript utilizado para nomear a página em que o usuário se encontra no site-->
<script src="../menus/js/titulo.js"></script>
<!--by Zairo Bastos-->