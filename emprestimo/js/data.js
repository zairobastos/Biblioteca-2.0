var datas = new Date()
var dia = datas.getDate();
var mes = datas.getMonth()+1;
var ano = datas.getFullYear();

document.getElementById("data").value = dia+" / 0"+mes+" / "+ano;