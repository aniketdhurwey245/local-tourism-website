<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Booking Form</title>
    <link rel="stylesheet" href="booking.css">
</head>
<body>
    <div class="container">
        <h1>Book Your Stay</h1>
        <form id="bookingForm">
            <label for="name">Full Name:</label>
            <input type="text" id="name" name="name" placeholder="Enter your name" required>

            <label for="email">Transpot book:</label>
            <div>
                <select>
                    <option>Choose</option>
                    <option>Car</option>
                    <option>Bike</option>
                    <option>No need transport</option>
                </select>
                <label for="email">Hotel booking:</label>
                <select>
                    <option>Choose</option>
                    <option>Two Star Hotel</option>
                    <option>Three Star Hotel</option>
                    <option>Heritage</option>
                    <option>5 Star Hotel</option>
                    <option>Small Hotel</option>
                </select>
                
            </div>
            <label for="date">Select Date:</label>
            <input type="date" id="date" name="date" required>

            <label for="guests">Number of Guests:</label>
            <input type="number" id="guests" name="guests" min="1" max="10" required>

            <button type="submit">Submit Booking</button>
        </form>
        <div id="confirmation"></div>
    </div>
    <script src="booking.js"></script>
</body>
</html>
