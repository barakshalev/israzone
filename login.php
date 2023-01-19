<?php

session_start();

		include ("classes/connectioncl.php");
		include ("classes/login.php");



	$email = "";
	$password = "";


	if($_SERVER['REQUEST_METHOD'] == 'POST')
	{

	
	$login = new Login();
	$result = $login->evaluate($_POST);

	if($result != "")
	{
		
		echo "<div style='text-align:center;background-color:white;font-size:14px;'>";
		echo "יש למלא את כל הפרטים<br>";
		echo $result;
		echo "</div>";
	}else
	{
	
		header("Location: profile.php");
		die;
	}
		
		$email = $_POST['email'];
		$password = $_POST['password'];

	}
?>


<html>
<head>
<title>Israzone | התחברות</title>
</head>

<body style="background-color: #eeeeee; ">
<br>
<div style="height:100px;background-color: #eeeeee; ">
<div style="color: #eeeeee;font-size: 55px;text-align: center;font-family: HoboStd;color: #0171bb;">
<a href="index.php">
<img src="israzonelogo1.png" style="width: 300px;margin-top: 20px"></a>     
</div>


</div>

<br><br>
<div style="width: 500px;background-color: white; margin: auto; margin-top: 10px;padding: 50px; text-align: center;font-size: 18px;font-weight: bold; ">כניסה לאתר ישראזון<br><br>

<form method="post">

	<input value="<?php echo $email ?>" type="text" name="email" placeholder="אימייל" style="text-align: right;height: 40px;width: 300px;border-radius: 4px;border: solid 1px #0171BB;font-size: 15px;padding: 4px; "><br><br>

	<input value="<?php echo $password ?>" type="password" name="password" placeholder="סיסמא" style="height: 40px;width: 300px;border-radius: 4px;border: solid 1px #0171BB;font-size: 15px;padding: 4px;text-align: right; "><br><br>

	<input type="submit" style="width: 300px;height: 40px;border-radius: 4px;font-weight: bold;border: none;background-color: #0171BB ;color: white; " value="כניסה"><br><br>

	</form>

	<a href="signup.php" style="color: #0171bb;font-size: 14px;">עדיין לא רשומים‫?‬</a>
	

</div>
<br>


</div>

</body>
</html>