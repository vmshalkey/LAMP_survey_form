<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Survey Form</title>
</head>
<body>
	<form action="/surveys/process_form" method="post">
		<p>Your Name: </p>
			<input type="text" name="name">
		<p>Dojo Location: </p>
			<select name="location">
				<option value="Seattle">Seattle</option>
				<option value="Mountain View">Mountain View</option>
				<option value="Los Angeles">Los Angeles</option>
			</select>
		<p>Favorite Language: </p>
			<select name="language">
				<option value="JavaScript">JavaScript</option>
				<option value="jQuery">jQuery</option>
				<option value="Ruby">Ruby</option>
			</select>
		<p>Comment: </p>
			<textarea name="comment"></textarea>
		<input type="submit" value="Submit">
	</form>
</body>
</html>