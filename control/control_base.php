<?php
//
// Базовый контроллер сайта.
//
abstract class control_base extends control_general
{
	protected $title;		// заголовок страницы
	protected $content;		// содержание страницы

	//
	// Конструктор.
	//
	function __construct()
	{		
	}
	
	protected function before()
	{
		$this->title = 'php2-5';
		$this->content = '';
	}
	
	//
	// Генерация базового шаблонаы
	//	
	public function render()
	{
		$vars = array('title' => $this->title, 'content' => $this->content);	
		$page = $this->Template('template/v_main.php', $vars);				
		echo $page;
	}	
}