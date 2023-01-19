<?php


	include ("classes/autoload.php");
	
	$login = new Login();
	$user_data = $login->check_login($_SESSION['israzone_userid']);

	$USER = $user_data;

	if(isset($_GET['id']) && is_numeric($_GET['id'])){

		$profile = new Profile();
		$profile_data = $profile->get_profile($_GET['id']);

		if(is_array($profile_data)){
			$user_data = $profile_data[0];
		}
	}

	//post start
	if($_SERVER['REQUEST_METHOD'] == "POST")
	{
		
		$post = new Post();
		$id = $_SESSION['israzone_userid'];
		$result = $post->create_post($id, $_POST,$_FILES);
		
		if($result == "")
		{
			header("Location: profile.php");
			die;
		}else
		{
		
		echo "<div style='text-align:center;background-color:white;font-size:14px;'>";
		echo "יש למלא את כל הפרטים<br>";
		echo $result;
		echo "</div>";

		}

	}

		//collect posts
		$post = new Post();
		$id = $user_data['userid'];
		$posts = $post->get_posts($id);

		//collect friends
		$user = new User();
		$friends = $user->get_friends($id);
		
		$image_class = new Image();

?>

<!DOCTYPE html>
<html>
<head>
<title>פרופיל חבר | Israzone</title>
</head>


<body>

<?php include("header.php"); ?>



<div style="width: 800px;margin: auto;min-height: 20px;">

<div style="height: 15px;background-color: #eeeeee;text-align: center; color: #434343;">



<img src="<?php echo $image ?>" style="width: 100%;height: auto;">

<span style="font-size: 9px;">
	<?php
		$image = "image/usericon2.png";
		if(file_exists($user_data['profile_image']))
		{
			$image = $user_data['profile_image'];
		}

?>

	</div>	


</span>

<br><br>





<div style="width: auto;height: 105px;border: solid 1px #eeeeee;padding: 5px;margin-top: -20px;">

<form method="post" enctype="multipart/form-data">

<textarea name="post" placeholder="מה תרצו לשתף‫?‬" style="cursor: pointer;width: 99.5%;height: 60px;text-align: right;font-size: 14px;padding: 1px;"></textarea>

<label for="FileInput">
    <img style="float: left;width: 40px;cursor: pointer;" src="image/uploadicon.png">
</label>
  <input type="file" name="file" id="FileInput" style="cursor: pointer; display: none;">

	<input type="submit" value="לפרסם" style="cursor: pointer;background-color: #0171bb;border: none; color: white; padding: 5px;font-weight: bold;border-radius: 2px;width: 100px;margin-top: 10px;margin-left: 5px;">


</div>


</div>


<?php
	
	if($posts)
	{
	
	foreach ($posts as $ROW) {
		# code...

		$user = new User();
		$ROW_USER = $user->get_user($ROW['userid']);

		include("post.php");

		}	
	}
?>
</form>

</div>
</div>



</body>
</html>