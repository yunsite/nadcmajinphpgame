<?php
class DbHelper
{
	public $table="";
	function __construct($table)
	{
		$this->table=$table;
	}

	public function get_many($condition)
	{
		require_once 'DbCon.php';
		$table=$this->table;
		if($condition!="")
		{
			$result=mysql_query("select * from $table where $condition");
		}
		else 
		{
			$result=mysql_query("select * from $table");
		}
		return $result;	
	}
	
	public function get_a($id)
	{
		require_once 'DbCon.php';
		$table=$this->table;
		$result=mysql_query("select * from $table where id=$id");
		return mysql_fetch_object($result);	
	}

	public function delete($id)
	{
		require_once 'DbCon.php';
		$table=$this->table;
		$result=mysql_query("delete from $table where id=$id");
		return $result;	
	}
	
	public function querySql($sql)
	{
		require_once 'DbCon.php';
		$result=mysql_query($sql);
		return $result;	
	}
	public function update($id,$set)
	{
		require_once 'DbCon.php';
		$table=$this->table;
		$result=mysql_query("update $table set $set where id=$id");
		return $result;	
	}
	
	public function insert($keys,$values)
	{
		require_once 'DbCon.php';
		$table=$this->table;
		$result=mysql_query("insert into $table ($keys) values ($values)");
		return $result;	
	}
}
?>