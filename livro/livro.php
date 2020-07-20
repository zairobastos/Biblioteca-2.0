<!--Inclusão de dados-->
<!-- Include do menu -->
<?php
        include_once "../menus/menu.php";#referente aos menu lateral e vertical
    ?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Livros - ZB LIBRARY</title>
    
    <link rel="stylesheet" href="css/livro.css"><!--Folha CSS do Livro-->

    <!--Favicon-->
    <link rel="icon" type="image/png" sizes="16x16" href="../imagem/favicon.ico">

    <!--Fontes do Livro-->
    <link href="https://fonts.googleapis.com/css2?family=Nunito&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
</head>
<body onkeyup="fechare(event)">

        <?php
            include_once "../menu2/menu2.php";#referente ao sub-menu das páginas
            include_once "../instrucoes/instrucoes.php";#Instruções referentes ao cadastramento de um novo livro
        ?>        

        <!--Nessa div contém o formulário para o cadastramento de um novo livro-->
        <div class="cadastro">
            <!--Título do formulário-->
            <h3>Novo Livro</h3>
            <!--Formulário de cadastramento-->
            <form action="#" method="post">
                <h4><i class="fas fa-clipboard-list"></i> Informações Básica</h4>
                <hr>
                <div class="c1">
                    <label for="titulo">Título</label><br>
                    <input type="text" name="titulo" id="titulo" required placeholder="Ex:. Harry Potter">
                </div>
                <div class="c1">
                    <label for="autor">Autor</label><br>
                    <input type="text" name="autor" id="autor" required placeholder="Ex:. J. K. Rowling">
                </div>
                <div class="c1">
                    <label for="exemplar">Exemplares</label><br>
                    <input type="number" name="exemplar" min="1" id="exemplar" required placeholder="Ex:. 5">
                </div>
                <div class="c1">
                    <label for="cat">Categoria</label><br>
                    <select name="cat">
                        <optgroup label="Livros didáticos">
                            <option value="Artes">Artes</option>
                            <option value="Biologia">Biologia</option>
                            <option value="Espanhol">Espanhol</option>
                            <option value="Filosofia">Filosofia</option>
                            <option value="Fisíca">Fisíca</option>
                            <option value="Geografia">Geografia</option>
                            <option value="História">História</option>
                            <option value="Inglês">Inglês</option>
                            <option value="Matemática">Matemática</option>
                            <option value="Português">Português</option>
                            <option value="Química">Química</option>
                            <option value="Sociologia">Sociologia</option>
                        </optgroup>
                        <optgroup label="Cursos técnicos">
                            <option value="Administração/Financas">Administração/Finanças</option>
                            <option value="Agronegócio">Agronegócio</option>
                            <option value="Edificações/Mineração">Edificações/Mineração</option>
                            <option value="Informática/Redes de computadores">Informática/Redes de computadores</option>		
                        </optgroup>
                        <optgroup label="Material do professor">
                            <option value="Círculo de leitura">Círculo de leitura</option>
                            <option value="Livro do professor">Livro do professor</option>
                            <option value="Material redação">Material redação</option>
                            <option value="Material ENEM">Material ENEM</option>
                        </optgroup>
                        <optgroup label="Dicionários">
                            <option value="Língua Espanhola">Língua Espanhola</option>
                            <option value="Língua Francesa">Língua Francesa</option>
                            <option value="Língua Inglesa">Língua Inglesa</option>
                            <option value="Língua Portuguesa">Língua Portuguesa</option>
                        </optgroup>
                        <optgroup label="Literatura">
                            <option value="Contos / Crônicas">Contos / Crônicas</option>
                            <option value="Cordel">Cordel</option>
                            <option value="HQs / Humor"> HQs / Humor</option>
                            <option value="Infanto-juvenil">Infanto-juvenil</option>
                            <option value="Inglesa">Inglesa</option>
                            <option value="Linguagens / Literatura">Linguagens / Literatura</option>
                        </optgroup>
                        <optgroup label="Romance / Poema">
                            <option value="Ficção">Ficção</option>
                            <option value="Obras clássicas">Obras clássicas</option>
                            <option value="Obras contemporâneas">Obras contemporâneas</option>
                            <option value="Poemas / Poesias">Poemas / Poesias</option>
                        </optgroup>
                        <optgroup label="Ciências Humana / Social / Natureza">
                            <option value="Ciências da natureza">Ciências da natureza</option>
                            <option value="Geografia">Geografia</option>
                            <option value="História">História</option>
                            <option value="Sociologia / Filosofia">Sociologia / Filosofia</option>
                        </optgroup>
                        <optgroup label="Outros">
                            <option value="Biografias">Biografias</option>
                            <option value="Desenvolvimento pessoal">Desenvolvimento pessoal</option>
                            <option value="Direito">Direito</option>
                            <option value="Educação">Educação</option>
                            <option value="Enciclopédia">Enciclopédia</option>
                            <option value="Livro em braille">Livro em braille</option>
                            <option value="Maiores de 18 anos">Maiores de 18 anos</option>
                            <option value="Religiosos">Religiosos</option>
                            <option value="Revistas">Revistas</option>
                            <option value="Teatro">Teatro</option>
                        </optgroup>
                    </select>
                </div>
                <h4 class="t2"><i class="fas fa-clipboard-list"></i>Informações Complementares</h4>
                <hr>
                <div class="c1">
                    <label for="upload">Upload da capa <span>(opcional)</span></label><br>
                    <input type="file" name="upload" id="upload" accept="image/*" onchange="loadFile()">
                    <br><img id="visualiza" width="120px">
                </div>
                <div class="c1">
                <label for="descricao">Descrição <span>(opcional)</span></label><br>
                    <textarea name="descricao" id="descricao" rows="10" placeholder="FAÇA UMA DESCRIÇÃO DO LIVRO..."></textarea>
                </div>
                <button type="submit" class="btn"><i class="fas fa-upload"></i> CADASTRAR LIVRO </button>
            </form>
        </div>

    </section> 
</body>
</html>
<!--Javascript utilizado para nomear a página em que o usuário se encontra no site-->
    <script src="../menus/js/titulo.js"></script>
<!--Adicionando texto e efeitos no subtitulos-->
    <script src="../menu2/js/adicionarclasse.js"></script>
<!--Script utilizado para relata as instruções da página-->
    <script src="../instrucoes/js/instrucoes.js"></script>
<!--Coloca Imagem da capa para pré-visualização-->
    <script src="js/uploadImage.js"></script>
<!--coloca foco no primeiro elemento do formulário-->
    <script src="../emprestimo/js/foco.js"></script>
