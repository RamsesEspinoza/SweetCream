function cargarCarrito(){    
    action = 'get';
    $.ajax({
        url: 'ajax.php',
        type: 'POST',
        dataType: 'JSON',
        data: {
            action
        },
        beforeSend: function () {
            //accion para mejorar presentacion
        }
    }).done(function (res){
        if(res.status === 200){
            setTimeout(()=>{
                
            },1500)
        }else{
            //Mensaje de accion correcta
            return true
        }
    }).fail(function (err){
        //Mensaje de no accesar error de datos
        return false
    }).always(function (){
        
    })
}cargarCarrito()

//
$('.add_to_cart').on('click',function (event){
    var id_producto = $(this).data('pastel_id'),
    cantidad = $(this).data('cantidad'),
    action = 'post'
    $.ajax({
        url: 'ajax.php',
        type: 'POST',
        dataType: 'JSON',
        cache: false,
        data: {
            action,id,cantidad
        },
        beforeSend: function () {
            //accion para mejorar presentacion
        }
    }).done(function (res){
        if(res.status === 201){
            
        return 
        }else{
            //Mensaje de accion correcta
            return 
        }
    }).fail(function (err){
            //Mensaje de no accesar error de datos
            return 
    }).always(function (){
        
    })
}) 