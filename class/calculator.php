<?php
class Kalkulator{
    public $bilangan1;
    public $bilangan2;
    public $tambah;
    

    function tambah($bilangan1, $bilangan2){
        $tambah = $bilangan1 + $bilangan2;
    }

    function kurang($bilangan1, $bilangan2){
        $kurang = $bilangan1 - $bilangan2;

    }
    function kali($bilangan1, $bilangan2){
        $kali = $bilangan1 * $bilangan2;

    }
    function bagi($bilangan1, $bilangan2){
        $bagi = $bilangan1 / $bilangan2;
    }

}
