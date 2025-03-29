<?php
// Define variables and constants from contact form data
$name = $_POST['name'];
$email = $_POST['email'];
$message = $_POST['message'];

// Display HTML form for contact details
echo '<form action="contact.php" method="post">
    <div>
        <label>Name:</label>
        <input type="text" name="name" value="' . $name . '" required>
    </div>
    <div>
        <label>Email:</label>
        <input type="email" name="email" value="' . $email . '" required>
    </div>
    <div>
        <textarea name="message" rows="4" cols="50" required>Dear [Name],</textarea>
    </div>
    <div>
        <button type="submit">Submit</button>
    </div>
</form>';
?>
