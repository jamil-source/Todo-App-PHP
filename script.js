let checkBox = document.querySelector("#checkBox");
function checkboxColor(result){
    if(result.checked){
        result.parentNode.parentNode.style.backgroundColor="blue";
        result.parentNode.parentNode.style.color="white";
        result.parentNode.parentNode.style.textDecoration="line-through";
    }else {
        result.parentNode.parentNode.style.backgroundColor="";
        result.parentNode.parentNode.style.color="";
        result.parentNode.parentNode.style.textDecoration="";

    }
}
