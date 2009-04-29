<?php
require_once '../lib/global.php';
class UserManagePage {
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
		$this->usersDbHelper = new DbHelper ( "pg_admin" );
		if (isset ( $_POST ['username'] )) {
			$this->tbUsername = $_POST ['username'];
		}
		if (isset ( $_POST ['password'] )) {
			$this->tbPassword = $_POST ['password'];
		}
		if (isset ( $_POST ['btnAddUser'] )) {
			$this->btn_add_user_click ();
		}
		if (isset ( $_GET ['action'] ) && $_GET ['action'] == "delete") {
			$this->link_delete_user_click ();
		}
		$this->title = "用户列表";		
		$this->userinfos = $this->usersDbHelper->get_many ( "" );
	}
	
	private function render() {
		require get_templates ( 'usermanage.htm' );
	}
	
	private function btn_add_user_click() {
		$username= mysql_escape_string($this->tbUsername);
		$password= mysql_escape_string($this->tbPassword);
		$this->usersDbHelper->insert ( 'adminname,password', "'$username','$password'" );
	}
	
	private function link_delete_user_click() {
		$id= mysql_escape_string($_GET ['userid']);
		settype($id,'integer');
		$this->usersDbHelper->delete ($id);
	
	}
}
$users_page = new UserManagePage ( );
?>