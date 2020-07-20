var modal = document.getElementById("info")
function fecha() {
    modal.classList.remove('info')
    modal.style.display ='none'
    modal.style.visibility ='hidden'
    modal.style.zIndex='0'
}
function abre() {
    modal.classList.add('info')
    modal.style.display='flex'
    modal.style.visibility ='visible'
    modal.style.zIndex='10'
}