let instrucoes = document.querySelector("div.instrucoes")
var endereco = window.location.href;
if(endereco == "http://localhost/BIBLIOTECA2.0/livro/livro.php"){
    instrucoes.innerHTML+=`<p>1. Preencha todos os dados referentes ao livro que deseja cadastrar.</p>`
    instrucoes.innerHTML+=`<p>2. Quanto mais detalhado o cadastro, melhor e mais prático é o processo de cadastramento.</p>`
    instrucoes.innerHTML+=`<p>3. Você pode tirar uma foto da capa do livro, para uma melhor especificação e detalhamento.</p>`
    instrucoes.innerHTML+=`<p>4. Todos os campos são obrigatórios, exceto os que possuem "(opcional)".</p>`
    instrucoes.innerHTML+=`<p>5. Após o preenchimento dos dados basta clicar em "cadastrar o livro" e em seguida confirmar os dados que irão ser cadastrados.</p>`
    instrucoes.innerHTML+=`<p>6. Caso queira editar algum dado, você pode fazer isso clicando em editar, se porventura não tenha validado os dados, senão, basta acessar o acervo e clicar em editar.</p>`
}else if(endereco == "http://localhost/BIBLIOTECA2.0/emprestimo/emprestimo.php"){
    instrucoes.innerHTML+=`<p>1. Preencha todos os dados referentes ao aluno e ao livro que deseja emprestrar.</p>`
    instrucoes.innerHTML+=`<p>2. Quanto mais detalhado o cadastro, melhor e mais prático é o processo de cadastramento.</p>`
    instrucoes.innerHTML+=`<p>3. Todos os campos do formulário são obrigatório.</p>`
    instrucoes.innerHTML+=`<p>4. Após o preenchimento dos dados basta clicar em "cadastrar empréstimo" e em seguida confirmar os dados que irão ser cadastrados.</p>`
    instrucoes.innerHTML+=`<p>5. Caso queira editar algum dado, você pode fazer isso clicando em editar, se porventura não tenha validado os dados, senão, basta acessar o devolução pedente ou reservados e clicar em editar.</p>`    
}else if(endereco =="http://localhost/BIBLIOTECA2.0/alunos/alunos.php"){
    instrucoes.innerHTML+=`<p>1. Preencha todos os dados referentes ao aluno.</p>`
    instrucoes.innerHTML+=`<p>2. Quanto mais detalhado o cadastro, melhor e mais prático é o processo de cadastramento.</p>`
    instrucoes.innerHTML+=`<p>3. Todos os campos do formulário são obrigatório.</p>`
    instrucoes.innerHTML+=`<p>4. Após o preenchimento dos dados basta clicar em "cadastrar aluno" e em seguida confirmar os dados que irão ser cadastrados.</p>`
    instrucoes.innerHTML+=`<p>5. Caso queira editar algum dado, você pode fazer isso clicando em editar, se porventura não tenha validado os dados, senão, basta acessar o relatório, buscar pelo perfil do aluno e clicar em editar.</p>`
}else if(endereco=="http://localhost/BIBLIOTECA2.0/professor/professor.php"){
    instrucoes.innerHTML+=`<p>1. Preencha todos os dados referentes ao professor.</p>`
    instrucoes.innerHTML+=`<p>2. Quanto mais detalhado o cadastro, melhor e mais prático é o processo de cadastramento.</p>`
    instrucoes.innerHTML+=`<p>3. Todos os campos do formulário são obrigatórios, exceto os que possuem "(opcional)".</p>`
    instrucoes.innerHTML+=`<p>4. Após o preenchimento dos dados basta clicar em "cadastrar professor" e em seguida confirmar os dados que irão ser cadastrados.</p>`
    instrucoes.innerHTML+=`<p>5. Caso queira editar algum dado, você pode fazer isso clicando em editar, se porventura não tenha validado os dados, senão, basta acessar o relatório, buscar pelo perfil do professor e clicar em editar.</p>`
}