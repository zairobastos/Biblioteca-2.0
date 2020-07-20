var endereco = window.location.href;
var nome = document.querySelector(".menor");
var nome2=""
if(endereco == "http://localhost/BIBLIOTECA2.0/livro/livro.php"){
    nome2 = `Livros <i class="fas fa-angle-right"></i> Novo Livro`;
}else if(endereco == "http://localhost/BIBLIOTECA2.0/acervo/acervo.php"){
    nome2 = `Livros <i class="fas fa-angle-right"></i> Acervo`;
} else if(endereco == "http://localhost/BIBLIOTECA2.0/home/home.php" || endereco == "http://localhost/BIBLIOTECA2.0/home/"){
    nome2 = "Home"; 
}else if(endereco == "http://localhost/BIBLIOTECA2.0/emprestimo/emprestimo.php"){
    nome2=`Empréstimo <i class="fas fa-angle-right"></i> Cadastro`
}else if(endereco=="http://localhost/BIBLIOTECA2.0/devolucao/devolucao.php"){
    nome2=`Empréstimo <i class="fas fa-angle-right"></i> Devolução Pendente`
}else if(endereco=="http://localhost/BIBLIOTECA2.0/reservado/reservado.php"){
    nome2=`Empréstimo <i class="fas fa-angle-right"></i> Reservados`
}else if(endereco == "http://localhost/BIBLIOTECA2.0/alunos/alunos.php"){
    nome2=`Usuários <i class="fas fa-angle-right"></i> Novo Aluno`
}else if(endereco == "http://localhost/BIBLIOTECA2.0/professor/professor.php"){
    nome2=`Usuários <i class="fas fa-angle-right"></i> Novo Professor`
}else if(endereco == "http://localhost/BIBLIOTECA2.0/estatistica/estatistica.php"){
    nome2=`Estatística <i class="fas fa-angle-right"></i> Mensal`
}else if(endereco == "http://localhost/BIBLIOTECA2.0/turmas/turmas.php"){
    nome2=`Estatística <i class="fas fa-angle-right"></i> Turmas`
}
nome.innerHTML=`${nome2}`