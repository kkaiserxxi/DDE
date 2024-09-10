// Function to toggle the form display
function toggleForm(element) {
    // Get the parent booking form div
    var parentForm = element.closest('.booking-form');

    // Toggle 'active' class to show or hide the form
    parentForm.classList.toggle('active');
}
