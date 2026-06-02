<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard - Data Penerima Manfaat</title>

    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
</head>

<body class="bg-slate-50 text-slate-800 font-sans antialiased overflow-hidden flex h-screen">

    <?php require_once __DIR__ . '/../components/ui/sidebar.php'; ?>

    <div class="flex-1 flex flex-col min-w-0 overflow-hidden bg-slate-50">

        <?php require_once __DIR__ . '/../components/ui/header.php'; ?>

        <main class="flex-1 overflow-y-auto p-4 sm:p-6 lg:p-8">

            <div class="mx-auto w-full max-w-7xl bg-white rounded-xl shadow-sm border border-slate-200 overflow-hidden">
                <div class="table-header p-6 flex flex-col sm:flex-row justify-between items-start sm:items-center gap-4 border-b border-slate-200 bg-white">
                    <div>
                        <h2 class="text-xl sm:text-2xl font-bold text-slate-900">Kelola Penerima Manfaat</h2>
                        <p class="text-sm text-slate-500 mt-1">Kelola daftar penerima bantuan beserta data sekolah di sistem Anda.</p>
                    </div>

                    <button class="btn-add inline-flex items-center justify-center px-4 py-2.5 text-sm font-medium text-white bg-blue-600 rounded-lg hover:bg-blue-700 focus:ring-4 focus:ring-blue-100 transition-colors shadow-sm w-full sm:w-auto" id="openModal">
                        <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6"></path>
                        </svg>
                        Tambah Data
                    </button>
                </div>

                <div class="table-wrapper overflow-x-auto w-full">
                    <table class="w-full min-w-[900px] text-left border-collapse">
                        <thead class="bg-slate-50 text-slate-600 uppercase text-xs font-semibold tracking-wider border-b border-slate-200">
                            <tr>
                                <th class="px-6 py-4">No</th>
                                <th class="px-6 py-4">Nama</th>
                                <th class="px-6 py-4">Sekolah</th>
                                <th class="px-6 py-4">Jenjang</th>
                                <th class="px-6 py-4">NIK</th>
                                <th class="px-6 py-4">Alamat</th>
                                <th class="px-6 py-4">Status</th>
                                <th class="px-6 py-4 text-center">Aksi</th>
                            </tr>
                        </thead>

                        <tbody class="divide-y divide-slate-100 text-sm">

                            <?php if (!empty($data)): ?>
                                <?php $no = 1; ?>
                                <?php foreach ($data as $item): ?>

                                    <tr class="hover:bg-slate-50/80 transition-colors group">
                                        <td class="px-6 py-4 text-slate-500"><?= $no++ ?></td>

                                        <td class="name-column px-6 py-4 font-medium text-slate-900 whitespace-nowrap">
                                            <?= htmlspecialchars($item['nama'] ?? '') ?>
                                        </td>

                                        <td class="px-6 py-4 text-slate-600 whitespace-nowrap">
                                            <?= htmlspecialchars($item['nama_sekolah'] ?? '-') ?>
                                        </td>

                                        <td class="px-6 py-4">
                                            <span class="inline-flex items-center px-2 py-1 rounded text-xs font-medium bg-slate-100 text-slate-700 border border-slate-200">
                                                <?= htmlspecialchars($item['jenjang'] ?? '-') ?>
                                            </span>
                                        </td>

                                        <td class="px-6 py-4 text-slate-500 font-mono text-xs tracking-wide">
                                            <?= htmlspecialchars($item['nik'] ?? '-') ?>
                                        </td>

                                        <td class="px-6 py-4 text-slate-600 truncate max-w-[180px]" title="<?= htmlspecialchars($item['alamat'] ?? '') ?>">
                                            <?= htmlspecialchars($item['alamat'] ?? '') ?>
                                        </td>

                                        <td class="px-6 py-4">
                                            <?php
                                            $statusText = strtolower($item['status'] ?? 'nonaktif');
                                            $isAktif = $statusText === 'aktif';
                                            $bgClass = $isAktif ? 'bg-emerald-50 text-emerald-700 border-emerald-200' : 'bg-rose-50 text-rose-700 border-rose-200';
                                            $dotClass = $isAktif ? 'bg-emerald-500' : 'bg-rose-500';
                                            ?>
                                            <span class="status active inline-flex items-center px-2.5 py-1 rounded-full text-xs font-medium border <?= $bgClass ?>">
                                                <span class="w-1.5 h-1.5 rounded-full mr-1.5 <?= $dotClass ?>"></span>
                                                <?= ucfirst($item['status'] ?? 'Nonaktif') ?>
                                            </span>
                                        </td>

                                        <td class="px-6 py-4">
                                            <div class="action-buttons flex items-center justify-center space-x-2 opacity-60 group-hover:opacity-100 transition-opacity">
                                                <button class="btn-edit text-blue-600 hover:text-blue-800 hover:bg-blue-50 p-2 rounded transition-colors" data-id="<?= $item['id_penerima'] ?>" data-id-sekolah="<?= $item['id_sekolah'] ?>" data-nama="<?= htmlspecialchars($item['nama']) ?>" data-nik="<?= htmlspecialchars($item['nik']) ?>" data-alamat="<?= htmlspecialchars($item['alamat']) ?>" data-status="<?= htmlspecialchars($item['status']) ?>" title="Edit">
                                                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z"></path>
                                                    </svg>
                                                </button>

                                                <button class="btn-delete text-rose-600 hover:text-rose-800 hover:bg-rose-50 p-2 rounded transition-colors" data-id="<?= $item['id_penerima'] ?>" data-nama="<?= htmlspecialchars($item['nama']) ?>" title="Hapus">
                                                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16"></path>
                                                    </svg>
                                                </button>
                                            </div>
                                        </td>
                                    </tr>

                                <?php endforeach; ?>

                            <?php else: ?>

                                <tr>
                                    <td colspan="8" class="empty-data px-6 py-12 text-center text-slate-500 bg-slate-50/50">
                                        <div class="flex flex-col items-center justify-center">
                                            <svg class="w-12 h-12 text-slate-300 mb-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M20 13V6a2 2 0 00-2-2H6a2 2 0 00-2 2v7m16 0v5a2 2 0 01-2 2H6a2 2 0 01-2-2v-5m16 0h-2.586a1 1 0 00-.707.293l-2.414 2.414a1 1 0 01-.707.293h-3.172a1 1 0 01-.707-.293l-2.414-2.414A1 1 0 006.586 13H4"></path>
                                            </svg>
                                            <p class="text-base font-medium text-slate-600">Data tidak tersedia saat ini.</p>
                                            <p class="text-sm mt-1 text-slate-400">Silakan klik tombol "Tambah Data" untuk memulai.</p>
                                        </div>
                                    </td>
                                </tr>

                            <?php endif; ?>

                        </tbody>
                    </table>
                </div>
            </div>

        </main>
    </div>

    <script>
        function toggleSidebar() {
            const sidebar = document.getElementById('sidebar');
            const backdrop = document.getElementById('sidebarBackdrop');

            sidebar.classList.toggle('-translate-x-full');
            backdrop.classList.toggle('hidden');
        }
    </script>

    <?php require_once __DIR__ . '/../components/ui/form-penerima.php'; ?>
    <?php require_once __DIR__ . '/../components/ui/form-sekolah.php'; ?>
    <?php require_once __DIR__ . '/../components/ui/delete-popup.php'; ?>

    <script type="module" src="public/js/script.js"></script>

</body>

</html>