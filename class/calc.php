<?php

class Promotion {
    public $vehicle_id;

    function __construct($vehicle_id)
    {
        $this->vehicle_id = $vehicle_id;
    }

    function __destruct()
    {
        if($this->vehicle_id == 1) {
            echo 'Selamat! Anda mendapatkan diskon untuk kendaraan ini!';
        } else {
            echo 'Eweuh diskon';
        }
    }
}
