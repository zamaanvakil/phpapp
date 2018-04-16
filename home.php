<?php
include 'database.php';

session_start();
$email = $_SESSION['email'];


$sql="SELECT * FROM user_details where email = '".$email."' ";
$fetch = mysqli_query($conn,$sql);
?>

<!DOCTYPE html>
<html lang="en">

    <head>

        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Software Lab Evaluation</title>

        <!-- CSS -->
        <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Roboto:400,100,300,500">
        <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
        <link rel="stylesheet" href="assets/font-awesome/css/font-awesome.min.css">
		<link rel="stylesheet" href="assets/css/form-elements.css">
        <link rel="stylesheet" href="assets/css/style.css">

        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
            <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
            <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
        <![endif]-->

        <!-- Favicon and touch icons -->
        <link rel="shortcut icon" href="assets/ico/favicon.png">
        <link rel="apple-touch-icon-precomposed" sizes="144x144" href="assets/ico/apple-touch-icon-144-precomposed.png">
        <link rel="apple-touch-icon-precomposed" sizes="114x114" href="assets/ico/apple-touch-icon-114-precomposed.png">
        <link rel="apple-touch-icon-precomposed" sizes="72x72" href="assets/ico/apple-touch-icon-72-precomposed.png">
        <link rel="apple-touch-icon-precomposed" href="assets/ico/apple-touch-icon-57-precomposed.png">

    </head>

    <body>

        <!-- Top content -->
        <div class="top-content">
        	
            <div class="inner-bg">
                <div class="container">
                    
                    <div class="row">
                        <div class="col-sm-6 col-sm-offset-3 form-box">
                        	<div class="form-top">
                        		<div class="form-top-left">
                        			<h3>Hello, <?php echo $email ?></h3>
                        		</div>
                            </div>
                            <div class="form-bottom">
			                    <table class="table">
			                    	<tr>
									    <th>Name</th>
									    <th>Email</th>
									    <th>Branch</th>
									    <th>Mobile</th> 
									</tr>
									<?php
										$name = "";
										$branch = "";
										$mobile = "";
									 	$row = mysqli_fetch_array($fetch); 

									 		$name = $row['name'];
									 		$branch = $row['branch'];
									 		$mobile = $row['mobile'];

									         echo  
									         	"<tr>
									               <td>".$row['name']."</td>
									               <td>".$row['email']."</td>
									               <td>".$row['branch']."</td>
									               <td>".$row['mobile']."</td>
									        	</tr>";  
									        
									   
									?>
			                    </table>
			                    <form role="form" action="edit.php" method="post" class="login-form">
			                    	<div class="form-group">
			                        	<input type="hidden" name='name' placeholder="Email..." class="form-username form-control" id='name' value = "<?php echo $name ?>">
			                        </div>
			                        <div class="form-group">
			                        	<input type="hidden" name='branch' placeholder="Password..." class="form-password form-control" id='branch' value = "<?php echo $branch ?>">
			                        </div>
			                        <div class="form-group">
			                        	<input type="hidden" name='mobile' placeholder="Email..." class="form-username form-control" id='mobile' value = "<?php echo $mobile ?>">
			                        </div>
			                        
			                        <button type="submit" class="btn">Edit</button>
			                    </form>
		                    </div>
                        </div>
                    </div>
                    <br>
                    <div class="row">
                        <form action="logout.php">
                            <button type="submit" class="btn">Logout</button>
                        </form>
                    </div>
                    
                </div>
            </div>
            
        </div>


        <!-- Javascript -->
        <script src="assets/js/jquery-1.11.1.min.js"></script>
        <script src="assets/bootstrap/js/bootstrap.min.js"></script>
        <script src="assets/js/jquery.backstretch.min.js"></script>
        <script src="assets/js/scripts.js"></script>
        
        <!--[if lt IE 10]>
            <script src="assets/js/placeholder.js"></script>
        <![endif]-->

    </body>

</html>