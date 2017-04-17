<!--  Assignment 8 -->
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
	$credits_needed = get_grad_credits($earned_credits);
	$next_level = get_next_level($earned_credits);
	$YOUR_CLASSIFICATION_YEAR = get_student_year($earned_credits);
	function get_student_year($f_earned_credits){
		$F_YOUR_CLASSIFICATION_YEAR = "Default";
		if($f_earned_credits > 18 && $f_earned_credits < 42){
			$F_YOUR_CLASSIFICATION_YEAR = "Freshman";
		} elseif($f_earned_credits < 69){
			$F_YOUR_CLASSIFICATION_YEAR = "Sophomore";
		} elseif($f_earned_credits < 99){
			$F_YOUR_CLASSIFICATION_YEAR = "Junior";
		} elseif($f_earned_credits > 99){
			$F_YOUR_CLASSIFICATION_YEAR = "Senior";
		}else{
			$F_YOUR_CLASSIFICATION_YEAR = "Error";
		}
		return($F_YOUR_CLASSIFICATION_YEAR);
	}
	function get_grad_credits($f_earned_credits){
		$f_total_credits = 124;
		return($f_total_credits - $f_earned_credits);
	}
	function get_next_level($f_earned_credits){
	  $f_next_level = array(0, "Default");
		if($f_earned_credits > 18 && $f_earned_credits < 42){
			$f_next_level[0] = 42 - $f_earned_credits;
			$f_next_level[1] = "Sophomore";
		} elseif($f_earned_credits < 69){
			$f_next_level[0] = 69 - $f_earned_credits;
			$f_next_level[1] = "Junior";
		} elseif($f_earned_credits < 99){
			$f_next_level[0] = 99 - $f_earned_credits;
			$f_next_level[1] = "Senior";
		} elseif($f_earned_credits > 99){
			$f_next_level[0] = 124 - $f_earned_credits;
			$f_next_level[1] = "Graduate";
		}else{
			$f_next_level[1] = "Error";
		}
		return($f_next_level);
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
    <li>I need <?php echo $next_level[0]; ?> credits to become a <?php echo $next_level[1]; ?></li>
  </ul>
	<h2>Students:</h2>
	<ul>
		<?php
			$students = array(
			'rick' => 124,
			'morty' => 24,
			'summer' => 48,
			'beth' => 75,
			'jerry' => 32,
			'bird_man' => 97
			);
			$names = array("rick", "morty", 'summer', 'beth', 'jerry', 'bird_man');
			$number = 0;
			do{
				$classifications = get_next_level($students[$names[$number]]);
				echo '<li>  Name: <strong>' . str_replace('_', ' ', ucfirst($names[$number])) . '</strong>';
				echo '<ul>';
				echo '<li> Credits Earned: ' . $students[$names[$number]] . '</li>';
				echo '<li> Credits Neded to Graduate: ' . get_grad_credits($students[$names[$number]]) . '</li>';
				echo '<li> Classification Year: ' . get_student_year($students[$names[$number]]) . '</li>';
				echo '<li> Next Classification: ' . $classifications[1] . '</li>';
				echo '<li> Credits Needed for Next Classification: ' . $classifications[0] . '</li>';
				echo '</ul> </li>';
				$number++;
			}while($number < 6);
		?>
		</li>
	</ul>
</body>
</html>
