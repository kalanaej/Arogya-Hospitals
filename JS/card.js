function cardValidate(){
	var cardnumber = document.forms["card"]["creditcard"].value;
	var expm = document.forms["card"]["expmonth"].value;
	var expy = document.forms["card"]["expyear"].value;
    var cvv = document.forms["card"]["cvv"].value;
	
	if(empty(cardnumber,"Card Number") || empty(expm,"Expiery Month") || empty(expy,"Expiery Year") || empty(cvv,"CVV"))
        return true;
    else
        return false;
}
function empty(elemValue, field) {
    if(elemValue == "" || elemValue == null){
        alert("You cannot have "+field+" field empty");
        return true;
    }
    else
        return false;
}

