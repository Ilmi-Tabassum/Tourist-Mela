

<!DOCTYPE html>
<html>
<head>
     
     <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>TrustyTouristGuide Update</title>
  <link rel="stylesheet" type="text/css" href="css/style.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

  </head>
  <body>
<!-- navBar -->
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <a class="navbar-brand" href="home.php">TrustyTouristGuide</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav ml-auto">
      <li class="nav-item active">
        <a class="nav-link" href="home.php">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
      <a class="nav-link" href="about.php">About</a>
        
      </li>
      <li class="nav-item">
      <a class="nav-link" href="Services.php">Services</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="SignIn.php">SignIn</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="logout.php">LogOut</a>
     </li>
        </a>
        </a>
       
        </ul>



</form>
  </div>
</nav>
<div class="jumbotron">
<!-- Nmae -->
<h1>Update</h1>
  <p>Provide us your information for services</p>
  <div class ="container">
  <section class ="my-5">
  <div class="py-5">
    <h3 class ="text-center"> Update Information </h3>
</div> 
<div class ="w-50 m-auto">


<?php
if(isset($_POST['email']) == true &&  ($_POST['email']) == false){
$email = $_POST['email'];
if(filer_var( $email, FILTER_VALIDATE_EMAIL) ==true){
echo ' That is a valid email address';
}else{
echo' Not a valid Email';
}
}
?>

<form action="update.php" method = "post" class="was-validated">
<div class="form-row">
    <div class="form-group col-md-6">
      <label>FirstName</label>
      <input type ="text" name ="firstname" autocomplete= "off" class="form-control mx-sm"  required>
    <div class="invalid-feedback">Please fill out this field.</div>
</div>


    <form class="form-inline">
    <div class="form-group col-md-6">
  <div class="form-group">
    <label>lastName</label>
    <input type="txt" name="lastname" autocomplete= "off" class="form-control mx-sm-2"  required>
    
    <div class="invalid-feedback">Please fill out this field.</div>
 </div>
</div>

<div class="form-row">
    <div class="form-group col-md-6">
      <label>Email</label>
      <input type ="email" name ="email" autocomplete= "off" class="form-control mx-sm"   required>
      
    <div class="invalid-feedback">Please fill out this field.</div>
    </div>



    <form class="form-inline">
    <div class="form-group col-md-6">
    <div class="form-group">
    <label>Password</label>
    <input type="pwd" name="password" class="form-control mx-sm-2" aria-describedby="passwordHelpInline" autocomplete= "off" required>
    <small id="passwordHelpInline" class="text-muted">
      <p>           Must be 8-20 characters long.</p>
    </small>
    <div class="invalid-feedback">Please fill out this field.</div>
  </div>
  </div>



  <div class="form-row">
    <div class="form-group col-md-6">
    <label for="country">Country</label>
   
    <span style="color: red !important; display: inline; float: none;"></span>
    <select name="country" class="form-control" required>
                <option value=""></option>
                <option value="Afghanistan">Afghanistan</option>
                <option value="Åland Islands">Åland Islands</option>
                <option value="Albania">Albania</option>
                <option value="Algeria">Algeria</option>
                <option value="American Samoa">American Samoa</option>
                <option value="Andorra">Andorra</option>
    </select>                  
</div>
    <form class="form-inline">
    <div class="form-group col-md-6">
  <div class="form-group">
    <label>Contact Number</label>
   <input type="tel" name="phone" class="form-control mx-sm-2" autocomplete= "off" required>
    <div class="invalid-feedback">Please fill out this field.</div>
 </div>
</div>

<div class="form-group form-check">
    <label class="form-check-label">
      <input class="form-check-input" type="checkbox" name="remember"> I agree on the Conditions
      <div class="valid-feedback" required></div>

      <div class="invalid-feedback">Check this checkbox to continue.</div> 
     <br> 
     <button type="submit" class="btn btn-success">Update</button> </p1>
     </div>

       
      </label>
     
    </div>
   
</div>
<p1>
</form>

</div>
</div>
</div>
<footer>
  <p class="p-3 bg-dark text-white text-center">@IlmiTabassum TrustyTouristGuide</p>
</footer>
</body>
</html>