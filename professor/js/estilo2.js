let p1 = document.querySelector("label#l1")
let p2 = document.querySelector("label#l2")
let p3 = document.querySelector("label#l3")
let p4 = document.querySelector("label#l4")
let p5 = document.querySelector("label#l5")
var c1 = document.querySelectorAll(".c2")


function f1(){
    remove()
    p1.classList.add("cor")
}
function f2(){
    remove()
    p2.classList.add("cor")
}
function f3(){
    remove()
    p3.classList.add("cor")
}

function f4(){
    p5.classList.remove("cor")
    p4.classList.add("cor")
    c1[0].style.display="block"
    c1[1].style.display="block"
}
function f5(){
    p4.classList.remove("cor")
    p5.classList.add("cor")
    c1[0].style.display="none"
    c1[1].style.display="none"
}
function remove(){
    p1.classList.remove("cor")
    p2.classList.remove("cor")
    p3.classList.remove("cor")
}