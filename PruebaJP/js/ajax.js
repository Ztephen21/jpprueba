function notificar(resultado) {
    if (canParse(resultado) && resultado != 0 && resultado != 1) {
        resultado = JSON.parse(resultado);
        if (resultado.key == 1) {
            toastr.success(resultado.value, 'Éxito', {
                "progressBar": true,
                "closeButton": true,
                "positionClass": "toast-bottom-right"
            })
        } else {
            toastr.error(resultado.value, 'Error', {
                "progressBar": true,
                "closeButton": true,
                "positionClass": "toast-bottom-right"
            })
        }
    } else {
        if (resultado == 1) {
            toastr.success('Operación exitosa!', 'Éxito', {
                "progressBar": true,
                "closeButton": true,
                "positionClass": "toast-bottom-right"
            })
        } else {
            toastr.error('Ha ocurrido un error!', 'Error', {
                "progressBar": true,
                "closeButton": true,
                "positionClass": "toast-bottom-right"
            })
        }
    }
}

function enviarDatos(metodo, url, datos) {
    const ajax = new XMLHttpRequest();
    ajax.open(metodo, url, true);
    ajax.onreadystatechange = function () {
        if (ajax.readyState === 4) {
            console.log(ajax.responseText);
            notificar(ajax.responseText);
            
            
        }
    }
    // envio por post.
    ajax.send(datos);
}

function notificar(resultado) {
    if (canParse(resultado) && resultado != 0 && resultado != 1) {
        resultado = JSON.parse(resultado);
        if (resultado.key == 1) {
            
            toastr.success(resultado.value, 'Éxito', {
                "progressBar": true,
                "closeButton": true,
                "positionClass": "toast-bottom-right"
            })
           
        } else {
            toastr.error(resultado.value, 'Error', {
                "progressBar": true,
                "closeButton": true,
                "positionClass": "toast-bottom-right"
            })
        }
    } else {
        if (resultado == 1) {
            toastr.success('Operación exitosa!', 'Éxito', {
                "progressBar": true,
                "closeButton": true,
                "positionClass": "toast-bottom-right"
            })
        } else {
            toastr.error('Ha ocurrido un error!', 'Error', {
                "progressBar": true,
                "closeButton": true,
                "positionClass": "toast-bottom-right"
            })
        }
    }
}

function canParse(text) {
    let bandera = false;
    try {
        JSON.parse(text);
        bandera = true;
    } catch (E) {
        bandera = false;
    }
    return bandera;
}