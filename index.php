<?php 
//configuration for our PHP Server
set_time_limit(0);
ini_set('default_socket_timeout', 300);
session_start();

//Make Constants using define.
define('client_id', 'c73d173254d844b89d8117954f97d9ee');
define('client_secret', '971766cd8c4f4af7b7a6ff36f32b68b0');
define('redirectURI', 'http://localhost/appacademyapi/index.php');
define('ImageDirectory', 'pics/');
?>

<!doctype html>
<html>
	<head>
		<meta charset="utf-8">
		<meta name="description" content="">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title></title>
		<link rel="stylesheet" href="css/style.css">
		<link rel="author" href="humans.txt">
	</head>
	<body>
		<!-- Creating a login for people to go and give approval for our web app to access their Instagram Account
		After getting approval we are now going to have the information so that we can play with it.
		 -->
		<a href="https:api.instagram/oauth/authorize/?client_id=<?php echo clientID; ?>&redirect_uri=<?php echo redirectURI; ?>&response_type=code">LOGIN</a>
		<script src="js/main.js"></script>
	</body>
</html>