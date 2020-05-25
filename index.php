<?php
class Welcome {

  public function index() {
    echo "halo dunia";
  }

}


$home = new Home();



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
  <h1><?php echo $home->index(); ?></h1>
</body>
</html>
