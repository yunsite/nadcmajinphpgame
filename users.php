<?php
require_once 'lib/global.php';
class UsersPage {
	public $title;
	public $userinfos;
	public $tbUsername;
	public $tbPassword;
	private $usersDbHelper;
	function __construct()
	{
		$this->page_load ();
		$this->render ();		
	}
	
	private function page_load() {
		$this->usersDbHelper = new DbHelper ( "pg_userbase" );
		if (isset ( $_POST ['username'] )) {
			$this->tbUsername=$_POST['username'];
		}
		if (isset ( $_POST ['password'] )) {
			$this->tbPassword = $_POST ['password'];
		}
		if (isset ( $_POST ['btnAddUser'] )) {
			$this->btn_add_user_click ();
		}
		$this->title = "用户列表";		
		$this->userinfos = $this->usersDbHelper->get_many ( "" );
	}
	
	private function render() {
		require get_templates ( 'users.htm' );
	}
	
	private function btn_add_user_click() {
		$username= mysql_escape_string($this->tbUsername);
		$password= mysql_escape_string($this->tbPassword);
		$this->usersDbHelper->insert ( 'username,password', "'$username','$password'" );
	}
}
$users_page = new UsersPage ( );

?>