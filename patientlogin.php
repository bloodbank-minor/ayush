<html>
<head><!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
  
	<!-- Bootstrap CSS -->
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
	
<style>
	input,select{
		border-radius: 10px;
		border-color: aquamarine;
	}
	input[type="submit"]:hover
	{
		color: rgb(243, 243, 245);
	}
	input[type=reset]:hover {
 		color: #f7f5f3;
}

	
</style>
</head>
<body  align="center" style="background-image:url('login_bg.jpg'); background-repeat:no-repeat; 
background-size:100% 100%;">
<?php

include 'navbar.php';

?>
<form method-"post">
		<h1 style="opacity:0.6; color: rgb(117, 46, 184); font-family: cursive;" align="center">Patient Information</h1>
	<table  width="400" border="0" cellpadding="20" align="center" style="opacity:1; border-spacing: 1px ; padding: 2px ;font-family: Georgia, 'Times New Roman', Times, serif; color: darkred;" >

	<tr>
		<td>Full Name</td>
		<td> <input type="text" name="pname"/> </td>
	</tr>
	<tr>
		<td>Gender</td>
			<td><input type="radio" name="gender"/>Male<input type="radio" name="gender"/>female</td>
	</tr>
	<tr>
		<td>Date of Birth</td>
		<td><input type="date" name="dob"/>
		</tr>
	
	<tr>
		<td>Aadhar card no.</td>
		<td><input type="number" name="aadhar"/></td>
	</tr>
	<tr>
		<td>Mobile no.</td>
		<td> <input type="number" name="mno"/></td>
	</tr>
	<tr>
		<td>Email</td>
		<td> <input type="text" name="email"/></td>
	</tr>
	<tr>
		<td>State</td>
		<td> <input type="text" name="state"/> </td>
	</tr>
	<tr>
		<td>district</td>
				<td> <input type="text" name="district"/> </td>
	</tr>
	<tr>
		<td>city</td>
				<td> <input type="text" name="city"/> </td>
	</tr>
	<tr>
		<td> Last date of Donation </td>
		<td> <input type="date" name="last"/></td>
	</tr>
	<tr>
		<td> Blood Group </td>
		<td>
						<select name="bgroup">
						<option>select</option>
						<option>A+</option>
						<option>B+</option>
						<option>O+</option>
						<option>A-</option>
						<option>B-</option>
						<option>O-</option>
						<option>AB+</option>
						<option>AB-</option>
						</td>
	</tr>
	<tr>
		<td>Disease</td>
		<td><input type="text" name="disease"/></td>
	</tr>
	<tr>
					<td align='center'>
					<input type="submit" name="register" value="register" style="background-color:rgb(116, 201, 116); font-size: larger;"  >
					</td>
			
	
					<td align='center'>
					<input type="reset" name="clear" value="reset" style="background-color:rgb(207, 74, 74); font-size: larger; "  >
					</td>
				</tr>
</table>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

</body>
</html>