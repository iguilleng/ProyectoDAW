function enviar_datos_ajax(){
  var n=document.getElementById("nick").value
  var p=document.getElementById("password").value

  var url="validacionUsuario.php";

  $.ajax({

      type:"post",
      url:url,
      data:{nick:n,password:p},
      success:function(datos){
        $("#detalles").html(datos);
      }
    }
  )
}