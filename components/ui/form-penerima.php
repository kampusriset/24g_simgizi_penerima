<div class="modal fixed inset-0 z-50 flex items-center justify-center hidden bg-slate-900/50 backdrop-blur-sm transition-opacity" id="modal">

    <div class="modal-content bg-white rounded-xl shadow-2xl w-full max-w-xl mx-4 overflow-hidden transform transition-all flex flex-col max-h-[90vh]">

        <div class="modal-header px-6 py-4 border-b border-slate-200 flex justify-between items-center bg-slate-50">
            <h3 id="modalTitle" class="text-lg font-bold text-slate-900">Tambah Penerima Manfaat</h3>

            <button type="button" class="close-btn text-slate-400 hover:text-rose-600 transition-colors p-1 rounded-lg hover:bg-rose-50" id="closeModal">
                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
                </svg>
            </button>
        </div>


        <form id="penerimaForm" action="index.php?route=/store" method="POST" class="flex flex-col overflow-hidden">
            <input type="hidden" name="id_penerima" id="id_penerima">

            <div class="p-6 overflow-y-auto space-y-5">

                <div class="form-group">
                    <label class="block text-sm font-semibold text-slate-700 mb-1.5">Sekolah</label>
                    <div class="school-input-group flex gap-2">
                        <select id="schoolSelect" name="id_sekolah" required class="flex-1 px-4 py-2.5 border border-slate-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500 outline-none text-sm text-slate-700 bg-white transition-all shadow-sm">
                            <option value="">-- Pilih Sekolah --</option>
                            <?php if (!empty($sekolah)): ?>
                                <?php foreach ($sekolah as $item): ?>
                                    <option value="<?= $item['id_sekolah'] ?>">
                                        <?= htmlspecialchars($item['nama_sekolah']) ?> - <?= htmlspecialchars($item['jenjang']) ?>
                                    </option>
                                <?php endforeach; ?>
                            <?php endif; ?>
                        </select>

                        <button type="button" class="btn-add-school inline-flex items-center px-4 py-2.5 text-sm font-medium text-white bg-slate-800 rounded-lg hover:bg-slate-900 focus:ring-4 focus:ring-slate-200 transition-colors shadow-sm whitespace-nowrap" id="openSchoolModal">
                            + Sekolah
                        </button>
                    </div>
                </div>

                <div class="form-group">
                    <label class="block text-sm font-semibold text-slate-700 mb-1.5">Nama</label>
                    <input type="text" id="nama" name="nama" placeholder="Masukkan nama" required class="w-full px-4 py-2.5 border border-slate-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500 outline-none text-sm text-slate-900 placeholder-slate-400 transition-all shadow-sm">
                </div>

                <div class="form-group">
                    <label class="block text-sm font-semibold text-slate-700 mb-1.5">NIK</label>
                    <input type="text" id="nik" name="nik" placeholder="Masukkan NIK" required class="w-full px-4 py-2.5 border border-slate-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500 outline-none text-sm text-slate-900 placeholder-slate-400 transition-all shadow-sm font-mono">
                </div>

                <div class="form-group">
                    <label class="block text-sm font-semibold text-slate-700 mb-1.5">Alamat</label>
                    <textarea id="alamat" name="alamat" placeholder="Masukkan alamat" required rows="3" class="w-full px-4 py-2.5 border border-slate-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500 outline-none text-sm text-slate-900 placeholder-slate-400 transition-all shadow-sm resize-y"></textarea>
                </div>

                <div class="form-group">
                    <label class="block text-sm font-semibold text-slate-700 mb-1.5">Status</label>
                    <select id="status" name="status" class="w-full px-4 py-2.5 border border-slate-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500 outline-none text-sm text-slate-700 bg-white transition-all shadow-sm">
                        <option value="aktif">Aktif</option>
                        <option value="nonaktif">Nonaktif</option>
                    </select>
                </div>

            </div>

            <div class="modal-footer px-6 py-4 border-t border-slate-200 bg-slate-50 flex justify-end gap-3">
                <button type="button" class="btn-cancel px-5 py-2.5 text-sm font-medium text-slate-700 bg-white border border-slate-300 rounded-lg hover:bg-slate-50 focus:ring-4 focus:ring-slate-100 transition-colors" id="cancelModal">
                    Batal
                </button>
                <button type="submit" class="btn-save px-5 py-2.5 text-sm font-medium text-white bg-blue-600 rounded-lg hover:bg-blue-700 focus:ring-4 focus:ring-blue-200 transition-colors shadow-sm" id="submitButton">
                    Simpan
                </button>
            </div>

        </form>

    </div>

</div>