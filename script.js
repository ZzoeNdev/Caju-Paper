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

const imgs = document.getElementById('img');
    const img = document.querySelectorAll('#img img');
    let idx = 0;

    function carrossel() {
      idx++;
      if (idx >= img.length) {
        idx = 0;
      }
      imgs.style.transform = `translateX(${-idx * 100}vw)`;
    }

    setInterval(carrossel, 3500);