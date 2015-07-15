<?php
//================Вывод всех новостей==============
 function articles_all(){
 	$db = startdb();
	$query = 'SELECT id, title, short, time from lesson2 ORDER BY id DESC';
	$result = $db->query($query);
	if (!$result)
		die($db->error());
    while($row = $result->fetch_array(MYSQLI_ASSOC)){
        
        // echo '<img src="'.'img_small/'.$row['img'] . '"' . 'alt= ""' . '>';
    	echo "<div class='title'><h2>".$row['title']."</h2><br></div>";
        echo "<div class='content'>".$row ['short'].'...'."<br></div>";
        echo '<div class="acont"> <a href ="'."index.php?c=page&act=view&id=" . $row['id'] . '"' .'><button type="button" class="btn btn-small btn-primary">Читать далее <span class="fa fa-arrow-right"></span></button></a></div>';
        echo "<hr>";
        echo "<p><em class='time'>Дата добавления: ".$row ['time']."</em>";
        echo '<a class="aedit" href ="'."index.php?c=page&act=edit&id=" . $row['id'] . '"' .'><i class="fa fa-pencil fa-lg"></i></a>';
        echo '<a class="acontdel" href ="'."index.php?c=page&act=delete&id=" . $row['id'] . '"' .'><i class="fa fa-trash-o fa-lg"></i></a></p>';
        echo "<hr>";
        
    }
 }
// ================================================

// ===============Вывод одной новости==============
 function view(){
 	$db = startdb();
    if(isset($_GET['id'])){
	$view = $_GET['id'];
	$query = ("SELECT id, title, content, time FROM lesson2 WHERE id=$view");
	$result = $db->query($query);
		if (!$result)
			die($db->error());
	while ($row = $result->fetch_array(MYSQLI_ASSOC)){

		echo "<div class='title'> <h2>".$row['title']."</h2><br></div>";
		echo "<hr>";
		// echo '<img src="'.'img_small/'.$row['img'] . '"' . 'alt= ""' . '>';
		echo "<div class='content'> <p>".$row ['content']."</p><br><br></div>";
		echo "<hr>";
		echo "<p><em class='time'>Дата добавления: ".$row ['time']."</em>";
		echo '<a class="aedit" href ="'."edit.php?id=" . $_GET['id'] . '"' .'><i class="fa fa-pencil fa-lg"></i></a>';
        echo '<a class="acontdel" href ="'."delete.php?id=" . $_GET['id'] . '"' .'><i class="fa fa-trash-o fa-lg"></i></a></p>';
 		echo "<hr>";
 }
 }
 }
// =======================================================

// ============Для редактирования новости=================
 function articles_get($id_article){
 	$db = startdb();
	$id_article= $_GET['id'];
	$query = ("SELECT * from lesson2 WHERE id = $id_article");
	$result = $db->query($query);
		if (!$result)
			die($db->error());
    while ($row = $result->fetch_array(MYSQLI_ASSOC)){
    $article[]=$row;
    }
	return $article;
}
// =======================================================

// ==================Новая новость========================
function articles_add($title, $short, $content){
	$db = startdb();
	// Подготовка.
	$title = trim($title);
	$short = trim($short);
	$content = trim($content);
	

	// Проверка.
	if ($title == '')
		return false;
	
	// Запрос.
	$t = "INSERT INTO lesson2 (title, short, content) VALUES ('%s', '%s', '%s')";
	
	$query = sprintf($t, 
	                 $db->real_escape_string($title),
	                 $db->real_escape_string($short),
	                 $db->real_escape_string($content));
	
	$result = $db->query($query);
							
	if (!$result)
		die($db->error());
		
	return true;
}
// ==========================================================

// =================Удаление новости=========================
function delete_art(){
	$db = startdb();
if(isset($_GET['id'])){
	$view = $_GET['id'];
	$result = $db->query("DELETE FROM lesson2 WHERE id=$view");
	if ( $result) 
	  {
	  header('Location: index.php');
	  }
	  else
	  {
	  echo  "<h1>Запись не удалена: ".$db->error()."</h1>";

	  }
}
}
// ============================================================

// ====================Редактирование новости==================
function edit($title, $short, $content){
	$db = startdb();
	if(isset($_GET['id'])){
		$view = $_GET['id'];
		$title = $_POST['title'];
		$short = $_POST['short'];
		$content = $_POST['content'];

	if ($title == '')
		return false;

	$result = $db->query("UPDATE lesson2 SET title = '$title', short = '$short', content = '$content' WHERE id='$view'");
	if ( $result) 
	  {
	  header("Location: index.php");
	  }
	  else
	  {
	  echo "<p>Название и содержимое не изменено!: ".$db->error()."</p>";

	  }
}
}



function view_include($fileName, $vars = array()){
	// Устанавливаем переменные
	foreach($vars as $key => $value)
		$$key = $value;

	// Генерация HTML в строку.
	ob_start();
	include $fileName;
	return ob_get_clean();	
}

?>