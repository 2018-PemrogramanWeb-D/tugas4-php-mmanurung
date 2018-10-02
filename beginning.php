<?php
	session_start();
?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8" />
		<title>LOG IN FORM</title>
	</head>
	<body 
	style="background-image:url(https://www.xmple.com/wallpaper/linear-yellow-green-gradient-1920x1080-c2-a7fca8-fcf6a7-a-315-f-14.svg);
	background-size:cover;
	text-align:center">
	<h1>WELCOME !!!</h1>
	<br><br><br><br><br><br><br><br><br><br>
		<h2>Silahkan Log In Terlebih Dahulu</h2>
		<form action="next.php" method="post">
			Nama: <input name="nama" type="text" placeholder="Your Name"/> <br><br>
			Password: <input name="password" type="Password" placeholder="*****" /> <br><br>
			<input type="submit" />
		</form>
		<?php
			if($_SESSION["berhasil"]=0){
				echo "Username atau password yang anda masukkan tidak valid";
			}
		?>
	</body>
</html>