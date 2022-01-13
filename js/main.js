/*
 * mixed by marcex
 * version 11012022
 */
var url  = 'ajax/sendEmail.php';
var msg  = 'Completa este campo obligatorio';
var msg1 = 'Indique un email valido';
var msg2 = 'Selecciona un valor';
var data = '';
var form = '';

function sendFormHeader(){
    $("#form1").submit();
}

$("#form1").validate({
    rules: {
      'lname': {required: true, minlength:2}, 
      'fname': {required: true, minlength:2},
      'email': {required: true},
      'whatsapp': {required: true},
      'procedimiento': {required: true}
      },
    
    messages: {
      'lname':  msg,
      'fname': msg,
      'email': msg1,
      'whatsapp': msg,
      'procedimiento': msg2
    },
  
    submitHandler: function(form){ 
      $.ajax({
        type: "POST",
        url: url,
        data: $("#form1").serialize(),
        error: function(msj){
          alert("Ha ocurrido un error.");
          console.log(msj);
        }, 
        success: function(res) 
        {
          var data = JSON.parse(res);
  
          if(data['send'] == true)
          { 
            setTimeout(() => {
                location = "gracias.php";
            }, 200);
          } 
          else 
          {
  
            var msj = data['msj'];
            alert(msj);
          
          }
        }
      })//ajax
    }
})//validate


function sendFormFooter(){
    $("#form2").submit();
}

$("#form2").validate({
    rules: {
      'lname': {required: true, minlength:2}, 
      'fname': {required: true, minlength:2},
      'email': {required: true},
      'whatsapp': {required: true},
      'procedimiento': {required: true},
      'sucursales': {required: true}
      },
    
    messages: {
      'lname':  msg,
      'fname': msg,
      'email': msg1,
      'whatsapp': msg,
      'procedimiento': msg2,
      'sucursales': msg2
    },
  
    submitHandler: function(form){ 
      $.ajax({
        type: "POST",
        url: url,
        data: $("#form2").serialize(),
        error: function(msj){
          alert("Ha ocurrido un error.");
          console.log(msj);
        }, 
        success: function(res) 
        {
          var data = JSON.parse(res);
  
          if(data['send'] == true)
          { 
            setTimeout(() => {
                location = "gracias.php";
            }, 200);
          } 
          else 
          {
            $("#loader").fadeOut('slow');
  
            var msj = data['msj'];
            alert(msj);
          
          }
        }
      })//ajax
    }
})//validate



