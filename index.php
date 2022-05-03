<?php

function calc_imc($peso,$altura){
$peso;
$altura;
$total = $peso/($altura*$altura);

 if($total < 16){
    echo"Destnutrição grau 3";
} elseif($total >= 16 && $total <17){
    echo"Destnutrição grau 2";
} elseif($total >= 17 && $total <18.5){
    echo"Destnutrição grau 1";
} elseif($total >= 18.5 && $total <24.9){
    echo"Normal";
} elseif($total >= 25 && $total <30){
    echo"Sobrepeso";
} elseif($total >= 30 && $total <35){
    echo"Obesidade Grau 1 ";
} elseif($total >= 35 && $total <40){
    echo"Obesidade Grau 2 ";
} elseif($total > 40){
    echo"Obesidade Grau 3";
}


}

//echo calc_imc(65,1.9);

?>