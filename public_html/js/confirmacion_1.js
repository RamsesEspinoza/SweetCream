function mostrar() {
    Swal.fire({
        title: '¿Seguro qué deseas eliminar tu carrito?',
        text: "No serás capaz de recuperarlo",
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#00BB2B',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Si, borralo'
    }).then((result) => {
        if (result.isConfirmed) {
           
            location.href = "./eliminarPastel_1.php";
        }
    })
}
function addcart(){
    location.href = "./addPersonalizado.php";
}