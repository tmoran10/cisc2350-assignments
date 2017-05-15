<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Gradebook</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css">

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/js/bootstrap.min.js"></script>
<link rel="stylesheet" href="../style.css">

</head>


<body>

<h2>CISC2350 Gradebook</h2>
<?php
  $db_hostname = 'localhost';
  $db_database = 'final_project';
  $db_username = 'root';
  $db_password = 'root';
  $db_conn = mysqli_connect($db_hostname, $db_username, $db_password, $db_database);
  if (!$db_conn) {
    echo '<p style="Sorry, a database error occurred. Please try again."';
    exit;
  }
  $get_gradebook = "SELECT * FROM gradebook";
  $gradebook_result = mysqli_query($db_conn, $get_gradebook);
  $gradebook = array();
  if (mysqli_num_rows($gradebook_result) > 0) {
    for ( $i = 0; $row = mysqli_fetch_array($gradebook_result, MYSQLI_ASSOC); $i++) {
      $gradebook[$i]['id'] = $row['id'];
      $gradebook[$i]['first_name'] = $row['firstname'];
      $gradebook[$i]['last_name'] = $row['lastname'];
      $gradebook[$i]['id_number'] = $row['idnumber'];
      $gradebook[$i]['assignment_1'] = $row['assignment1'];
      $gradebook[$i]['assignment_2'] = $row['assignment2'];
      $gradebook[$i]['assignment_3'] = $row['assignment3'];
      $gradebook[$i]['assignment_4'] = $row['assignment4'];
      $gradebook[$i]['assignment_5'] = $row['assignment5'];
      $gradebook[$i]['assignment_6'] = $row['assignment6'];
      $gradebook[$i]['assignment_7'] = $row['assignment7'];
      $gradebook[$i]['assignment_8'] = $row['assignment8'];
      $gradebook[$i]['mid_term'] = $row['midterm'];
      $gradebook[$i]['fin_al'] = $row['final'];
      $gradebook[$i]['aver_age'] = $row['average'];

    }
  }
?>
<?php if ( !empty($gradebook) ): ?>
<table class="computer">
  <tr>
    <th>First Name</th>
    <th>Last Name</th>
    <th>ID #</th>
    <th>Assignment 1</th>
    <th>Assignment 2</th>
    <th>Assignment 3</th>
    <th>Assignment 4</th>
    <th>Assignment 5</th>
    <th>Assignment 6</th>
    <th>Assignment 7</th>
    <th>Assignment 8</th>
    <th>Midterm</th>
    <th>Final</th>
    <th>Average</th>
  </tr>

<?php foreach ($gradebook as $tmp): ?>
  <tr>
    <td><?php echo $tmp['first_name'] ?></td>
    <td><?php echo $tmp['last_name'] ?></td>
    <td><?php echo $tmp['id_number'] ?></td>
    <td><?php echo $tmp['assignment_1'] ?></td>
    <td><?php echo $tmp['assignment_2'] ?></td>
    <td><?php echo $tmp['assignment_3'] ?></td>
    <td><?php echo $tmp['assignment_4'] ?></td>
    <td><?php echo $tmp['assignment_5'] ?></td>
    <td><?php echo $tmp['assignment_6'] ?></td>
    <td><?php echo $tmp['assignment_7'] ?></td>
    <td><?php echo $tmp['assignment_8'] ?></td>
    <td><?php echo $tmp['mid_term'] ?></td>
    <td><?php echo $tmp['fin_al'] ?></td>
    <td><?php echo $tmp['aver_age'] ?></td>
  </tr>
  <?php endforeach; ?>
  </table>
  <?php else: ?>
  <h3>No gradebook to display.</h3>
  <?php endif ?>

<br><br>

<button style="margin-left:40px" class="btn btn-success" data-toggle="modal" data-target="#addStudent">Add Student</button>

