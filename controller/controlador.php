<?php
	require_once("../model/modelo.php");
	$menu = new menu();
	$pd = $menu->lista_menu();
	require_once("../view/vista.php");
?>