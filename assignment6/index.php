<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Timmy's PHP</title>
</head>
<?php
  define("NAME", "Timmy Moran");
  define("BIRTHDAY", "10/31/1994");
  $food0 = "Ramen Noodles";
  $food1 = "7/11 Taquitos";
  $food2 = "Goldfish";
  $class0 = "Operating Systems";
  $class1 = "Theory of Computation";
  $class2 = "Software Engineering";
  $class3 = "Data Structures";
?>
<body>
  <h1><?php echo NAME; ?></h1>
  <p>Birthday: <?php echo BIRTHDAY; ?></p>
  <h2>An Ordered List of My Favorite Foods:</h2>
  <ol>
    <li><?php echo $food0; ?></li>
    <li><?php echo $food1; ?></li>
    <li><?php echo $food2; ?></li>
  </ol>
  <h2>An Unordered List of Some CS Classes I've Enjoyed:</h2>
  <ul>
    <li><?php echo $class0; ?></li>
    <li><?php echo $class1; ?></li>
    <li><?php echo $class2; ?></li>
    <li><?php echo $class3; ?></li>
  </ul>
</body>
</html>
