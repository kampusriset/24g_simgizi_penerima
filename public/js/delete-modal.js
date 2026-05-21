export function setupDeleteModal({ modalController }) {
  const deleteButtons = document.querySelectorAll(".btn-delete");
  const deleteForm = document.getElementById("deleteForm");
  const deleteText = document.getElementById("deleteText");

  const deleteId = document.getElementById("deleteId");

  deleteButtons.forEach((button) => {
    button.addEventListener("click", () => {
      const id = button.dataset.id;
      const nama = button.dataset.nama;

      deleteText.textContent = `Apakah Anda yakin ingin menghapus ${nama}? Tindakan ini tidak dapat dibatalkan.`;

      if (deleteId) {
        deleteId.value = id;
      }

      modalController.openModal();
    });
  });
}
