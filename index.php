<?php

require "config.php";

use App\Pet;

$pets = Pet::list();
?>

<head>
	<title>Pet Table</title>
	<style>
		@font-face {
		font-family:"FOT-Rodin Pro UB";
		src: url('fonts/FOT-Rodin Pro UB.otf') format('opentype');
		}

		@font-face {
			font-family:"FOT Pop Happiness Std Stripped";
			src: url('fonts/FOTPOPHAPPINESSSTRP-EXTRABOLD.otf') format('opentype');	     
		}

		tr:hover {
			background-color: rgba(176, 150, 111, 0.6);
		}
		
		td {
			height: 200px;
		}

		a:link {
			color:#fff1a3;
			text-decoration:none;
		}

		a:visited {
			color:#e08da0;
			text-decoration:none;
		}	

		a:hover {
			color:#ffa454;
			text-decoration:none;
		}
	</style>
</head>

<body style="color:#ffffff; background-image: url(bg/1.jpg); background-repeat:no-repeat; background-attachment:fixed; background-position:center; background-size:cover; margin-bottom:80px;">
	<div style="margin-top:30px;" align="center">
		<h1 style="font-family: FOT Pop Happiness Std Stripped; font-size:60px; margin-bottom:0px; text-shadow: 6px 6px 8px #292929;">Pet Table</h1>

		<table style="background-color: rgba(74, 168, 157, 0.6); font-family: FOT-Rodin Pro UB; font-size: 25px; width:50%; border-color:#5c5c5c; border-collapse: collapse; text-shadow: 2px 2px 4px #292929; box-shadow: 10px 10px 10px rgba(0, 0, 0, 0.3);" border="1" cellpadding="10">
			<?php foreach ($pets as $pet): ?>
			<tr>
				<td><?php echo $pet->getId(); ?></td>
				<td><?php echo $pet->getName(); ?></td>
				<td><?php echo $pet->getGender(); ?></td>
				<td><?php echo $pet->getBirthdate(); ?></td>
				<td><?php echo $pet->getOwner(); ?></td>
				<td><?php echo $pet->getEmail(); ?></td>
				<td><?php echo $pet->getAddress(); ?></td>
				<td><?php echo $pet->getContactNumber(); ?></td>
				<td>
					<a href="edit-pet.php?id=<?php echo $pet->getId(); ?>">EDIT</a>
				</td>
				<td>
					<a href="delete-pet.php?id=<?php echo $pet->getId(); ?>">DELETE</a>
				</td>
			</tr>
			<?php endforeach ?>
		</table><br>

		<a href="truncate-table.php" style="font-family: FOT-Rodin Pro UB; font-size:20px; text-shadow: 6px 6px 8px #000000;">CLEAR TABLE</a>
	</div>
</body>