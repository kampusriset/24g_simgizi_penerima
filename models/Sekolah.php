<?php

require_once __DIR__ . "/../config/database.php";

class Sekolah
{
    private PDO $conn;

    public function __construct()
    {
        global $conn;
        $this->conn = $conn;
    }

    public function getAll()
    {
        $query = "
            SELECT *
            FROM sekolah
            ORDER BY nama_sekolah ASC
        ";

        $statement = $this->conn->prepare($query);

        $statement->execute();

        return $statement->fetchAll(PDO::FETCH_ASSOC);
    }

    public function getLastInserted()
    {
        $query = "
            SELECT *
            FROM sekolah
            ORDER BY id_sekolah DESC
            LIMIT 1
        ";

        $statement = $this->conn->prepare($query);

        $statement->execute();

        return $statement->fetch(PDO::FETCH_ASSOC);
    }

    public function create(
        string $nama_sekolah,
        string $alamat,
        string $jenjang
    ) {
        $query = "
            INSERT INTO sekolah (
                nama_sekolah,
                alamat,
                jenjang
            )
            VALUES (
                :nama_sekolah,
                :alamat,
                :jenjang
            )
        ";

        $statement = $this->conn->prepare($query);

        return $statement->execute([
            "nama_sekolah" => $nama_sekolah,
            "alamat" => $alamat,
            "jenjang" => $jenjang
        ]);
    }
}