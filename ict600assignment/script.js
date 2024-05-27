function createDetails() {
    // Check if any 'wali_hakim' checkboxes are checked
    const waliHakimCheckboxes = document.querySelectorAll('input[name="wali_hakim[]"]');
    let isAnyWaliHakimChecked = false;

    waliHakimCheckboxes.forEach(checkbox => {
        if (checkbox.checked) {
            isAnyWaliHakimChecked = true;
        }
    });

    // Required fields for 'Maklumat Pemohon'
    const requiredApplicantFields = ['applicantName', 'idPassportNo', 'applicantAddress', 'applicantOccupation', 'phoneNo'];
    let isApplicantFieldsFilled = requiredApplicantFields.every(fieldId => document.getElementById(fieldId).value.trim() !== '');

    // Required fields for 'Maklumat Saksi 1'
    const requiredWitness1Fields = ['witness1Name', 'idPassportNo2', 'witness1Address', 'witness1Occupation', 'phoneNo2', 'witness1Relationship'];
    let isWitness1FieldsFilled = requiredWitness1Fields.every(fieldId => document.getElementById(fieldId).value.trim() !== '');

    // Required fields for 'Maklumat Saksi 2'
    const requiredWitness2Fields = ['witness2Name', 'idPassportNo3', 'witness2Address', 'witness2Occupation', 'phoneNo3', 'witness2Relationship'];
    let isWitness2FieldsFilled = requiredWitness2Fields.every(fieldId => document.getElementById(fieldId).value.trim() !== '');

    // Check if the declaration checkbox is checked
    let isDeclarationChecked = document.getElementById("declaration").checked;

    // Show alert if the declaration checkbox is not checked
    if (!isDeclarationChecked) {
        alert("Sila sahkan pengesahan ini sebelum hantar.");
        return;
    }

    // Show alert if any required field is not filled or if no "Wali Hakim" checkbox is checked
    if (!isAnyWaliHakimChecked || !isApplicantFieldsFilled || !isWitness1FieldsFilled || !isWitness2FieldsFilled) {
        alert("Sila isi semua maklumat sebelum hantar dan pastikan sekurang-kurangnya satu kotak 'Wali Hakim' ditandakan.");
        return;
    }

    // Submit the form
    document.getElementById("marriageForm").submit();
}

function calculateAge() {
    const birthDate = new Date(document.getElementById("birthdate").value);
    const today = new Date();

    if (isNaN(birthDate)) {
        alert("Sila masukkan tarikh lahir yang sah.");
        return;
    }

    let years = today.getFullYear() - birthDate.getFullYear();
    let months = today.getMonth() - birthDate.getMonth();
    let days = today.getDate() - birthDate.getDate();

    if (days < 0) {
        months--;
        days += new Date(today.getFullYear(), today.getMonth(), 0).getDate();
    }

    if (months < 0) {
        years--;
        months += 12;
    }

    document.getElementById("years").value = years;
    document.getElementById("months").value = months;
    document.getElementById("days").value = days;
}

document.addEventListener("DOMContentLoaded", function() {
    document.getElementById("birthdate").addEventListener("change", calculateAge);
});

// Function to allow only numeric input for ID/Passport No.
function allowOnlyNumericID(inputId) {
    const idPassportNoInput = document.getElementById(inputId);
    idPassportNoInput.addEventListener('input', function() {
        // Remove any non-numeric characters
        idPassportNoInput.value = idPassportNoInput.value.replace(/\D/g, '');
    });
}

// Function to allow only numeric input for Phone No.
function allowOnlyNumericPhone(inputId) {
    const phoneNoInput = document.getElementById(inputId);
    phoneNoInput.addEventListener('input', function() {
        // Remove any non-numeric characters
        phoneNoInput.value = phoneNoInput.value.replace(/\D/g, '');
    });
}

// Ensure the DOM is fully loaded before calling the functions
document.addEventListener("DOMContentLoaded", function() {
    allowOnlyNumericID('idPassportNo');
    allowOnlyNumericPhone('phoneNo');

    // Call the functions for additional ID/Passport No. and Phone No. fields
    allowOnlyNumericID('idPassportNo2');
    allowOnlyNumericPhone('phoneNo2');
    allowOnlyNumericID('idPassportNo3');
    allowOnlyNumericPhone('phoneNo3');
});

function clearForm() {
    document.getElementById("marriageForm").reset();
}
