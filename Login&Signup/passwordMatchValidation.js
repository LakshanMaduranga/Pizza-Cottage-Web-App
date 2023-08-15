window.onload = function () 
{
	var txtPassword = document.getElementById("regPassword");
	var txtConfirmPassword = document.getElementById("confirmPassword");
	txtPassword.onchange = ConfirmPassword;
	txtConfirmPassword.onkeyup = ConfirmPassword;
	function ConfirmPassword() 
	{
		txtConfirmPassword.setCustomValidity("");
		if (txtPassword.value != txtConfirmPassword.value)
		{
			txtConfirmPassword.setCustomValidity("Passwords do not match.");
		}
	}
}