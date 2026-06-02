export function setupEditModal({ modalController }) {
  const editButtons = document.querySelectorAll(".btn-edit");

  const penerimaForm = document.getElementById("penerimaForm");

  const modalTitle = document.getElementById("modalTitle");

  const submitButton = document.getElementById("submitButton");

  editButtons.forEach((button) => {
    button.addEventListener("click", () => {
      document.getElementById("id_penerima").value = button.dataset.id;

      document.getElementById("schoolSelect").value = button.dataset.idSekolah;

      document.getElementById("nama").value = button.dataset.nama;

      document.getElementById("nik").value = button.dataset.nik;

      document.getElementById("alamat").value = button.dataset.alamat;

      document.getElementById("status").value = button.dataset.status;

      penerimaForm.action = "index.php?route=/update";

      modalTitle.textContent = "Edit Penerima Manfaat";

      submitButton.textContent = "Update";

      modalController.openModal();
    });
  });
}
