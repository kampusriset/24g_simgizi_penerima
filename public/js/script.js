import { setupModal } from "./modal.js";

import { setupSchoolForm } from "./form-sekolah.js";

import { setupDeleteModal } from "./delete-modal.js";

import { setupEditModal } from "./penerima-edit.js";

const penerimaModal = setupModal({
  modalId: "modal",
  openButtonId: "openModal",
  closeButtonId: "closeModal",
  cancelButtonId: "cancelModal",
});

const sekolahModal = setupModal({
  modalId: "schoolModal",
  openButtonId: "openSchoolModal",
  closeButtonId: "closeSchoolModal",
  cancelButtonId: "cancelSchoolModal",
});

const deleteModal = setupModal({
  modalId: "deleteModal",
  closeButtonId: "cancelDelete",
  cancelButtonId: "cancelDelete",
});

setupSchoolForm({
  formId: "schoolForm",
  selectId: "schoolSelect",
  modalController: sekolahModal,
});

setupEditModal({
  modalController: penerimaModal,
});

setupDeleteModal({
  modalController: deleteModal,
});

const openModal = document.getElementById("openModal");

const penerimaForm = document.getElementById("penerimaForm");

const modalTitle = document.getElementById("modalTitle");

const submitButton = document.getElementById("submitButton");

openModal.addEventListener("click", () => {
  penerimaForm.reset();

  document.getElementById("id_penerima").value = "";

  penerimaForm.action = "index.php?route=/store";

  modalTitle.textContent = "Tambah Penerima Manfaat";

  submitButton.textContent = "Simpan";
});
