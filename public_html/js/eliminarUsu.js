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