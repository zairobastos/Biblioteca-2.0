//selecionando o href da página
var endereco = window.location.href;
//selecionando os elementos do sub-menu
let div1 = document.querySelector("div#d1");
let div2 = document.querySelector("div#d2");
let div3 = document.querySelector("div#d3");
//SELECIONANDO ELEMENTO DO LINK
let a1 = document.querySelector("#a1");
let a2 = document.querySelector("#a2");
let a3 = document.querySelector("#a3");

if (endereco== "http://localhost/BIBLIOTECA2.0/livro/livro.php") {
    //Texto do Menu
    div1.innerHTML=`<h4>Novo Livro</h4>`
    div2.innerHTML=`<h4>Acervo</h4>`

    //adcionando classes aos elementos
    div1.classList.add("p1")
    div2.classList.add("p2")
    div3.classList.add("p3")

    //link do sub-menu
    a1.setAttribute("href","http://localhost/BIBLIOTECA2.0/livro/livro.php")
    a2.setAttribute("href","http://localhost/BIBLIOTECA2.0/acervo/acervo.php")
}else if(endereco == "http://localhost/BIBLIOTECA2.0/acervo/acervo.php"){
    //Texto do Menu
    div1.innerHTML=`<h4>Novo Livro</h4>`
    div2.innerHTML=`<h4>Acervo</h4>`

    //adcionando classes aos elementos
    div1.classList.add("p2")
    div2.classList.add("p1")
    div3.classList.add("p3")

    //link do sub-menu
    a1.setAttribute("href","http://localhost/BIBLIOTECA2.0/livro/livro.php")
    a2.setAttribute("href","http://localhost/BIBLIOTECA2.0/acervo/acervo.php")
}else if(endereco == "http://localhost/BIBLIOTECA2.0/emprestimo/emprestimo.php"){
    //Texto do Menu
    div1.innerHTML=`<h4>Cadastro</h4>`
    div2.innerHTML=`<h4>Devolução Pendente</h4>`
    div3.innerHTML=`<h4>Reservados</h4>`

    //adcionando as classes aos elementos
    div1.classList.add("p1")
    div2.classList.add("p2")
    div3.classList.add("p2")

    //Link do sub-Menu
    a1.setAttribute("href","http://localhost/BIBLIOTECA2.0/emprestimo/emprestimo.php")
    a2.setAttribute("href","http://localhost/BIBLIOTECA2.0/devolucao/devolucao.php")
    a3.setAttribute("href","http://localhost/BIBLIOTECA2.0/reservado/reservado.php")
}else if(endereco == "http://localhost/BIBLIOTECA2.0/devolucao/devolucao.php"){
    //Texto do Menu
    div1.innerHTML=`<h4>Cadastro</h4>`
    div2.innerHTML=`<h4>Devolução Pendente</h4>`
    div3.innerHTML=`<h4>Reservados</h4>`

    //adcionando as classes aos elementos
    div1.classList.add("p2")
    div2.classList.add("p1")
    div3.classList.add("p2")

    //Link do sub-Menu
    a1.setAttribute("href","http://localhost/BIBLIOTECA2.0/emprestimo/emprestimo.php")
    a2.setAttribute("href","http://localhost/BIBLIOTECA2.0/devolucao/devolucao.php")
    a3.setAttribute("href","http://localhost/BIBLIOTECA2.0/reservado/reservado.php")
}else if(endereco=="http://localhost/BIBLIOTECA2.0/reservado/reservado.php"){
    //Texto do Menu
    div1.innerHTML=`<h4>Cadastro</h4>`
    div2.innerHTML=`<h4>Devolução Pendente</h4>`
    div3.innerHTML=`<h4>Reservados</h4>`

    //adcionando as classes aos elementos
    div1.classList.add("p2")
    div2.classList.add("p2")
    div3.classList.add("p1")

    //Link do sub-Menu
    a1.setAttribute("href","http://localhost/BIBLIOTECA2.0/emprestimo/emprestimo.php")
    a2.setAttribute("href","http://localhost/BIBLIOTECA2.0/devolucao/devolucao.php")
    a3.setAttribute("href","http://localhost/BIBLIOTECA2.0/reservado/reservado.php")
}else if (endereco == "http://localhost/BIBLIOTECA2.0/alunos/alunos.php") {
    //Texto do menu
    div1.innerHTML=`<h4>Novo Aluno</h4>`
    div2.innerHTML=`<h4>Novo Professor</h4>`
    div3.innerHTML=`<h4>Relatório</h4>`

    //adcionando classes aos elementos
    div1.classList.add("p1")
    div2.classList.add("p2")
    div3.classList.add("p2")

    //link do sub-Menu
    a1.setAttribute("href","http://localhost/BIBLIOTECA2.0/alunos/alunos.php")
    a2.setAttribute("href","http://localhost/BIBLIOTECA2.0/professor/professor.php")
}else if (endereco=="http://localhost/BIBLIOTECA2.0/professor/professor.php"){
    //Texto do menu
    div1.innerHTML=`<h4>Novo Aluno</h4>`
    div2.innerHTML=`<h4>Novo Professor</h4>`
    div3.innerHTML=`<h4>Relatório</h4>`

    //adcionando classes aos elementos
    div1.classList.add("p2")
    div2.classList.add("p1")
    div3.classList.add("p2")

    //link do sub-Menu
    a1.setAttribute("href","http://localhost/BIBLIOTECA2.0/alunos/alunos.php")
    a2.setAttribute("href","http://localhost/BIBLIOTECA2.0/professor/professor.php")
}else if(endereco == "http://localhost/BIBLIOTECA2.0/estatistica/estatistica.php"){
    //Texto do menu
    div1.innerHTML=`<h4>Mensal</h4>`
    div2.innerHTML=`<h4>Turmas</h4>`

    //adcionando classe aos elementos
    div1.classList.add("p1")
    div2.classList.add("p2")
    div3.classList.add("p3")

    //link do sub-Menu
    a1.setAttribute("href","http://localhost/BIBLIOTECA2.0/estatistica/estatistica.php")
    a2.setAttribute("href","http://localhost/BIBLIOTECA2.0/turmas/turmas.php")
}else if(endereco =="http://localhost/BIBLIOTECA2.0/turmas/turmas.php"){
    //Texto do menu
    div1.innerHTML=`<h4>Mensal</h4>`
    div2.innerHTML=`<h4>Turmas</h4>`

    //adcionando classe aos elementos
    div1.classList.add("p2")
    div2.classList.add("p1")
    div3.classList.add("p3")

    //link do sub-Menu
    a1.setAttribute("href","http://localhost/BIBLIOTECA2.0/estatistica/estatistica.php")
    a2.setAttribute("href","http://localhost/BIBLIOTECA2.0/turmas/turmas.php")
}