function onAction() {
    getElement()
}

function getElement(){
    var btn = document.getElementsByClassName('choose');
    var leght = btn.length;
    for(var i = 0; i < leght; i++)
    {
        btn[i].addEventListener("click", function(event){
            var item = event.target
            item.parentElement.parentElement.remove()
        })
    }
}