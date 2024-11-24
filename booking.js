// script.js
document.getElementById('bookingForm').addEventListener('submit', function (e) {
    e.preventDefault();

    const name = document.getElementById('name').value;
    const email = document.getElementById('email').value;
    const date = document.getElementById('date').value;
    const guests = document.getElementById('guests').value;

    if (name && email && date && guests) {
        document.getElementById('confirmation').textContent = 
            `Thank you, ${name}! Your booking for ${guests} guest(s) on ${date} has been received.`;
        document.getElementById('bookingForm').reset();
    } else {
        alert('Please fill out all fields.');
    }
});
