let p1 = document.querySelector("label#l1")
let p2 = document.querySelector("label#l2")
let p3 = document.querySelector("label#l3")

function f1(){
    remover()
    p1.classList.add("cor")
}
function f2(){
    remover()
    p2.classList.add("cor")
}
function f3(){
    remover()
    p3.classList.add("cor")
}
function remover(){
    p1.classList.remove("cor")
    p2.classList.remove("cor")
    p3.classList.remove("cor")
}