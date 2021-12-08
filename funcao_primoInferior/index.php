 <?php 
 function enumeroprimo($numero) {
    // 1 nao é primo
    if($numero == 1)
        return false;
    // Como 2 é primo podemos retornar ele
    if($numero == 2)
        return true;

    // Se for diferente e  divisivel por 2 já sabemos que nao é primo
    if($numero % 2 == 0) {
        return false;
    }

    $ceil = ceil(sqrt($numero));
    for($i = 3; $i <= $ceil; $i = $i + 2) {
        if($numero % $i == 0)
            return false;
    }
    return true;
}


function primoInferior($num){
    if($num <=0)
        return 0;
    // Aqui vamos percorrer do valor recebido decrementando ele
    // ate achar o primo mais proximo abaixo dele
    for($i = $num-1; $i >=2; $i --){
        if(enumeroprimo($i))
            return $i;
    }
}

echo "Número 10 = ".primoInferior(10)."<br>";
echo "Número 30 = ".primoInferior(30);