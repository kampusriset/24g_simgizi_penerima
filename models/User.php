<?php

require_once __DIR__ . '/../config/database.php';

class User
{
    private PDO $conn;

    public function __construct()
    {
        global $conn;
        $this->conn = $conn;
    }

    public function create(
        string $nama,
        string $username,
        string $password,
        string $role
    ) {

        $query = "
            INSERT INTO users
            (
                nama,
                username,
                password,
                role
            )
            VALUES
            (
                :nama,
                :username,
                :password,
                :role
            )
        ";

        $statement = $this->conn->prepare($query);

        return $statement->execute([
            "nama" => $nama,
            "username" => $username,
            "password" => password_hash(
                $password,
                PASSWORD_DEFAULT
            ),
            "role" => $role
        ]);
    }

    public function findByUsername(
        string $username
    ) {

        $query = "
            SELECT *
            FROM users
            WHERE username = :username
        ";

        $statement = $this->conn->prepare($query);

        $statement->execute([
            "username" => $username
        ]);

        return $statement->fetch(
            PDO::FETCH_ASSOC
        );
    }
}