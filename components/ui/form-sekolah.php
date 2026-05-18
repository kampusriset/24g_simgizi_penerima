<div class="modal" id="schoolModal">

    <div class="modal-content">

        <div class="modal-header">

            <h3>Tambah Sekolah</h3>

            <button
                type="button"
                class="close-btn"
                id="closeSchoolModal">

                &times;

            </button>

        </div>

        <form
            id="schoolForm"
            >

            <div class="form-group">

                <label>Nama Sekolah</label>

                <input
                    type="text"
                    name="nama_sekolah"
                    placeholder="Masukkan nama sekolah"
                    required>

            </div>

            <div class="form-group">

                <label>Alamat Sekolah</label>

                <textarea
                    name="alamat_sekolah"
                    placeholder="Masukkan alamat sekolah"
                    required></textarea>

            </div>

            <div class="form-group">

                <label>Jenjang</label>

                <select name="jenjang">

                    <option value="SD">SD</option>
                    <option value="SMP">SMP</option>
                    <option value="SMA">SMA</option>
                    <option value="SMK">SMK</option>

                </select>

            </div>

            <div class="modal-footer">

                <button
                    type="button"
                    class="btn-cancel"
                    id="cancelSchoolModal">

                    Batal

                </button>

                <button
                    type="submit"
                    class="btn-save">

                    Simpan Sekolah

                </button>

            </div>

        </form>

    </div>
    
</div>