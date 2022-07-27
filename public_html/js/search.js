document.addEventListener("keyup", e => {

    if (e.target.matches("#buscador")) {

        document.querySelectorAll(".buscar").forEach(pastel => {
            pastel.textContent.toLowerCase().includes(e.target.value.toLowerCase())
                    ? pastel.classList.remove("filtro")
                    : pastel.classList.add("filtro")
        })

    }

})