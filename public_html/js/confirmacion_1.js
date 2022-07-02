function confirmar(e){
    if (confirm("¿Estas seguro que deseas eliminar tu carrito?")){
        return true;
    }else{
        e.preventDefault();
    }
}
let linkDelete = document.querySelectorAll(".cart_delete");

for(var i = 0; i < linkDelete.length; i++){
    linkDelete[i].addEventListener('click', confirmar);
}