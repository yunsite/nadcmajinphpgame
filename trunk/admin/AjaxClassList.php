<?php
require_once '../lib/global.php';
require_once '../lib/pingyin.php';
class ACLPage {
	public $classList;
	private $classDbHelper;
	function __construct()
	{
		$this->page_load ();
		$this->render ();		
	}	
	private function page_load() {
		$this->classDbHelper = new DbHelper ( "pg_gameclass" );
		$this->classList=$this->classDbHelper->get_many("id>0 order by rank desc");
	}
	
	private function render() {
		require get_templates ( 'AjaxClassList.html' );		
	}
	
}
$acl_page = new ACLPage ();

?>