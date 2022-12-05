function sumar(){
    var y = parseInt(document.getElementById('valor2').value);
    count+=y;
    document.getElementById("countLabel").innerHTML = '$'+count;
}

function sumar2(){
    var y = parseInt(document.getElementById('valor3').value);
    count+=y;
    document.getElementById("countLabel").innerHTML = '$'+count;
}

function sumar3(){
    var y = parseInt(document.getElementById('valor4').value);
    count+=y;
    document.getElementById("countLabel").innerHTML = '$'+count;
}


let count = 0;