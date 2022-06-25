////Complementos
//
//fresa
if (document.getElementById("btnfresas"))
{
    switchFresa = document.getElementById("btnfresas");
    let img = document.getElementById("fresas");
    switchFresa.onclick = () => {

        switchFresa.classList.toggle('active');


        if (switchFresa.className === 'active')
        {
            img.style.visibility = "visible";
        } else {
            
            
            img.style.visibility = "hidden";
        }

    };



}

//uvas

if (document.getElementById("btnUvas"))
{
    switchUva = document.getElementById("btnUvas");
    let img = document.getElementById("uvas");
    switchUva.onclick = () => {

        switchUva.classList.toggle('active');


       if (switchUva.className === 'active')
        {
            img.style.visibility = "visible";
        } else {
            
            
            img.style.visibility = "hidden";
            
        }

    };
    


}


//Frambuesas

if (document.getElementById("btnFram"))
{
    switchFram = document.getElementById("btnFram");
   let img = document.getElementById("fram"); //id imagen
    switchFram.onclick = () => {

        switchFram.classList.toggle('active');


        if (switchFram.className === 'active')
        {
            img.style.visibility = "visible";
        } else {
            
            
            img.style.visibility = "hidden";

        }

    };



}