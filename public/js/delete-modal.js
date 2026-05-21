export function setupDeleteModal({
    modalController
}) {

    const deleteButtons =
        document.querySelectorAll(".btn-delete");

    const deleteForm =
        document.getElementById("deleteForm");

    const deleteText =
        document.getElementById("deleteText");

    deleteButtons.forEach((button) => {

        button.addEventListener("click", () => {

            const id =
                button.dataset.id;

            const nama =
                button.dataset.nama;

            deleteText.textContent =
                `Apakah Anda yakin ingin menghapus ${nama}?`;

            deleteId.value = id;

            modalController.openModal();
        });

    });

}