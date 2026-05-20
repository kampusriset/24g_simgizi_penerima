<div class="modal" id="modal">

    <div class="modal-content">

        <div class="modal-header">

            <h3>Tambah Penerima Manfaat</h3>

            <button
                type="button"
                class="close-btn"
                id="closeModal">

                &times;

            </button>

        </div>

        <form action="index.php?route=/store" method="POST">

            <div class="form-group">

                <label>Sekolah</label>

                <div class="school-input-group">

                    <select
                        id="schoolSelect"
                        name="id_sekolah"
                        required>

                        <option value="">
                            -- Pilih Sekolah --
                        </option>

                        <?php if (!empty($sekolah)): ?>

                            <?php foreach ($sekolah as $item): ?>

                                <option value="<?= $item['id_sekolah'] ?>">

                                    <?= htmlspecialchars($item['nama_sekolah']) ?>
                                    -
                                    <?= htmlspecialchars($item['jenjang']) ?>

                                </option>

                            <?php endforeach; ?>

                        <?php endif; ?>

                    </select>

                    <button
                        type="button"
                        class="btn-add-school"
                        id="openSchoolModal">

                        + Sekolah

                    </button>

                </div>

            </div>

            <div class="form-group">

                <label>Nama</label>

                <input
                    type="text"
                    name="nama"
                    placeholder="Masukkan nama"
                    required>

            </div>

            <div class="form-group">

                <label>NIK</label>

                <input
                    type="text"
                    name="nik"
                    placeholder="Masukkan NIK"
                    required>

            </div>

            <div class="form-group">

                <label>Alamat</label>

                <textarea
                    name="alamat"
                    placeholder="Masukkan alamat"
                    required></textarea>

            </div>

            <div class="form-group">

                <label>Status</label>

                <select name="status">

                    <option value="aktif">
                        Aktif
                    </option>

                    <option value="nonaktif">
                        Nonaktif
                    </option>

                </select>

            </div>

            <div class="modal-footer">

                <button
                    type="button"
                    class="btn-cancel"
                    id="cancelModal">

                    Batal

                </button>

                <button
                    type="submit"
                    class="btn-save">

                    Simpan

                </button>

            </div>

        </form>

    </div>

</div>