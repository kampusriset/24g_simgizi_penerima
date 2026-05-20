export function setupModal({
    modalId,
    openButtonId,
    closeButtonId,
    cancelButtonId
}) {

    const modal =
        document.getElementById(modalId);

    const openButton =
        document.getElementById(openButtonId);

    const closeButton =
        document.getElementById(closeButtonId);

    const cancelButton =
        document.getElementById(cancelButtonId);

    const openModal = () => {
        modal.classList.add("active");
    };

    const closeModal = () => {
        modal.classList.remove("active");
    };

    openButton?.addEventListener(
        "click",
        openModal
    );

    closeButton?.addEventListener(
        "click",
        closeModal
    );

    cancelButton?.addEventListener(
        "click",
        closeModal
    );

    window.addEventListener("click", (e) => {

        if (e.target === modal) {
            closeModal();
        }

    });

    return {
        openModal,
        closeModal,
        modal
    };
}