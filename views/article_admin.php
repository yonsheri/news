<!DOCTYPE>
<html>
	<head>
		<meta charset="utf8">
		<title>Мой первый блог</title>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
		<link rel="stylesheet" href="../views/css/style.css">
	</head>
	<body>
		
		<div class="container">
		    <h1>Панель администратора</h1>
		    <a href="/admin">Список</a>
		    <br />
		    <form method="post" action="index.php?action=<?=$_GET['action']?>&id=<?=$_GET['id']?>">
		    	<label>
		    		Название
		    		<input type="text" name="title" value="<?=$article['title']?>" class="form-item" autofocus required>
		    	</label>
		    	<label>
		    		Дата
		    		<input type="date" name="date" value="<?=$article['date']?>" class="form-item" required>
		    	</label>
		    	<label>
		    		Содержимое
		    		<textarea name="text" value="" class="form-item" required><?=$article['text']?></textarea>
		    	</label>
		    	<label>
		    		<input type="submit" value="Сохранить" class="btn" required>
		    	</label>
		    </form>
		</div>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
	</body>
</html>