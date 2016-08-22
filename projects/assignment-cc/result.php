<?php
	require('check_score.php');
	$score = get_score();
?>

<!DOCTYPE html>
<html>
<head>
	<title>CareerCrucible Assignment</title>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	
	<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
	<style>
		.modal {
			overflow-y: auto;
			}
		.modal-open {
			overflow: auto;
		}
	</style>
	<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 9]>
		<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
		<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->

</head>

<body class="container">

	<h2 class="heading">
		Hey!! You scored <?php echo $score; ?> point<?php if($score != 1) echo 's'; ?> on the test!!
	</h2>

	<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
	<!-- Include all compiled plugins (below), or include individual files as needed -->
	<script src="bootstrap/js/bootstrap.min.js"></script>
</body>
</html>