<?php
require_once '../lib/global.php';
class NewsList
{
    public $pagetitle;
    public $newsinfos;
    private $newsDbHelper;
    
    function __construct()
	{
		$this->page_load ();
		$this->render ();		
	}
	private function page_load()
	{
	    $this->newsDbHelper=new DbHelper("pg_news");
	    $this->pagetitle = "新闻列表";		
		$this->newsinfos = $this->newsDbHelper->get_many ( "id>0 order by id desc" );
	}
	private function render()
	{
	    require get_templates ( 'NewsList.html' );
	}
}
$newslist_page=new NewsList();
 ?>