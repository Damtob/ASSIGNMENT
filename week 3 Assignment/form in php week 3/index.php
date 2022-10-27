<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>form</title>
</head>
<body>
<h1>Register</h1>
    <p>Please fill in this form to create an account.</p>
    <hr>
   
    <form method="post" action="user_data.php">
        
            <label for="fname"><b>First Name:</b></label>
            <input type="text" placeholder="Enter First Name" name="FirstName" id="FirstName" required><br>
            
      <label for="email"><b>Email</b></label>
      <input type="text" placeholder="Enter Email" name="email" id="email" required><br>
      <label for="dateofbirth"><b>Date of Birth:</b></label></label>
    <input type="date" id="birthday" name="dateofbirth"><br><br>
      
      <b>Gender</b>
<label class="container">Male
  <input type="checkbox" checked="checked">
  <span class="checkmark"></span>
</label>
<label class="container">Female
    <input type="checkbox" checked="checked">
    <span class="checkmark"></span>
  </label><br><br>
  
    
      <b>Country:</b>
  <div class="custom-select" style="width:200px;">
   <select>
    <option value="0">country:</option>
    <option value="1">Afghanistan</option>
    <option value="2">Botswana</option>
    <option value="3">England</option>
    <option value="4">Finland</option>
    <option value="5">Gambia</option>
    <option value="6">Japan</option>
    <option value="7">Madagaster</option>
    <option value="8">Nigeria</option>
    <option value="9">Russia</option>
    <option value="10">Ukraine</option>
    <option value="11">Venesuala</option>
    <option value="12">Zimbabwe</option>
  </select>
</div>

      <button type="submit"><a href="./login.html"></a>Submit</button>
      <?php
      print_r($_POST['name']);   
      ?>
</body>
</html>