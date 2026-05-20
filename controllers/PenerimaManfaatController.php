<?php
require_once __DIR__ . "/../models/PenerimaManfaat.php";
require_once __DIR__ . "/../models/Sekolah.php";

class PenerimaManfaatController
{
    private PenerimaManfaat $model;

    public function __construct()
    {
        $this->model = new PenerimaManfaat();
    }

    public function index()
    {
        $data = $this->model->getAll();
        $sekolahModel = new Sekolah();
        $sekolah = $sekolahModel->getAll();
        require_once __DIR__ . "/../views/penerima.php";
    }

    public function create()
    {
        require_once __DIR__ . "/../views/form.create.penerima.php";
    }

    public function store()
    {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $id_sekolah = !empty($_POST['id_sekolah']) ? (int)$_POST['id_sekolah'] : 0;
            $nama       = $_POST['nama'] ?? '';
            $nik        = $_POST['nik'] ?? '';
            $alamat     = $_POST['alamat'] ?? '';
            $status     = $_POST['status'] ?? 'aktif';

            $this->model->create($id_sekolah, $nama, $nik, $alamat, $status);

            header("Location: index.php?route=/");
            exit;
        }
    }

    public function edit()
    {
        $id = $_GET['id'] ?? null;

        if ($id) {
            $penerima = $this->model->findById((int)$id);

            if ($penerima) {
                require_once __DIR__ . "/../views/form.edit.penerima.php";
            } else {
                header("Location: index.php?route=/");
                exit;
            }
        } else {
            header("Location: index.php?route=/");
            exit;
        }
    }

    public function update()
    {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $id_penerima = !empty($_POST['id_penerima']) ? (int)$_POST['id_penerima'] : 0;

            $id_sekolah  = !empty($_POST['id_sekolah']) ? (int)$_POST['id_sekolah'] : 0;
            $nama        = $_POST['nama'] ?? '';
            $nik         = $_POST['nik'] ?? '';
            $alamat      = $_POST['alamat'] ?? '';
            $status      = $_POST['status'] ?? 'aktif';

            if ($id_penerima > 0) {
                $this->model->update($id_penerima, $id_sekolah, $nama, $nik, $alamat, $status);
            }

            header("Location: index.php?route=/");
            exit;
        }
    }

    public function destroy()
    {
        $id = $_GET['id'] ?? null;

        if ($id) {
            $this->model->delete((int)$id);
        }

        header("Location: index.php?route=/");
        exit;
    }
}
