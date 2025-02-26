<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>New Message from Session Booking Contact Form</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            color: #333;
            margin: 0;
            padding: 0;
        }

        .email-container {
            max-width: 600px;
            margin: 20px auto;
            background-color: #ffffff;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            overflow: hidden;
        }

        .email-header {
            background-color: #007BFF;
            color: #ffffff;
            padding: 20px;
            text-align: center;
        }

        .email-header h1 {
            margin: 0;
            font-size: 24px;
        }

        .email-body {
            padding: 20px;
        }

        .email-body h2 {
            color: #007BFF;
            font-size: 20px;
            margin-bottom: 10px;
        }

        .email-body p {
            font-size: 16px;
            line-height: 1.6;
            margin: 0 0 10px;
        }

        .details-table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }

        .details-table th,
        .details-table td {
            padding: 12px;
            text-align: left;
            border-bottom: 1px solid #ddd;
        }

        .details-table th {
            background-color: #f8f9fa;
            color: #333;
        }

        .email-footer {
            background-color: #f8f9fa;
            padding: 15px;
            text-align: center;
            font-size: 14px;
            color: #666;
        }
    </style>
</head>

<body>
    <div class="email-container">
        <!-- Header -->
        <div class="email-header">
            <h1>New Message from Session Booking Contact Form</h1>
        </div>

        <!-- Body -->
        <div class="email-body">
            <h2>Hello Admin,</h2>
            <p><strong>{{ $data['name'] }}</strong> has sent a message from the session booking contact form. Here are the details:</p>

            <!-- Form Details Table -->
            <table class="details-table">
                <tr>
                    <th>Field</th>
                    <th>Details</th>
                </tr>
                <tr>
                    <td><strong>Name</strong></td>
                    <td>{{ $data['name'] }}</td>
                </tr>
                <tr>
                    <td><strong>Email</strong></td>
                    <td>{{ $data['email'] }}</td>
                </tr>
                <tr>
                    <td><strong>Subject</strong></td>
                    <td>{{ $data['subject'] }}</td>
                </tr>
                <tr>
                    <td><strong>Message</strong></td>
                    <td>{{ $data['message'] }}</td>
                </tr>
            </table>
        </div>

        <!-- Footer -->
        <div class="email-footer">
            <p>This is an automated message. Please do not reply to this email.</p>
        </div>
    </div>
</body>

</html>