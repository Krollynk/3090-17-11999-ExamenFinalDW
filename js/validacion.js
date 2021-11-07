function validar(){
    var formu = document.querySelector('form');
    var codigo = parseInt(document.getElementById('carnet').value);
    var strnumero = codigo.toString();
    var sum = parseInt(strnumero[strnumero.length - 3]) + parseInt(strnumero[strnumero.length - 2]) + parseInt(strnumero[strnumero.length - 1]);
    console.log(sum);

    if(sum%2==0){
        alert('el numero es par');
        if(sum==10||sum==20){
            alert('el numero es: '+ sum);
            formu.setAttribute('action', './views/reg_medico.php');
        }else{
            alert('el numero es: ' + sum)
            formu.setAttribute('action', './views/reg_usuario.php');
        }
    }else{
        alert('el numero es impar');
        alert('el numero es: '+sum);
        formu.setAttribute('action', './views/reg_paciente.php');
    }
    var action = formu.getAttribute('action');
    console.log(action);
    document.formulario.submit();
}

function validar2(){
    var formu = document.querySelector('form');
    formu.setAttribute('action', '../controllers/enviar.php');
    var action = formu.getAttribute('action');
    console.log(action);
}

function validar4(){
    var formu = document.querySelector('form');
    formu.setAttribute('action', '../controllers/actualizar.php')
    var action = formu.getAttribute('action');
    console.log(action);
}

function paciente_val1(){
    var formu = document.querySelector('form');
    formu.setAttribute('action', '../controllers/paciente_enviar.php');
}

function paciente_val2(){
    var formu = document.querySelector('form');
    formu.setAttribute('action', '../controllers/paciente_actualizar.php');
}

function medico_val1(){
    var formu = document.querySelector('form');
    formu.setAttribute('action', '../controllers/medico_enviar.php');
}

function medico_val2(){
    var formu = document.querySelector('form');
    formu.setAttribute('action', '../controllers/medico_actualizar.php');
}