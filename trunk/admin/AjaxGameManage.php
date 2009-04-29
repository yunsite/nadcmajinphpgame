<?php
require_once '../lib/global.php';
require_once '../lib/pingyin.php';
class AGMPage {
	public $classList;
	public $js;
	private $gameDbHelper;
	private $classDbHelper;
	function __construct()
	{
		$this->page_load ();
		$this->render ();		
	}
	
	private function page_load() {
		$this->classDbHelper = new DbHelper ( "pg_gameclass" );
		if (isset ( $_POST ['addgame'] )) {
			if(isset($_POST ['gameName'])&&isset($_POST ['urlColor'])&&isset($_POST ['gameRank'])&&isset($_POST ['gameUrl'])&&isset($_POST ['gameClass']))
			{
				$this->gameDbHelper=new DbHelper ("pg_gamelink");
				$gameName=mysql_escape_string($_POST ['gameName']);
				$urlColor=mysql_escape_string($_POST ['urlColor']);
				$gameRank=mysql_escape_string($_POST ['gameRank']);
				$gameUrl=mysql_escape_string($_POST ['gameUrl']);
				$gameClass=mysql_escape_string($_POST ['gameClass']);
				$firstword=mysql_escape_string(substr(c($gameName),0,1));
				if($this->gameDbHelper->insert ( 'gamename,color,rank,gameUrl,classid,firstword', "'$gameName','$urlColor','$gameRank','$gameUrl','$gameClass','$firstword'" ))
				{
					$this->js= "<script>GotoOtherPage('AjaxGameList.php?id=".$_POST ['gameClass']."','操作成功！')</script>";
				}
				else
				{
					echo "<script>alert('添加失败，请重试');</script>";
				}
			}			
		}
		if (isset ( $_POST ['addclass'] )) {
			if(isset($_POST ['className'])&&isset($_POST ['classRank']))
			{
				$className=mysql_escape_string($_POST ['className']);
				$classRank=mysql_escape_string($_POST ['classRank']);
				if($this->classDbHelper->insert ( 'className,rank', "'$className','$classRank'" ))
				{
					$this->js= "<script>GotoOtherPage('AjaxGameManage.php','操作成功！')</script>";
				}
				else
				{
					echo "<script>alert('添加失败，请重试');</script>";
				}
			}		
		}
		$this->classList=$this->classDbHelper->get_many("id>0 order by rank desc");	
	}
	
	private function render() {
		require get_templates ( 'AjaxGameManage.html' );		
	}
	
}
$agm_page = new AGMPage ();

?>