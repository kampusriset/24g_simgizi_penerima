<div class="modal" id="deleteModal">

    <div class="modal-content delete-content">

        <div class="delete-icon">
            ⚠️
        </div>

        <h3>
            Hapus Data?
        </h3>

        <p id="deleteText">
            Apakah Anda yakin ingin menghapus data ini?
        </p>

        <form
            id="deleteForm"
            method="GET">

            <input
                type="hidden"
                name="route"
                value="/delete">

            <input
                type="hidden"
                id="deleteId"
                name="id">

            <div class="modal-footer">

                <button
                    type="button"
                    class="btn-cancel"
                    id="cancelDelete">

                    Batal

                </button>

                <button
                    type="submit"
                    class="btn-delete-confirm">

                    Ya, Hapus

                </button>

            </div>

        </form>

    </div>

</div>