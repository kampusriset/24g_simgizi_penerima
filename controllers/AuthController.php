<?php

require_once __DIR__ . '/../models/User.php';

class AuthController
{
    private User $model;

    public function __construct()
    {
        $this->model = new User();
    }

    public function login()
    {
        require_once __DIR__ . '/../views/login.php';
    }

    public function register()
    {
        require_once __DIR__ . '/../views/register.php';
    }

    public function processRegister()
    {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {

            $nama =
                $_POST['nama'] ?? '';

            $username =
                $_POST['username'] ?? '';

            $password =
                $_POST['password'] ?? '';

            $role =
                $_POST['role'] ?? 'petugas';

            $this->model->create(
                $nama,
                $username,
                $password,
                $role
            );

            header(
                "Location: index.php?route=/login"
            );

            exit;
        }
    }

    public function processLogin()
    {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {

            $username =
                $_POST['username'] ?? '';

            $password =
                $_POST['password'] ?? '';

            $user =
                $this->model
                ->findByUsername(
                    $username
                );

            if (
                $user &&
                password_verify(
                    $password,
                    $user['password']
                )
            ) {

                $_SESSION['user'] = [
                    "id" => $user['id_user'],
                    "nama" => $user['nama'],
                    "username" => $user['username'],
                    "role" => $user['role']
                ];

                header(
                    "Location: index.php?route=/"
                );

                exit;
            }

            header(
                "Location: index.php?route=/login&error=1"
            );

            exit;
        }
    }

    public function logout()
    {
        session_destroy();

        header(
            "Location: index.php?route=/login"
        );

        exit;
    }
}