<div id="addStudent" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Add Student</h4>
      </div>

      <div class="modal-body">
        <form action="grades.php" method="post">
          <fieldset>
            <label for="first_name">Enter First Name</label>
              <input type="text" class="form-control" name="first_name" required>
          </fieldset>

          <fieldset>
            <label for="last_name">Enter Last Name</label>
              <input type="text" class="form-control" name="last_name" required>
          </fieldset>

          <fieldset>
            <label for="id_number">Enter Id Numebr</label>
              <input type="text" class="form-control" name="id_number" required>
          </fieldset>

          <fieldset>
            <label for="assignment_1">Enter Assignment 1 Grade</label>
              <input type="text" class="form-control" name="assignment_1" required>
          </fieldset>

          <fieldset>
            <label for="assignment_2">Enter Assignment 2 Grade</label>
              <input type="text" class="form-control" name="assignment_2" required>
          </fieldset>

          <fieldset>
            <label for="assignment_3">Enter Assignment 3 Grade</label>
              <input type="text" class="form-control" name="assignment_3" required>
          </fieldset>

          <fieldset>
            <label for="assignment_4">Enter Assignment 4 Grade</label>
              <input type="text" class="form-control" name="assignment_4" required>
          </fieldset>

          <fieldset>
            <label for="assignment_5">Enter Assignment 5 Grade</label>
              <input type="text" class="form-control" name="assignment_5" required>
          </fieldset>

          <fieldset>
            <label for="assignment_6">Enter Assignment 6 Grade</label>
              <input type="text" class="form-control" name="assignment_6" required>
          </fieldset>

          <fieldset>
            <label for="assignment_7">Enter Assignment 7 Grade</label>
              <input type="text" class="form-control" name="assignment_7" required>
          </fieldset>

          <fieldset>
            <label for="assignment_8">Enter Assignment 8 Grade</label>
              <input type="text" class="form-control" name="assignment_8" required>
          </fieldset>

          <fieldset>
            <label for="mid_term">Enter Midterm Grade</label>
              <input type="text" class="form-control" name="mid_term" required>
          </fieldset>

          <fieldset>
            <label for="fin_al">Final Project Grade</label>
              <input type="text" class="form-control" name="fin_al" required>
          </fieldset>

          <input type="submit" class="btn btn-info" name="Submit">
        </form>

        <?php if ( !empty($_POST['first_name']) ):

      			$first_name = $_POST['first_name'];
      			$last_name = $_POST['last_name'];
      			$id_number = $_POST['id_number'];
            $assignment_1 = $_POST['assignment_1'];
            $assignment_2 = $_POST['assignment_2'];
            $assignment_3 = $_POST['assignment_3'];
            $assignment_4 = $_POST['assignment_4'];
            $assignment_5 = $_POST['assignment_5'];
            $assignment_6 = $_POST['assignment_6'];
            $assignment_7 = $_POST['assignment_7'];
            $assignment_8 = $_POST['assignment_8'];
            $mid_term = $_POST['mid_term'];
            $fin_al = $_POST['fin_al'];

            $aver_age = (($assignment_1 + $assignment_2 + $assignment_3 + $assignment_4 + $assignment_5 + $assignment_6 + $assignment_7 + $assignment_8 + $mid_term + $fin_al) / 10);

            $sql = "INSERT INTO gradebook (firstname, lastname, idnumber, assignment1, assignment2, assignment3, assignment4, assignment5, assignment6, assignment7, assignment8, midterm, final, average)
      							 VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";
      			$insert = mysqli_prepare($db_conn, $sql);

      			mysqli_stmt_bind_param($insert, "sssiiiiiiiiiii", $first_name, $last_name, $id_number, $assignment_1, $assignment_2, $assignment_3, $assignment_4, $assignment_5, $assignment_6, $assignment_7, $assignment_8, $mid_term, $fin_al, $aver_age);

      			$success = mysqli_stmt_execute($insert);
      			$count = mysqli_affected_rows($db_conn);

      			mysqli_stmt_close($insert);

            header("Refresh:0");

      	 endif; ?>



        </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>
    </div>
</div>


</body>
</html>
