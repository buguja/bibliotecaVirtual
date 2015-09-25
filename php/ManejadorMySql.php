<?php
	 /*
	  * Programador: Javier Burón Gutiérrez.
	  * Fecha: Septiembre/2015
	  * correo: javier_buron_gtz@outlook.com
	  * Descripción: Manejador de base de datos, orientado a objetos V0.1
	  */

	class ManejadorMySql{
		private $host= "localhost";
		private $user= "root";
		private $pass= "1991";
		private $bd= "biblioteca";
		private $port= "3306";
		private $mysqli;
		
		public function abrirConexion(){
			$this->mysqli= new mysqli($this->host, $this->user, $this->pass, $this->bd, $this->port);
			if(mysqli_connect_errno()){
				return "Falló la conexión: ". mysqli_connect_error();
			}
			return true;
		}
		
		public function realizarConsulta($sql){
			$this->mysqli->set_charset("utf8");
			return $this->mysqli->query($sql);
		}
		
		public function cerrarConexion(){
			$this->mysqli->close();
		}
	}	
?>