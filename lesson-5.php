<?php

// Report PHP errors
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

// https://www.youtube.com/watch?v=0OOAdIdQvX4&list=PL4cUxeGkcC9hNpT-yVAYxNWOmxjxL51Hy&index=5

class User {

	// properties
	public $username;
	private $email;

	// constructor
	public function __construct($username, $email) {
		$this->username = $username;
		$this->email = $email;
	}

	// methods
	public function addFriend() {
		return "New friend added by " . $this->email; // private property email can be accessed inside the class
	}
}

$userOne = new User("mario", "mario@example.com");
$userTwo = new User("luigi", "luigi@example.com");

// access the object's properties
echo $userOne->username . " (Username)";
echo "<br>";
// echo $userOne->email . " (Email)"; // private property... throws error

echo "<br>";
echo "<br>";

// access the object's methods
echo $userOne->addFriend();

echo "<br>";
echo "<br>";

// access the object's properties
echo $userTwo->username . " (Username)";
echo "<br>";
// echo $userTwo->email . " (Email)"; // private property... throws error

echo "<br>";
echo "<br>";

// access the object's methods
echo $userTwo->addFriend();

?>

<!DOCTYPE html>
<html>
	<head>
		<title>OOPHP Tutorial</title>
	</head>
	<body>
		
	</body>
</html>