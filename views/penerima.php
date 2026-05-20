<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Penerima Manfaat</title>

    <link rel="stylesheet" href="public/css/style.css">
</head>

<body>

    <div class="container">

        <div class="table-header">
            <div>
                <h2>Data Penerima Manfaat</h2>
            </div>

            <button class="btn-add" id="openModal">
                + Tambah Data
            </button>
        </div>

        <div class="table-wrapper">
            <table>
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Nama</th>
                        <th>Sekolah</th>
                        <th>Jenjang</th>
                        <th>NIK</th>
                        <th>Alamat</th>
                        <th>Status</th>
                        <th>Aksi</th>
                    </tr>
                </thead>

                <tbody>

                    <?php if (!empty($data)): ?>

                        <?php $no = 1; ?>

                        <?php foreach ($data as $item): ?>

                            <tr>
                                <td><?= $no++ ?></td>
                                
                                <td class="name-column">
                                    <?= htmlspecialchars($item['nama'] ?? '') ?>
                                </td>
                                
                                <td>
                                    <?= htmlspecialchars($item['nama_sekolah'] ?? '-') ?>
                                </td>

                                <td>
                                    <?= htmlspecialchars($item['jenjang'] ?? '-') ?>
                                </td>

                                <td>
                                    <?= htmlspecialchars($item['nik'] ?? '-') ?>
                                </td>

                                <td>
                                    <?= htmlspecialchars($item['alamat'] ?? '') ?>
                                </td>

                                <td>
                                    <span class="status active">
                                        <?= ucfirst($item['status'] ?? 'Nonaktif') ?>
                                    </span>
                                </td>

                                <td>
                                    <div class="action-buttons">

                                        <button class="btn-edit">
                                            Edit
                                        </button>

                                        <button class="btn-delete">
                                            Hapus
                                        </button>

                                    </div>
                                </td>
                            </tr>

                        <?php endforeach; ?>

                    <?php else: ?>

                        <tr>
                            <td colspan="7" class="empty-data">
                                Data tidak tersedia saat ini.
                            </td>
                        </tr>

                    <?php endif; ?>

                </tbody>
            </table>
        </div>
    </div>

    <?php require_once __DIR__ . '/../components/ui/form-penerima.php'; ?>

    <?php require_once __DIR__ . '/../components/ui/form-sekolah.php'; ?>

    <script type="module" src="public/js/script.js"></script>

</body>

</html>