<?php

// Report PHP errors
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

// https://www.youtube.com/watch?v=0OOAdIdQvX4&list=PL4cUxeGkcC9hNpT-yVAYxNWOmxjxL51Hy&index=7

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

	// getters
	public function getEmail() {
		return $this->email; // private property email can be accessed inside the class
	}

	// setters
	public function setEmail($email) {

		// do some validation
		if(strpos($email, '@') > -1)
			$this->email = $email; // assign email value passed as arg
	}

}

/**
 * Child class
 */
class Admin extends User
{
	public $level;
	
	public function __construct($username, $email, $level) {

		// run the parent class constructor
		parent::__construct($username, $email);

		// initialise child class properties
		$this->level = $level;
	}
}

$userOne = new User("mario", "mario@example.com");
$userTwo = new User("luigi", "luigi@example.com");

// instantiate new admin user
$userThree = new Admin("admin", "admin@example.com", 5);

// access the object's properties
echo $userOne->username . " (Username 1)";
echo "<br>";
// echo $userOne->email . " (Email)"; // private property... throws error
echo $userOne->getEmail() . " (Email for User 1)"; // private property... using getter instead

echo "<br>";
echo "<br>";

// access the object's methods
echo $userOne->addFriend();

echo "<br>";
echo "<br>";

// access the object's properties
echo $userTwo->username . " (Username 2)";
echo "<br>";
// echo $userTwo->email . " (Email)"; // private property... throws error
echo $userTwo->getEmail() . " (Email for User 2)"; // private property... using getter instead

echo "<br>";
echo "<br>";

// access the object's methods
echo $userTwo->addFriend();

echo "<br>";
echo "<br>";

// use a setter
echo $userTwo->setEmail("newmail@example.com");
echo $userTwo->getEmail() . " (Updated Email for User 2)"; // private property... using getter instead

echo "<br>";
echo "<br>";

// access the object's properties
echo $userThree->username . " (Username 3)";
echo "<br>";
echo $userThree->getEmail() . " (Email for User 3)";
echo "<br>";
echo $userThree->level . " (Level for Admin User 3)";

?>

<!DOCTYPE html>
<html>
	<head>
		<title>OOPHP Tutorial</title>
	</head>
	<body>
		
	</body>
</html>