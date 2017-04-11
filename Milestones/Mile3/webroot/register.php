<nav class="top-bar expanded" data-topbar role="navigation">
        <ul class="title-area large-3 medium-4 rows">
            <li class="name">
                <h1>
                <a href="http://sfsuse.com/~sp17g11/">Home</a>
                </h1>
            </li>
            
           
        </ul>
        <div class="top-bar-section">
            <ul class="left">
                <li><a href="http://sfsuse.com/~sp17g11/items">Buy</a></li>
                <li><a href="http://sfsuse.com/~sp17g11/items/add">Sell</a></li>
                <li><a href="http://sfsuse.com/~sp17g11/about.php">About Us</a> </li>  
                <li><a href="http://sfsuse.com/~sp17g11/items"> Search</a></li>
                <li>
                <div class="search">    
            <form action="" method="post">
            
                <input type ="text" name="submit"/>
           
            </form>
                    
            </li>
            <button>Submit  </button>
            </ul>
            <ul class ="right">
                <li><a target="_blank" href="http://sfsuse.com/~sp17g11/login.php">Login</a></li>
                <li><a target="_blank" href="http://sfsuse.com/~sp17g11/register.php">Register</a></li>
                 <li><a target="_blank" href="http://api.cakephp.org/3.0/">API</a></li>
            </ul>
        </div>
    </nav>
<?php
	require('connection.php');
    // If the values are posted, insert them into the database.
    if (isset($_POST['username']) && isset($_POST['password'])){
        $username = $_POST['username'];
	$email = $_POST['email'];
        $password = $_POST['password'];
        $first = $_POST['first'];
        $last = $_POST['last'];
       
 
        $query = "INSERT INTO user (username, password, email, fname, lname) VALUES ('$username', '$password', '$email', '$first', '$last')";
    
        $result = mysqli_query($conn, $query);
        if($result){
            $smsg = "User Created Successfully.";
        }else{
            $fmsg ="User Registration Failed";
        }
    }
    ?>
<html>
<head>
	<title>User Registration</title>
	
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" >

<link rel="stylesheet" href="styles.css" >

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
      <form class="form-signin" method="POST">
      
      <?php if(isset($smsg)){ ?><div class="alert alert-success" role="alert"> <?php echo $smsg; ?> </div><?php } ?>
      <?php if(isset($fmsg)){ ?><div class="alert alert-danger" role="alert"> <?php echo $fmsg; ?> </div><?php } ?>
      <h2 class="form-signin-heading"><div align ="middle" </div>Please Register</h2>
        
        <label for="brother" class="sr-only">First Name</label>
        <input type="text" name="first" id="brother" class="form-control" placeholder="First Name" required>
        
         <label for="huh" class="sr-only">Last Name</label>
        <input type="text" name="last" id="huh" class="form-control" placeholder="Last Name" required>
        
        <div class="input-group">
	  <span class="input-group-addon">* </span>
	  <input type="text" name="username" class="form-control" placeholder="Username" required>
	</div>
        
        <label for="inputEmail" class="sr-only">Email Address</label>
        <input type="email" name="email" id="inputEmail" class="form-control" placeholder="Email address" required autofocus>
        
        <label for="inputPassword" class="sr-only">Password</label>
        <input type="password" name="password" id="inputPassword" class="form-control" placeholder="Password" required>
        
  
        
        
        <div class="checkbox">
          <label>
            <input type="checkbox" value="remember-me"> Remember me
          </label>
        </div>
        <button class="btn btn-lg btn-primary btn-block" type="submit">Register</button>
        <a class="btn btn-lg btn-primary btn-block" href="login.php">Login</a>
      </form>
</div>

</body>

</html>
