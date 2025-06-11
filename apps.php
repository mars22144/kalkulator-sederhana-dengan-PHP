<?php
    echo "===== kalkulator sederhana =====".PHP_EOL;

    echo "masukkan angka pertama :";
    $angka1 = (float) trim(fgets(STDIN));

    echo "masukkan angka kedua :";
    $angka2 = (float)trim(fgets(STDIN));

    echo "masukkan opertatornya(+, -, *, /, %) :";
    $operator = trim(fgets(STDIN));

    $hasil = 0;

    if($operator == "+"){
        $hasil = $angka1 + $angka2;
        echo "hasilnya $angka1 + $angka2 = $hasil".PHP_EOL;
    }elseif($operator == "-"){
        $hasil = $angka1 - $angka2;
        echo "hasilnya $angka1 - $angka2 = $hasil".PHP_EOL;
    }elseif($operator == "/"){
        $hasil = $angka1 / $angka2;
        echo "hasilnya $angka1 / $angka2 = $hasil".PHP_EOL;
    }elseif($operator == "*"){
        $hasil = $angka1 * $angka2;
        echo "hasilnya $angka1 * $angka2 = $hasil".PHP_EOL;
    }elseif($operator == "%"){
        $hasil = $angka1 % $angka2;
        echo "hasilnya $angka1 % $angka2 = $hasil".PHP_EOL;
    }else{
        echo "operator salah".PHP_EOL;
    }

    echo "===== KALKULATOR SEDERHANA DENGAN PHP ====="

?>