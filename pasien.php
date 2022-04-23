<?php
    class Pasien {
        public $id;
        public $tanggal;
        public $kode;
        public $nama;
        public $gender;
        public $tmp_lahir;
        public $tgl_lahir;
        public $email;
    }

    $p1 = ['tanggal'=>'2022-01-10', 'kode'=>'P001', 'nama'=>'Aldebaran', 'gender'=>'Laki-laki', 'bb'=>69.8, 'tb'=>169, 'bmi'=>24.7, 'hasil'=>'Kelebihan Bobot'];
    $p2 = ['tanggal'=>'2022-01-10', 'kode'=>'P002', 'nama'=>'Polaris', 'gender'=>'Laki-laki', 'bb'=>55.3, 'tb'=>165, 'bmi'=>20.3, 'hasil'=>'Ideal'];
    $p3 = ['tanggal'=>'2022-01-11', 'kode'=>'P003', 'nama'=>'Spark', 'gender'=>'Perempuan', 'bb'=>45.2, 'tb'=>171, 'bmi'=>15.4, 'hasil'=>'Kurus'];
    $ps = [$p1, $p2, $p3];
?>

