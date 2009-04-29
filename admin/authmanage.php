<?php
require_once '../lib/global.php';
class AuthManagePage {
	public $title;
	public $userinfo;
	public $tbUsername;
	public $tbPassword;
	private $userid;
	private $usersDbHelper;
	private $newsclassDbHelper;
	private $cbNewsClasses;
	private $newsClasses;
	private $rbchecked0;
	private $rbchecked1;
	private $adminname;
	
	function __construct()
	{
		$this->page_load ();
		$this->render ();		
	}
	
	private function page_load() {
		$this->usersDbHelper = new DbHelper ( "pg_admin" );
		$this->newsclassDbHelper = new DbHelper("pg_newsclass");
		if(isset($_GET['userid']))
		{
			$this->userid=$_GET['userid'];
		}
		else 
		{
			$this->userid=$_POST['userid'];
			
		}
		settype($this->userid,'integer');
		$this->title = "用户列表";		
		$newsClassesTemp=$this->newsclassDbHelper->get_many("");
		$i=0;
		while($row=mysql_fetch_object($newsClassesTemp))
		{
			$this->newsClasses[$i]=$row;
			$i++;			
		}
		if (isset ( $_POST ['btnUpdate'] )) {
			$this->btn_update_click ();
		}

		$this->userinfo = $this->usersDbHelper->get_a ( $this->userid );
		$this->init();
	}
	
	private function init()
	{
		$this->adminname=$this->userinfo->adminname;
		if($this->userinfo->level==0)
		{
			$this->rbchecked0="checked=\"checked\"";
		}
		elseif ($this->userinfo->level==1) {
			$this->rbchecked1="checked=\"checked\"";
		}
		$classes=explode(",",$this->userinfo->admincontent);
		foreach ($classes as $c)
		{
			$this->cbNewsClasses['cbNewsClasses'.$c]='on';
		}
	}
	
	private function render() {
		require get_templates ( 'authmanage.htm' );
	}
	
	private function btn_update_click() {
		$temp="";
		$i=0;
		foreach ( $this->newsClasses as $row)
		{
			if(isset($_POST['cbNewsClasses'.$row->id]))
			{
				if($temp=="")
				{
					$temp.=$row->id;
				}
				else 
				{
					$temp.=','.$row->id;	
				}				
			}
			$i++;
		}
		$level=$_POST['level'];
		settype($level,'integer');
		$this->usersDbHelper->update($this->userid,"level=$level,admincontent='$temp'");
	}
}
$users_page = new AuthManagePage ( );
?>