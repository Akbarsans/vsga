<title>P1 Algoritma</title>
<?php
    $masukan_bilangan = 6;

    $cetak_bilangan = "";
    $temp_modulus = 0;
    $temp_modulus = ($masukan_bilangan %2);

IF ( $temp_modulus == 0){
    $cetak_bilangan = $masukan_bilangan . ' bilangan genap';
} else {
    $cetak_bilangan = $masukan_bilangan . ' bilangan ganjil';
}
echo $cetak_bilangan

?>
<br><a class="btn btn-primary" href="../index.html" role="button">Back</a>