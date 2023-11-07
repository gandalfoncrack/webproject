document.addEventListener('DOMContentLoaded', function() {
    const registrationForm = document.getElementById('registrationForm');
    const loginForm = document.getElementById('loginForm');
    const message = document.getElementById('message');

    registrationForm.addEventListener('submit', function(event) {
        event.preventDefault();
        const formData = new FormData(registrationForm);

        fetch('registrationback.php', {
            method: 'POST',
            body: formData,
        })
        .then(response => response.json())
        .then(data => {
            message.innerHTML = data.message;
        });
    });

    loginForm.addEventListener('submit', function(event) {
        event.preventDefault();
        const formData = new FormData(loginForm);

        fetch('loginphp.php', {
            method: 'POST',
            body: formData,
        })
        .then(response => response.json())
        .then(data => {
            message.innerHTML = data.message;
        });
    });
});
