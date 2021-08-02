<html>
<head>
 <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.9/angular.min.js"></script>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top">

  <a class="navbar-brand" href="#">Showroom</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
    aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="home">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="bike">Bikes</a>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="servicingform">Servicing</a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="" id="navbarDropdown" role="button" data-toggle="dropdown"
          aria-haspopup="true" aria-expanded="false">
          Login/Register
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="nav-link" href="../login">Login</a>
          <a class="nav-link" href="Signup">Register</a>
          <div class="dropdown-divider"></div>
          <a class="nav-link" href="contact-us">Contact us</a>
          <a class="nav-link" href="contact-us">Admin Login </a>
        </div>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="servicingform">Logout</a>
      </li>
      <!-- <li class="nav-item">
          <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
        </li> -->
    </ul>
    <!-- <form class="form-inline my-2 my-lg-0">
        <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
      </form> -->
  </div>
</nav>
<section class="jumbotron">
  <h1 style="text-align: center;">KC Motors</h1>
  <p style="text-align: center;">Here at KC motors we sell high end luxuary cars and bikes.</p>
  <div style="text-align: center;">
    <img src="https://images-vmds.mercedes-benz.com/images/vmds/mvp/SSPIP72346_MQ6_large.png" class="img-fluid" alt="">
  <img src="https://images-vmds.mercedes-benz.com/images/vmds/mvp/SSPIP80574_MQ6_4633481_large.png" class="img-fluid"
    alt="">
  <img src="https://images-vmds.mercedes-benz.com/images/vmds/mvp/SSPIP60602_MQ6_large.png" class="img-fluid" alt="">
  <img src="https://images-vmds.mercedes-benz.com/images/vmds/mvp/SSPIP62174_MQ6_large.png" class="img-fluid" alt="">
</div>

</section>
<?php
$servername = "localhost";
$username = "username";
$password = "";
$dbname = "carshowroom";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
if (isset($_POST['submit'])) 
{
$vehicleid=$_POST['vehicleid'];
$customerId=$_POST['customerId'];
$vehicletype=$_POST['vehicletype'];
$vehiclename=$_POST['vehiclename'];
$vehiclenumber=$_POST['vehiclenumber'];
$salesdate=$_POST['salesdate'];
$salesamount=$_POST['salesamount'];

$sql="INSERT INTO  sales(V_Id, C_Id, Vehicle_type, Vehicle_Model, Vehicle_No, sales_date, totalprice) VALUES('$vehicleid','$customerId','$vehicletype','$vehiclename','$vehiclenumber','$salesdate','$salesamount') ";
if ($conn->query($sql) === TRUE) {
    echo '<div class="alert alert-dismissible alert-success"><button type="button" class="close" data-dismiss="alert">&times</button>Record inserted </div>';
;
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
}

$conn->close();

?>


<h4 style="text-align: center;">
     Sales form
</h4>
<div style="text-align: center; padding-top: 1cm;">
    <form action="sales.php" method="post">
        <label>Enter Vehicle Id :-</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <input type="text" name="vehicleid" placeholder="Vehicle id"><br><br>
        <label for="customerId">Enter Customer ID :-</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <input type="text" name="customerId" placeholder="Customer Id" ngModel required>
        <br><br>
        

        <label >Enter your vehicle type :- </label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <select style="width: 12.5%" name="vehicletype">
            <option>Car</option>
            <option>Bike</option>
        </select>
        <br /> <br>
        <label>Enter your model name:-</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <select style="width: 12.5%" name="vehiclename">
            <option>C-Class</option>
            <option>E-class</option>
            <option>GLA</option>
            <option>GLE</option>
            <option>BMW G 310 R</option>
            <option>BMW G 310 GS</option>
            <option>BMW S 1000 RR</option>
            <option>BMW R 1250 GS</option>
        </select>
        <br /> <br>
        <label for="vehiclenumber">Enter your vehicle number:-</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <input type="text" name="vehiclenumber" placeholder=" vehicle number" ngModel required>
        <br /> <br>

        
        <label for="servicingdate">Enter sales date </label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <input type="date" name="salesdate" placeholder="Salesdate" ngModel>&nbsp;
        <br /> <br>
        <label>Total Sales amount</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <input type="text" name="salesamount"><br><br>
               
        <input type="submit" value="Submit" name="submit"> &nbsp;
        <input type="reset" value="Reset">
    </form>
</div>

</body>
</html>