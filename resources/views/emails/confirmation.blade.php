<!DOCTYPE html>
<html>
<head>
    <title>Thank You for Contacting Us</title>
</head>
<body>
    <h2>Thank You for Contacting Us, {{ $data['name'] }}!</h2>
    <p>We have received your message and will get back to you shortly.</p>
    <p>Here are the details of your submission:</p>
    <ul>
        <li><strong>Name:</strong> {{ $data['name'] }}</li>
        <li><strong>Email:</strong> {{ $data['email'] }}</li>
        <li><strong>Subject:</strong> {{ $data['subject'] }}</li>
        <li><strong>Message:</strong> {{ $data['message'] }}</li>
    </ul>
    <p>Best regards,<br>Your Application Team</p>
</body>
</html>