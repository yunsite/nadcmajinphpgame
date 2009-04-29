<?php
require_once '../lib/global.php';
require_once '../lib/pingyin.php';
class EditLinkPage {
	public $classList;
	public $js;
	public $page;
	public $link;
	public $nowClass;
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
		if(isset($_GET['page'])&&isset($_GET['id'])){
			if($_GET['page']=='link'){
				$this->page='link';
				$this->link=$this->gameDbHelper->get_a($_GET['id']);
			}else{
				$this->page='class';
				$this->nowClass=$this->classDbHelper->get_a($_GET['id']);			
			}
		}
		if (isset ( $_POST['addgame'] )) {
			if(isset($_POST ['gameName'])&&isset($_POST ['urlColor'])&&isset($_POST ['gameRank'])&&isset($_POST ['gameUrl'])&&isset($_POST ['gameClass']))
			{
				$gameName=mysql_escape_string($_POST ['gameName']);
				$urlColor=mysql_escape_string($_POST ['urlColor']);
				$gameRank=mysql_escape_string($_POST ['gameRank']);
				$gameUrl=mysql_escape_string($_POST ['gameUrl']);
				$gameClass=mysql_escape_string($_POST ['gameClass']);
				$firstword=mysql_escape_string(substr(c($gameName),0,1));
				if($this->gameDbHelper->update ($this->link->id, "gamename='$gameName',color='$urlColor',rank='$gameRank',gameUrl='$gameUrl',classid='$gameClass',firstword='$firstword'" ))
				{
					$this->js= "<script>GotoOtherPage('AjaxGameList.php?id=".$_POST ['gameClass']."','操作成功！')</script>";
				}
				else
				{
					echo "<script>alert('修改失败，请重试');</script>";
				}
			}			
		}
		if (isset ( $_POST ['addclass'] )) {
			if(isset($_POST ['className'])&&isset($_POST ['classRank']))
			{
				$className=mysql_escape_string($_POST ['className']);
				$classRank=mysql_escape_string($_POST ['classRank']);
				if($this->classDbHelper->update ( $this->nowClass->id, "className='$className',rank='$classRank'" ))
				{
					$this->js= "<script>GotoOtherPage('AjaxGameManage.php','操作成功！')</script>";
				}
				else
				{
					echo "<script>alert('修改失败，请重试');</script>";
				}
			}		
		}
		$this->classList=$this->classDbHelper->get_many("id>0 order by rank desc");	
	}
	
	private function render() {
		require get_templates ( 'EditLink.html' );		
	}
	
}
$editlink_page = new EditLinkPage ();

?>