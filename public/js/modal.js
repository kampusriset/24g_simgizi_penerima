export function setupModal({
  modalId,
  openButtonId,
  closeButtonId,
  cancelButtonId,
}) {
  const modal = document.getElementById(modalId);
  const openButton = document.getElementById(openButtonId);
  const closeButton = document.getElementById(closeButtonId);
  const cancelButton = document.getElementById(cancelButtonId);

  const openModal = () => {
    if (modal) {
      modal.classList.remove("hidden");
      modal.classList.add("flex");

      document.body.style.overflow = "hidden";
    }
  };

  const closeModal = () => {
    if (modal) {
      modal.classList.remove("flex");
      modal.classList.add("hidden");

      document.body.style.overflow = "";
    }
  };

  if (openButton) {
    openButton.addEventListener("click", openModal);
  }

  if (closeButton) {
    closeButton.addEventListener("click", closeModal);
  }

  if (cancelButton) {
    cancelButton.addEventListener("click", closeModal);
  }

  window.addEventListener("click", (e) => {
    if (e.target === modal) {
      closeModal();
    }
  });

  return {
    openModal,
    closeModal,
    modal,
  };
}
