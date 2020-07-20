function loadFile() {
    var inputI = new FileReader();
    inputI.onload = function(){
        var visualiza = document.getElementById('visualiza');
        visualiza.src = inputI.result;
    };
    inputI.readAsDataURL(event.target.files[0]);
};