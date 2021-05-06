<?php 
include "config.php";

// if the form's submit button is clicked, we need to process the form
	if (isset($_POST['submit'])) {
		// get variables from the form
		$STUD_NUM = $_POST['studentnumber'];
		$STUD_FNAME = $_POST['firstname'];
		$STUD_MNAME = $_POST['middlename'];
		$STUD_LNAME = $_POST['lastname'];
        $STUD_ADDRESS = $_POST['address'];

		//write sql query

		$sql = "INSERT INTO student VALUES ('$STUD_NUM','$STUD_FNAME','$STUD_MNAME','$STUD_LNAME','$STUD_ADDRESS')";

		// execute the query

		$result = $conn->query($sql);

		if ($result == TRUE) {
			echo "New record created successfully.";
		}else{
			echo "Error:". $sql . "<br>". $conn->error;
		}

		$conn->close();

	}



?>

<!DOCTYPE html>
<html>
<body>

<h2>Signup Form</h2>

<form action="" method="POST">
  <fieldset>
    <legend>Personal information:</legend>
    Student Number:<br>
    <input type="text" name="studentnumber">
    <br>
    First Name:<br>
    <input type="text" name="firstname">
    <br>
    Middle Name:<br>
    <input type="text" name="middlename">
    <br>
    Last Name:<br>
    <input type="text" name="lastname">
    <br>
    Address:<br>
    <input type="text" name="Address">
    <br>
    <br><br>
    <input type="submit" name="submit" value="submit">
  </fieldset>
</form>

</body>
</html>