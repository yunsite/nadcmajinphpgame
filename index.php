<?php
require_once 'lib/global.php';
class GamePage {
	public $title;
	private $newsDbHelper;
	function __construct() {
		$this->page_load ();
		$this->render ();
	}
	
	private function page_load() {
		$this->newsDbHelper = new DbHelper ( "pg_news" );
		
		$this->title = "易乐游";
		$this->newsOfClass1 = $this->newsDbHelper->get_many ( " classid=1 order by date desc" );
		$this->newsOfClass2 = $this->newsDbHelper->get_many ( " classid=2 order by date desc" );
		$this->newsOfClass3 = $this->newsDbHelper->get_many ( " classid=3 order by date desc" );
		$this->newsOfClass4 = $this->newsDbHelper->get_many ( " classid=4 order by date desc" );
		$this->newsOfClass5 = $this->newsDbHelper->get_many ( " classid=5 order by date desc" );
		$this->newsOfClass6 = $this->newsDbHelper->get_many ( " classid=6 order by date desc" );
		$this->newsOfClass7 = $this->newsDbHelper->get_many ( " classid=7 order by date desc" );
		$this->newsOfClass8 = $this->newsDbHelper->get_many ( " classid=8 order by date desc" );
		$this->newsOfClass9 = $this->newsDbHelper->get_many ( " classid=9 order by date desc" );
		$this->newsOfClass10 = $this->newsDbHelper->get_many ( " classid=10 order by date desc" );
		$this->newsOfClass11 = $this->newsDbHelper->get_many ( " classid=11 order by date desc" );
		$this->newsOfClass12 = $this->newsDbHelper->get_many ( " classid=12 order by date desc" );
		
	}
	
	private function render() {
		require get_templates ( 'game.html' );
	}
}
$game_page = new GamePage ( );
?>