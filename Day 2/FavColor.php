<html>
<head><title>Choose Fav Color using Switch case </title></head>
<body>
<?php
$favcolor = "Blue";

switch($favcolor){
	case "red":
          echo "Your favorite color is Red";
          break;
	case "Blue":
	  echo "Your favorite color is Blue";
	  break;
 	case "green":
  	  echo "Your favorite color is Green";
	  break;
	default:
	  echo "Your favorite color is neither red,blue,nor green!";
}
?>
</body>
</html>