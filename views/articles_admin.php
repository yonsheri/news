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
		    <a href="../">Главная</a>
		    <br />
		    <a href="index.php?action=add">Добавить статью</a>
		    <table class="admin-table">
				<tr>
					<th>Дата</th>
					<th>Заголовок</th>
					<th></th>
					<th></th>
				</tr>
				
				<?foreach ($articles as $a):?>
					<tr>
						<td><?=$a['date']?></td>
						<td><?=$a['title']?></td>
						<td>
							<a href="index.php?action=edit&id=<?=$a['id']?>">Редактировать</a>
						</td>
						<td>
							<a href="index.php?action=delete&id=<?=$a['id']?>">Удалить</a>
						</td>
					</tr>
				<?endforeach;?>
			
			</table>
		</div>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
	</body>
</html>