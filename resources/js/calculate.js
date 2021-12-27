$(document).on('ready',constructor);

function constructor(){
    promedio();
}

function promedio(){
    $('#form').on('change','#nota1,#nota2,#nota3',function(){
        var numero1=parseInt($('#nota1').val());
        var numero2=parseInt($('#nota2').val());
        var numero3=parseInt($('#nota3').val());
        var promedio=(numero1+numero2+numero3)/3;
        
        $('#notaFinal').val(Math.round(promedio * 10) / 10);

        if(isNaN(numero1)){
            numero1=0;
        }

        if(isNaN(numero2)){
            numero2=0;
        }

        if(isNaN(numero3)){
            numero3=0;
        }
        
    })
}