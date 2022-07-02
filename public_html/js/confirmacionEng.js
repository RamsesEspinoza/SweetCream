function confirmar(e){
    if (confirm("Are you sure you want to clean your cart?")){
        return true;
    }else{
        e.preventDefault();
    }
}
let linkDelete = document.querySelectorAll(".cart_delete");

for(var i = 0; i < linkDelete.length; i++){
    linkDelete[i].addEventListener('click', confirmar);
}