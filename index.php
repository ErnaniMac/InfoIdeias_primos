<?php

# Retorna os números primos compreendidos entre um intervalo de inteiros
/**
 * @param int $inicial
 * @param int $final
 * @return string
 */
function primos(int $inicial, int $final): string
{
    $inicial = abs($inicial);
    $final = abs($final);

    if (($inicial + 1) == $final) {
        return "Erro! Insira um intervalo de inteiros que possua no mínimo um valor entre eles.";
    } else if ($inicial >= $final) {
        return "Erro! O valor inicial não pode ser igual ou maior que o valor final.";
    }

    $arrayPrimos = [];
    $inicial++;
    for ($inicial; $inicial < $final; $inicial++) {
        $isPrimo = true;
        for ($divider = 2; $divider < $inicial; $divider++) {
            if ($inicial % $divider == 0 ) {
                $isPrimo = false;
            }
        }
        
        if ($isPrimo) $arrayPrimos[] = $inicial;
    }

    $countPrimos = count($arrayPrimos);
    $stringPrimos = implode(", ", $arrayPrimos);

    if ($countPrimos == 0) return "Nenhum número primo encontrado.";

    return $countPrimos == 1 
    ? "Encontrado " . $countPrimos . " número primo, é ele: " . $stringPrimos
    : "Encontrados " . $countPrimos . " números primos, são eles: " . $stringPrimos;
}



echo primos(10, 29) . "<br/>";
echo primos(7, 7) . "<br/>";
echo primos(8, 7) . "<br/>";
echo primos(7, 8) . "<br/>";
echo primos(7, 10) . "<br/>";


 