<?php
	session_start();
?>
<html>
    <head>
		<title>ICEP</title>
	</head>
	<body>
		<?php
			echo $_SESSION["message"];
		?>
	</body>
</html>