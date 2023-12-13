<?php

/**
 * 
 */
class Coba extends CI_Controller
{
    public function index()
    {
        $this->load->model('Mlogin');

        $data = $this->Mlogin->get_alluser();
        foreach ($data as $mahasiswa) {
            echo "Nama : " . $mahasiswa['username'] . "<br/>";
            echo "Alamat : " . $mahasiswa['password'] . "<hr/>";
        }
    }
}
