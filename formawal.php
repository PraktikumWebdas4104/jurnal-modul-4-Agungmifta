<?php 

session_start();
error_reporting();

	$user = array('user' => "agungmiftakhulhuda",
					'pass' => "agungmiftakhul7");

	if (isset($_POST['submit'])) {
		if ($_POST['username'] == $user['user'] && $_POST['password'] == $user['pass']) {
			
			$_SESSION["username"] = $_POST['username'];
			echo "Anda Berhasil Login $_POST[username], klik disini <a href='proses.php'> Klik Disini </a>";

		}else{
			display_login_form();
			echo "<p> username dan password yang anda masukkan salah </>";

		}
	}else{
		display_login_form();

	}

	function display_login_form(){ ?>
		<form action="<<?php echo $_SERVER['PHP_SELF']; ?>" method='post'>
		<label for="username"> username </label>
		<input type="text" name="username" id="username"><br><br>
		<label for="password"> password </label>
		<input type="password" name="password" id="password"><br><br>

		<input type="submit" name="submit" value="submit">

	</form>
	
<?php } ?>
