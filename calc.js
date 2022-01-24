
function botao(num){
    var salvo = document.calc.visor.value;
    document.calc.visor.value = salvo + num;
}

function reset(){
    salvo = null;
}

function del(){
    
    salvo = document.calc.visor.value;
    salvo2 = salvo.substring(0, salvo.length -1);
    document.calc.visor.value = salvo2;
}

function calcule(){

    salvo = document.calc.visor.value;

    // easter egg
    if(salvo == '1+1'){
     
        document.calc.visor2.value = 'I was not made for this';
        document.calc.visor.value = 'sorry.. 2';

        window.alert("follow me on github: TiagoCostaSantos");
    }else{
        document.calc.visor2.value = salvo;
        resultado = eval(salvo);
        document.calc.visor.value = resultado;
    }

   
}