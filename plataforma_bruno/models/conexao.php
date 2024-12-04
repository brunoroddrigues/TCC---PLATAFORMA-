<?php
	abstract class Conexao
	{
		
		public function __construct(protected $db = null)
		{
			$parametros = "mysql:host=localhost;dbname=ArtesMarciais;charset=utf8mb4";
			try
			{
				$this->db = new PDO($parametros, "root", "");
			}
			catch(PDOExeception $e)
			{
				echo $e->getCode();
				echo $e->getMessage();
				echo "Problema na abertura de conexão com o banco de dados";
			}
		
		}
	}//fim classe
?>