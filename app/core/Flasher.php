<?php

class Flasher{

    public static function setFlash($pesan, $aksi, $tipe)
    {
        // Preparing Session
        $_SESSION['flash'] = [
            'pesan' => $pesan,
            'aksi' => $aksi,
            'tipe' => $tipe
        ];
    }

    public static function flash()
    {
        if( isset($_SESSION['flash']) )
        {
            // Showing the result
            echo '<div class="alert alert-' . $_SESSION['flash']['tipe'] . ' alert-dismissible fade show" role="alert">
                    Data Mahasiswa <strong>' . $_SESSION['flash']['pesan'] . ' </strong>' . $_SESSION['flash']['aksi'] . '
                </div>';

            // Unset session
            unset($_SESSION['flash']);
        }
    }
}