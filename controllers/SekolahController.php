<?php

require_once __DIR__ . "/../models/Sekolah.php";

class SekolahController
{
    private Sekolah $model;

    public function __construct()
    {
        $this->model = new Sekolah();
    }

    public function store()
    {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {

            $nama_sekolah =
                strtoupper($_POST['nama_sekolah'] ?? '');

            $alamat =
                $_POST['alamat_sekolah'] ?? '';

            $jenjang =
                $_POST['jenjang'] ?? '';

            $this->model->create(
                $nama_sekolah,
                $alamat,
                $jenjang
            );

            $newSchool =
                $this->model->getLastInserted();

            echo json_encode([
                "success" => true,
                "school" => $newSchool
            ]);

            exit;
        }
    }
}
