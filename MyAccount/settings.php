<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Settings</title>
	<link rel="stylesheet" type="text/css" href="settings_style.css">
	
</head>
<body>
	<?php
	include("config.php");
	//get user id from config.php
	$cus_id = $userid;

	//---------------------- create sql commands ----------------------
	
	//sql command for get user data
	$sq1 = "select * from customer where email = '$cus_id'";
	
	//---------------------- create sql commands ----------------------

	$sql_q = $sq1;
	$result = $con->query($sql_q);

	while($row = $result->fetch_assoc()) 
	{	
		$first_name = $row['firstname'];
		$last_name = $row['lastname'];
		$email = $row['email'];
		$password = $row['password'];
		$house_no = $row['houseno'];
		$street_name = $row['streetname'];
		$district = $row['district'];
		$city = $row['city'];
		$mobile_no = $row['mobileno'];

	}
	if(isset($_POST['submit']))
	{
		$updated_first_name = $_POST['first_name'];
		$updated_last_name = $_POST['last_name'];
		$updated_user_email = $_POST['user_email'];
		$updated_house_number = $_POST['house_number'];
		$updated_st_name = $_POST['st_name'];
		$updated_district = $_POST['district'];
		$updated_city = $_POST['city'];
		$updated_mobile_no = $_POST['mobile_no'];

		$user_entered_password = $_POST['current_password'];
		$user_entered_new_password = $_POST['new_password'];
		$user_entered_new_password_confirm = $_POST['confirm_password'];

		//---------------------- create sql commands ----------------------

		//sql command for update user details (with password)
		$sq2 = "update customer set firstname = '$updated_first_name',lastname = '$updated_last_name',email = '$updated_user_email',houseno = '$updated_house_number',streetname = '$updated_st_name',district = '$updated_district',city = '$updated_city',mobileno = '$updated_mobile_no', password='$user_entered_new_password' where email = '$cus_id' ";

		//sql command for update user details (without the password)
		$sq3 = "update customer set firstname = '$updated_first_name',lastname = '$updated_last_name',email = '$updated_user_email',houseno = '$updated_house_number',streetname = '$updated_st_name',district = '$updated_district',city = '$updated_city',mobileno = '$updated_mobile_no' where email = '$cus_id' ";

		//---------------------- create sql commands ----------------------

		function error_msg($msg)
		{
			echo "<p style="."color:red;background-color:white;font-size:18px;".">* $msg</p>";
		}
		if(strlen($updated_first_name) == 0)
		{
			error_msg("First name cannot be empty !!");
		}
		else if(strlen($updated_last_name) == 0)
		{
			error_msg("Last name cannot be empty");
		}
		else if(strlen($updated_user_email) == 0)
		{
			error_msg("Email cannot be empty");
		}
		else if(strlen($updated_house_number) == 0)
		{
			error_msg("House number cannot be empty");
		}
		else if(strlen($updated_st_name) == 0)
		{
			error_msg("Street name cannot be empty");
		}
		else if(strlen($updated_city) == 0)
		{
			error_msg("City cannot be empty");
		}
		else if(strlen($updated_mobile_no) == 0)
		{
			error_msg("Mobile Number cannot be empty");
		}
		else
		{
			if(strlen($user_entered_password) != 0)
			{
				if($user_entered_password == $password) 
				{	
					if(strlen($user_entered_new_password) != 0)
					{
						if($user_entered_new_password == $user_entered_new_password_confirm)
						{
							$sql_q = $sq2;
						}
						else
						{	error_msg("New password and confirm password not match !!");
						}
					}
					else
					{	error_msg("Please enter your new password !!");
					}
				}
				else
				{	error_msg("Wrong password !!");
				}
			}
			else
			{
				$sql_q = $sq3;
			}
			if ($con->query($sql_q) === TRUE) 
			{
				echo "<p style="."color:green;background-color:white;font-size:18px;".">* Account Details Updated successfully !! </p>";
			}
			else
			{	error_msg("Something went wrong please try again !!");
			}
		}
	}
	$con->close();
	?>
<div class="main_settings">
	<h1 class="settings_title">Settings</h1>
	<div class="user_settings">
		<form method="POST" action="#" name="update_details">
		<table class="user_basic_info">
			<tr>
				<td>
					First Name <br><input type="text" name="first_name" id="first_name" value="<?php echo $first_name; ?>">
				</td>
				<td>
					Last Name <br><input type="text" name="last_name" id="last_name" value="<?php echo $last_name; ?>">
				</td>
			</tr>
			<tr>
				<td>
					Email <br><input type="email" name="user_email" id="email" value="<?php echo $email; ?>">
				</td>
			</tr>
			<tr>
				<td>
					House No <br><input type="text" name="house_number" id="house_no" value="<?php echo $house_no; ?>">
				</td>
				<td>
					Street Name <br><input type="text" name="st_name" id="st_name" value="<?php echo $street_name; ?>">
				</td>
			</tr>
			<tr>
				<td>
					District <br>
					<select id="District" name="district">
						<?php echo "<option selected>$district</option>";
						?>
						<option>Colombo</option>
						<option>Gampaha</option>
						<option>Kalutara</option>
						<option>Kandy</option>
						<option>Matale</option>
						<option>Nuwara Eliya</option>
						<option>Galle</option>
						<option>Matara</option>
						<option>Hambantota</option>
						<option>Jaffna</option>
						<option>Kilinochchi</option>
						<option>Mannar</option>
						<option>Vavuniya</option>
						<option>Mullaitivu</option>
						<option>Batticaloa</option>
						<option>Ampara</option>
						<option>Trincomalee</option>
						<option>Kurunegala</option>
						<option>Puttalam</option>
						<option>Anuradhapura</option>
						<option>Polonnaruwa</option>
						<option>Badulla</option>
						<option>Moneragala</option>
						<option>Ratnapura</option>
						<option>Kegalle</option>

					</select>
				</td>
				<td>
					City  <br> <input type="text" name="city" id="City" value="<?php echo $city ?>">
				</td>
			</tr>
			<tr>
				<td>
					Mobile No <br>
					<input type="text" name="mobile_no" id="mobile_no" value="<?php echo $mobile_no; ?>">
				</td>
			</tr>
		</table>
		<h2 style="font-size: 30px;">Password change</h2>
		<table class="user_password_change">
			<tr>
				<td>
					Current password (leave blank to leave unchanged) <br>
					<input type="password" name="current_password" id="current_password" name="current_pass">
				</td>
			</tr>
			<tr>
				<td>
					New password (leave blank to leave unchanged) <br>
					<input type="password" name="new_password" id="new_password">
				</td>
			</tr>
			<tr>
				<td>
					Confirm new password <br>
					<input type="password" name="confirm_password" id="confirm_password">
				</td>
			</tr>
		</table>
		<br>
		<input type="submit" name="submit" id="btn_save_changes" value="Save Changes">
		</form>
	</div>
</div>
</body>
</html>