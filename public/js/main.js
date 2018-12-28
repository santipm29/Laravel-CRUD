$( document ).ready(function() {

    $("#btn_eliminar").click(function() {
        
    swal({
        title: "¿Estás seguro de eliminar al usuario?",
        text: "Al eliminarlo no se podra recuperar la información",
        icon: "warning",
        buttons: true,
        dangerMode: true,
      })
      .then((willDelete) => {
        if (willDelete) {
          swal("Usuario eliminado con exito", {
            icon: "success",
          });
        }
      });
       
      });    

});
