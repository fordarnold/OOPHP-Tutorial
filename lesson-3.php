<?php 

// https://www.youtube.com/watch?v=0OOAdIdQvX4&list=PL4cUxeGkcC9hNpT-yVAYxNWOmxjxL51Hy&index=3

class User {

	// properties
	public $username = "fred";
	public $email = "fred@example.com";

	// methods
	public function addFriend() {
		return "New friend added by " . $this->username;
	}
}

$userOne = new User();
$userTwo = new User();

// access the object's properties
echo $userOne->username . " (Username)";
echo "<br>";
echo $userOne->email . " (Email)";

echo "<br>";
echo "<br>";

// access the object's methods
echo $userOne->addFriend();

echo "<br>";
echo "<br>";

// show class properties and methods
print_r(get_class_vars("User"));
echo "<br>";
print_r(get_class_methods("User"));

echo "<br>";
echo "<br>";

// update properties for userTwo instance
// [these can be updated here because of the 'public' keyword attached to the property]
$userTwo->username = "tom";
$userTwo->email = "tom@example.com";

// access the object's properties
echo $userTwo->username . " (Username)";
echo "<br>";
echo $userTwo->email . " (Email)";

echo "<br>";
echo "<br>";

?>

<!DOCTYPE html>
<html>
	<head>
		<title>OOPHP Tutorial</title>
	</head>
	<body>
		
	</body>
</html>