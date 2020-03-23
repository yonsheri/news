<!DOCTYPE>
<html>
	<head>
		<meta charset="utf8">
		<title>Мой первый блог - статья</title>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
		<link rel="stylesheet" href="views/css/style.css">
	</head>
	<body>
		<div class="container">
		   <a href="/">К списку статей</a>
		   <h1><?=$articles["title"];?></h1>
		   <span><?=$articles["date"];?></span>
		   <p><?=$articles["text"];?></p>
		</div>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
	</body>
</html>