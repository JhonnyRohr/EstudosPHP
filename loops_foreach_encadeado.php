<html>
	<head>
		<title>Loop Foreach</title>
	</head>
	<body>
		<?php 
			
			//Preenchimento da array
			$funcionarios = array(
				array('nome' => 'João', 'salario' => 2500),
				array('nome' => 'Maria', 'salario' => 3000),
				array('nome' => 'Ana', 'salario' => 2000)
			);

			//Verificação das informações 
			echo '<pre>';
			print_r($funcionarios);
			echo '</pre>';

			//Coletando informações dentro da array
			foreach ($funcionarios as $idx => $funcionario) {
				foreach ($funcionario as $idx2 => $info_funcinario) {
					echo "$idx2 - $info_funcinario <br />";
				}
				echo "<hr>";
			}
		?>
	</body>
</html>