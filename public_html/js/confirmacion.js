function confirmar(e){
    if (confirm("¿Estas seguro que deseas eliminar este articulo?")){
        return true;
    }else{
        e.preventDefault();
    }
}
let linkDelete = document.querySelectorAll(".cart_add");

for(var i = 0; i < linkDelete.length; i++){
    linkDelete[i].addEventListener('click', confirmar);
}