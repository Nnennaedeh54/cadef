<!DOCTYPE html>
<html>
	<head>
		<title></title>
		<link rel="stylesheet" type="text/css" href="asset/css/bootstrap.css">
		<link rel="stylesheet" type="text/css" href="asset/css/style.css">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
		<script src="asset/js/jquery.min.js"></script>
		<script src="asset/js/bootstrap.js"></script>

		<style>

			.navbar-nav>li>a{
				color:#fff;
			}
		</style>

		<style type="text/css">
          .portfolio-item {
            position: relative;
            background: #FFF;
                background-clip: border-box;
            margin-bottom: 10px;
            border: 8px solid #FFF;
            -webkit-border-radius: 5px;
            -webkit-background-clip: padding-box;
            -moz-border-radius: 5px;
            -moz-background-clip: padding;
            border-radius: 5px;
            background-clip: padding-box;
            -webkit-box-shadow: inset 0 1px #fff,0 0 8px #c8cfe6;
            -moz-box-shadow: inset 0 1px #fff,0 0 8px #c8cfe6;
            box-shadow: inset 0 1px #fff,0 0 8px #c8cfe6;
            color: inset 0 1px #fff,0 0 8px #c8cfe6;
            -webkit-transition: all .5s ease;
            -moz-transition: all .5s ease;
            -o-transition: all .5s ease;
            -ms-transition: all .5s ease;
            transition: all .5s ease;
          }
          
          .portfolio-item .portfolio-image {
            overflow: hidden;
            text-align: center;
            position: relative;
          }
        </style>
	</head>
	

	<body>
		<div class="header">
			<nav class="navbar navbar-default navbar-fixed-top header">
			  <div class="container">
			    <div class="navbar-header">
			      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
			        <span class="icon-bar"></span>
			        <span class="icon-bar"></span>
			        <span class="icon-bar"></span> 
			      </button>
			      <a class="navbar-brand" href="#"><img src="asset/img/logo.png" class="logo"></a>
			      <span style="color: white; font-size: 16px; padding: 4px;"><p>CONSUMER ADVOCACY EMPOWERMENT FOUNDATION</p></span>
			    </div>
			    <div class="collapse navbar-collapse menus" id="myNavbar">
			      
			      <ul class="nav navbar-nav navbar-right" style="font-size: 14px; font-weight: bold; color: #D2E486; margin-top: 20px">
			        <li><a href="index.php">Home</a></li>
			        <li><a href="about.php">About us</a></li>
			        <li><a href="partner.php">Partners</a></li> 
			        <li><a href="contact.php">Contact us</a></li> 
			        <li><a href="http://cpc.gov.ng/news-events/events/" target="_blank">Events</a></li>
			        <li><a href="resources.php">Resources</a></li>
			      </ul>
			    </div>
			  </div>
			</nav>	
		</div>
		
	<div class="container" style="margin: 50px;">
		<div class="row">
		   <div class="table-responsive">

	   			<table class="table table-bordered table-hover">
	   				<?php
                    	$servername = "localhost";
						$username = "root";
						$password = "";
						$dbname = "cadef";

						$conn = mysqli_connect($servername, $username, $password, $dbname);
						$id =  $_POST["id"];
						$sql = "UPDATE complaint SET status='Read' WHERE id=$id";

						

						if (mysqli_query($conn, $sql)) {
						 
						} else {
						 
						}
                    	$sql = "SELECT * FROM complaint where id = $id";
						$result = $conn->query($sql);

						if ($result->num_rows > 0) {
					    // output data of each row
					    while($row = $result->fetch_assoc()) 
					    	{ 
					?>
                    <tr>
                      <th>Name (Email)</th>
                      <td><?php echo $row["name"]; ?> (<?php echo $row["email"]; ?>)</td>
                    </tr>


                    <tr>
                      <th>Subject</th>
                      <td><?php echo $row["subject"]; ?></td>
                    </tr>


                    <tr>
                      <th>Content</th>
                      <td><?php echo $row["description"]; ?></td>
                    </tr>

                    <tr>
                      <th>Date Submitted</th>
                      <td><?php echo $row["date_entered"]; ?></td>
                    </tr>
               		
               		<?php 
                   	}
						} 
						
                    ?>

                </table> 
            </div>
            <a href="messages.php" class="btn btn-info pull-right"> Back to Messages</a>
		</div>
	</div>

<div class="footer">
			<div class="container foot">
				<div class="row">
					<div class="col-xs-12 col-md-4">
						<h4>About Us</h4>
						<div class="card-card">
							<p>
								Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
								tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam...
							</p>
							<a href="#" class="btn btn-info"> Read More</a>
						</div>
					</div>
					<div class="col-xs-12 col-md-4">
						<h4>Our Company</h4>
						<ul class="card-card">
							<div class="row">
								<div class="col-xs-12 col-md-6">
									<li> About Us</li>
									<li> Policy</li>
									<li> Blog</li>
									<li> Contact Us</li>
									<li> Blog</li>
									<li> Contact Us</li>
								</div>
								<div class="col-xs-12 col-md-6">
									<li> About Us</li>
									<li> Policy</li>
									<li> Blog</li>
									<li> Contact Us</li>
									<li> Blog</li>
									<li> Contact Us</li>
								</div>
							</div>
							
						</ul>
					</div>
					<div class="col-xs-12 col-md-4">
						<a href="#"><i class="fa fa-facebook" style="height: 40px; width: 40px"></i></a>
						<a href="#" class="fa fa-twitter"></a>
						<a href="#" class="fa fa-google"></a>
						<a href="https://www.linkedin.com/in/lucy-edeh-27a006a0" class="fa fa-linkedin" target="_blank"></a>
					</div>
				</div>
			<div>
		</div>
	</body>
</html>