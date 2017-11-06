$(function() {
    
    var Ejercicio = {};
    
    (function(app){
        
        app.init = function() {            
            app.cargarDataTable();
            app.bindings();
        };
                   
        app.cargarDataTable = function() {
            //Configura a la tablaPersona para trabajar con el complemento DataTable
            $("#paises").contains() 
             $.ajax({
                url: 'backend/acciones.php?accion=buscarTodos',
                method: 'POST',
                dataType: 'json',
                data: data,
                success: function() {
                    //Si tiene exito, se esconde el modal y se actualiza el contenido la table
            var  a=  '<a class="pull-left editar" data-id_paises=" asjoifjasufoa'fasda
                            return a;
                        }
                    
          }  
        )};
        
    
        
        app.init();
        
    })(Ejercicio);
});

