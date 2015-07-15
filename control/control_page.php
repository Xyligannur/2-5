<?php

include_once('./module/connect.php');
include_once('./module/function.php');

class control_page extends control_base
{
	
	public function action_index(){
		$this->title .= ' - Все статьи';
		$this->content = $this->Template('template/v_index.php');	
	}

	public function action_view(){
		$this->title .= ' - Просмотр статьи';
		$this->content = $this->Template('template/v_view.php');	
	}


	public function action_edit(){
		$this->title .= ' - Редактирование статьи';
		
	if (!empty($_POST)){

	if (edit($_POST['title'], $_POST['short'], $_POST['content'])){

		header('Location: index.php');
		die();
	}
	
		$title = $_POST['title'];
		$short = $_POST['short'];
		$content = $_POST['content'];
		$error = true;
	
	}else{
		$title = '';
		$short = '';
		$content = '';
		$error = false;
	}
		$article = articles_get($id_article);//Не могу понять 
		edit($title, $short, $content);//  чего Нотисы жалуются
		$this->content = $this->Template('template/v_edit.php', array('article' => $article, 'title' => $title, 'short' => $short, 'content' => $content));
	}

		public function action_delete(){
		if(isset($_GET['id'])){
			$id=($_GET['id']);
	}

		delete_art($id);
		header("Location: index.php");	
	}


		public function action_add(){

		$this->title .= ' - Добавление статьи';
		if (!empty($_POST))
	{
	if (articles_add($_POST['title'], $_POST['short'], $_POST['content'])){

		header('Location: index.php');
		die();
	}
	
	$title = $_POST['title'];
	$short = $_POST['short'];
	$content = $_POST['content'];
	$error = true;
	
	}else{

	$title = '';
	$short = '';
	$content = '';
	$error = false;
	}
		$this->content = $this->Template('template/v_add.php');	
	}
}
