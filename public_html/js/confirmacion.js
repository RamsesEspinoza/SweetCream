function mostrar(id) {
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
function mostrarnt(id) {
    Swal.fire({
  title: 'Are you sure?',
  text: "You won't be able to revert this!",
  icon: 'warning',
  showCancelButton: true,
  confirmButtonColor: '#3085d6',
  cancelButtonColor: '#d33',
  confirmButtonText: 'Yes, delete it!'
}).then((result) => {
  if (result.isConfirmed) {
    Swal.fire(
      'Deleted!',
      'Your file has been deleted.',
      'success'
    )
  }
})
}