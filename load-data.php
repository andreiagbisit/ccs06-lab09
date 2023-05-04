<?php

require "config.php";

use App\Pet;

try {
	Pet::register('Rocket', 'Male', '2010-09-01', 'Linus Sebastian', 'info@linusmediagroup.com', '101-18643 52nd Ave., Surrey, BC', '09458201986');
	echo "<li>Added 1 pet";

	$pets = [
		[
			'name' => 'Shirataki',
			'gender' => 'Male',
			'birthdate' => '2006-11-07',
			'owner' => 'Masahiro Sakurai',
			'email' => 'sakurai@sora.jp',
			'address' => 'Iidabashi, Tokyo',
			'contact_number' => '09174231993'
		],
		[
			'name' => 'Fami',
			'gender' => 'Female',
			'birthdate' => '2003-11-04',
			'owner' => 'Shinya Arino',
			'email' => 'arino@yoiko.jp',
			'address' => '135-0034 2-37-25 Eitai, Koto-ku, Tokyo',
			'contact_number' => '09454251972'
		]

	];
	Pet::registerMany($pets);
	echo "<li>Added " . count($pets) . " more pets";
	echo "<br /><a href='index.php'>Proceed to Index Page</a>";

} catch (PDOException $e) {
	error_log($e->getMessage());
	echo "<h1 style='color: red'>" . $e->getMessage() . "</h1>";
}