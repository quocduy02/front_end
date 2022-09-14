var check = document.getElementsByClassName('choose');
var changepr = document.getElementsByClassName("pri")
changepr[0].innerHTML=(check.length) * 199000
changepr[1].innerHTML=(check.length) * 199000
function onAction() {
    getElement()
    
    setPrice();
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
    document.getElementsByClassName("pri")[0]=(btn.length-1) * 199000
    document.getElementsByClassName("pri")[1]=(btn.length-1) * 199000
}
function setPrice(){
    var getItem = document.getElementsByClassName('choose');
    var price = (getItem.length-1) * 199000
    var changep = document.getElementsByClassName("pri")
    //console.log(changep[0].innerHTML)
    changep[0].innerHTML = price+""
    changep[1].innerHTML = price+""
}

function search_cart(){
    var arrrayPro = document.getElementsByClassName("text-truncate")
    var getKey = document.getElementById("wv").value;
    //console.log(arrrayPro[1].innerHTML)
    //text-truncate
    var width = arrrayPro.length
    string1 = getKey.toUpperCase()
    for(var i = 0; i < width; i++){
        string2 = arrrayPro[i].innerHTML.toUpperCase()
        if(string2.includes(string1)){
            arrrayPro[i].parentElement.parentElement.parentElement.style.display = 'block'
        }
        else{
            arrrayPro[i].parentElement.parentElement.parentElement.style.display = 'none'
        }
    }
}
