<?php
//carregando o XML com os dados da distribuidora
$xml = simplexml_load_file('dados(2).xml');

//percorrer o vetor para verificar os dias em que houveram faturamento
foreach($xml->row as $registro)
{
    $dia = trim($registro->dia);
    $valor = trim($registro->valor);
    //se o faturamento for maior que zero, será registrado
    if($registro->valor > 0)
    {
        $dias_faturados[$dia] = $valor;
    }
    
}

//O menor valor de faturamento ocorrido em um dia do mês:
$menor_valor = min($dias_faturados);

//O maior valor de faturamento ocorrido em um dia do mês:
$maior_valor = max($dias_faturados);

//verificando o faturamento médio
$qtd_dias = count($dias_faturados);
$faturamento_mes = array_sum($dias_faturados);
$faturamento_medio = $faturamento_mes / $qtd_dias;

//Número de dias no mês em que o valor de faturamento diário foi superior à média mensal:
foreach($dias_faturados as $dia => $valor)
{
    if($valor > $faturamento_medio)
    {
        $dias[] = $dia;
    }
}
$dias_acima_media = count($dias);

echo '<br><b>O menor valor de faturamento ocorrido em um dia do mês:</b> R$ '.number_format($menor_valor, 2, ',', '.');
echo '<br><br><b>O maior valor de faturamento ocorrido em um dia do mês:</b> R$ '.number_format($maior_valor, 2, ',', '.');
echo '<br><br><b>Número de dias no mês em que o valor de faturamento diário foi superior à média mensal:</b> '.$dias_acima_media;
?>