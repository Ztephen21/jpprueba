$('document').ready(function() {


  $("#formObjeto").validate({
    rules:
    {
      code:{required:true,minlength:3,maxlength:49},
      name:{required:true,minlength:3,maxlength:49},
      price:{required:true,minlength:1},
      quantity:{required:true,minlength:1,digits:true}
    },
    messages:
    {
    code:{required:'El espacio es requerido.',minlength:'Nombre muy corto',maxlength:'nombre muy largo'},
    name:{required:'El espacio es requerido.',minlength:'Nombre muy corto',maxlength:'nombre muy largo'},
    price:{required:'El espacio es requerido.',number:'solo acepta numeros'},
    quantity:{required:'El espacio es requerido.',number:'solo acepta numeros'}

    },
    
  })
    
    
    $('#btnCancelar').click(function() {
      
        $("#formObjeto")[0].reset();
    });
   
    
    $('#btnGuardar').click(function() {

      var validator = $( "#formObjeto" ).validate();

    if(validator.form()){
      insertarObjeto();

    }else{
    return

    }
        
    
        
        
    });
 
});


function insertarObjeto() {
   // var form = document.getElementById("formObjeto");
  
    var fd = new FormData();
    fd.set("insertarObjeto", "1"); 
    fd.set("code", document.getElementById("code").value); 
    fd.set("name", document.getElementById("name").value); 
    fd.set("price", document.getElementById("price").value); 
    fd.set("quantity", document.getElementById("quantity").value); 
    new Response(fd).text().then(console.log)
    enviarDatos('POST', 'Bussines/ThingController.php', fd);
    $(document).ready(function() {
                
                    
      $('#btnCancelar').click();
      
  });
}