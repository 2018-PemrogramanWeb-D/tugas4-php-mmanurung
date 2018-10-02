<?php
	session_start();
?>
<html>
<head></head>
<body style="background-image:url(https://wallpaper.wiki/wp-content/uploads/2017/04/wallpaper.wiki-HD-Calm-Background-PIC-WPB001900.jpg);
	background-size:cover;
	text-align:center">
	<br><br><br><br><br><br><br><br><br><br><br><br><br><br>
	<?php
		date_default_timezone_set("Asia/Jakarta");
		function jam(){
			if(date("A")=="AM"){
				if(date("g")>=3 && date("g")<6){ 
					echo "subuh";
				}
				else if(date("g")>=6 && date("g")<=10){
					echo "pagi";
				}
				else if(date("g")>10 && date("g")<12){
					echo "siang";
				}
				else echo "malam";
			}
			else if(date("A")=="PM"){
				if(date("g")>=12 && date("g")<=3){
					echo "siang";
				}
				else if(date("g")>3 && date("g")<=6){
					echo "sore";
				}
				else if(date("g")>6 && date("g")<12){
					echo "malam";
				}
			}
		};
		echo date("D M j g:i:s A");
		echo "<br>Selamat ";
		echo jam();
		if($_POST["nama"]=="Miranda Manurung"){
			if($_POST["password"]=="123qwe"){
				$_SESSION["berhasil"]=1;
			}
			else{
				$_SESSION["berhasil"]=0;
				header("Location: beginning.php");
			}
		}
		else{
			$_SESSION["berhasil"]=0;
			header("Location: beginning.php");
		}
	?>
</body>
</html>