<?php

require_once('conexion.php');

Class Cliente extends Conexion {


	public function registrarCliente($nomb, $ci, $dir, $correo, $tlf, $nombreEmpresa, $comentarios){
		parent::conectar();

		$consulta = 'select cedula from clientes where cedula="'.$ci.'"';

		$resultado = $this->verificarRegistros($consulta);

		if ($resultado > 0) {
			echo 'error_4';
		}else{
			$insert = 'insert into clientes values ("null","'.$nomb.'","'.$ci.'","'.$dir.'", "'.$correo.'","'.$tlf.'","'.$nombreEmpresa.'","'.$comentarios.'")';
			$this->registrarUsuario($insert);
		}
		parent::cerrar();       

	}

}

?>