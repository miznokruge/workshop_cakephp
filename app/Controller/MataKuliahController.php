<?php

App::uses("AppController", 'Controller');

Class MataKuliahController extends AppController {

    //index
    //add
    //edit
    //delete
    //fdsf
    //dsfdsf
    public function index($nama, $email, $alamat, $jk) {
        //$nama = 'najla';
        //$email = 'najla@gmail.com';
        //$alamat = 'citra raya';
        //$this->set('nama_panggilan', $nama);  //satu variabel
        //muplti/banyak
        $inisial = $this->getInisial($nama);

        $this->set(compact('nama', 'email', 'alamat', 'jk', 'inisial'));
    }

    private function getInisial($str) {
        return substr($str, 0, 1);
    }

}
