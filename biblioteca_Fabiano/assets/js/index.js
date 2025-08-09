
function showForm(formType) {
    // Hide all forms
    document.getElementById('login-form').classList.add('hidden');
    document.getElementById('register-form').classList.add('hidden');

    // Remove active class from all tabs
    document.getElementById('login-tab').classList.remove('active');
    document.getElementById('register-tab').classList.remove('active');

    // Show selected form and mark tab as active
    document.getElementById(`${formType}-form`).classList.remove('hidden');
    document.getElementById(`${formType}-tab`).classList.add('active');
}

// Initialize with login form visible
document.addEventListener('DOMContentLoaded', function () {
    showForm('login');
});
