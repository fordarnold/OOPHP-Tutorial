<?php

// Report PHP errors
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

// https://www.youtube.com/watch?v=0OOAdIdQvX4&list=PL4cUxeGkcC9hNpT-yVAYxNWOmxjxL51Hy&index=8

class User {

	// properties
	public $username;
	private $email;
	public $role = 'member'; // lesson 8: property to override

	// constructor
	public function __construct($username, $email) {
		$this->username = $username;
		$this->email = $email;
	}

	// methods
	public function addFriend() {
		return "New friend added by " . $this->email; // private property email can be accessed inside the class
	}

	// lesson 8: method to override
	public function message() {
		return "$this->email sent a new message";
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
	public $role = 'admin';
	
	public function __construct($username, $email, $level) {

		// run the parent class constructor
		parent::__construct($username, $email);

		// initialise child class properties
		$this->level = $level;
	}

	public function message() {
		return "$this->email (Admin) sent a new message"; // error here fixed in lesson 9
	}
}

$userOne = new User("mario", "mario@example.com");
$userTwo = new User("luigi", "luigi@example.com");
$userThree = new Admin("admin", "admin@example.com", 5); // instantiate new admin user

echo $userOne->role; 
echo "<br>";
echo $userThree->role;

echo "<br>";
echo "<br>";

echo $userOne->message();
echo "<br>";
echo $userTwo->message();
echo "<br>";
echo $userThree->message();

?>

<!DOCTYPE html>
<html>
	<head>
		<title>OOPHP Tutorial</title>
	</head>
	<body>
		
	</body>
</html>