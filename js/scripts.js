// Add Your Scripts here
// validando formularios con bootstrap y js
(function() {
    'use strict';
    window.addEventListener('load', function() {
        // Fetch all the forms we want to apply custom Bootstrap validation styles to
        var forms = document.getElementsByClassName('needs-validation');
        // Loop over them and prevent submission
        var validation = Array.prototype.filter.call(forms, function(form) {
            form.addEventListener('submit', function(event) {
                event.preventDefault();
                if (form.checkValidity() === false) {
                    event.stopPropagation();
                }else{
                    // leyendo los datos del formulario y almacenandolos en sus respectivas variables
                    let nombre = document.getElementById('nombre').value,
                        email = document.getElementById('id').value,
                        mensaje = document.getElementById('mensaje').value;
                    
                    // ejecutando ajax
                    let xhr = new XMLHttpRequest();

                    // agregando un header
                    xhr.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
                    // abriendo la conexions
                    xhr.open('POST', 'http://localhost/Spa%20Carolina/inc/enviar.php', true);

                    // revisando el estado
                    xhr.onload = function () {
                        if (xhr.status === 200) {
                            let respuesta = JSON.parse(xhr.responseText);

                            if (respuesta.respuesta) {
                                let div = document.createElement('div');
                                div.appendChild(document.createTextNode('Datos Enviados Correctamente'));
                                div.classList.add('alert', 'alert-succes', 'mt-4', 'text-center');
                                document.querySelector('form').appendChild(div);
                                setTimeout(() => {
                                    document.querySelector('.alert').remove();
                                }, 3000);
                            }
                        }
                    }

                    // enviando el request
                    xhr.send('nombre='+nombre+'&email='+email+'&mensaje='+mensaje);
                }
                form.classList.add('was-validated');
            }, false);
        });
    }, false);
})();