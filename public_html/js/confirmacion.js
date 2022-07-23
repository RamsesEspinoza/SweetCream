
function mostrarnt(id) {
    const swalWithBootstrapButtons = Swal.mixin({
        customClass: {
            confirmButton: 'btn btn-success',
            cancelButton: 'btn btn-danger'
        },
        buttonsStyling: false
    })

    swalWithBootstrapButtons.fire({
        title: '¿Seguro qué quieres eliminarlo?',
        text: "No serás capas de recuperarlo",
        icon: 'warning',
        showCancelButton: true,
        confirmButtonText: 'borralo!',
        cancelButtonText: 'cancelar!',
        reverseButtons: true

    }).then((result) => {
        if (result.isConfirmed) {
            location.href = "./eliminarPastel.php?id=" + id;
        } else if (
                result.dismiss === Swal.DismissReason.cancel
                ) {
            swalWithBootstrapButtons.fire(
                    'Cancelado',
                    'Tu post está a salvo :)',
                    '.'
                    )
        }
    })
}



function mostrar(id) {
    Swal.fire({
        title: '¿Seguro qué quieres eliminarlo?',
        text: "No serás capas de recuperarlo",
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#00BB2B',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Si, borralo'
    }).then((result) => {
        if (result.isConfirmed) {
           
            location.href = "./eliminarPastel.php?id=" + id;
        }
    })
}