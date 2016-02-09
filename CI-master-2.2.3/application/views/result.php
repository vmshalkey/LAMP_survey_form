<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Results</title>
</head>
<body>
	<h2>Thanks for submitting the survey. You have submitted it <?= $counter ?> times.</h2>
	<p>Your Name: </p>
		<?= $info['name'] ?>
	<p>Dojo Location: </p>
		<?= $info['location'] ?>
	<p>Favorite Language: </p>
		<?= $info['language'] ?>
	<p>Comment: </p>
		<?= $info['comment'] ?>
	<a href="/"><button>GO BACK</button></a>
</body>
</html>