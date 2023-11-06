<?php
class menu
{
	private $menu;
	private $dbh;

	public function __construct()
	{
		$this->menu = array();
		$this->dbh = new PDO('mysql:host=localhost;dbname=bd_carlitosfood', "root", "");
	}

	private function set_names()
	{
		return $this->dbh->query("SET NAMES 'utf8'");
	}

	public function lista_menu()
	{
		self::set_names();
		$sql="select * from tbl_menu ";
		foreach ($this->dbh->query($sql) as $res)
		{
			$this->menu[]=$res;
		}
		return $this->menu;
		$this->dbh=null;
	}
}
?>