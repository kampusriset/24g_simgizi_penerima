<?php

require_once __DIR__ . "/../config/database.php";

class PenerimaManfaat
{
    private PDO $conn;

    public function __construct()
    {
        global $conn;
        $this->conn = $conn;
    }

    public function getAll()
    {
        $query = "SELECT *
        FROM penerima_manfaat";

        $statement = $this->conn->prepare($query);

        $statement->execute();

        return $statement->fetchAll(PDO::FETCH_ASSOC);
    }

    public function findById(int $id)
    {
        $query = "SELECT *
        FROM penerima_manfaat
        WHERE id_penerima = :id";

        $statement = $this->conn->prepare($query);

        $statement->execute([
            "id" => $id
        ]);

        return $statement->fetch(PDO::FETCH_ASSOC);
    }

    public function create(
        ?int $id_sekolah,
        string $nama,
        string $nik,
        string $alamat,
        string $status
    ) {
        $query = "
            INSERT INTO penerima_manfaat(
                id_sekolah,
                nama,
                nik,
                alamat,
                status
            )
            VALUES (
                :id_sekolah,
                :nama,
                :nik,
                :alamat,
                :status
            )";

        $statement = $this->conn->prepare($query);

        return $statement->execute([
            "id_sekolah" => $id_sekolah,
            "nama" => $nama,
            "nik" => $nik,
            "alamat" => $alamat,
            "status" => $status
        ]);
    }

    public function update(
        int $id_penerima,
        ?int $id_sekolah,
        string $nama,
        string $nik,
        string $alamat,
        string $status
    ) {
        $query = "
                UPDATE penerima_manfaat
                SET
                    id_sekolah = :id_sekolah,
                    nama = :nama,
                    nik = :nik,
                    alamat = :alamat,
                    status = :status
                WHERE id_penerima = :id_penerima
        ";

        $statement = $this->conn->prepare($query);

        return $statement->execute([
            "id_penerima" => $id_penerima,
            "id_sekolah" => $id_sekolah,
            "nama" => $nama,
            "nik" => $nik,
            "alamat" => $alamat,
            "status" => $status
        ]);
    }

    public function delete(int $id_penerima)
    {
        $query = "
            DELETE FROM penerima_manfaat
            WHERE id_penerima = :id_penerima
        ";

        $statement = $this->conn->prepare($query);

        return $statement->execute([
            "id_penerima" => $id_penerima
        ]);
    }
}
