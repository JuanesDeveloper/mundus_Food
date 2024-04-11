function addcar(obj){

    let id = obj.children[0].innerHTML;
    console.log(id);
    window.location = 'index.php?Route=carrito&code='+id
}