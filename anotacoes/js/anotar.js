var fechar = document.getElementById('anotar')
function fecharAnotar(){
    fechar.style.width="0px"
}
function anotar(){
    fechar.style.width="340px"
    fechar.style.display="flex"
}

var fechare = function (e){
    if (e.keyCode==27) {
        fechar.style.width="0px"
    }
}
