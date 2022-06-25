<?php

class About{

    public function index($nama = 'Tono', $pekerjaan = 'Main')
    {
        echo "nama saya adalah $nama, pekerjaan saya adalah $pekerjaan";
    }

    public function page()
    {
        echo 'About';
    }
}