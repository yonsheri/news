<?php
function articles_all($link) {
	// Запрос
	$query = "SELECT * FROM articles ORDER BY id DESC";
	$result = mysqli_query($link, $query);

	if (!$result) die(mysqli_error($link));

	// Извлечение из БД
	$n = mysqli_num_rows($result);
	$articles = array();

	for ($i = 0; $i < $n; $i++) {
		$row = mysqli_fetch_assoc($result);
		$articles[] = $row;
	}
	
	return $articles;
}

function article_get($link, $id_article) {
	// Запрос
	$query = sprintf("SELECT * FROM articles WHERE id=%d", (int)$id_article);
	$result = mysqli_query($link, $query);

	if (!$result) die(mysqli_error($link));

	// Извлечение из БД
	$article = mysqli_fetch_assoc($result);
	
	return $article ;	
}

function article_new($link, $title, $date, $content) {
	// Подготовка
	$title = trim($title);
	$content = trim($content);

	// Проверка
	if ($title == '')
			return false;

	// Запрос
	$t = "INSERT INTO articles (title, date, text) VALUES ('%s', '%s', '%s')";
	$query = sprintf($t, mysqli_real_escape_string($link, $title), mysqli_real_escape_string($link, $date), mysqli_real_escape_string($link, $content));

	$result = mysqli_query($link, $query);

	if (!$result)
		die (mysqli_error($link));

	return true;
}

function article_edit($link, $id, $title, $date, $content) {
		// Подготовка
	$title = trim($title);
	$content = trim($content);
	$date = trim($date);
	$id = (int)$id;

	// Проверка
	if ($title == '')
			return false;

	// Запрос
	$sql = "UPDATE articles SET title='%s', date='%s', text='%s'  WHERE id='%d'";

	$query = sprintf($sql, mysqli_real_escape_string($link, $title), mysqli_real_escape_string($link, $date),  mysqli_real_escape_string($link, $content),
		$id);

	$result = mysqli_query($link, $query);

	if (!$result)
		die (mysqli_error($link));

	return mysqli_affected_rows($link);
}

function article_delete($link, $id) {
	$query = sprintf("DELETE FROM articles WHERE id='%d'", $id);
	$result = mysqli_query($link, $query);

	if (!$result)
		die(mysqli_error($link));

	return mysqli_affected_rows($link);
}

function articles_intro($text, $len = 500) {
	return mb_substr($text, 0, $len);
}
?>