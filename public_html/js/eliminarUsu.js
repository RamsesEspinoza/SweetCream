function mostrar(id) {
    Swal.fire({
        title: '¿Seguro qué quieres eliminarlo?',
        text: "No serás capaz de recuperarlo",
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#00BB2B',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Si, borralo'
    }).then((result) => {
        if (result.isConfirmed) {
           
            location.href = "./eliminarUsu.php?id=" + id;
        }
    })
}
function marcarCompletado(id) {
    Swal.fire({
        title: '¿Seguro qué quieres marcar como completado el pedido?',
        text: "Esta acción es irreversible",
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#00BB2B',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Si, marcar'
    }).then((result) => {
        if (result.isConfirmed) {
           
            location.href = "./marcarCompletado.php?id=" + id;
        }
    })
}
function eliminarPedido(id) {
    Swal.fire({
        title: '¿Seguro qué quieres eliminár el pedido?',
        text: "Esta acción es irreversible",
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#00BB2B',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Si, eliminar'
    }).then((result) => {
        if (result.isConfirmed) {
           
            location.href = "./eliminarPedido.php?id=" + id;
        }
    })
}