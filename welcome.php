<!DOCTYPE html>
<html lang="en">
<head>
<title>Welcome</title>
</head>
<body>

<h2> Check out the message below \/\/\/ </h2>

<?php

if (!empty($_GET['firstName'])) {
   echo "Howdy " . htmlspecialchars($_GET['firstName']);
} elseif (!empty($_GET['lastName'])) {
  echo "Howdy " . htmlspecialchars($_GET['lastName']);
} else {
  echo "Howdy no names";
}
?>

</body>
</html>