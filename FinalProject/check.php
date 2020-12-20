<html>
<head><title></title></head>
<body>
					<form method="post">
						<h5>Accompanied by</h5>
						<input type="checkbox" name="accomp[]" value="Blue-colored skin or lips">
						<label for="male">Blue-colored skin or lips</label><br>
						<input type="checkbox" name="accomp[]" value="Chills or sweating">
						<label for="male">Chills or sweating</label><br>
						<input type="checkbox" name="accomp[]" value="Cough">
						<label for="male">Cough</label><br>
						<input type="checkbox" name="accomp[]" value="Difficult or painful swallowing">
						<label for="male">Difficult or painful swallowing</label><br>
					</form>

</body>
</html>
<?php
if(isset($_POST["submit"]))
	{
	if(!empty($_POST["accomp"]))
		{
			echo '<h3> You have select the following symptoms</h3>';
			foreach($_POST["accomp"] as $accomp)
			{
				echo '<p>'.$accomp.'</p>';
			}
		}
		else
		{
			echo '<label class='text-danger'>* Please Select Atleast one Programming language</label>';
		}
	}
?>
	