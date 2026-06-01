<div class="modal fixed inset-0 z-[70] flex items-center justify-center hidden bg-slate-900/60 backdrop-blur-sm transition-opacity" id="schoolModal">

    <div class="modal-content bg-white rounded-xl shadow-2xl w-full max-w-md mx-4 overflow-hidden transform transition-all">

        <div class="modal-header px-6 py-4 border-b border-slate-200 flex justify-between items-center bg-slate-50">
            <h3 class="text-lg font-bold text-slate-900">Tambah Sekolah</h3>

            <button type="button" class="close-btn text-slate-400 hover:text-rose-600 transition-colors p-1 rounded-lg hover:bg-rose-50" id="closeSchoolModal">
                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
                </svg>
            </button>
        </div>

        <form id="schoolForm" class="flex flex-col">

            <div class="p-6 space-y-4">
                <div class="form-group">
                    <label class="block text-sm font-semibold text-slate-700 mb-1.5">Nama Sekolah</label>
                    <input type="text" name="nama_sekolah" placeholder="Masukkan nama sekolah" required class="w-full px-4 py-2.5 border border-slate-300 rounded-lg focus:ring-2 focus:ring-indigo-500 focus:border-indigo-500 outline-none text-sm text-slate-900 placeholder-slate-400 transition-all shadow-sm">
                </div>

                <div class="form-group">
                    <label class="block text-sm font-semibold text-slate-700 mb-1.5">Alamat Sekolah</label>
                    <textarea name="alamat_sekolah" placeholder="Masukkan alamat sekolah" required rows="3" class="w-full px-4 py-2.5 border border-slate-300 rounded-lg focus:ring-2 focus:ring-indigo-500 focus:border-indigo-500 outline-none text-sm text-slate-900 placeholder-slate-400 transition-all shadow-sm resize-y"></textarea>
                </div>

                <div class="form-group">
                    <label class="block text-sm font-semibold text-slate-700 mb-1.5">Jenjang</label>
                    <select name="jenjang" class="w-full px-4 py-2.5 border border-slate-300 rounded-lg focus:ring-2 focus:ring-indigo-500 focus:border-indigo-500 outline-none text-sm text-slate-700 bg-white transition-all shadow-sm">
                        <option value="SD">SD</option>
                        <option value="SMP">SMP</option>
                        <option value="SMA">SMA</option>
                        <option value="SMK">SMK</option>
                    </select>
                </div>
            </div>

            <div class="modal-footer px-6 py-4 border-t border-slate-200 bg-slate-50 flex justify-end gap-3">
                <button type="button" class="btn-cancel px-5 py-2.5 text-sm font-medium text-slate-700 bg-white border border-slate-300 rounded-lg hover:bg-slate-50 focus:ring-4 focus:ring-slate-100 transition-colors" id="cancelSchoolModal">
                    Batal
                </button>
                <button type="submit" class="btn-save px-5 py-2.5 text-sm font-medium text-white bg-indigo-600 rounded-lg hover:bg-indigo-700 focus:ring-4 focus:ring-indigo-200 transition-colors shadow-sm">
                    Simpan Sekolah
                </button>
            </div>

        </form>

    </div>

</div>