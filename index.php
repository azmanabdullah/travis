<?php
require_once __DIR__.'/vendor/autoload.php';

use Azman\Welcome;

$welcome = new Welcome();

?>


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Testing</title>
</head>
<body>
  <h1><?php echo $welcome->index(); ?></h1>
</body>
</html>
