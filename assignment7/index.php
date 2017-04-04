<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Timmy's PHP</title>
</head>
<?php
  define("NAME", "Timmy Moran");
  define("BIRTHDAY", "10/31/1994");
	$food = array("Ramen Noodles", "7/11 Taquitos", "Goldfish");
	$classes = array("CISC3595" => "Operating Systems", "CISC4090" => "Theory of Computation", "CISC3598" => "Software Engineering", "CISC2200" => "Data Structures");
	$earned_credits = 120;
	$total_credits = 124;
	$credits_next_classification = 0;
	$credits_needed = $total_credits - $earned_credits;
	$YOUR_CLASSIFICATION_YEAR = "Default";
	$NEXT_CLASSIFICATION = "Default";
	if($earned_credits > 18 && $earned_credits < 42){
		$YOUR_CLASSIFICATION_YEAR = "Freshman";
		$credits_next_classification = 42 - $earned_credits;
		$NEXT_CLASSIFICATION = "to becoma Sophomore";
	} elseif($earned_credits < 69){
		$YOUR_CLASSIFICATION_YEAR = "Sophomore";
		$credits_next_classification = 69 - $earned_credits;
		$NEXT_CLASSIFICATION = "to become a Junior";
	} elseif($earned_credits < 99){
		$YOUR_CLASSIFICATION_YEAR = "Junior";
		$credits_next_classification = 99 - $earned_credits;
		$NEXT_CLASSIFICATION = "to become a Senior";
	} elseif($earned_credits > 99){
		$YOUR_CLASSIFICATION_YEAR = "Senior";
		$credits_next_classification = 124 - $earned_credits;
		$NEXT_CLASSIFICATION = "to Graduate";
	}else{
		$YOUR_CLASSIFICATION_YEAR = "Error";
		$NEXT_CLASSIFICATION = "to become an Error";
	}
?>
<body>
  <h1><?php echo NAME; ?></h1>
  <p>Birthday: <?php echo BIRTHDAY; ?></p>
  <h2>An Ordered List of My Favorite Foods:</h2>
  <ol>
    <li><?php echo $food[0]; ?></li>
    <li><?php echo $food[1]; ?></li>
    <li><?php echo $food[2]; ?></li>
  </ol>
  <h2>An Unordered List of Some CS Classes I've Enjoyed:</h2>
  <ul>
    <li><?php echo $classes['CISC3595']; ?></li>
    <li><?php echo $classes['CISC4090']; ?></li>
    <li><?php echo $classes['CISC3598']; ?></li>
    <li><?php echo $classes['CISC2200']; ?></li>
  </ul>
	<h2>Credits:</h2>
	<ul>
		<li>Credits Required to Graduate: <?php echo $total_credits; ?></li>
		<li>Earned Credits: <?php echo $earned_credits; ?></li>
		<li>Credits Needed to Graduate: <?php echo $credits_needed; ?></li>
	</ul>
	<h2>Classifications:</h2>
	<ul>
		<li>I classified as a <?php echo $YOUR_CLASSIFICATION_YEAR; ?></li>
		<li>I need <?php echo $credits_next_classification ?> credits <?php echo $NEXT_CLASSIFICATION ?></li>
	</ul>
</body>
</html>
