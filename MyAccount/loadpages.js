function loadPage(page)
{
	if(page == "dashboard")
	{
		parent.frames[1].location = 'overview.php';
	}
	else if(page == 'orders')
	{
		parent.frames[1].location = 'orders.php';
	}	
	else if(page == 'settings')
	{
		parent.frames[1].location = 'settings.php';
	}
	else if(page == 'logout')
	{
		if(confirm("Do you want to logout from your account ?"));
		{
			window.location.href = "../Login&Signup/logout.php";
		}
	}
}