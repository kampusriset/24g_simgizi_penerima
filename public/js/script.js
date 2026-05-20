import { setupModal }
from "./modal.js";

import { setupSchoolForm }
from "./form-sekolah.js";

const penerimaModal =
    setupModal({
        modalId: "modal",
        openButtonId: "openModal",
        closeButtonId: "closeModal",
        cancelButtonId: "cancelModal"
    });

const sekolahModal =
    setupModal({
        modalId: "schoolModal",
        openButtonId: "openSchoolModal",
        closeButtonId: "closeSchoolModal",
        cancelButtonId: "cancelSchoolModal"
    });

setupSchoolForm({
    formId: "schoolForm",
    selectId: "schoolSelect",
    modalController: sekolahModal
});