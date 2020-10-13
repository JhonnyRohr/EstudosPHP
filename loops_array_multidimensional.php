<html>
	<head>
		<title>Array Multidimensional</title>
	</head>
	<body>
		<?php 
			//Preenchimento das arrays
			$registros = array(
				array('titulo' => 'Título Notícia 1', 'conteudo' => 'Conteúdo Notícia 1'),
				array('titulo' => 'Título Notícia 2', 'conteudo' => 'Conteúdo Notícia 2'),
				array('titulo' => 'Título Notícia 3', 'conteudo' => 'Conteúdo Notícia 3'),
				array('titulo' => 'Título Notícia 4', 'conteudo' => 'Conteúdo Notícia 4'),
			);

			//Apresentação das arrays preenchidas
			echo '<pre>';
			print_r($registros);
			echo '</pre>';
			echo '<br /> <br /> <br />';

			//Contando a quantidade de elementos existentes, usando laços
			echo '<h2>' . 'O array possui: ' . count($registros) . ' registros' . '</h2>';
			$idx = 0;

			/*
			echo '<h2>' . 'Utilizando o laço WHILE' . '</h2>';
			echo '<hr />';
			while($idx < count($registros)){
				echo '<h3>' . $registros[$idx]['titulo'] . '</h3>';
				echo '<p>'. $registros[$idx]['conteudo'] . '</p>';
				echo '<hr />';
				$idx++;
			}
			*/

			/*
			//Utilizando o laço DO WHILE
			echo '<h2>' . 'Utilizando o laço DO WHILE' . '</h2>';
			echo '<hr />';
			do {
				echo '<h3>' . $registros[$idx]['titulo'] . '</h3>';
				echo '<p>'. $registros[$idx]['conteudo'] . '</p>';
				echo '<hr />';
				$idx++;
			}while($idx < count($registros));
			*/

			//Utilizando o laço FOR
			echo '<h2>' . 'Utilizando o laço FOR' . '</h2>';
			echo '<hr />';
			for($idx=0; $idx < count($registros); $idx++){
				echo '<h3>' . $registros[$idx]['titulo'] . '</h3>';
				echo '<p>'. $registros[$idx]['conteudo'] . '</p>';
				echo '<hr />';
			}
		?>
	</body>
</html>