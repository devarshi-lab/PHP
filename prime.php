<!--
 Accept number from user and check whether number is prime or not.
Prime number is such a number without any factor except 1.
In this question you have to write the logic which should not be dependent on
other function.
Input : 7
Output : 7 is prime number
Input : 36
Output : 36 is not prime number 
-->


<!DOCTYPE html>
<html>
<head>
	<title>Prime Number</title>
</head>
<body>
	<form action="prime.php" method="POST">
		<label>Enter the number : </label>
		<input type="text" name="number">
		<input type="submit" value="Check">
	</form>

</body>
</html>

<?php
	$iFlag = 0;
	if(isset($_POST['number']))
	{
		$no = $_POST['number'];

		if(empty($no) == true)
		{
			echo "Please enter a number!!!<br>";
		}
		else
		{
			if($no>0)
			{
				for($i = 2;$i<$no;$i++)
				{
					if($no % $i == 0)
					{
						$iFlag = 1;
					}
				}
				if($iFlag == 1)
				{
					echo "It is not prime number...<br>";
				}
				else
				{
					echo "It is prime number...<br>";
				}
			}
			else if($no <= 0)
			{
				echo "ERROR:Number should be greater than 0.";
			}

		}
			exit();
	}

?>
