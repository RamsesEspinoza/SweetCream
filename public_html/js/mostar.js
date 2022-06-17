
//Complementos

//fresa
if (document.getElementById("btnfresas"))
{
    switchFresa = document.getElementById("btnfresas");
    const img = document.getElementById("fresas")
    switchFresa.onclick = () => {

        switchFresa.classList.toggle('active')


        if (switchFresa.className == 'active')
        {
            img.style.visibility = "visible";
        } else {
            
            
            img.style.visibility = "hidden";
        }

    }



}

//uvas

if (document.getElementById("btnUvas"))
{
    switchUva = document.getElementById("btnUvas");
    const img = document.getElementById("uvas")
    switchUva.onclick = () => {

        switchUva.classList.toggle('active')


       if (switchUva.className == 'active')
        {
            img.style.visibility = "visible";
        } else {
            
            
            img.style.visibility = "hidden";
            
        }

    }



}


//Frambuesas

if (document.getElementById("btnFram"))
{
    switchFram = document.getElementById("btnFram");
    const img = document.getElementById("fram") //id imagen
    switchFram.onclick = () => {

        switchFram.classList.toggle('active')


        if (switchFram.className == 'active')
        {
            img.style.visibility = "visible";
        } else {
            
            
            img.style.visibility = "hidden";

        }

    }



}







//Fin Complementos


function mostrarFresas(input)
{










    if (input.value == "Ocultar")
    {

        input.value = "Mostar";
    } else {

        input.value = "Ocultar";
        input.class = "btn btn-lg active btn-secondary";
    }

}
