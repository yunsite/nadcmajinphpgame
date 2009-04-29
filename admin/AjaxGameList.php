<?php
require_once '../lib/global.php';
require_once '../lib/pingyin.php';
class AGLPage {
	public $classList;
	public $linkList;
	public $nowClass;
	public $nowClassName;
	private $gameDbHelper;
	private $classDbHelper;
	function __construct()
	{
		$this->page_load ();
		$this->render ();		
	}	
	private function page_load() {
		$this->classDbHelper = new DbHelper ( "pg_gameclass" );
		$this->gameDbHelper=new DbHelper ("pg_gamelink");
		$this->classList=$this->classDbHelper->get_many("id>0 order by rank desc");
		$this->nowClass=mysql_fetch_object($this->classList);
		$this->classList=$this->classDbHelper->get_many("id>0 order by rank desc");
		if (isset ( $_GET ['id'] )) {
			$this->nowClass=$this->classDbHelper->get_a($_GET ['id']);
		}
		$this->nowClassName=$this->nowClass->classname;
		$this->linkList=$this->gameDbHelper->get_many('classid='.$this->nowClass->id.' order by rank desc');
	}
	
	private function render() {
		require get_templates ( 'AjaxGameList.html' );		
	}
	
}
$agl_page = new AGLPage ();

?>