<?php
    require_once 'bmi.php';
    require_once 'pasien.php';

    class BMIPasien extends BMI{
        public $tanggal;
        public $pasien;
        function __construct($id, $tanggal, $kode, $nama, $tmp_lahir, $tgl_lahir, $email, $gender, $bb, $tb){
            parent::__construct($bb, $tb);
            $this->tanggal = $tanggal;
            $this->pasien = new Pasien($id, $kode, $nama, $tmp_lahir, $tgl_lahir, $email, $gender);
        }
    }