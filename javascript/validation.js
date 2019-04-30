function validateName(nameId)
{
	//xxx-xxx-xxxx
	if(/^(?=.*\d)(?=.*[a-zA-Z])\w{4,}/.test(nameId.value))
		return true;
	else
		return false;
}

function validateNameMsg(nameId)
{
	errorNameMsg=document.getElementById('errorNameMsg');
	if(validateName(nameId))
	{
		errorNameMsg.innerHTML="Valid password";
		errorNameMsg.className="text-primary";
	}
	else
	{
		errorNameMsg.innerHTML="Invalid password. Must be characters and numbers and 5 length.";
		errorNameMsg.className="text-danger";
	}
}