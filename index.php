<?php

session_start();

	include ("classes/autoload.php");
	
	$login = new Login();
	$user_data = $login->check_login($_SESSION['israzone_userid']);
?>


<!DOCTYPE html>
<html>
<head>
<title>ציר הזמן | Israzone</title>
</head>

<body>


<?php include("header.php"); ?>


<br>
<div style="display: flex;">

<div style="height: 80px;flex:2.5;border: solid 1px #eeeeee;padding: 10px;">
<textarea placeholder="מה תרצו לשתף‫?‬" style="width: 100%;height: 50px;text-align: right;font-size: 14px;padding: 1px; "></textarea>
<input type="submit" value="לפרסם" style="background-color: #0171bb;border: none; color: white; padding: 5px;font-weight: bold;border-radius: 2px;width: 70px;">



<div style="margin-top: 10px;background-color: white;"><br>

<img src="eli1.jpeg" style="width: 60px;height: 60px;float: right;border: solid 2px grey;margin-top: 10px;border-radius: 50%;"><br><br>
<div style="border: solid 1px #eeeeee;font-size: 13px;color: #0171bb;font-weight: bold; text-align: right;margin-top: -10px;padding: 3px;">אלי פאגלין   &nbsp</div>
</div>

<div style="text-align: right;margin-top: 15px;padding: 15px;color: black;font-size: 13px;background-color: #eeeeee;">
בוקר טוב עולם<br><br>

<a href="">אהבתי</a> . <a href="">לא אהבתי</a> . <a href="">תגובות</a> &nbsp<span style="color: #666;font-size: 12px;">30.2022 אפריל</span>  <span style="color: #666;">04:28</span>


</div>
<div style="margin-top: 20px;background-color: white;">
<img src="daniel.jpg" style="width: 60px;float: right;border: solid 2px grey;margin-top: 10px;border-radius: 50%;display: flex;"><br><br>
<div style="border: solid 1px #eeeeee;font-size: 13px;color: #0171bb;font-weight: bold; text-align: right;margin-top: -10px;padding: 3px;">הנסיכה ספו   &nbsp</div>
</div>
<div style="text-align: right;margin-top: 15px;padding: 15px;color: black;font-size: 13px;background-color: #eeeeee;">
כשגרתי בברצלונה היה לי חבר שהיה מסתובב עם פעמון אופניים (בלי האופניים), כדי שתמיד יפנו לו את הדרך. 
זה עבד מדהים והשיא היה שלקח את זה לבריכה וצלצל כדי שלא יפריעו לו לשחות
<br><br>

<a href="">אהבתי</a> . <a href="">לא אהבתי</a> . <a href="">תגובות</a> &nbsp<span style="color: #666;font-size: 12px;">29.2022 אפריל</span>  <span style="color: #666;">21:28</span>


</div>
<div style="margin-top: 20px;background-color: white;">
<img src="1212.jpeg" style="width: 60px;float: right;border: solid 2px grey;margin-top: 10px;border-radius: 50%;display: flex;"><br><br>
<div style="border: solid 1px #eeeeee;font-size: 13px;color: #0171bb;font-weight: bold; text-align: right;margin-top: -10px;padding: 3px;">ברק שלו פאגלין   &nbsp</div>
</div>
<div style="text-align: right;margin-top: 15px;padding: 15px;color: black;font-size: 13px;background-color: #eeeeee;">
אריק איינשטיין נחשב לבכיר זמרי ישראל מאז ומעולם, ולאב הרוחני של הרוק הישראלי. איינשטיין נולד וגדל בתל אביב, ובנערותו היה אלוף הארץ לנוער בקפיצה לגובה והדיפת כדור ברזל. את דרכו המוזיקלית החל בעת שירותו הצבאי בלהקת הנח"ל, לאחר שעבר את האודישן מול אורי זוהר, לימים שותפו המרכזי בעשייה הקולנועית.
<br><br>

<a href="">אהבתי</a> . <a href="">לא אהבתי</a> . <a href="">תגובות</a> &nbsp<span style="color: #666;font-size: 12px;">29.2022 אפריל</span>  <span style="color: #666;">21:28</span>

</div>
</div>


<?php
		$image = "image/usericon2.png";
		if(file_exists($user_data['profile_image']))
		{
			$image = $user_data['profile_image'];
		}

?>

<div style="width: 130px;background-color: white;min-height: 800px;">
<a href="profile.php"><img src="<?php echo $image ?>" style="width: 120px;align: top;border-radius: 50%;border: solid 2px grey;padding: 1px;"></a>
<br>
<a href="profile.php" style="color: grey;font-family: HoboStd;font-weight: bold;text-decoration: none;"><div style="text-align: center;"><?php echo $user_data['user_name'] ?>
</div></a>


</div>


</body>
</html>