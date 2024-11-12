function updatePatientName() {
    const patientDropdown = document.getElementById('patient_id');
    const patientNameInput = document.getElementById('patient_name');
    
    // Ensure a valid option is selected
    if (patientDropdown.selectedIndex > 0) {
        const selectedOption = patientDropdown.options[patientDropdown.selectedIndex];
        patientNameInput.value = selectedOption.getAttribute('data-name'); // Update patient name
    } else {
        patientNameInput.value = ''; // Clear if no valid selection
    }
}
