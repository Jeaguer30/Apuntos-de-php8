<?php

class Conexion{

	static public function conectar(){
		#PDO es mas seguro
		$link = new PDO("mysql:host=localhost;dbname=pos",
			            "root",
			            "");
		/* exect metodos latinos recibidos sin problemas (ñ,ll */
		$link->exec("set names utf8");

		return $link;

	}

}
