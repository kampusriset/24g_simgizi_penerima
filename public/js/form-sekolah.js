export function setupSchoolForm({
    formId,
    selectId,
    modalController
}) {

    const form =
        document.getElementById(formId);

    const select =
        document.getElementById(selectId);

    form?.addEventListener(
        "submit",
        async (e) => {

            e.preventDefault();

            const formData =
                new FormData(form);

            const response = await fetch(
                "index.php?route=/store-school",
                {
                    method: "POST",
                    body: formData
                }
            );

            const result =
                await response.json();

            if (result.success) {

                const school =
                    result.school;

                const alreadyExists =
                    [...select.options].some(
                        option =>
                            option.value ==
                            school.id_sekolah
                    );

                if (!alreadyExists) {

                    const option =
                        document.createElement(
                            "option"
                        );

                    option.value =
                        school.id_sekolah;

                    option.text =
                        `${school.nama_sekolah} - ${school.jenjang}`;

                    option.selected = true;

                    select.appendChild(option);
                }

                select.value =
                    school.id_sekolah;

                form.reset();

                modalController.closeModal();
            }

        }
    );
}