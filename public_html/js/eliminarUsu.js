function confirmar(e){
    if (confirm("¿Estas seguro que deseas eliminar a este usuario?")){
        return true;
    }else{
        e.preventDefault();
    }
}
let linkDelete = document.querySelectorAll(".btnEliminar");

for(var i = 0; i < linkDelete.length; i++){
    linkDelete[i].addEventListener('click', confirmar);
}