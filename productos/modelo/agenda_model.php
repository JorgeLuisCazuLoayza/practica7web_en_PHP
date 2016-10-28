<?php
require_once('./core/DB_model.php');
/**
*
*/
class Agenda_model extends DB_model
{

	function __construct()
	{
		parent::__construct();
		$this->table = "productos";
	}
}
?>