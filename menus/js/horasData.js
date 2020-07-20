let tempo = new Date()
let dataAtual = document.querySelector("p.data");

let dia = tempo.getDate();
let mes = tempo.getMonth()+1;
if (dia<10 && mes <10) {
    dataAtual.innerHTML=`0${dia}/0${mes}`
}else if(dia<10){
    dataAtual.innerHTML=`0${dia}/${mes}`
}else if(mes<10){
    dataAtual.innerHTML=`${dia}/0${mes}`
}else{
    dataAtual.innerHTML=`${dia}/${mes}`
}

function hora(){
    setInterval(horas,10)
}
function horas() {
    let tempo = new Date()
    let horaAtual = document.querySelector("p.hora");
    let hora = tempo.getHours()
    let min = tempo.getMinutes()
    let seg = tempo.getSeconds()
    if (hora<10 && min<10) {
        horaAtual.innerHTML=`0${hora}:0${min}`
    }else if(hora<10){
        horaAtual.innerHTML=`0${hora}:${min}`
    }else if(min<10){
        horaAtual.innerHTML=`${hora}:0${min}`
    }else{
        horaAtual.innerHTML=`${hora}:${min}`
    }
}