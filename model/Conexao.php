<?php
	class Conexao
	{
		public function conectar(){

			$bdservidor = '127.0.0.1';
			$bdusuario = 'root';
			$bdsenha = '';
			$bdbanco = 'MOBLY';
			try{
				$conexao = @mysqli_connect($bdservidor, $bdusuario, $bdsenha, $bdbanco) or die("Não foi possivel conectar");

				if (mysqli_connect_errno($conexao)){
					alert ("Problemas pra conectar");
					die();
				}
				return $conexao;
			}
			catch(Exception $ex)
            {
                alert ("problemas pra conectar");
            }			
		}

		public function cessar(){
			$this->conexao->close();
		}
	}
?> 