<?php
$nomes = ['Francisco Souza', 'Guilherme Rosa', 'Arthur Golveia'];
$cliente1 = new stdClass();
$cliente1->nome = $nomes[0];
$cliente2 = new stdClass();
$cliente2->nome = $nomes[1];
$cliente3 = new stdClass();
$cliente3->nome = $nomes[2];
$cliente1->nascimento = $cliente2->nascimento = $cliente3->nascimento = '';
$arrayDeClientes = [$cliente1, $cliente2, $cliente3];

// código exercicio 1
echo $arrayDeClientes[1]->nome . "\n";

//código do exercicio 2
$arrayDeNascimento = [
'Francisco Souza' => '10-12-1996',
'Arthur Golveia' => '14-01-2000',
'Guilherme Rosa' => '26-05-1985',
'Marcelo Planalto' => '26-05-1985'
];


foreach($arrayDeClientes as $i => $k){
	foreach($arrayDeNascimento as $a => $b){
    	if($k->nome == $a){
       		$k->nascimento = "{$b}";
        }
    
    }
    echo $k->nome . " -> " . $k->nascimento . "\n";
}


//código do exercicio 3
$ord =[];
foreach ($arrayDeClientes as $data) {
    $ord[] = ["nome" => $data->nome,"nascimento" => strtotime($data->nascimento)];
    $timestamps[] = strtotime($data->nascimento);
}

sort($timestamps);

foreach($timestamps as $ordenacao){
	for($c = 0; count($ord) > $c; $c++){
		if($ordenacao == $ord[$c]["nascimento"]){
			$arrayOrdenado[] = ["nome" => $ord[$c]["nome"], "nascimento" => date('d/m/Y', $ordenacao)];
		}
	}
}

foreach($arrayOrdenado as $print){
	echo $print["nome"] . " nascido em " . $print["nascimento"] . PHP_EOL;
}


?>
