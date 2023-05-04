<?php

require "config.php";

use App\Pet;

$pet_id = $_GET['id'];

$pet = Pet::getById($pet_id);
?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Edit Pet Information</title>
		<style>
			@font-face {
			font-family:"FOT-Rodin Pro UB";
			src: url('fonts/FOT-Rodin Pro UB.otf') format('opentype');
			}

			@font-face {
				font-family:"FOT Pop Happiness Std Stripped";
				src: url('fonts/FOTPOPHAPPINESSSTRP-EXTRABOLD.otf') format('opentype');	     
			}

			input {
				font-size:30px;
				font-family:Consolas;
				width:400px;
			}
			
			a:link, button {
				color:#fff1a3;
				text-decoration:none;
			}

			a:visited, button:visited {
				color:#e08da0;
				text-decoration:none;
			}	

			a:hover, button:hover {
				color:#ffa454;
				text-decoration:none;
			}

			button {
				background-color: transparent;
				border: 0px;
				font-family:"FOT-Rodin Pro UB";
				font-size: 30px;
				text-shadow: 2px 2px 4px #292929;
			}
		</style>
	</head>
	<body style="color:#ffffff; background-image: url(bg/2.jpg); background-repeat:no-repeat; background-attachment:fixed; background-position:center; background-size:cover; margin-bottom:80px;">
		<div align="center">
		<h1 style="font-family: FOT Pop Happiness Std Stripped; font-size:60px; margin-bottom:0px; text-shadow: 6px 6px 8px #292929;">Edit Pet Information</h1>
        <div style="background-color: rgba(212, 180, 121, 0.7); font-family: FOT-Rodin Pro UB; font-size: 30px; width:800px; text-shadow: 2px 2px 4px #292929; padding-top:50px; padding-bottom:50px; border-radius:40px; box-shadow: 10px 10px 10px rgba(0, 0, 0, 0.3)" align="center">
			<form action="save-changes.php" method="POST">
				<input type="hidden" name="id" value="<?php echo $pet->getId(); ?>">
				<div>
					<label>Pet Name:</label><br>
					<input type="text" name="name" placeholder="Pet Name" value="<?php echo $pet->getName();?>" />	
				</div>
				<div>
					<label>Pet's Gender:</label><br>
					<input type="text" name="gender" placeholder="Pet's Gender" value="<?php echo $pet->getGender();?>" />	
				</div>
				<div>
					<label>Pet's Birthday:</label><br>
					<input type="date" name="birthdate" placeholder="Pet's Birthday" value="<?php echo $pet->getBirthdate();?>" />	
				</div>
				<div>
					<label>Owner Name:</label><br>
					<input type="text" name="owner" placeholder="Owner Name" value="<?php echo $pet->getOwner();?>" />	
				</div>
				<div>
					<label>Email Address:</label><br>
					<input type="email" name="email" placeholder="Email Address" value="<?php echo $pet->getEmail();?>" />	
				</div>
				<div>
					<label>Address:</label><br>
					<input type="text" name="address" placeholder="Address" value="<?php echo $pet->getAddress();?>" />	
				</div>
				<div>
					<label>Contact Number:</label><br>
					<input type="text" name="contact_number" placeholder="Contact Number" value="<?php echo $pet->getContactNumber();?>" />	
				</div>
				<div>
					<button>
						Save
					</button> •

					<a href="index.php">Cancel</a>
				</div>
			</form>
		</div>
		</div>
	</body>
</html>