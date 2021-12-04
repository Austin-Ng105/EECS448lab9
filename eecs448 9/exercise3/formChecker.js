function test(user, pass){
    //check username a password        

    if(user.value == "name@domain.com" && pass.value == "123")
    {
        var test1 = document.querySelector('input[name="ship"]:checked').value;
        if(test1 == "shipFree" || test1 == "ship50" || test1 == "ship5")
        {
            alert("Pruchase Made");
        } else {
            alert("Chose a Shipping Option");
        }
    } else {
        alert("Username or Password does not match");
    }

}