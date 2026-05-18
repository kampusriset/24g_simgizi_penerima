<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Penerima Manfaat</title>
</head>

<body>

    <table border="1px solid black">
        <thead>
            <tr>
                <th>No</th>
                <th>ID Sekolah</th>
                <th>Nama</th>
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
                        <td><?= htmlspecialchars($item['id_sekolah'] ?? '-') ?></td>
                        <td><strong><?= htmlspecialchars($item['nama'] ?? '') ?></strong></td>
                        <td><?= htmlspecialchars($item['nik'] ?? '-') ?></td>
                        <td><?= htmlspecialchars($item['alamat'] ?? '') ?></td>
                        <td>
                            <span>
                                <?= ucfirst($item['status'] ?? 'Nonaktif') ?>
                            </span>
                        </td>
                        <td>
                            <div>
                                <a href="index.php?route=/edit&id=<?= htmlspecialchars($item['id_penerima'] ?? '') ?>">Edit</a>

                                <a href="index.php?route=/edit&id=<?= htmlspecialchars($item['id_penerima'] ?? '') ?>" onclick="return confirm('Apakah Anda yakin ingin menghapus data <?= htmlspecialchars($item['nama'] ?? '') ?>?');">Hapus</a>
                            </div>
                        </td>
                    </tr>
                <?php endforeach; ?>

            <?php else: ?>
                <tr>
                    <td colspan="7">
                        Data tidak tersedia saat ini.
                    </td>
                </tr>
            <?php endif; ?>
        </tbody>
    </table>

</body>

</html>