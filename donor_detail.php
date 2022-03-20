
<!doctype html>

<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

<style>
select, input[type=text], input[type=number]{
 width: 500px;
 padding: 12px 20px;
 margin: 8px 0;
 display: inline-block;
 border: 1px solid #ccc;
 border-radius: 4px;
 box-sizing: border-box;
}

label
{
  color:white;
  font-size:20px;
}
input[type=submit]{
 width: 100%;
 background-color: #4CAF50;
 color: white;
 padding: 14px 20px;
 margin: 8px 0;
 border: none;
 border-radius: 4px;
 cursor: pointer;
}
input[type=reset] {
 width: 100%;
 background-color: #f33607;
 color: white;
 padding: 14px 20px;
 margin: 8px 0;
 border: none;
 border-radius: 4px;
 cursor: pointer;
}

input[type=submit]:hover {
 background-color: #45a049;
}
input[type=reset]:hover {
 background-color: #f87b07;
}

</style>
</head>
<body> <?php

  include 'navbar.php';

  ?>
  
<div align="center" style=" background-image:url('blood.jpg');border-radius: 5px;
 
 padding: 20px;background-size:100% 100%;">
<h1 style="color:white">Fill donor details</h1>
<div>
  <form action="connection_signup.php" method="post">
  <table style="width: 500px;">
  <tr> <td>
  <label for="fname">First Name</label>
   <input type="text" id="fname" name="firstname" placeholder="Your name..">
  </td><td>
 
  <label for="lname">Last Name</label>
   <input type="text" id="lname" name="lastname" placeholder="Your last name..">

  </td></tr>
  <tr><td>
  
  <label for="age">Age</label>
   <input type="number" id="age" name="age" placeholder="Your age" min="18">
  </td><td>
   <label for="aadhar">Aadhar no.</label>
   <input maxlength="12" type="number" id="aadharno" name="aadharno" placeholder="Your Aadhar no..">
  </td></tr>
  <tr><td> 
   <label for="add">Adress</label>
   <input type="text" id="address" name="address" placeholder="Your address..">
  </td><td>
   <label for="city">City</label>
   <input type="text" id="city" name="city" placeholder="Your city..">
  
  </td></tr>
  <tr><td>
   <label for="pin">Pin Code</label>
   <input maxlength="6" type="number" id="upin" name="upin" placeholder="Your area pin code...">
  </td><td>

   <label for="bgroup">Blood Group</label>
   <select name="bgroup" id="bgroup">
       <option value="select" selected disabled>select blood group</option>
       <option value="A+">A+</option>
       <option value="A-">A-</option>
       <option value="B+">B-</option>
       <option value="B-">B-</option>
       <option value="AB+">AB+</option>
       <option value="AB-">AB-</option>
       <option value="o+">O+</option>
       <option value="O-">O-</option>
   </select>
   
  </td></tr>
  <tr> <td>
    <label for="phone">Phone Number</label>
     <input type="number" id="pnumber" name="pnumber" placeholder="Your Phone Number..">
    </td><td>
   
    <label for="disease">Any ongoing Illness</label>
     <input type="text" id="lname" name="disease" placeholder="Any Current Disease..">
  
    </td></tr>
  <tr><td>
   <input type="submit" name="submit" value="submit">
  </td><td>
    <input type="reset" value="reset">
  </td>
</tr>
   
</table>
</form>
</div></div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

</body>
</html>