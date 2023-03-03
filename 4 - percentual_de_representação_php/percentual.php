<?php
ini_set('display_errors', 1);
ini_set('display_startup_erros',1);
error_reporting(E_ALL);

//faturamento mensal detalhado por estado:
$faturamento = [
    "SP" => 67836.43,
    "RJ" => 36678.66,
    "MG" => 29229.88,
    "ES" => 27165.48,
    "OUTROS" => 19849.53,
];

//total do faturamento da empresa
$valor_total = array_sum($faturamento);

echo "Percentual de representação que cada estado teve dentro do valor total mensal da distribuidora:<br><br>";

//calcula o percentual de representação que cada estado
foreach($faturamento as $chave => $valor)
{
    $percentual = ($valor / $valor_total) * 100;
    echo "$chave - ".number_format($percentual, 2, ',', '')."%<br>";
}
?>