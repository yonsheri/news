<!DOCTYPE>
<html>
	<head>
		<meta charset="utf8">
		<title>Мой первый блог</title>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
		<link rel="stylesheet" href="views/css/style.css">
	</head>
	<body>
		
		<div class="container">
		    <h1>Мой блог</h1>
		    <a href="admin">Панель Администратора</a>
		    <?foreach ($articles as $a):?>
			    <div>
				    <h2><a href="article.php?id=<?=$a['id']?>"><?=$a["title"];?></a></h2>
				    <span><?=$a["date"];?></span>
				    <p><?=articles_intro($a["text"]);?></p>
				    
			    </div>
			<?endforeach; ?>
		</div>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
	</body>
</html>