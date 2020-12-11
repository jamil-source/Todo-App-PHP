function validate(){
    var valid = false;

    if(document.getElementById("done").checked){
        valid = true;
    } else if(document.getElementById("not_done").checked) {
        valid= true;
    }

    if(!valid){
        alert("Status is not checked!");
        return false;
    }
    
}