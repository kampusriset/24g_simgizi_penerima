<?php

if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

if (isset($_SESSION['user'])) {
    header("Location: index.php?route=/");
    exit;
}

?>

<!DOCTYPE html>

<html lang="id">

<head>

    <meta charset="UTF-8">

    <meta
        name="viewport"
        content="width=device-width, initial-scale=1.0">

    <title>
        SIM GIZI - Authentication
    </title>

    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>

</head>

<body class="bg-slate-50 min-h-screen">

    <div class="min-h-screen flex">

        <!-- LEFT SECTION -->

        <div
            class="
            hidden
            lg:flex
            lg:w-1/2
            bg-slate-900
            relative
            overflow-hidden
        ">

            <div
                class="
                absolute
                inset-0
                bg-gradient-to-br
                from-slate-900
                via-slate-800
                to-blue-900
            ">
            </div>

            <div
                class="
                relative
                z-10
                flex
                flex-col
                justify-center
                px-16
                text-white
            ">

                <div class="flex items-center mb-8">

                    <div
                        class="
                        w-14
                        h-14
                        rounded-xl
                        bg-blue-600
                        flex
                        items-center
                        justify-center
                        shadow-lg
                    ">

                        <svg
                            class="w-8 h-8"
                            fill="none"
                            stroke="currentColor"
                            viewBox="0 0 24 24">

                            <path
                                stroke-linecap="round"
                                stroke-linejoin="round"
                                stroke-width="2"
                                d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16">
                            </path>

                        </svg>

                    </div>

                    <div class="ml-4">

                        <h1 class="text-4xl font-bold">
                            SIM GIZI
                        </h1>

                        <p class="text-slate-300">
                            Sistem Monitoring Gizi
                        </p>

                    </div>

                </div>

                <h2
                    class="
                    text-4xl
                    font-bold
                    leading-tight
                    mb-6
                ">

                    Kelola Data Program Gizi Dengan Mudah

                </h2>

                <p
                    class="
                    text-slate-300
                    text-lg
                    mb-10
                ">

                    Sistem informasi untuk pengelolaan
                    penerima manfaat, sekolah,
                    distribusi makanan, dan monitoring gizi.

                </p>

                <div class="space-y-4">

                    <div class="flex items-center gap-3">
                        <div class="w-8 h-8 rounded-full bg-blue-600 flex items-center justify-center">
                            ✓
                        </div>

                        <span>
                            Kelola Penerima Manfaat
                        </span>
                    </div>

                    <div class="flex items-center gap-3">
                        <div class="w-8 h-8 rounded-full bg-blue-600 flex items-center justify-center">
                            ✓
                        </div>

                        <span>
                            Kelola Data Sekolah
                        </span>
                    </div>

                    <div class="flex items-center gap-3">
                        <div class="w-8 h-8 rounded-full bg-blue-600 flex items-center justify-center">
                            ✓
                        </div>

                        <span>
                            Monitoring Program Gizi
                        </span>
                    </div>

                </div>

            </div>

        </div>

        <!-- RIGHT SECTION -->

        <div
            class="
            w-full
            lg:w-1/2
            flex
            items-center
            justify-center
            p-6
        ">

            <div class="w-full max-w-md">

                <div
                    class="
                    bg-white
                    rounded-xl
                    shadow-sm
                    border
                    border-slate-200
                    overflow-hidden
                ">

                    <!-- LOGIN FORM -->

                    <div
                        id="loginForm"
                        class="transition-all duration-300">

                        <div
                            class="
                            px-8
                            py-6
                            border-b
                            border-slate-200
                        ">

                            <h2
                                class="
                                text-2xl
                                font-bold
                                text-slate-900
                            ">

                                Login

                            </h2>

                            <p
                                class="
                                text-slate-500
                                text-sm
                                mt-1
                            ">

                                Masuk ke akun Anda

                            </p>

                        </div>

                        <form
                            action="index.php?route=/process-login"
                            method="POST"
                            class="p-8 space-y-5">

                            <?php if (isset($_GET['error'])): ?>

                                <div
                                    class="
                                    p-3
                                    rounded-lg
                                    bg-rose-50
                                    border
                                    border-rose-200
                                    text-rose-700
                                    text-sm
                                ">

                                    Username atau password salah.

                                </div>

                            <?php endif; ?>

                            <div>

                                <label class="block text-sm font-medium text-slate-700 mb-2">
                                    Username
                                </label>

                                <input
                                    type="text"
                                    name="username"
                                    required
                                    class="
                                    w-full
                                    px-4
                                    py-3
                                    border
                                    border-slate-300
                                    rounded-lg
                                    focus:ring-2
                                    focus:ring-blue-500
                                    outline-none
                                ">

                            </div>

                            <div>

                                <label class="block text-sm font-medium text-slate-700 mb-2">
                                    Password
                                </label>

                                <input
                                    type="password"
                                    name="password"
                                    required
                                    class="
                                    w-full
                                    px-4
                                    py-3
                                    border
                                    border-slate-300
                                    rounded-lg
                                    focus:ring-2
                                    focus:ring-blue-500
                                    outline-none
                                ">

                            </div>

                            <button
                                type="submit"
                                class="
                                w-full
                                bg-blue-600
                                hover:bg-blue-700
                                text-white
                                py-3
                                rounded-lg
                                font-medium
                            ">

                                Login

                            </button>

                            <p
                                class="
                                text-center
                                text-sm
                                text-slate-500
                            ">

                                Belum punya akun?

                                <button
                                    type="button"
                                    id="showRegister"
                                    class="
                                    text-blue-600
                                    hover:text-blue-700
                                    font-medium
                                ">

                                    Daftar

                                </button>

                            </p>

                        </form>

                    </div>

                    <!-- REGISTER FORM -->

                    <div
                        id="registerForm"
                        class="hidden">

                        <div
                            class="
                            px-8
                            py-6
                            border-b
                            border-slate-200
                        ">

                            <h2
                                class="
                                text-2xl
                                font-bold
                                text-slate-900
                            ">

                                Register

                            </h2>

                            <p
                                class="
                                text-slate-500
                                text-sm
                                mt-1
                            ">

                                Buat akun baru

                            </p>

                        </div>

                        <form
                            action="index.php?route=/process-register"
                            method="POST"
                            class="p-8 space-y-5">

                            <input
                                type="hidden"
                                name="role"
                                value="petugas">

                            <div>

                                <label class="block text-sm font-medium text-slate-700 mb-2">
                                    Nama Lengkap
                                </label>

                                <input
                                    type="text"
                                    name="nama"
                                    required
                                    class="w-full px-4 py-3 border border-slate-300 rounded-lg focus:ring-2 focus:ring-blue-500 outline-none">

                            </div>

                            <div>

                                <label class="block text-sm font-medium text-slate-700 mb-2">
                                    Username
                                </label>

                                <input
                                    type="text"
                                    name="username"
                                    required
                                    class="w-full px-4 py-3 border border-slate-300 rounded-lg focus:ring-2 focus:ring-blue-500 outline-none">

                            </div>

                            <div>

                                <label class="block text-sm font-medium text-slate-700 mb-2">
                                    Password
                                </label>

                                <input
                                    type="password"
                                    name="password"
                                    required
                                    class="w-full px-4 py-3 border border-slate-300 rounded-lg focus:ring-2 focus:ring-blue-500 outline-none">

                            </div>

                            <button
                                type="submit"
                                class="
                                w-full
                                bg-blue-600
                                hover:bg-blue-700
                                text-white
                                py-3
                                rounded-lg
                                font-medium
                            ">

                                Daftar

                            </button>

                            <p
                                class="
                                text-center
                                text-sm
                                text-slate-500
                            ">

                                Sudah punya akun?

                                <button
                                    type="button"
                                    id="showLogin"
                                    class="
                                    text-blue-600
                                    hover:text-blue-700
                                    font-medium
                                ">

                                    Login

                                </button>

                            </p>

                        </form>

                    </div>

                </div>

            </div>

        </div>

    </div>

    <script>
        const loginForm =
            document.getElementById(
                "loginForm"
            );

        const registerForm =
            document.getElementById(
                "registerForm"
            );

        const showRegister =
            document.getElementById(
                "showRegister"
            );

        const showLogin =
            document.getElementById(
                "showLogin"
            );

        showRegister.addEventListener(
            "click",
            () => {

                loginForm.classList.add(
                    "hidden"
                );

                registerForm.classList.remove(
                    "hidden"
                );

            }
        );

        showLogin.addEventListener(
            "click",
            () => {

                registerForm.classList.add(
                    "hidden"
                );

                loginForm.classList.remove(
                    "hidden"
                );

            }
        );
    </script>

</body>

</html>