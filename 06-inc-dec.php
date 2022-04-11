<?php include 'includes/header.php';


$numero1 = 30;
echo ++$numero1; // suma el incremento antes de visulizar el valor de 30 y por tanto se vería 31
//echo $numero1++; // imprime 30 y luego incrementa

//echo $numero1; // aqui se vería el 31
$numero1 += 5;
echo $numero1;
//
$numero2 = 30;
echo --$numero2;


include 'includes/footer.php';