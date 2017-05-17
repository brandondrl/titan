$('#login').click(function(){

  // Traemos los datos de los inputs
  var user  = $('#user').val();
  var clave = $('#clave').val();

  // Envio de datos mediante Ajax
  $.ajax({
    method: 'POST',
    // Recuerda que la ruta se hace como si estuvieramos en el index y no en operaciones por esa razon no utilizamos ../ para ir a controller
    url: 'controller/loginController.php',
    // Recuerda el primer parametro es la variable de php y el segundo es el dato que enviamos
    data: {user_php: user, clave_php: clave},
    // Esta funcion se ejecuta antes de enviar la información al archivo indicado en el parametro url
    beforeSend: function(){
      // Mostramos el div con el id load mientras se espera una respuesta del servidor (el archivo solicitado en el parametro url)
      $('#load').show();
    },
    // el parametro res es la respuesta que da php mediante impresion de pantalla (echo)
    success: function(res){
      // Lo primero es ocultar el load, ya que recibimos la respuesta del servidor
      $('#load').hide();

      // Ahora validamos la respuesta de php, si es error_1 algun campo esta vacio de lo contrario todo salio bien y redireccionaremos a donde diga php
      if(res == 'error_1'){
        /*
        Para usar sweetalert es muy sencillo, has de cuenta que haces un alert
        solo que esta ves enviaras 3 parametros separados por comas, el primero
        es el titulo de la alerta, el segundo es la descripcion y el tercero es el tipo de alerta
        en el momento conozco tres tipos, entonces puedes variar entre success: Muestra animación de un check,
        warning: muestra icono de advertencia amarillo y error: muestra una animacion con una X muy chula :v
        */
        swal('Error', 'Por favor ingrese todos los campos', 'error');
      }else if(res == 'error_2'){
        // Recuerda que si no necesitas validar si es un email puedes eliminar el if de la linea 34
        swal('Error', 'Por favor ingrese un email valido', 'warning');
      }else if(res == 'error_3'){
        swal('Error', 'El usuario y contraseña que ingresaste es incorrecto', 'error');
      }else{
        // Redireccionamos a la página que diga corresponda el usuario
        window.location.href= res
      }

    }
  });

});

$('#registro').click(function(){

  // Traemos los datos de los inputs
  var nomb = $('#nombre').val();
  var user  = $('#usuario').val();
  var email = $('#correo').val();
  var pass = $('#clav').val();

  $.ajax({
    method: 'POST',
    // Recuerda que la ruta se hace como si estuvieramos en el index y no en operaciones por esa razon no utilizamos ../ para ir a controller
    url: 'controller/registroController.php',
    // Recuerda el primer parametro es la variable de php y el segundo es el dato que enviamos
    data: {name_php: nomb, user_php: user, email_php: email ,clave_php: pass},
    // Esta funcion se ejecuta antes de enviar la información al archivo indicado en el parametro url
    beforeSend: function(){
      // Mostramos el div con el id load mientras se espera una respuesta del servidor (el archivo solicitado en el parametro url)
      //$('#load').show();
         
          swal({
          title: "Registrando Usuario..",
          text: "",
          type: "info",
          showConfirmButton: false
        });
    },
    // el parametro res es la respuesta que da php mediante impresion de pantalla (echo)
    success: function(res){
      //$('#load').hide();

      if(res == 'error_1'){

        swal('Error', 'Por favor ingrese todos los campos', 'error');
      }else if(res == 'error_2'){
        // Recuerda que si no necesitas validar si es un email puedes eliminar el if de la linea 34
        swal('Error', 'Por favor ingrese un email valido', 'warning');
      }else if(res == 'error_3'){
        swal('Error', 'El usuario y contraseña que ingresaste es incorrecto', 'error');
      }else if(res == 'error_4'){
        swal('Error', 'El usuario ya existe:(, por favor ingrese otro nombre de usuario', 'error');
      }else{

        swal({
          title: "Usuario Registrado con éxito",
          text: "Este dialogo se cerrará automaticamente :)",
          type: "success",
          timer: 2000,
          showConfirmButton: false
        });

        setTimeout(function(){
          window.location.href= res
        },2000);
      }

    }
  });
  
});

 $('#registroCliente').click(function(){


  // Traemos los datos de los inputs
  var nomb = $('#nombreC').val();
  var ci  = $('#cedula').val();
  var dir = $('#direccion').val();
  var correo = $('#corr').val();
  var tlf = $('#telefono').val();
  var nombreEmpresa = $('#NombreE').val();
  var comentarios = $('#comentarios').val();

  $.ajax({
    method: 'POST',
    // Recuerda que la ruta se hace como si estuvieramos en el index y no en operaciones por esa razon no utilizamos ../ para ir a controller
    url: 'controller/registroClienteController.php',
    // Recuerda el primer parametro es la variable de php y el segundo es el dato que enviamos
    data: {name_php: nomb, ci_php: ci, dir_php: dir, correo_php: correo, tlf_php: tlf, nombE_php: nombreEmpresa, coment_php: comentarios},
    // Esta funcion se ejecuta antes de enviar la información al archivo indicado en el parametro url
    beforeSend: function(){
      // Mostramos el div con el id load mientras se espera una respuesta del servidor (el archivo solicitado en el parametro url)
      $('#load').show();
    },
    // el parametro res es la respuesta que da php mediante impresion de pantalla (echo)
    success: function(res){
      $('#load').hide();

      if(res == 'error_1'){

        swal('Error', 'Por favor ingrese todos los campos', 'error');
      }else if(res == 'error_2'){
        // Recuerda que si no necesitas validar si es un email puedes eliminar el if de la linea 34
        swal('Error', 'Por favor ingrese un email valido', 'warning');
      }else if(res == 'error_3'){
        swal('Error', 'El usuario y contraseña que ingresaste es incorrecto', 'error');
      }else if(res == 'error_4'){
        swal('Error', 'El usuario ya existe:(, por favor ingrese otro nombre de usuario', 'error');
      }else{
       swal("Cliente Registrado con éxito", "", "success");
       window.location.href= res        
      }

    }
  });


});


 $('#reporte-presupuesto').click(function(){

    var presu  = $('#autocode').val();
    var url = 'pedf.php';
 
    $.ajax({
    method: 'POST',
    url: url,
    data: {presupuesto: presu},
    success: function(output) {
        //window.location.href= url;  
    }
  });

});

 