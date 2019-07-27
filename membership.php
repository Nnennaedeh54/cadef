<?php require ('header.php'); ?>
<div class="container">

<div class="rows">
<div class="col-xs-12 col-md-6">

	
</div>
<div class="col-xs-12 col-md-6">
	<div class="portfolio-item">
	<div class="portfolio-image">
		<h3><span style="font-family: roboto; font-weight: bolder;">TO JOIN CADEF, FILL THE FORM BELOW</span></h3>
	</div>
	<div class="portfolio-info">
		<?php
		$servername = "localhost";
		$username = "root";
		$password="";
		$dbname = "cadef";
	$conn = mysqli_connect($servername, $username, $password, $dbname);
		if($_SERVER["REQUEST_METHOD"] == "POST") {


			$name = $_POST["name"];

			$email = $_POST["email"];

			$password = $_POST["password"];
			$phone = $_POST["phone"];

			$address = $_POST["address"];

			$country = $_POST["country"];
			$city = $_POST["city"];

			$zip = $_POST["zip"];

			$company = $_POST["company"];

			//$volunteer = $_POST["volunteer"];
			$comment = $_POST["comment"];
			//$optradio = $_POST["optradio"];

			$sql = "INSERT INTO members(name, email, password, phone, address, country, city, zip, company, comment, date_entered)
						Values ('$name', '$email', '$password', '$phone', '$address', '$country', '$city', '$zip', '$company', '$comment', NOW())";
									  
							if (mysqli_query($conn, $sql)) {
								?>
							    <div class="alert alert-success alert-dismissable" style="margin:20px">
			                      <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
			                      <h4>  <i class="icon fa fa-check"></i> Success!</h4>
			                        Thank you
			                    </div>
							<?php
							} else
							 { ?>
							    <div class="alert alert-danger alert-dismissable" style="margin:20px">
			                      <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
			                      <h4>  <i class="icon fa fa-times"></i> Error!</h4>
			                        Error check your form for correction
			                    </div>
							<?php
							}
						}
					?>
	

<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="POST">
	<div class="form-group">
	    <label for="name">Name:</label>
	    <input type="text" class="form-control" name="name" required="">
	</div>

	<div class="form-group">
	    <label for="email">Email address:</label>
	    <input type="email" class="form-control" id="email" name="email" required="">
	</div>

	<div class="form-group">
	    <label for="password">Password:</label>
	    <input type="password" class="form-control" name="password" required="">
	</div>
	<div class="form-group">
	    <label for="phone">Phone number:</label>
	    <input type="text" class="form-control" name="phone" required="">
	</div>
	<div class="form-group">
	    <label for="address">Address:</label>
	    <input type="text" class="form-control" name="address" required="">
	</div>
	<div class="form-group">
	    <label for="country">Country:</label>
	    <input type="text" class="form-control" name="country" required="">
	</div>
	<div class="form-group">
	    <label for="city">City:</label>
	    <input type="text" class="form-control" name="city" required="">
	</div>
	<div class="form-group">
	    <label for="zip">Zip Code:</label>
	    <input type="text" class="form-control" name="zip" required="">
	</div>
	<div class="form-group">
	    <label for="company">Company/Affiliation:</label>
	    <input type="text" class="form-control" name="company" required="">
	</div>

	
<!--<div class="form-group">
	<div class="radio">Volunteer</div>
  <label><input type="radio" name="optradio" value="Yes">Yes</label>

  <label><input type="radio" name="optradio" value="No">No</label>
</div>

		<div style ="font-weight: bold;">Volunteer</div>
		<label class="checkbox-inline"><input type="checkbox" value="" required="">Yes</label>
        <label class="checkbox-inline"><input type="checkbox" value="" required="">No</label>
	</div>-->
	<div class="form-group">
	    <label for="comment">Comment:(Please list areas of interest)</label>
	    <textarea class="form-control" rows="5" id="comment"  name="comment" required=""></textarea>
	</div>
	  
	  
	<button type="submit" class="btn btn-default">Submit</button>
</form>
</div>						
</div>
</div>
						

</div>
</div>

<?php require('footer.php'); ?>		