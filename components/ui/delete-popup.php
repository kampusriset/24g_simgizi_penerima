<div class="modal fixed inset-0 z-[60] flex items-center justify-center hidden bg-slate-900/50 backdrop-blur-sm transition-opacity" id="deleteModal">

    <div class="modal-content delete-content bg-white rounded-2xl shadow-2xl w-full max-w-sm mx-4 overflow-hidden transform transition-all text-center p-6 sm:p-8">

        <div class="delete-icon mx-auto flex items-center justify-center h-16 w-16 rounded-full bg-rose-100 mb-5">
            <svg class="h-8 w-8 text-rose-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-3L13.732 4c-.77-1.333-2.694-1.333-3.464 0L3.34 16c-.77 1.333.192 3 1.732 3z"></path>
            </svg>
        </div>

        <h3 class="text-xl font-bold text-slate-900 mb-2">
            Hapus Data?
        </h3>

        <p id="deleteText" class="text-sm text-slate-500 mb-8">
            Apakah Anda yakin ingin menghapus data ini? Tindakan ini tidak dapat dibatalkan.
        </p>

        <form id="deleteForm" method="GET">

            <input type="hidden" name="route" value="/delete">
            <input type="hidden" id="deleteId" name="id">

            <div class="modal-footer flex flex-col-reverse sm:flex-row justify-center gap-3">
                <button type="button" class="btn-cancel w-full sm:w-auto px-5 py-2.5 text-sm font-medium text-slate-700 bg-white border border-slate-300 rounded-lg hover:bg-slate-50 focus:ring-4 focus:ring-slate-100 transition-colors" id="cancelDelete">
                    Batal
                </button>

                <button type="submit" class="btn-delete-confirm w-full sm:w-auto px-5 py-2.5 text-sm font-medium text-white bg-rose-600 rounded-lg hover:bg-rose-700 focus:ring-4 focus:ring-rose-200 transition-colors shadow-sm">
                    Ya, Hapus
                </button>
            </div>

        </form>

    </div>

</div>