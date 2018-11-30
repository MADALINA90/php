<html>
<head>
  <meta charset="utf-8">
  <title>Varsta</title>
  <link href="generatie.css" rel="stylesheet">

</head>

<form class="form" method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>" >
<h2>Bine ai venit</h2> <br>
<h3> Care este varsta ta </h3><br>
<input type="number" name="varsta">
<input type="submit" name="postsubmit" value="Submit">
</form>

<div class="cphp"><?php
echo '<link href="generatie.css" rel="stylesheet">';

  if (isset($_POST['postsubmit'])) {
      $varsta = $_POST['varsta'];
    echo "La $varsta ani , faci parte din Generația";
}else {
    $varsta = 'Scrie vârsta ta si afla din ce de generație faci parte..';
    echo "$varsta";

}

$alfa= 'Alpha ';
$z = 'Z';
$y = 'Y';
$x = 'X';
$boom = 'Baby Boomers';
$build = 'Builders' ;



if  ($varsta >= 1 && $varsta <= 7) {
  echo " $alfa";
}
  elseif ($varsta >=8 && $varsta <=21) {
    echo " $z";
}
  elseif ($varsta >=22 && $varsta <=36) {
  echo " $y";
}
  elseif ($varsta >=37 && $varsta <=51) {
    echo " $x";
}
  elseif ($varsta >=52 && $varsta <=70) {
    echo " $boom";
}
  elseif ($varsta >=71  && $varsta <=100) {
    echo " $build";
}
?>
</div>
</html>
