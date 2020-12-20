<?php
$state = 'Please Select atleast one';
if(isset($_POST["submit"]))
	{
	if(!empty($_POST["accomp"]))
		{
			echo '<h3> You have select the following symptoms</h3>';
			foreach($_POST["accomp"] as $accomp)
			{
				echo '<p><h4><b>'.$accomp.'</b></h4></p>';
			}
		}
		else
		{
			echo '<script>alert("Please Select atleast one")</script>'; 
			echo '<script>window.location = "major.html"</script>';
		}
	}
?>