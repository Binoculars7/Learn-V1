document.getElementById('signupForm').addEventListener('submit', function (e) {
    e.preventDefault();

    // Grab form values
    const name = document.getElementById('name').value;
    const email = document.getElementById('email').value;
    const password = document.getElementById('password').value;
    const confirmPassword = document.getElementById('confirmPassword').value;

    // Validation check
    if (password !== confirmPassword) {
        alert('Passwords do not match!');
        return;
    }

    // Success message
    alert(`Signup Successful! Welcome, ${name}!`);
});
