function Add(){
    var input = document.getElementById('inpQtd');

    input.value = parseInt(input.value) + 1;
}

function Mnn(){
    var input = document.getElementById('inpQtd');

    input.value = parseInt(input.value) - 1;

    if (input.value <=0){
        input.value = 1;
    }
}