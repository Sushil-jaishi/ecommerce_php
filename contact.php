<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us</title>
    <!-- <link rel="stylesheet" href="styles.css"> -->
     <style>

      body{
        background-color: rgb(232, 147, 249);
      }
   .feedback-form {
    background-color: #f7c1f7;
    border-radius: 10px;
    padding: 20px;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    width: 100%; /* Full width for the feedback form */
    max-width: 600px; /* Set a max width for better responsiveness */
    margin: 20px auto; /* Center the form horizontally with margin auto */
}

.feedback-form h3 {
    margin-top: 0;
    color: #333;
}

.feedback-form label {
    display: block;
    margin: 10px 0 5px;
    color: #333;
}

.feedback-form input,
.feedback-form textarea {
    width: 100%;
    padding: 10px;
    border: 1px solid #ddd;
    border-radius: 5px;
    box-sizing: border-box;
}

.feedback-form button {
    background-color: #007bff;
    color: #fff;
    border: none;
    padding: 10px 20px;
    border-radius: 5px;
    cursor: pointer;
    margin-top: 10px;
    display: block;
    width: 100%;
}

.feedback-form button:hover {
    background-color: #0056b3;
}

.form-message {
    margin-top: 10px;
    color: #28a745; /* Success green by default */
}

     </style>
</head>
<body>

<?php

include 'navbar.php';
?>
    <section id="contact-us">
      
        <div class="contact-container">
      
            <!-- Feedback Form -->
            <div class="feedback-form">
                <h3>Send Us Your Feedback</h3>
                <form id="feedbackForm">
                    <label for="name">Name:</label>
                    <input type="text" id="name" name="name" required>
                    
                    <label for="email">Email:</label>
                    <input type="email" id="email" name="email" required>
                    
                    <label for="message">Message:</label>
                    <textarea id="message" name="message" rows="4" required></textarea>
                    
                    <button type="submit">Send Feedback</button>
                </form>
                <p id="formMessage" class="form-message"></p>
            </div>
        </div>
    </section>
    <script src="scripts.js">
      document.addEventListener('DOMContentLoaded', () => {
    const form = document.getElementById('feedbackForm');
    const formMessage = document.getElementById('formMessage');

    form.addEventListener('submit', (event) => {
        event.preventDefault(); // Prevent form from submitting the traditional way

        // Extract form data
        const name = form.querySelector('#name').value;
        const email = form.querySelector('#email').value;
        const message = form.querySelector('#message').value;

        // Simple validation
        if (name && email && message) {
            // You can add an AJAX request here to send the form data to your server

            // Display success message
            formMessage.textContent = 'Thank you for your feedback!';
            formMessage.style.color = '#28a745'; // Success green
            form.reset(); // Clear the form fields
        } else {
            // Display error message
            formMessage.textContent = 'Please fill in all fields.';
            formMessage.style.color = '#dc3545'; // Error red
        }
    });
});

    </script>


<?php

include 'footer.php';
?>
</body>
</html>
