<?php
    class BMI {
        public $berat;
        public $tinggi;

        function __construct($berat, $tinggi){
            $this->berat = $berat;
            $this->tinggi = $tinggi;
        }

        function bmi() {
            $bmi = $this->berat / ($this->tinggi)**2;
            return $bmi;
        }
    }

    function hitung($bmi) {
        if ($bmi < 18.5) {
            echo "<img src='dist/img/kurus.png' width='275'/><br/>";
            return 'Kurus<br/>';
            return "Sebagai solusinya, Anda membutuhkan asupan kalori tambahan
            sebanyak 300-500 kkal per hari. Perbaiki juga pola makan dan pola hidup 
            untuk mendapatkan berat badan ideal.";
        } elseif ($bmi <= 24.9) {
            echo "<img src='dist/img/normal.png' width='275'/> <br/>";
            return 'Ideal<br/>';
        } elseif ($bmi <= 26.9) { // <= 29.9
            echo "<img src='dist/img/lebih.png' width='275'/> <br/>";
            return 'Kelebihan bobot<br/>';
        } elseif ($bmi <= 29.9) { // <= 39.9
            echo "<img src='dist/img/ob.png' width='275'/> <br/>";
            return 'Obesitas 1<br/>';
        } else {
            echo "<img src='dist/img/ob2.png' width='275'/> <br/>";
            return 'Obesitas 2<br/>';
        }
    }

?>
<link rel="stylesheet" href="dist/css/adminlte.css">