<?php
require_once('./modelo/agenda_model.php');
require_once('./core/vista.php');

class Agenda_controlador
{
	var $modelo;
	var $vista;

	function __construct()
	{
		$this->modelo = new agenda_model();
		$this->vista = new vista();
	}

	public function index()
	{
		$data = array();
		$data['titulo'] = 'Mi pagina Web';

		$data['productos'] = $this->modelo->get_all();

		$this->vista->mostrar('agenda/index.php',$data);
	}

	public function editar($id=''){
		if (isset($_POST['ID_PROD'])){
			$data = array(
				"DESCRIPCION" => "'".$_POST['DESCRIPCION']."'",
				"COSTO_UNI" => "'".$_POST['COSTO_UNI']."'",
				"CANTIDAD" => "'".$_POST['CANTIDAD']."'",
				"STOCK_MIN" => "'".$_POST['STOCK_MIN']."'");

			if ($_POST['ID_PROD']) {
				$this->modelo->update($_POST['ID_PROD'], $data);
			}
			else {
				$this->modelo->insert($data);
			}
			header("Location: index.php");
		}
		else {
			$data = array();
			$data['item']['ID_PROD'] = '';
			$data['item']['DESCRIPCION'] = '';
			$data['item']['COSTO_UNI'] = '';
			$data['item']['CANTIDAD'] = '';
			$data['item']['STOCK_MIN'] = '';
			if ($id){
				$data['item'] = $this->modelo->get_by($id);
			}

			$data['titulo'] = 'Mi pagina Web';
			$this->vista->mostrar('agenda/edit.php',$data);
		}
	}

	public function eliminar($id='')
	{
		$this->modelo->delete($id);
		header("Location: index.php");
	}
}
?>