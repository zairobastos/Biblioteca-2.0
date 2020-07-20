<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - SGB</title>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/login.css">
</head>
<body>
    <section>
        <div class="image">
            <img src="Imagens/undraw_mobile_login_ikmv.svg" alt="" srcset="">
        </div>
        <div class="logar">
            <form action="#" method="post" autocomplete="off">
                <img src="Imagens/undraw_female_avatar_w3jk.svg" alt="" srcset="">
                <h2>LOGIN - SGB</h2>
                <div class="input-div um">
                    <div class="i">
                        <i class="fas fa-user"></i>
                    </div>
                    <div class="Usuario">
                        <label for="usu">Usuário</label>
                        <input type="text" id="usu" class="input" required autocomplete="offi" >
                    </div>
                </div>
                <div class="input-div dois">
                    <div class="i">
                        <i class="fas fa-lock"></i>
                    </div>
                    <div class="Senha">
                        <label for="senha">Senha</label>
                        <input type="password" name="senha" id="senha" class="input" required>
                    </div>
                </div>
                <a href="">Esqueceu a senha?</a>
                <input type="submit" value="Entrar" class="btn" onclick="verificar()"><i class='fas fa-sign-in-alt'></i>
            </form>
        </div>
    </section>
    <script src="js/main.js"></script>
</body>
</html>